<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\ContactModel;
use App\CmsBlockModel;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;
 

class ContactCtrl extends Controller
{
 
  public function index()
  {
 
    $data = CmspageModel::where('slug', 'contact-us')->first();
    if ($data) {
      $page_array = array(
        'id' => 'contact',
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
        'body_class' => 'contact',
        'meta_other' => $data->meta_other,
        'image_alt' => $data->image_alt,
        'parent_slug' => 'contact',

      );
    }

    return view('contact_page', $page_array);
  }


  public function post(Request $request)
  {
 
    $response_array = array();
    $response_array['status'] = '0';
    $response_array['message'] = 'Some error!';
    $this->validate($request, [
      'name' => 'required|max:100',
      //'email' => 'required|email|max:100',         
      'mobile' => 'required|max:20',
      'page_type' => 'required|max:100',
      'resume' => 'mimes:pdf,png,jpg,jpeg|max:5100',
 
    ]);

    try {
 
      $captch_status = 0;
      if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])) {
        //your site secret key
        $secret = env('GOOGLE_RECAPTCHA_SECRET');
        //get verify response data
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



      $page_type = $request->page_type;


      $post_array = array();
      $post_array['name'] = $request->name;
      $post_array['email'] = $request->email;
      $post_array['mobile'] = $request->mobile;
      $post_array['message'] = $request->message; 


      $post_array['ip'] = $_SERVER['REMOTE_ADDR'];

      $save = ContactModel::create($post_array);
      if ($save->id) {
        $response_array['status'] = '1';
        $response_array['message'] = 'Your query has been submitted and will be responded to as soon as possible. Thank you for contacting!';

      
      }
    } catch (\Exception $e) { 
      $response_array['message'] = $e->getMessage();
    }


    return response()->json($response_array, 200);
 
  }
}
