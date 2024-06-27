@extends('admin.layouts.template_admin')


@section('content')

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
     

        <div class="col-md-12">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Profile - <?php echo isset($data_rows['name'])?$data_rows['name']:'';?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
          
        <form autocomplete="off" class="form-horizontal" method="POST" action="<?php echo url(ADMIN_FOLDER);?>/<?php echo $page_name;?>/save" enctype="multipart/form-data">
             {{ csrf_field() }}
             <input type="hidden" required="" name="id" value="<?php echo isset($data_rows['id'])?$data_rows['id']:'';?>">
           


              <div class="box-body">
         



         <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" required="" autocomplete="off" class="form-control" id="name" name="name" value="<?php echo isset($data_rows['name'])?$data_rows['name']:'';?>"  >
                  </div>
                </div>      
        
                 



          <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="text" autocomplete="off"  class="form-control" id="email" name="email" value="<?php echo isset($data_rows['email'])?$data_rows['email']:'';?>" >
                  </div>
                </div>
          


            <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mobile</label>
                  <div class="col-sm-10">
                    <input type="text" autocomplete="off" class="form-control" id="mobile" name="mobile" value="<?php echo isset($data_rows['mobile'])?$data_rows['mobile']:'';?>" onkeypress="return isNumberKey(event)" maxlngth="10"  minilngth="10" >
                  </div>
                </div>  
        
        
        
           
          
        
             
       
        
        
        
              <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">New Password</label>
                  <div class="col-sm-10">
                    <input type="password" autocomplete="off" class="form-control" id="new_password" name="new_password" value="" >
                  </div>
                </div>  


                  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Confirm Password</label>
                  <div class="col-sm-10">
                    <input type="password" autocomplete="off" class="form-control" id="confirm_password" name="confirm_password" value="" >
                  </div>
                </div>




 <div class="box-header with-border">
              <h3 class="box-title">Security</h3>
            </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Current Password</label>
                  <div class="col-sm-10">
                    <input type="password" autocomplete="off" class="form-control" id="current_password" name="current_password" value="" >
                  </div>
                </div>  
         
     
         
        
                  
                <div class="box-footer pull-right">         
                
                <button type="submit" class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-default ">Reset</button>
              </div>



              </div>
              <!-- /.box-body -->


      </div>
      </div>
      <!-- /.row (main row) -->
</div>
    </section>







    @endsection