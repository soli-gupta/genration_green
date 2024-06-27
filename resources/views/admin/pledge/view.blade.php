<!-- @extends('admin.layouts.template_admin') -->


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
                    <form class="form-horizontal" method="POST" action="<?php echo url(ADMIN_FOLDER); ?>/<?php echo $page_name; ?>/save"
                        enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <input type="hidden" required="" name="id" value="<?php echo isset($data_row['id']) ? $data_row['id'] : ''; ?>">

                        <div class="box-body">
                          
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="name" name="name"
                                        value="<?php echo isset($data_row['name']) ? $data_row['name'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="email" name="email"
                                        value="<?php echo isset($data_row['email']) ? $data_row['email'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Institute</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="institute" name="institute"
                                        value="<?php echo isset($data_row['institute']) ? $data_row['institute'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Gender</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="gender" name="gender"
                                        value="<?php echo isset($data_row['gender']) ? $data_row['gender'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">State</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="state" name="state"
                                        value="<?php echo isset($data_row['state']) ? $data_row['state'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="city" name="city"
                                        value="<?php echo isset($data_row['city']) ? $data_row['city'] : ''; ?>">
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                                <div class="col-sm-10">
                                    <select name="status" class="form-control select" required>
                                        @foreach (Config::get('constants.CONS_CONTACT_STATUS_ARRAY') as $key => $val)
                                            <?php
                                            $selected = '';
                                            if (isset($data_row['status']) && $data_row['status'] == $key) {
                                                $selected = 'selected';
                                            } elseif (old('status') == $key) {
                                                $selected = 'selected';
                                            }
                                            ?>
                                            <option value="{{ $key }}" {{ $selected }}>
                                                {{ $val }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <input type="hidden" name="submit_type" id="submit_type" value="1">
                            <div class="box-footer pull-right">
                                <button type="submit" class="btn btn-primary" onclick="actionType(1)">Save</button>
                                <button type="submit" class="btn bg-olive " onclick="actionType(2)">Save and
                                    Countinue</button>

                                <button type="reset" class="btn btn-default ">Reset</button>
                                <button type="button" class="btn btn-default"
                                    onclick="javascript:location.href='<?php echo url(ADMIN_FOLDER); ?>/<?php echo $page_name; ?>'">Back</button>
                                <?php if(isset($data_row['id']) && $data_row['id']!=''){?>
                                <!-- <button type="submit" class="btn bg-red " onclick="actionType(3)" >Delete</button> -->
                                <?php } ?>
                            </div>
                        </div>
                        <!-- /.box-body -->
                </div>
            </div>
            <!-- /.row (main row) -->
        </div>
    </section>
@endsection
