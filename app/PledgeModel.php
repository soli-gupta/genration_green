<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;

class PledgeModel extends Model
{
  protected $primaryKey = 'id';
  protected $table = 'pledge';
  protected $fillable = array('id', 'name', 'email', 'institute', 'gender', 'state', 'city','status');

}//end 
