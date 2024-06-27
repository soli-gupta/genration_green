<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\CmspageModel;

use App\PledgeModel;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;

use PDF;



class PledgeCtrl extends Controller

{

  public function index()

  {

    $states =  DB::table('province')->where('status', 'Active')->get();

    $data = CmspageModel::where('slug', 'pledge')->first();

    if ($data) {

      $page_array = array(

        'id' => 'pledge',

        'name' => $data->name,

        'sub_text' => $data->sub_text,

        'title' => ($data->page_title) ? $data->page_title : $data->name,

        'meta_keywords' => $data->meta_keywords,

        'meta_description' => $data->meta_description,

        'slug' => $data->slug,

        'content' => $data->content1,

        'content2' => $data->content2,

        'image' => $data->image,

        'image_mobile' => $data->image_mobile,

        'body_class' => 'pledge',

        'meta_other' => $data->meta_other,

        'image_alt' => $data->image_alt,

        'parent_slug' => 'pledge',

        'states' => $states



      );
    }



    return view('pledge', $page_array);
  }



  public function getCityByState(Request $request)

  {

    $state_id = $request->state_id;

    $city_query = DB::table('city')->where("state_id", $state_id)->get();

    return response()->json($city_query);
  }



  public function savePledgeForm(Request $request)

  {



    $response_array = array();

    $response_array['status'] = '0';

    $response_array['message'] = 'Some error!';



    $this->validate($request, [

      'name' => 'required|max:100',

      'email' => 'required|email|max:100',

      'gender' => 'required|max:20',

      'state' => 'required|max:50',

      'city' => 'required|max:50'

    ]);



    try {

      $captch_status = 0;
      if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {

        $secret = env('GOOGLE_RECAPTCHA_SECRET');

        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);

        if ($responseData->success) {
          $captch_status = 1;
        }
      }

      if ($captch_status == 0) {

        $response_array['message'] = 'Google Captcha verification failed, please try again.';
        return response()->json($response_array, 200);
      }

      $post_array = array();

      $post_array['name'] = $request->name;

      $post_array['email'] = $request->email;

      $post_array['institute'] = $request->institute;

      $post_array['gender'] = $request->gender;

      $post_array['state'] = $request->state;

      $post_array['city'] = $request->city;



      $save = PledgeModel::create($post_array);

      if ($save->id) {

        $response_array['status'] = '1';

        $response_array['message'] = 'Thank you for taking the Generation Green Pledge. Please wait while we load your pledge certificate.';
      }
    } catch (\Exception $e) {

      $response_array['message'] = $e->getMessage();
    }
    return response()->json($response_array, 200);
  }
  public function certificate(Request $request)
  {

    $name = $request->query('name');
    $decodedName = urldecode($name);
    $customPaper = [0, 0, 520.00, 900.80];
    $pdf = PDF::loadView('certificate', ['name' => htmlspecialchars($decodedName, ENT_QUOTES, 'UTF-8')])->setPaper($customPaper, 'landscape');
    return $pdf->stream('certificate.pdf');
  }
}
