<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminModulesModel extends Model
{
     protected $primaryKey = 'id';
    protected $table = 'admin_modules';
    protected $fillable = array('id', 'name','code');
    //protected $fillable = array('*');
}
