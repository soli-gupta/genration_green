<?php

namespace App\Http\Controllers\Admin; //admin add



use App\Http\Controllers\Controller; // using controller class
use Illuminate\Support\Facades\Auth;
use App\PledgeModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use Illuminate\Support\Facades\Request as Input;
use Illuminate\Support\Facades\Request as Input;

class PledgeCtrlAdmin extends Controller
{
  protected $dates = ['updated_at'];

  public function __construct()
  {
    $this->middleware('auth');
    $this->user =  \Auth::user();
    $this->name_url_folder = 'pledge';
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
    if (isset($GET_DATA['saerch']) && $GET_DATA['saerch'] == 'field') {

      if ($GET_DATA['name']) {
        $data_rows->where('name', 'LIKE', "%{$GET_DATA['name']}%");
      }

      if ($GET_DATA['email']) {
        $data_rows->where('email', 'LIKE', "%{$GET_DATA['email']}%");
      }

      if ($GET_DATA['email']) {
        $data_rows->where('email', 'LIKE', "%{$GET_DATA['email']}%");
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
  }


  public function index()
  {

    $this->roleChecking();


    $GET_DATA = Input::input();

    if (isset($GET_DATA['delete'])) {
      $delete_status = PledgeModel::find($GET_DATA['delete'])->delete();
      $message_type = "message_susuccess";
      $message_text = "Record has been deleted successfully!";
      return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
    }

    $data_rows = PledgeModel::orderBy('id', 'desc');
    $data_rows = $this->getFilter($data_rows);
    $data_rows = $data_rows->paginate(PAGINATE_LIMIT);


    $page_array = array(
      'title' => 'Pledge Form Data',
      'page_name' => $this->name_url_folder,
      'data_rows' => $data_rows,
    );
    //return view('admin.pages.pages',$page_array); 
    return view('admin.' . $this->name_url_folder . '.index', $page_array);
  }


  public function view($id)
  {

    $this->roleChecking();
    $data = PledgeModel::where('id', $id)->first();
    if ($data) {
      $page_array = array(
        'title' => 'Edit  - ' . $data->name,
        'page_name' => $this->name_url_folder,
        'data_row' => $data,
      );
      //return view('admin.pages.view',$page_array); 
      return view('admin.' . $this->name_url_folder . '.view', $page_array);
    } else {
      return redirect(ADMIN_URL);
    }
  }

  public function add()
  {
    $data = array();
    $page_array = array(
      'title' => 'Add',
      'page_name' => $this->name_url_folder,
      'data_row' => $data,

    );
    return view('admin.' . $this->name_url_folder . '.view', $page_array);
  }


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
      $delete_status = PledgeModel::find($id)->delete();
      $message_type = "message_susuccess";
      $message_text = "Record has been deleted successfully!";
      return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
    }


    $array_validate = array();
    $array_validate['name'] = "required";
    //$array_validate['content1']="required";  
    // $array_validate['image_path']="image|mimes:jpeg,png,jpg";  

    $this->validate($request, $array_validate);

    $message_type = "message_error";
    $message_text = "Some error!";

    try {

      $POST_DATA['status'] = 'Checked';

      if ($id == '') {
        $save = PledgeModel::create($POST_DATA);
      } else {


        $save = PledgeModel::find($id);
        $save->fill($POST_DATA);
      }


      $save->save();
      if ($save) {
        $message_type = "message_susuccess";
        $message_text = "Successfully saved";
      }
    } catch (\Exception $e) {
      $message_type = "message_error";
      $message_text = $e->getMessage();
    }


    // return redirect(ADMIN_FOLDER.'/'.$this->name_url_folder)->with($message_type,$message_text);
    if ($message_type == "message_susuccess") {

      if ($POST_DATA['submit_type'] == '2') {
        return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder . '/view/' . $save->id)->with($message_type, $message_text);
      } else {
        return redirect(ADMIN_FOLDER . '/' . $this->name_url_folder)->with($message_type, $message_text);
      }
    } else {
      return redirect()->back()->with($message_type, $message_text);
    }
  }


  public function export(Request $request)
  {

    $this->roleChecking();

    $data_rows = PledgeModel::orderBy('id', 'desc');
    $data_rows = $this->getFilter($data_rows);
    $data_rows = $data_rows->get();

    $tot_record_found = 0;
    if (count($data_rows) > 0) {
      $tot_record_found = 1;
      //First Methos 

      $export_data = "ID,Name,Email,Institute,Gender,State,City,Status,CreatedAt,UpdatedAt \n";
      //$export_data="Id,PageType,Name,Email,Mobile,Message,Status,Gender,Age,Test.Centre,Address,City,Pincode,Prescription, IP,Date \n";
      foreach ($data_rows as $value) {

        $export_data .= '"' . $value->id . '",';
        $export_data .= '"' . $value->name . '",';
        $export_data .= '"' . $value->email . '",';
        $export_data .= '"' . $value->institute . '",';
        $export_data .= '"' . $value->gender . '",';
        $export_data .= '"' . $value->state . '",';
        $export_data .= '"' . $value->city . '",';
        $export_data .= '"' . $value->status . '",';
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