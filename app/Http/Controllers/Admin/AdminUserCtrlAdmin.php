<?php

namespace App\Http\Controllers\Admin; //admin add







use App\Http\Controllers\Controller; // using controller class

use Illuminate\Support\Facades\Auth;

use App\User;

use App\AdminModulesModel;

use App\CommentModel;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Request as Input;

class AdminUserCtrlAdmin extends Controller
{

  protected $dates = ['updated_at'];



  public function __construct()

  {

    $this->middleware('auth');

    $this->user =  \Auth::user();

    $this->name_url_folder = 'admin-user';
  }



  public function index()
  {





    $GET_DATA = Input::input();



    if (isset($GET_DATA['delete'])) {



      if (Auth::user()->id == $GET_DATA['delete']) {

        $message_type = "message_error";

        $message_text = "Sorry, You can't delete login account!";

        return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
      }

      $data_name = User::find($GET_DATA['delete'])->email;

      $delete_status = User::find($GET_DATA['delete'])->delete();

      $message_type = "message_susuccess";

      $message_text = "Record has been deleted successfully!";



      // comment and logs //

      $module = $this->name_url_folder;

      $data_id = $GET_DATA['delete'];

      $comment = "Record deleted";

      // CommentModel::comment($module,$data_id,$comment,$data_name);

      // CommentModel::logs($module,$comment);

      // end comment and logs //        

      return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
    }



    if (isset($GET_DATA['q'])) {

      $search = $GET_DATA['q'];

      //$data_rows=User::where('is_admin',1)->where('id', '!=' ,Auth::user()->id)->where('email', 'LIKE', "%{$search}%") 

      $data_rows = User::where('is_admin', 1)->where('email', 'LIKE', "%{$search}%")->orderBy('created_at', 'desc');
    } else {

      $data_rows = User::where('is_admin', 1)->orderBy('created_at', 'desc');
    }



    $data_rows = $data_rows->paginate(PAGINATE_LIMIT);

    $page_array = array(

      'title' => str_replace("-", " ", ucwords($this->name_url_folder)),

      'page_name' => $this->name_url_folder,

      'data_rows' => $data_rows,

    );

    return view('admin.user.index', $page_array);
  }











  public function view($id)
  {

    $admin_modules = AdminModulesModel::where('status', '1')->orderBy('sorting', 'asc')->get();

    $data = User::where('id', $id)->first();

    if ($data) {

      $page_array = array(

        'title' => 'View ' . str_replace("-", " ", ucwords($this->name_url_folder)),

        'page_name' => $this->name_url_folder,

        'data_row' => $data,

        'admin_modules' => $admin_modules,

      );

      return view('admin.user.view', $page_array);
    } else {

      return redirect(ADMIN_URL);
    }
  }





  public function add()
  {

    $admin_modules = AdminModulesModel::where('status', '1')->orderBy('sorting', 'asc')->get();

    $data = array();

    $page_array = array(

      'title' => 'Add ' . str_replace("-", " ", ucwords($this->name_url_folder)),

      'page_name' => $this->name_url_folder,

      'data_rows' => $data,

      'admin_modules' => $admin_modules,

    );

    return view('admin.user.view', $page_array);
  }













  public function save(Request $request)
  {

    $POST_DATA = $request->input();











    $id = $POST_DATA['id'];

    unset($POST_DATA['id']);

    $this->validate($request, [

      'name' => 'required',

      'email' => 'required|email|',



    ]);



    $array_validate = array();

    $array_validate['name'] = "required";



    if ($id) {

      $array_validate['email'] = "required|email|unique:users,email,$id";
    } else {

      $array_validate['email'] = 'required|email|unique:users|max:255';
    }

    $array_validate['new_password'] = "required|min:8";

    //$array_validate['mobile']="numeric";

    $this->validate($request, $array_validate);





    $message_type = "message_error";

    $message_text = "Some error!";



    try {

      if ($POST_DATA['new_password'] != 'nopassword') {

        $POST_DATA['password'] = bcrypt($POST_DATA['new_password']);
      }





      if (isset($POST_DATA['admin_modules'])) {

        $POST_DATA['admin_modules'] = implode(',', $POST_DATA['admin_modules']);
      }



      $POST_DATA['is_admin'] = 1;

      if ($id == '') {

        $save = User::create($POST_DATA);



        $comment = "Record created";
      } else {

        $save = User::find($id);



        $save->fill($POST_DATA);

        $save->save();

        $comment = "Record updated";
      }





      if ($save) {

        $message_type = "message_susuccess";

        $message_text = "Successfully updated";





        // comment and logs //

        $module = $this->name_url_folder;

        $data_id = $save->id;

        $data_name = $save->email;

        $POST_DATA['comment'] = $comment;

        //CommentModel::comment($module,$data_id,$comment,$data_name);

        //CommentModel::logs($module,$POST_DATA);

        // end comment and logs //









      }
    } catch (\Exception $e) {

      $message_type = "message_error";

      $message_text = $e->getMessage();
    }





    return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
  }







  public function export(Request $request)
  {

    if (isset($GET_DATA['q'])) {

      $search = $GET_DATA['q'];

      /*   $data_rows=User::where('is_admin',0)->where('name', 'LIKE', "%{$search}%")

				  ->orWhere('email', 'LIKE', "%{$search}%")

				  ->orWhere('id', 'LIKE', "%{$search}%")

				  ->orWhere('created_at', 'LIKE', "%{$search}%")

				  ->orderBy('created_at', 'desc')->get(); */

      $data_rows = User::where('is_admin', 1)->where('email', 'LIKE', "%{$search}%")->orderBy('created_at', 'desc')->get();

      //$data_rows=User::where('is_admin',1)->where('name', 'LIKE', "%{$search}%")->orwhere('email', 'LIKE', "%{$search}%")->orderBy('created_at', 'desc')->get();   

    } else {

      $data_rows = User::where('is_admin', 1)->orderBy('created_at', 'desc')->get();
    }





    $tot_record_found = 0;

    if (count($data_rows) > 0) {

      $tot_record_found = 1;

      //First Methos 



      $export_data = "ID,Name,Email,Status,Modules Aceess,CreatedAt,UpdatedAt \n";

      foreach ($data_rows as $value) {



        $status = ($value->status == 1) ? 'Active' : 'Inactive';





        $export_data .= '"' . $value->id . '",';

        $export_data .= '"' . $value->name . '",';

        $export_data .= '"' . $value->email . '",';



        $export_data .= '"' . $status . '",';

        $export_data .= '"' . $value->admin_modules . '",';

        $export_data .= '"' . $value->created_at . '",';

        $export_data .= '"' . $value->updated_at . '"';

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
  }
}
