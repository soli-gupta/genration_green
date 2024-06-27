<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Request;

class RegistrationFormModel extends Model
{
  protected $primaryKey = 'id';
  protected $table = 'registration_form';
  protected $fillable = array('id', 'institute_name', 'institute_address', 'institute_mobile', 'institute_email','total_student','principal_name','principal_mobile','principal_email','teacher_name1','teacher_mobile1','teacher_email1','teacher_name2','teacher_mobile2','teacher_email2','status');
}
