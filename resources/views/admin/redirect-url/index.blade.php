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

                    <a href="<?php echo Request::url();?>/export?<?php echo $search_url;?>" class="btn btn-default">Export</i></a> 
              
            </div>



             <!-- field filter-->
            <div class="row">
              <div class="col-md-12">
                <div class="box">

                   <form class="form-horizontal" method="GET" action="<?php echo Request::url();?>">
                  <input type="hidden" name="search" value="field">
                  <div class=" box-header with-border">
                    <h3 class="box-title class=" filter>Filters</h3>
                    
                   
                    <div class="col-sm-2 pull-right"> <a href="<?php echo Request::url();?>" style="margin-right:10px;">
                      <button class="btn btn-info pull-right" type="button">Clear Filter</button>
                      </a> </div>

                       <div class="col-sm-1 pull-right">
                      <button class="btn  btn-primary " type="submit">Apply Filter</button>
                    </div>
                  </div>

                  
                  <div class="box-body">
                    <div class="row filter-input">                    
                      

                     <div class="col-xs-2">
                        <label>From Url</label>
                        <input type="text" class="form-control nospecial  " id="from_url" name="from_url" placeholder="Name" value="<?php echo (isset($_GET['from_url']))?$_GET['from_url']:'';?>">
                      </div>  


                      <div class="col-xs-2">
                        <label>To Url</label>
                        <input type="text" class="form-control nospecial  " id="to_url" name="to_url" placeholder="to_url" value="<?php echo (isset($_GET['slug']))?$_GET['to_url']:'';?>">
                      </div> 

                      <div class="col-xs-2">
                        <label>Status</label>             


                     <select name="status" class="form-control nospecial   select"   >  
                      <option value=""></option>        
                        @foreach ( Config::get('constants.CONS_STATUS_ARRAY')  as $key =>$val)
                            <?php 
                              $selected='';
                              if(isset($_GET['status']) && $_GET['status']==$key){
                                $selected='selected';
                              }
                            ?>
                <option value="{{ $key }}"   {{ $selected }}  >
                 {{ $val }}
                </option>
                    @endforeach 
                   </select>
                      </div>  

                      
                      @include('admin.component.filter_date')
                      


                    </div>
                  </div>
                </form>
                </div>
              </div>
            </div>

              <!-- end field filter-->






            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tbody><tr>
                  <th>ID</th>
                  <th>From url</th>                
                  <th>To url</th>                  
                  <th>Status</th>                  
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Action</th>
                  
               </tr>
               
               @forelse ($data_rows as $data_row)
                <tr>
                  <td> {{ $data_row->id }}</td>
                  <td> {{ $data_row->from_url }}</td>
                  <td>{{ $data_row->to_url }}</td>
                 
                  <td><span class="label label-<?php echo ($data_row->status=='1')?'success':'danger';?>">
                   {{ Config::get('constants.CONS_STATUS_ARRAY')[$data_row->status] }}</span></td>
                  <td>{{ $data_row->created_at->format(DATE_FORMAT) }}</td>
                    <td>{{ ($data_row->created_at==$data_row->updated_at)?'':$data_row->updated_at->format(DATE_FORMAT) }}</td>
                    
                  <td>
                  <a href="<?php echo Request::url();?>/view/<?php echo $data_row->id;?>" class="btn bg-olive ">Edit</a>
                  <a href="<?php echo Request::url();?>?delete=<?php echo $data_row->id;?>" class="btn bg-red  " onclick="return confirm('Are you sure you want to delete {{$data_row->from_url}}?');">Delete</a>
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





 <!-- Data Upload-->
 <div class="row">
              <div class="col-md-12">
                <div class="box">

                 <form class="form-horizontal" method="POST" action="<?php echo url(ADMIN_FOLDER);?>/<?php echo $page_name;?>/dataupload" enctype="multipart/form-data">
             {{ csrf_field() }}
                  <div class=" box-header with-border">
                    <h3 class="box-title class=" filter>Bulk Upload</h3>
                    
                   
                   <a href="#">Sample Sheet: Same as export</a>



                     <div class="col-sm-1 pull-right">
                      <button class="btn  btn-primary " type="submit">Upload</button>
                    </div>
                     <div class="col-sm-3 pull-right">
                         
                        <input type="file" name="datafile" id="datafile" accept=".csv" required>
                      </div>
                  </div>

                  
                
                </form>
                </div>
              </div>
            </div>

              <!-- end Data Upload-->








        </div>
      </div>

    </section>





    @endsection