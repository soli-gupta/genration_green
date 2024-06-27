<?php
namespace App\Http\Controllers\Admin; //admin add



use App\Http\Controllers\Controller; // using controller class
use Illuminate\Support\Facades\Auth;
use App\RedirectUrlModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Request as Input;
class RedirectUrlCtrlAdmin extends Controller {
  protected $dates = ['updated_at'];
  
public function __construct()
    {
        $this->middleware('auth');
        $this->user =  \Auth::user();
        $this->name_url_folder= 'redirect-url';
    }





public function roleChecking() {

  $admin_modules_array=explode(',',Auth::user()->admin_modules);
      if(!in_array($this->name_url_folder,$admin_modules_array)){
        if(!in_array('all-modules',$admin_modules_array)){
           die("Sorry, you don’t have access to this page/module!");
          }                    
    }

}


    function getFilter($data_rows){

      $GET_DATA = Input::input(); 
    if(isset($GET_DATA['search']) && $GET_DATA['search']=='field'){   

     

      if($GET_DATA['from_url']){       
       $data_rows->where('from_url', 'LIKE',"%{$GET_DATA['from_url']}%" );
      }

if($GET_DATA['to_url']){       
       $data_rows->where('to_url', 'LIKE',"%{$GET_DATA['to_url']}%" );
      }


       

    
      if($GET_DATA['status']){       
       $data_rows->where('status',$GET_DATA['status']);
      }

        $fdate=$GET_DATA['fdate'] .' 00:00:00';
        $tdate=$GET_DATA['tdate'] .' 23:59:59';

       if($GET_DATA['fdate']!='' && $GET_DATA['tdate']!=''){
       $data_rows->whereBetween('created_at', array($fdate, $tdate));
      }elseif($GET_DATA['fdate']!=''){
        $tdate=date('Y-m-d') .' 23:59:59';
       $data_rows->whereBetween('created_at', array($fdate, $tdate));
      }elseif($GET_DATA['tdate']!=''){
        $fdate='2000-01-01 23:59:59';
       $data_rows->whereBetween('created_at', array($fdate, $tdate));
      }


}
    return $data_rows;
}





    
  public function index() {

  $this->roleChecking(); 
    
  
      $GET_DATA = Input::input(); 

    if(isset($GET_DATA['delete'])){
        $delete_status = RedirectUrlModel::find($GET_DATA['delete'])->delete();
         $message_type="message_susuccess";
         $message_text="Record has been deleted successfully!";
         return redirect(ADMIN_FOLDER.'/'.$this->name_url_folder)->with($message_type,$message_text);

    }
  



 $data_rows=RedirectUrlModel::orderBy('id', 'desc');
 $data_rows=$this->getFilter($data_rows); 
 $data_rows= $data_rows->paginate(PAGINATE_LIMIT);

  
    $page_array=array(                    
                    'title' => 'Redirect 404 Urls',                    
                    'page_name' => $this->name_url_folder,                    
                    'data_rows' => $data_rows,                     
                    );
     //return view('admin.pages.pages',$page_array); 
      return view('admin.'.$this->name_url_folder.'.index',$page_array); 
  }





    public function view($id) {

      $this->roleChecking(); 
    $data = RedirectUrlModel::where('id', $id)->first();
            if($data){
                $page_array=array(                    
                    'title' => 'View Redirect 404 Url',                    
                    'page_name' => $this->name_url_folder,                     
                    'data_row' => $data,                     
                    );
              //return view('admin.pages.view',$page_array); 
              return view('admin.'.$this->name_url_folder.'.view',$page_array); 
        }  else {
        return redirect(ADMIN_URL);        
    }
      
    }

    public function add() {
             $data=array();
                $page_array=array(                    
                     'title' =>'Add Redirect Url',                    
                    'page_name' => $this->name_url_folder,                     
                    'data_row' => $data,              
                        
                    );
            return view('admin.'.$this->name_url_folder.'.view',$page_array); 
       
        
    
      
    }




    public function save(Request $request ) {  
         $POST_DATA=$request->input(); 
                         
          $this->roleChecking(); 
           
      $id='';
    if($POST_DATA['id']){
      $id=$POST_DATA['id'];      
    }
    unset($POST_DATA['id']); 




   if($POST_DATA['submit_type']=='3' && $id!=''){
        $delete_status = RedirectUrlModel::find($id)->delete();
         $message_type="message_susuccess";
         $message_text="Record has been deleted successfully!";
         return redirect(ADMIN_FOLDER.'/'.$this->name_url_folder)->with($message_type,$message_text);

    }




     
         $array_validate=array();
        $array_validate['from_url']="required";       
        $array_validate['to_url']="required";       


  
    
    
    $this->validate($request,$array_validate);  

            $message_type="message_error";
            $message_text="Some error!";

            try
              { 



               if($id==''){           
                      $save=RedirectUrlModel::create($POST_DATA);

                    } else {
                               
            
                $save=RedirectUrlModel::find($id);              
                $save->fill($POST_DATA);
            
                    }
            
            
             $save->save();
                        if($save){
                           $message_type="message_susuccess";
                           $message_text="Successfully saved";
                     
                   }
              }
              catch(\Exception $e)
              {
                            $message_type="message_error";
                           $message_text= $e->getMessage();
                
              }


               // return redirect(ADMIN_FOLDER.'/'.$this->name_url_folder)->with($message_type,$message_text);
        if($message_type=="message_susuccess"){

          if($POST_DATA['submit_type']=='2'){
            return redirect(ADMIN_FOLDER.'/'.$this->name_url_folder.'/view/'.$save->id)->with($message_type,$message_text);
            
          } else {
             return redirect(ADMIN_FOLDER.'/'.$this->name_url_folder)->with($message_type,$message_text);
          }

           
           
        } else {
          return redirect()->back()->with($message_type,$message_text);

        }

    }


        public function export(Request $request){  

            $this->roleChecking(); 
   
        $data_rows=RedirectUrlModel::orderBy('id', 'desc');
        $data_rows=$this->getFilter($data_rows);
         $data_rows=$data_rows->get();

        $tot_record_found=0;
        if(count($data_rows)>0){
            $tot_record_found=1;
            //First Methos 
            

            $export_data="From Url,To Url \n";
            foreach($data_rows as $value){
                $export_data.='"'.$value->from_url.'",';           
                $export_data.='"'.$value->to_url.'"'; 
                 $export_data.="\r\n";
            }
            $filename=$this->name_url_folder.'-'.date('Y-m-d').".csv";
            return response($export_data)
                ->header('Content-Type','application/csv')                
                ->header('Content-Disposition', 'attachment; filename="Export-'.$filename)
                ->header('Pragma','no-cache')
                ->header('Expires','0');                     
        }
            $message_type="message_error";
            $message_text="Some error!";
         return redirect(ADMIN_FOLDER.'/'.$this->name_url_folder)->with($message_type,$message_text);   
    }
    


    public function dataupload(Request $request ) {          
      $this->roleChecking(); 
      
      
    // validation
      $array_validate=array();
      $array_validate['datafile']="required";
    $this->validate($request,$array_validate);  
      
    $message_type="message_error";
      $message_text="Some error!";
      
       try
            { 
                
                
      $datafile = $request->file('datafile');
      $file_name=$datafile->getClientOriginalName();
     $extension_type=$datafile->getClientOriginalExtension();
      if($extension_type!='csv') { 
          throw new Exception("File type must be CSV");
      }
    
                
                 //get the csv file 
              $file = $_FILES['datafile']['tmp_name']; 
              $csv_data_array = array_map('str_getcsv', file($file));

        
              if(count($csv_data_array)>1){
            $first_row_data=$csv_data_array[0];
                
              
                if(count($first_row_data)!=2){
                  die("Please upload valid sheet");

                } 

              }
               else {
               die("Please upload valid sheet");
              }

          

              


              $count=0;
              foreach($csv_data_array as $csv_data){
                  if($csv_data[0]=='From Url'){
                      continue;
                  }

                $from_url=$csv_data[0];


                $exist_data=RedirectUrlModel::where("from_url",$from_url)->first();
                if($exist_data){
                  continue;
                }

           
               $post_array=array();
               $post_array['from_url']=$csv_data[0];
               $post_array['to_url']=$csv_data[1];
               $post_array['status']='1';
              $save=RedirectUrlModel::create($post_array)->save();
                      if($save){
                          $count++;
                          
                      }
                  
              }
              
              
            
                if($count){
                  $message_type="message_susuccess";
                  $message_text=$count. " Successfully upload ";
                }
                
                
            } catch(\Exception $e)
            {
                          $message_type="message_error";
                         $message_text= $e->getMessage();
              
            }
      
      //die("aa");
      return redirect()->back()->with($message_type,$message_text);
  }

}