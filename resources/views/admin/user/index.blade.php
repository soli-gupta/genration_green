@extends('admin.layouts.template_admin')


@section('content')

    <!-- Main content -->
    <section class="content">
     <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

              <h3 class="box-title">Total <?php echo $data_rows->total();?> records.</h3>
				<a class="btn btn-primary" href="<?php echo Request::url();?>/new">Add new</a> 
                    <a href="<?php echo Request::url();?>/export?<?php echo (isset($_GET['q']))?'q='.$_GET['q']:'';?>" class="btn btn-default">Export</i></a>
                
              <div class="box-tools">
                <form class="form-horizontal" method="GET" action="">
                <!--  {{ csrf_field() }} -->
                <div class="input-group input-group-sm" style="width: 250px;">
                  
                  <input type="text" name="q" value="<?php echo (isset($_GET['q']))?$_GET['q']:'';?>" class="form-control nospecial   pull-right" placeholder="Search"  style="width:200px;">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                   <div class="input-group-btn">
                    <a href="<?php echo Request::url();?>" class="btn btn-default">Clear</i></a>
                  </div>
                  
                </div>
                </form>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
				   <th>Email</th> 
				  <th>Name</th>          
				 
					        
					 
          <th>Status</th> 
					<th> Modules Aceess</th>	
           <th>Created At</th>				
                  <th>Updated At</th>
                 
                  <th>Action</th>
                  
               </tr>
               
               @forelse ($data_rows as $data_row)
                <tr>
                  <td> {{ $data_row->id }}</td>
				    <td>{{ $data_row->email }}</td>
				   <td>{{ $data_row->name }}</td>
				  
                 
                
                  <td><span class="label label-<?php echo ($data_row->status==1)?'success':'danger';?>">
                  <?php echo ($data_row->status==1)?'Active':'Inactive';?></span></td>
                           <td>{{ $data_row->admin_modules }}</td>
                   <td>{{ $data_row->created_at->format(DATE_FORMAT) }}</td>
                    <td>{{ ($data_row->created_at==$data_row->updated_at)?'':$data_row->updated_at->format(DATE_FORMAT) }}</td>
                   
                  <td>
                  <a href="<?php echo Request::url();?>/view/<?php echo $data_row->id;?>" class="btn bg-olive ">Edit</a>
                  <a href="<?php echo Request::url();?>?delete=<?php echo $data_row->id;?>" class="btn bg-red  " onclick="return confirm('Are you sure you want to delete {{$data_row->name}}?');">Delete</a>
                  </td>
               </tr>
               @empty

               <tr>
                <td colspan="9" align="center">
                      <p class="no-data">No data found</p>
                 <td>
               </tr>
                @endforelse

               

              </tbody></table>
            </div>    
                    <div class="container paginate">
                    <?php  if(isset($_GET['q'])){
                    echo $data_rows->appends(array('q' => $_GET['q']))->links();
                    } else {
                    echo $data_rows->links();
                    }
                    ?>
                    </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>

    </section>





    @endsection