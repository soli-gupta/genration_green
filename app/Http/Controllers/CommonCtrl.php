<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CmspageModel;
use App\ContactModel;
use App\NewsletterModel;
use App\FaqModel;
use App\CollaborationModel;
use App\OrderCommentModel;
use App\SalesOrderModel;
use Config;
use Exception;
use Mail;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
class CommonCtrl extends Controller
{




 public function newsletterPost(Request $request ) {         


                $this->validate($request, [                
                'email' => 'required|email'          
                
            ]);  



             $response_array=array();
             $response_array['status']='0';
             $response_array['message']='Some error!';
            try
              { 

                /*$captch_status=0;
                  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = Config::get('constants.GOOGLE_RECAPTCHA_SECRET');
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);

                if($responseData->success){
                    $captch_status=1;
               }

       }

        if($captch_status==0){            
         
             $response_array['message']='Google Captcha verification failed, please try again.';
            //return response()->json($response_array,200);
       }*/


                

                $check_email=NewsletterModel::where("email",$request->email)->count();
                if($check_email){
                    throw new Exception("You have already subscribed!", 1);
                    
                }

                $post_array=array();
                $post_array['email']=$request->email;
                $post_array['name']=$request->name;
                 
                    $save=NewsletterModel::create($post_array); 
                        if($save->id){
                            $response_array['status']='1';
                            $response_array['message']='Thank You For Subscribing!';
                           



 //                             // admin mail send       
       
 //       $email_data=array();              
 //       $email_data['email_name']='Admin'; 
 //       $email_data['email_to']='newsletter@humanos.in'; 
 //       $email_data['email_subject']='humanOS - Newsletter Subscribe'; 
 //       $content='';
 //       $content='Please find below the details';
 //       $content.='<p>Email: '.$post_array['email'];
     
 //       $email_data['content']=$content;                         
 
 //   Mail::send('emails.CommonTemplate',$email_data, function($message) use ($email_data)
 //     {
       
 //       $message->from(Config::get('constants.ADMIN_SENDER')['email'],Config::get('constants.ADMIN_SENDER')['name']);
 //       $message->to($email_data['email_to']);
 //       $message->bcc('satish.kushwah@grapessoftware.com');
 //       $message->subject($email_data['email_subject']);
 //     }
 //   );
 // // end admin mail
                     
                   }
              }
              catch(\Exception $e)
              { 

                            //$response_array['message']="Unable to submit your request. Please check form field values and try again!";
                            $response_array['message']=$e->getMessage();
                          
                
              }


              return response()->json($response_array,200);           
        

    }

     public function collaborationPost(Request $request ) {         

           


             $response_array=array();
             $response_array['status']='0';
             $response_array['message']='Some error!';

                
            try
              { 
              $this->validate($request, [                
                'company_name' => 'required|max:100',          
                'email' => 'required|email|max:100',         
                'address' => 'required|max:1000',      
                'country' => 'required|max:100',      
                'department' => 'required|max:100',      
                'contact_person' => 'required|max:100',      
                'telephone' => 'required|max:100',      
                'subject' => 'required|max:200',      
                'brief_description' => 'required|max:2000',     
                
            ]);



                 $captch_status=0;
                  if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){
        //your site secret key
        $secret = Config::get('constants.GOOGLE_RECAPTCHA_SECRET');
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);

                if($responseData->success){
                    $captch_status=1;
               }

       }

        if($captch_status==0){            
         
             $response_array['message']='Google Captcha verification failed, please try again.';
            return response()->json($response_array,200);
       }






                $post_array=array();
                
                $post_array['company_name']=$request->company_name;
                     $post_array['email']=$request->email;
                $post_array['address']=$request->address;
                $post_array['country']=$request->country;
                $post_array['department']=$request->department;
                $post_array['contact_person']=$request->contact_person;
                $post_array['telephone']=$request->telephone;
                $post_array['website']=$request->website;
                $post_array['subject']=$request->subject;
           
                $post_array['brief_description']=$request->brief_description;                         
                $post_array['page_type']=$request->page_type;
                $post_array['ip']=$_SERVER['REMOTE_ADDR'];
                
                    $save=CollaborationModel::create($post_array); 
                        if($save->id){
                            $response_array['status']='1';
                            $response_array['message']='Your query has been submitted  and will be responded to as soon as possible. Thank you for contacting!';


      // mail send       
       
    /*  $email_data=array();              
      $email_data['email_name']='Admin'; 
      $email_data['email_to']=Config::get('constants.ADMIN_CONTACT_MAIL'); 
      $email_data['email_subject']=$request->page_type; 
      $content='';
      $content.='<p>Name: '.$post_array['name'];
      $content.='<p>Email: '.$post_array['email'];
      $content.='<p>Mobile: '.$post_array['mobile'];
      if($request->state)
         $content.='<p>State: '.$post_array['state'];

       if($request->city)
         $content.='<p>City: '.$post_array['city'];

       if($request->hear_about)
         $content.='<p>Hear About: '.$post_array['hear_about'];

       if($request->location)
         $content.='<p>Location: '.$post_array['location'];

        if($request->comment)
         $content.='<p>Comment: '.$post_array['comment'];

        $content.='<p>IP: '.$post_array['ip'];
        
      $email_data['content']=$content;                         

  Mail::send('emails.CommonTemplate',$email_data, function($message) use ($email_data)
    {
      
      $message->from(Config::get('constants.ADMIN_SENDER')['email'],Config::get('constants.ADMIN_SENDER')['name']);
      $message->to($email_data['email_to']);
      $message->cc('satish.kushwah@grapessoftware.com');
      $message->subject($email_data['email_subject']);
    }
  );
// end mail*/


                           
                     
                   }
              }
              catch(\Exception $e)
              { 


                            //$response_array['message']="Unable to submit your request. Please check form field values and try again!";
                            $response_array['message']=$e->getMessage();
                          
                
              }


              return response()->json($response_array,200);

                //return redirect('contact-us')->with($message_type,$message_text);
        

    }



     public function shiprocket_webhook() {
      

die("stop");
      
    $header_code=422;
    $payload_data = file_get_contents("php://input");
    //$request_data = json_decode($payload_data);
     $post_data=json_decode($payload_data,true);
// 7 = delivered

  if(isset($post_data['current_status_id']) && $post_data['current_status_id']==7){
   $current_status_id=$post_data['current_status_id'];
   $tracking_number=$post_data['awb'];
  $order_data = SalesOrderModel::where('tracking_number', $tracking_number)->first();
        if($order_data){

          $order_status_update=SalesOrderModel::find($order_data->id);
          $order_status_update->status=6;
          $order_status_update->save();

OrderCommentModel::comment($order_data->id,'',6,"Order delivered by api ");
OrderCommentModel::order_update($order_data->id,0,'',1,0);
        }

  }

/*
     // log start
$file_name_log=storage_path()."/logs/sap/shiprocket_webhook_API-".date('Y-m-d') .'.log';
$log_msg=date('Y-m-d H:i:s')." Data:->  ".$payload_data ." ------------------ ";
file_put_contents($file_name_log, $log_msg . "\n", FILE_APPEND);
//$log_msg='Showing user profile for user: ';
//Log::info('Showing user profile for user: ');
// log end
    
    //$mail_subject="shiprocket_webhook_API-".date('Y-m-d H:i:s');
   
   //mail("satishsuper7@gmail.com",$mail_subject,$mail_subject);
  */

        

         
        }






    

}
