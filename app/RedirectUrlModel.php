<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RedirectUrlModel extends Model
{

	protected $primaryKey = 'id';
    protected $table = 'redirect_url';
    protected $fillable = array('id', 'from_url','to_url','status');    

}//end Block
