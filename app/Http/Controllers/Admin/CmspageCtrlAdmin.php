<?php

namespace App\Http\Controllers\Admin; //admin add



use App\Http\Controllers\Controller; // using controller class
use Illuminate\Support\Facades\Auth;
use App\CmspageModel;
use App\CommentModel;
use App\CmsBlockModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
//use Illuminate\Support\Facades\Request as Input;
use Illuminate\Support\Facades\Request as Input;

class CmspageCtrlAdmin extends Controller
{
    protected $dates = ['updated_at'];

    public function __construct()
    {
        $this->middleware('auth');
        $this->user =  \Auth::user();
        $this->name_url_folder = 'cms-page';
    }

    public function roleChecking()
    {
        $admin_modules_array = explode(',', Auth::user()->admin_modules);
        if (!in_array($this->name_url_folder, $admin_modules_array)) {
            if (!in_array('all-modules', $admin_modules_array)) {
                die("Sorry, you don’t have access to this page/module!");
            }
        }
    }

    function getFilter($data_rows)
    {
        $GET_DATA = Input::input();
        if (isset($GET_DATA['search']) && $GET_DATA['search'] == 'field') {

            if ($GET_DATA['name']) {
                $data_rows->where('name', 'LIKE', "%{$GET_DATA['name']}%");
            }

            if ($GET_DATA['slug']) {
                $data_rows->where('slug', 'LIKE', "%{$GET_DATA['slug']}%");
            }

            if ($GET_DATA['status']) {
                $data_rows->where('status', $GET_DATA['status']);
            }

            $fdate = $GET_DATA['fdate'] . ' 00:00:00';
            $tdate = $GET_DATA['tdate'] . ' 23:59:59';

            if ($GET_DATA['fdate'] != '' && $GET_DATA['tdate'] != '') {
                $data_rows->whereBetween('created_at', array($fdate, $tdate));
            } elseif ($GET_DATA['fdate'] != '') {
                $tdate = date('Y-m-d') . ' 23:59:59';
                $data_rows->whereBetween('created_at', array($fdate, $tdate));
            } elseif ($GET_DATA['tdate'] != '') {
                $fdate = '2000-01-01 23:59:59';
                $data_rows->whereBetween('created_at', array($fdate, $tdate));
            }
        }
        return $data_rows;
    } // end getFilter


    public function index()
    {

        $this->roleChecking();

        $GET_DATA = Input::input();

        if (isset($GET_DATA['delete'])) {

            $data_name = CmspageModel::find($GET_DATA['delete'])->slug;
            $delete_status = CmspageModel::find($GET_DATA['delete'])->delete();
            $message_type = "message_susuccess";
            $message_text = "Record has been deleted successfully!";

            // comment and logs //
            $module = $this->name_url_folder;
            $data_id = $GET_DATA['delete'];
            $comment = "Record deleted";
            //CommentModel::comment($module, $data_id, $comment, $data_name);
            //CommentModel::logs($module, $comment);
            // end comment and logs //

            return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
        }

        $data_rows = CmspageModel::orderBy('id', 'desc');
        $data_rows = $this->getFilter($data_rows);
        $data_rows = $data_rows->paginate(PAGINATE_LIMIT);


        $page_array = array(
            'title' => 'CMS Page',
            'page_name' => $this->name_url_folder,
            'data_rows' => $data_rows,

        );
        //return view('admin.pages.pages',$page_array); 
        return view('admin.' . $this->name_url_folder . '.index', $page_array);
    } // end index


    public function edit($id)
    {
        $this->roleChecking();
        $cmspages = CmspageModel::where('parent_menu_page_id', 0)->where('id', '!=', $id)->orderBy('name', 'asc')->get();

        $data = CmspageModel::where('id', $id)->first();
        if ($data) {

            $page_array = array(
                'title' => 'Edit Page - ' . $data->name,
                'page_name' => $this->name_url_folder,
                'data_row' => $data,
                'cmspages' => $cmspages,
            );
            //return view('admin.pages.view',$page_array); 
            return view('admin.' . $this->name_url_folder . '.view', $page_array);
        } else {
            return redirect(ADMIN_URL);
        }
    } // end index

    public function create()
    {
        $cmspages = CmspageModel::where('parent_menu_page_id', 0)->orderBy('name', 'asc')->get();
        $data = array();
        $page_array = array(
            'title' => 'Create Page',
            'page_name' => $this->name_url_folder,
            'data_row' => $data,
            'cmspages' => $cmspages,

        );
        return view('admin.' . $this->name_url_folder . '.view', $page_array);
    } // end create

    public function save(Request $request)
    {
        $POST_DATA = $request->input();
        $this->roleChecking();

        $id = '';
        if ($POST_DATA['id']) {
            $id = $POST_DATA['id'];
        }
        unset($POST_DATA['id']);


        if ($POST_DATA['submit_type'] == '3' && $id != '') {
            $delete_status = CmspageModel::find($id)->delete();
            $message_type = "message_susuccess";
            $message_text = "Record has been deleted successfully!";
            // comment and logs //
            $module = $this->name_url_folder;
            $data_id = $id;
            $data_name = $POST_DATA['slug'];
            $comment = "Record deleted";
            //CommentModel::comment($module, $data_id, $comment, $data_name);
            // CommentModel::logs($module, $comment);
            // end comment and logs //

            return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
        }

        $array_validate = array();
        $array_validate['name'] = "required";
        // $array_validate['image'] = "required|file|mimes:jpeg,png,jpg,gif,mp4|max:20480";
        // $array_validate['image_mobile'] = "file|mimes:jpeg,png,jpg,gif,mp4|max:20480";

        if ($id) {
            $array_validate['slug'] = "required|unique:cms_page,slug,$id";
        } else {
            $array_validate['slug'] = "required|unique:cms_page|max:255";
        }

        $this->validate($request, $array_validate);

        $message_type = "message_error";
        $message_text = "Some error!";

        try {
            $uploadedFile = $request->file('image');
            if ($uploadedFile) {
                $destinationPath = 'media/cmspage/image/';
                $POST_DATA['image'] = CmsBlockModel::uploadFile($uploadedFile, $destinationPath);
            } else {
                if (isset($POST_DATA['image_delete'])) {
                    $POST_DATA['image'] = '';
                }
            }

            $uploadedFile = $request->file('image_mobile');
            if ($uploadedFile) {
                $destinationPath = 'media/cmspage/image_mobile/';
                $POST_DATA['image_mobile'] = CmsBlockModel::uploadFile($uploadedFile, $destinationPath);
            } else {
                if (isset($POST_DATA['image_mobile_delete'])) {
                    $POST_DATA['image_mobile'] = '';
                }
            }

            if ($id == '') {
                $save = CmspageModel::create($POST_DATA);
                $comment = "Record created";
            } else {


                $save = CmspageModel::find($id);
                $save->fill($POST_DATA);
                $comment = "Record updated";
            }

            $save->save();
            if ($save) {
                $message_type = "message_susuccess";
                $message_text = "Successfully saved";
                // comment and logs //
                $module = $this->name_url_folder;
                $data_id = $save->id;
                $data_name = $save->slug;
                $POST_DATA['comment'] = $comment;
                //CommentModel::comment($module, $data_id, $comment, $data_name);
                // CommentModel::logs($module, $POST_DATA);
                // end comment and logs //
            }
        } catch (\Exception $e) {
            $message_type = "message_error";
            $message_text = $e->getMessage();
        }

        // return redirect(ADMIN_FOLDER.'/'.$this->name_url_folder)->with($message_type,$message_text);
        if ($message_type == "message_susuccess") {

            if ($POST_DATA['submit_type'] == '2') {
                return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder . '/edit/' . $save->id)->with($message_type, $message_text);
            } else {
                return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
            }
        } else {
            return redirect()->back()->with($message_type, $message_text);
        }
    } // end save

    public function export(Request $request)
    {

        $this->roleChecking();
        $data_rows = CmspageModel::orderBy('id', 'desc');
        $data_rows = $this->getFilter($data_rows);
        $data_rows = $data_rows->get();
        if (count($data_rows) > 0) {

            //First Methos 
            $export_data = "ID,Name,Slug,Status,Layout,CreatedAt,UpdatedAt \n";
            foreach ($data_rows as $value) {
                $status = '';
                if (isset(Config::get('constants.CONS_STATUS_ARRAY')[$value->status])) {
                    $status = Config::get('constants.CONS_STATUS_ARRAY')[$value->status];
                }

                $export_data .= '"' . $value->id . '",';

                $export_data .= '"' . $value->name . '",';
                $export_data .= '"' . $value->slug . '",';
                $export_data .= '"' . $status . '",';
                $export_data .= '"' . $value->layout . '",';;

                $export_data .= '"' . $value->created_at . '",';
                $updated_at = ($value->created_at == $value->updated_at) ? '' : $value->updated_at;
                $export_data .= '"' . $updated_at . '"';
                $export_data .= "\r\n";
            }
            $filename = $this->name_url_folder . '-' . date('Y-m-d') . ".csv";
            return response($export_data)
                ->header('Content-Type', 'application/csv')
                ->header('Content-Disposition', 'attachment; filename="Export-' . $filename)
                ->header('Pragma', 'no-cache')
                ->header('Expires', '0');
        }
        $message_type = "message_error";
        $message_text = "Some error!";
        return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
    } // end export
}
