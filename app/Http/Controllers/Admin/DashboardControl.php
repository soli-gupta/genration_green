<?php

namespace App\Http\Controllers\Admin; //admin add



use App\Http\Controllers\Controller; // using controller class
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Http\Request;
use Exception;

class DashboardControl extends Controller
{

  //$this->ADMIN_URL=ADMIN_URL;

  public function __construct()
  {
    $this->middleware('auth');
    $this->user =  \Auth::user();
  }

  public function index()
  {

    $admin_modules_array = explode(',', Auth::user()->admin_modules);
    $super_admin = 0;
    if (in_array('all-modules', $admin_modules_array)) {
      $super_admin = 1;
    }



    //echo $field = Auth::user()->roles;

    $page_array = array(
      'title' => 'Dashboard',
      'page_name' => 'dashboard',
      'super_admin' => $super_admin

    );
    return view('admin.dashboard', $page_array);
  }
  public function profile()
  {
    //echo $field = Auth::user()->roles;


    $users_data = $this->user =  \Auth::user();


    $page_array = array(
      'title' => 'Profile',
      'page_name' => 'profile',
      'data_rows' => $users_data,

    );
    return view('admin.profile', $page_array);
  }



  public function save(Request $request)
  {
    $POST_DATA = $request->input();




    $users_data = $this->user =  \Auth::user();
    $id = $users_data->id;


    $array_validate = array();
    $array_validate['name'] = "required";
    $array_validate['current_password'] = "required";

    if ($id) {
      $array_validate['email'] = "required|email|unique:users,email,$id";
    } else {
      $array_validate['email'] = 'required|email|unique:users|max:255';
    }


    $update_array = array();
    if ($POST_DATA['new_password']) {
      $array_validate['new_password'] = "min:8";
      $array_validate['confirm_password'] = "min:8";
      $update_array['password'] = bcrypt($POST_DATA['new_password']);
    }

    //$array_validate['mobile']="required|numeric";
    $this->validate($request, $array_validate);


    $message_type = "message_error";
    $message_text = "Some error!";

    try {


      if ($POST_DATA['new_password'] != $POST_DATA['confirm_password']) {
        throw new Exception("Password not matching", 1);
      }




      $update_array['name'] = $POST_DATA['name'];
      $update_array['email'] = $POST_DATA['email'];
      $update_array['mobile'] = $POST_DATA['mobile'];

      //$POST_DATA['is_admin']=1;                  


      $update = User::find($id);
      $update->fill($update_array);
      $update->save();



      if ($update) {
        $message_type = "message_susuccess";
        $message_text = "Successfully updated";
      }
    } catch (\Exception $e) {
      $message_type = "message_error";
      $message_text = $e->getMessage();
    }


    return redirect(ADMIN_FOLDER . '/profile')->with($message_type, $message_text);
  }
  public function summernotefilesave(Request $request)
  {


    $image_path = '';

    try {

      $array_validate = array();
      $array_validate['file'] = "image|mimes:jpeg,png,jpg";
      $this->validate($request, $array_validate);

      $image = $request->file('file');
      if ($image) {

        $file_name = $image->getClientOriginalName();
        $file_name = strtolower(str_replace(" ", "-", $file_name));
        $filename_remove = explode(".", $file_name);
        //die("a");
        $new_file_name = $filename_remove[0];
        $image_name = $new_file_name . '-' . time() . '.' . $image->getClientOriginalExtension();
        $destinationPath = public_path('/media/upload/images');
        $image->move($destinationPath, $image_name);
        $image_path = '/media/upload/images/' . $image_name;
      }
    } catch (\Exception $e) {

      $image_path = $e->getMessage();
    }

    echo BASE_URL . $image_path;
  }
}
