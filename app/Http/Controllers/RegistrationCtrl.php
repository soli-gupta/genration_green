<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use App\CmspageModel;

use App\RegistrationFormModel;

use App\CmsBlockModel;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;



class RegistrationCtrl extends Controller

{

    public function index()

    {

        $data = CmspageModel::where('slug', 'registration')->first();

        if ($data) {

            $page_array = array(

                'id' => 'registration',

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

                'body_class' => 'registration',

                'meta_other' => $data->meta_other,

                'image_alt' => $data->image_alt,

                'parent_slug' => 'registration',



            );
        }

        return view('registration', $page_array);
    }

    public function saveRegistrationForm(Request $request)

    {

        $response_array = array();

        $response_array['status'] = '0';

        $response_array['message'] = 'Some error!';

        $this->validate($request, [

            'institute_name' => 'required|string|max:255',

            'institute_address' => 'required|max:250',

            'institute_mobile' => 'required|digits:10',

            'institute_email' => 'required|email|max:255',

            'total_student' => 'required|max:20',

            'principal_name' => 'required|string|max:255',

            'principal_mobile' => 'required|digits:10',

            'principal_email' => 'required|email|max:255',

            'teacher_name1' => 'required|string|max:255',

            'teacher_mobile1' => 'required|digits:10',

            'teacher_email1' => 'required|email|max:255',

            'teacher_name2' => 'required|string|max:255',

            'teacher_mobile2' => 'required|digits:10',

            'teacher_email2' => 'required|email|max:255',

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

            $post_array['institute_name'] = $request->institute_name;

            $post_array['institute_address'] = $request->institute_address;

            $post_array['institute_mobile'] = $request->institute_mobile;

            $post_array['institute_email'] = $request->institute_email;

            $post_array['total_student'] = $request->total_student;

            $post_array['principal_name'] = $request->principal_name;

            $post_array['principal_mobile'] = $request->principal_mobile;

            $post_array['principal_email'] = $request->principal_email;

            $post_array['teacher_name1'] = $request->teacher_name1;

            $post_array['teacher_mobile1'] = $request->teacher_mobile1;

            $post_array['teacher_email1'] = $request->teacher_email1;

            $post_array['teacher_name2'] = $request->teacher_name2;

            $post_array['teacher_mobile2'] = $request->teacher_mobile2;

            $post_array['teacher_email2'] = $request->teacher_email2;



            $save = RegistrationFormModel::create($post_array);

            if ($save->id) {

                $response_array['status'] = '1';

                $response_array['message'] = 'Thank you for registering for The Generation Green Campaign to Build a Cleaner and Healthier India! We are thrilled to have you onboard. Our team will be in touch with you soon on the next steps to contribute to bringing about positive change.';
            }
        } catch (\Exception $e) {



            $response_array['message'] = $e->getMessage();
        }



        return response()->json($response_array, 200);
    }
}
