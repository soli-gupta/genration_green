<?php

namespace App;

use Mail;
use Config;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Auth;

class CommentModel extends Model
{
     protected $primaryKey = 'id';
     protected $table = 'comments';
     protected $fillable = array('module', 'data_id', 'data_name', 'ip', 'comment', 'user_name', 'user_id');

     public static function comment($module, $data_id, $comment, $data_name = null)
     {
          $POST_DATA = array();
          $POST_DATA['module'] = $module;
          $POST_DATA['data_id'] = $data_id;
          $POST_DATA['data_name'] = $data_name;
          $POST_DATA['comment'] = $comment;
          $POST_DATA['ip'] = $_SERVER['REMOTE_ADDR'];
          $POST_DATA['user_name'] = Auth::user()->name;
          $POST_DATA['user_id'] = Auth::user()->id;

          $save = CommentModel::create($POST_DATA);
          $save->save();
     }

     public static function logs($module, $data_logs)
     {

          $ip = $_SERVER['REMOTE_ADDR'];
          $user_id = "";
          if (isset(Auth::user()->id)) {
               $user_id = Auth::user()->id;
          }

          $data_logs = json_encode($data_logs, true);
          // log start
          $file_name_log = storage_path() . "/logs/$module-logs-" . date('Y-m-d') . '.log';
          $log_msg = date('Y-m-d H:i:s') . "-UID=" . $user_id . "-IP=" . $ip . "-Data-" . $data_logs . " ------------------ ";
          file_put_contents($file_name_log, $log_msg . "\n", FILE_APPEND);
     }
}
