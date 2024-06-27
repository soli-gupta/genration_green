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
                  <?php
                  $search_array=array();
                  $search_url='';
                      foreach($_GET as $key => $value){
                       $search_array[$key]=$value;
                       $search_url.=$key.'='.$value.'&';
                         // echo $key . " : " . $value . "<br />\r\n";
                        }                       
                        ?>

                    
              
            </div>



     






            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>Name</th>                
                  <th>ID</th>                  
                  <!-- <th>Value</th>    -->               
                  <th>Status</th>  
                  <th>Action</th>
                  
               </tr>
               
               @forelse ($data_rows as $data_row)
                <tr>
                  <td> {{ $data_row->id }}</td>
                  <td> {{ $data_row->name }}</td>
                  <td>{{ $data_row->slug }}</td>
                 <!--  <td>{{ $data_row->description }}</td> -->
                 
                  <td><span class="label label-<?php echo ($data_row->status=='1')?'success':'danger';?>">
                   {{ Config::get('constants.CONS_STATUS_ARRAY')[$data_row->status] }}</span></td>
                 
                    
                  <td>
                  <a href="<?php echo Request::url();?>/view/<?php echo $data_row->id;?>" class="btn bg-olive ">Edit</a>
                
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
                    <?php  if(count($search_array)){                  
                      echo $data_rows->appends($search_array)->links();
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