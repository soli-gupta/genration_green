@extends('admin.layouts.template_admin')



@section('content')

<!-- Main content -->

<section class="content">

    <div class="row">

        <div class="col-xs-12">

            <div class="box">

                <div class="box-header">

                    <h3 class="box-title">Total <?php echo $data_rows->total(); ?> records.</h3> &nbsp;

                    <!-- <a class="btn btn-primary" href="<?php echo Request::url(); ?>/new">Add new</a>  -->

                    <a href="<?php echo Request::url(); ?>/export?<?php echo isset($_GET['q']) ? 'q=' . $_GET['q'] : ''; ?>" class="btn btn-default">Export</i></a> &nbsp;



                    <div class="box-tools">



                    </div>

                </div>

                <!-- /.box-header -->



                <!-- field filter-->

                <div class="row">

                    <div class="col-md-12">

                        <div class="box">



                            <form class="form-horizontal" method="GET" action="<?php echo Request::url(); ?>">

                                <input type="hidden" name="saerch" value="field">

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

                                            <label>Institute Name</label>

                                            <input type="text" placeholder="Filter by Institute Name" class="form-control onlytext" id="institute_name" name="institute_name" value="<?php echo isset($_GET['institute_name']) ? $_GET['institute_name'] : ''; ?>" maxlength="50">

                                        </div>



                                        <div class="col-xs-2">

                                            <label>Institute Mobile</label>

                                            <input type="text" placeholder="Filter by Institute Mobile" class="form-control onlynumber" id="institute_mobile" name="institute_mobile" value="<?php echo isset($_GET['institute_mobile']) ? $_GET['institute_mobile'] : ''; ?>" maxlength="10">

                                        </div>



                                        <div class="col-xs-2">

                                            <label>Institute Email</label>

                                            <input type="text" placeholder="Filter by Institute Email" class="form-control onlyemail" id="institute_email" name="institute_email" value="<?php echo isset($_GET['institute_email']) ? $_GET['institute_email'] : ''; ?>" maxlength="50">

                                        </div>



                                        <div class="col-xs-2">

                                            <label>Principal Name</label>

                                            <input type="text" placeholder="Filter by Principal Name" class="form-control onlyemail" id="principal_name" name="principal_name" value="<?php echo isset($_GET['principal_name']) ? $_GET['principal_name'] : ''; ?>" maxlength="50">

                                        </div>



                                        <div class="col-xs-2">

                                            <label>Status</label>

                                            <select name="status" id="status" class="form-control">

                                                <option value="">Filter By Status</option>



                                                @foreach (Config::get('constants.CONS_CONTACT_STATUS_ARRAY') as $key =>

                                                $val)

                                                :



                                                <option value="{{ $key }}" {{ isset($_GET['status']) && $_GET['status'] == $key ? 'selected="selected"' : '' }}>

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



                <div class="box-body table-responsive no-padding">

                    <table class="table table-hover">

                        <tbody>

                            <tr>

                                <th>ID</th>

                                <th>Institute Name</th>

                                <th>Institute Email</th>

                                <th>Institute Mobile</th>

                                <th>Principal Name</th>

                                <th>Principal Mobile</th>

                                <th>Principal Email</th>

                                <th>Status</th>

                                <th>Created At</th>

                                <th>Updated At</th>

                                <th>Action</th>



                            </tr>

                            @forelse ($data_rows as $data_row)

                            <tr>

                                <td> {{ $data_row->id }}</td>

                                <td>{{ $data_row->institute_name }}</td>

                                <td>{{ $data_row->institute_email }}</td>

                                <td>{{ $data_row->institute_mobile }}</td>

                                <td>{{ $data_row->principal_name }}</td>

                                <td>{{ $data_row->principal_mobile }}</td>

                                <td>{{ $data_row->principal_email }}</td>

                                <td>{{ $data_row->status }}</td>



                                <td>{{ $data_row->created_at->format(DATE_FORMAT) }}</td>

                                <td>{{ $data_row->created_at == $data_row->updated_at ? '-' : $data_row->updated_at->format(DATE_FORMAT) }}

                                </td>



                                <td>

                                    <a href="<?php echo Request::url(); ?>/view/<?php echo $data_row->id; ?>" class="btn bg-olive ">Edit</a>

                                    <!-- <a href="<?php echo Request::url(); ?>?delete=<?php echo $data_row->id; ?>" class="btn bg-red  " onclick="return confirm('Are you sure you want to delete {{ $data_row->name }}?');">Delete</a> -->

                                </td>

                            </tr>

                            @empty



                            <tr>

                                <td colspan="11" align="center">

                                    <p class="no-data">No data found</p>

                                <td>

                            </tr>

                            @endforelse



                        </tbody>

                    </table>

                </div>

                <div class="container paginate">

                    <?php if (isset($_GET['q'])) {

                        echo $data_rows->appends(['q' => $_GET['q']])->links();
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