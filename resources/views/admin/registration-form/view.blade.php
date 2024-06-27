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
                                <label for="inputEmail3" class="col-sm-2 control-label">Institute Name</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="institute_name"
                                        name="institute_name" value="<?php echo isset($data_row['institute_name']) ? $data_row['institute_name'] : ''; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Institute Address</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="institute_address" name="institute_address"
                                        value="<?php echo isset($data_row['institute_address']) ? $data_row['institute_address'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Institute Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="institute_mobile" name="institute_mobile"
                                        value="<?php echo isset($data_row['institute_mobile']) ? $data_row['institute_mobile'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Institute Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="institute_email" name="institute_email"
                                        value="<?php echo isset($data_row['institute_email']) ? $data_row['institute_email'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Total Student</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="total_student" name="total_student"
                                        value="<?php echo isset($data_row['total_student']) ? $data_row['total_student'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Principal Name</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="principal_name" name="principal_name"
                                        value="<?php echo isset($data_row['principal_name']) ? $data_row['principal_name'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Principal Mobile</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="principal_mobile" name="principal_mobile"
                                        value="<?php echo isset($data_row['principal_mobile']) ? $data_row['principal_mobile'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Principal Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="principal_email" name="principal_email"
                                        value="<?php echo isset($data_row['principal_email']) ? $data_row['principal_email'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Teacher Co-ordinator-1 Name </label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="teacher_name1" name="teacher_name1"
                                        value="<?php echo isset($data_row['teacher_name1']) ? $data_row['teacher_name1'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Teacher Co-ordinator-1 Contact</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="teacher_mobile1" name="teacher_mobile1"
                                        value="<?php echo isset($data_row['teacher_mobile1']) ? $data_row['teacher_mobile1'] : ''; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Teacher Co-ordinator-1 Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="teacher_email1" name="teacher_email1"
                                        value="<?php echo isset($data_row['teacher_email1']) ? $data_row['teacher_email1'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Teacher Co-ordinator-2 Name</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="teacher_name2" name="teacher_name2"
                                        value="<?php echo isset($data_row['teacher_name2']) ? $data_row['teacher_name2'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Teacher Co-ordinator-2 Contact</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="teacher_mobile2" name="teacher_mobile2"
                                        value="<?php echo isset($data_row['teacher_mobile2']) ? $data_row['teacher_mobile2'] : ''; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Teacher Co-ordinator-2 Email</label>
                                <div class="col-sm-10">
                                    <input type="text" readonly="" class="form-control" id="teacher_email2" name="teacher_email2"
                                        value="<?php echo isset($data_row['teacher_email2']) ? $data_row['teacher_email2'] : ''; ?>">
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
