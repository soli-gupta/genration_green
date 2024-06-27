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
              <h3 class="box-title">Details</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
        <form class="form-horizontal" autocomplete="off" method="POST" action="<?php echo url(ADMIN_FOLDER);?>/<?php echo $page_name;?>/save" enctype="multipart/form-data" >
             {{ csrf_field() }}
             <input type="hidden" required="" name="id" value="<?php echo isset($data_row['id'])?$data_row['id']:'';?>">
           

              <div class="box-body">
			  
			  <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" required="" class="form-control" autocomplete="off"  id="name" name="name" value="<?php echo isset($data_row['name'])?$data_row['name']:'';?>">
                  </div>
                </div>			
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email"  class="form-control" id="email" autocomplete="off"   name="email" value="<?php echo isset($data_row['email'])?$data_row['email']:'';?>" required>
                  </div>
                </div>
				
				    <!--   <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Mobile</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="mobile" required="" name="mobile" value="<?php echo isset($data_row['mobile'])?$data_row['mobile']:'';?>">
                  </div>
                </div>	 -->
				
				
				<div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Status</label>				
                  <div class="col-sm-10">                				
					<select name="status" class="form-control select" required>
					<option value="1" <?php echo (isset($data_row['status']) && $data_row['status']==1)?'selected':'';?>>Active</option>				
					<option value="0" <?php echo (isset($data_row['status']) && $data_row['status']==0)?'selected':'';?>>Inactive</option>				
					
					</select>
                  </div>
                </div>
				
				       <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Password</label>
                  <div class="col-sm-10">
                    <input type="password" class="form-control" id="new_password" required="" name="new_password" value="<?php echo isset($data_row['id'])?'nopassword':'';?>" >
                  </div>
                </div>	
				 
				
				 
					
				 <div class="box-header with-border">
              <h3 class="box-title">User Role</h3>
            </div>

                <div class="form-group">
                  <label for="inputEmail3" class="col-sm-2 control-label">Admin Modules Aceess</label>
                  <div class="col-sm-10">                   
        <select name="admin_modules[]" class="form-control select select2" required="" multiple style="height:200px;">

        <?php
          $admin_modules_array=array();
        if(isset($data_row['admin_modules'])){
          $admin_modules_array=explode(',',$data_row['admin_modules']);        
        }       
         foreach($admin_modules as $admin_module){  ?>
            <option value="<?php echo $admin_module['code'];?>" <?php echo (in_array($admin_module['code'],$admin_modules_array))?'selected':'';?>><?php echo $admin_module['name'];?></option>
          <?php } ?>
          </select>
          Note: When select "All Modules-Full Access" don't select others this work as all selected
                  </div>
                </div>
				    <p>
                   
                <div class="box-footer pull-right">         
                 <button type="button" class="btn btn-default" onclick="javascript:location.href='<?php echo url(ADMIN_FOLDER);?>/<?php echo $page_name;?>'">Back</button>
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