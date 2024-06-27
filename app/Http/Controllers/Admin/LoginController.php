<?php
namespace App\Http\Controllers\Admin; //admin add


use App\Http\Controllers\Controller; // using controller class
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller {


	
  public function index() {
 
    if(isset(Auth::user()->id)){
      return redirect(ADMIN_FOLDER.'/dashboard');
    }
    //$field = Auth::user()->roles;  
    return \View::make('admin.login');
  }

 
}