@extends('admin.layouts.template_admin')

@section('content')

<!-- Main content -->

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box">

                <div class="box-header">



                    <h3 class="box-title">Total <?php echo $data_rows->total(); ?> records.</h3> &nbsp;

                    <a class="btn btn-primary" href="<?php echo Request::url(); ?>/create">Add new</a> &nbsp;

                    <?php

                    $search_array = array();

                    $search_url = '';

                    foreach ($_GET as $key => $value) {

                        $search_array[$key] = $value;

                        $search_url .= $key . '=' . $value . '&';
                    }

                    ?>

                    <a href="<?php echo Request::url(); ?>/export?<?php echo $search_url; ?>" class="btn btn-default">Export</i></a>

                </div>



                <!-- field filter-->

                <div class="row">

                    <div class="col-md-12">

                        <div class="box">



                            <form class="form-horizontal" method="GET" action="<?php echo Request::url(); ?>">

                                <input type="hidden" name="search" value="field">

                                <div class=" box-header with-border flxBx">

                                    <h3 class="box-title" filter>Filters</h3>

                                    <div class="col"> <a href="<?php echo Request::url(); ?>">

                                            <button class="btn btn-info" type="button">Clear Filter</button>

                                        </a> </div>



                                    <div class="col">

                                        <button class="btn  btn-primary " type="submit">Apply Filter</button>

                                    </div>

                                </div>





                                <div class="box-body">

                                    <div class="row filter-input">

                                        <div class="col-xs-2">

                                            <label>Name</label>

                                            <input type="text" placeholder="Filter by Name" class="form-control nospecial  " id="name" name="name" placeholder="Name" value="<?php echo (isset($_GET['name'])) ? $_GET['name'] : ''; ?>">

                                        </div>





                                        <div class="col-xs-2">

                                            <label>Slug</label>

                                            <input type="text" placeholder="Filter by Slug" class="form-control nospecial  " id="slug" name="slug" placeholder="slug" value="<?php echo (isset($_GET['slug'])) ? $_GET['slug'] : ''; ?>">

                                        </div>



                                        <div class="col-xs-2">

                                            <label>Status</label>

                                            <select name="status" id="status" class="form-control nospecial  ">

                                                <option value="">Select Status</option>



                                                @foreach(Config::get('constants.CONS_STATUS_ARRAY') as $key=>$val):



                                                <option value="{{$key}}" {{ (isset($_GET['status']) && $_GET['status']==$key)?'selected="selected"':'' }}>{{$val}}</option>



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

                        <tbody>

                            <tr>

                                <th>ID</th>

                                <th>Name</th>

                                <th>Slug</th>

                                <th>Status</th>



                                <th>Front View</th>

                                <th>CreatedAt</th>

                                <th>UpdatedAt</th>

                                <th>Action</th>



                            </tr>



                            @forelse ($data_rows as $data_row)

                            <tr>

                                <td> {{ $data_row->id }}</td>

                                <td> {{ $data_row->name }}</td>

                                <td>{{ $data_row->slug }}</td>



                                <td><span class="label label-<?php echo ($data_row->status == '1') ? 'success' : 'danger'; ?>">

                                        {{ Config::get('constants.CONS_STATUS_ARRAY')[$data_row->status] }}</span></td>


                                <td> <a href="{{ App\CmspageModel::getPageUrlBySlug($data_row->slug)}}" class="btn bg-olive " target="_blank">View</a></td>

                                <td>{{ $data_row->created_at->format(DATE_FORMAT) }}</td>

                                <td>{{ ($data_row->created_at==$data_row->updated_at)?'-':$data_row->updated_at->format(DATE_FORMAT) }}</td>





                                <td>

                                    <a href="<?php echo Request::url(); ?>/edit/<?php echo $data_row->id; ?>" class="btn bg-olive ">Edit</a>

                                    <a href="<?php echo Request::url(); ?>?delete=<?php echo $data_row->id; ?>" class="btn bg-red  " onclick="return confirm('Are you sure you want to delete {{$data_row->name}}?');">Delete</a>

                                </td>

                            </tr>

                            @empty



                            <tr>

                                <td colspan="9" align="center">

                                    <p class="no-data">No data found</p>

                                <td>

                            </tr>

                            @endforelse

                        </tbody>

                    </table>

                </div>



                <div class="container paginate">

                    <?php if (count($search_array)) {

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