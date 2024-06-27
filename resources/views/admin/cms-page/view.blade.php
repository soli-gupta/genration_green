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
                <form class="form-horizontal" method="POST" action="<?php echo url(ADMIN_FOLDER); ?>/<?php echo $page_name; ?>/save" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" required="" name="id" value="{{ (isset($data_row->id))?$data_row->id:'' }}">

                    <div class="box-body">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" required="" class="form-control get_url_name" id="name" name="name" value="{{ (isset($data_row->name))?$data_row->name:old('name') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Slug</label>
                            <div class="col-sm-10">
                                <input type="text" required="" class="form-control put_url_key" id="slug" name="slug" value="{{ (isset($data_row->slug))?$data_row->slug:old('slug') }}">
                            </div>
                        </div>

                        <div class="form-group hide">
                            <label for="inputEmail3" class="col-sm-2 control-label">Sub Text</label>

                            <div class="col-sm-10">
                                <textarea class="form-control " id="summernote" name="sub_text">{{ (isset($data_row->sub_text))?$data_row->sub_text:old('sub_text') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group hide">
                            <label for="inputEmail3" class="col-sm-2 control-label">Content</label>
                            <div class="col-sm-10">
                                <textarea class="form-control summernote" id="summernote" name="content1">{{ (isset($data_row->content1))?$data_row->content1:old('content1') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group hide">
                            <label for="inputEmail3" class="col-sm-2 control-label">Content2</label>
                            <div class="col-sm-10">
                                <textarea class="form-control summernote" name="content2">{{ (isset($data_row->content2))?$data_row->content2:old('content2') }}</textarea>
                            </div>
                        </div>


                        <div class="form-group hide">
                            <label for="inputEmail3" class="col-sm-2 control-label">Content3</label>

                            <div class="col-sm-10">
                                <textarea class="form-control summernote" name="content3">{{ (isset($data_row->content3))?$data_row->content3:old('content3') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Banner Image</label>
                            <div class="col-sm-10">
                                <?php if (isset($data_row['image']) && $data_row['image'] != '') { ?>

                                    <a href="{{ STATIC_PUBLIC_URL_STORAGE }}<?= $data_row['image']; ?>" data-lightbox="{{ $data_row->id}}" data-title="Image">
                                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image']; ?>" height="70px">
                                    </a>

                                    <br /> Delete <input type="checkbox" name="image_delete" value="1">
                                <?php } ?>
                                <input type="file" name="image" id="image" accept="image/*,video/*">
                                <!-- <p class="help-block">Image Size :1720 X 550 </p> -->
                            </div>
                        </div>

                        <div class="form-group hide">
                            <label for="inputEmail3" class="col-sm-2 control-label">Banner Image Mobile</label>
                            <div class="col-sm-10">
                                <?php if (isset($data_row['image_mobile']) && $data_row['image_mobile'] != '') { ?>

                                    <a href="{{ STATIC_PUBLIC_URL_STORAGE }}<?= $data_row['image_mobile']; ?>" data-lightbox="{{ $data_row->id}}" data-title="Image">
                                        <img src="{{ STATIC_PUBLIC_URL_STORAGE }}<?php echo $data_row['image_mobile']; ?>" height="70px">
                                    </a>

                                    <br /> Delete <input type="checkbox" name="image_mobile_delete" value="1">
                                <?php } ?>
                                <input type="file" name="image_mobile" id="image_mobile" accept="image/jpeg,image/gif,image/x-png">
                                <!-- <p class="help-block">Image Size :720 X 570 </p> -->
                            </div>
                        </div>

                        <div class="form-group hide">
                            <label for="inputEmail3" class="col-sm-2 control-label">Banner Image Alt</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="image_alt" name="image_alt" value="{{ (isset($data_row->image_alt))?$data_row->image_alt:old('image_alt') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Status</label>
                            <div class="col-sm-10">
                                <select name="status" class="form-control select" required>
                                    @foreach ( Config::get('constants.CONS_STATUS_ARRAY') as $key =>$val)
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


                        <div class="box-header with-border">
                            <h3 class="box-title">SEO</h3>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Page Title</label>
                            <div class="col-sm-10">
                                <input type="text" required="" class="form-control " id="page_title" name="page_title" value="{{ (isset($data_row->page_title))?$data_row->page_title:old('page_title') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Meta Keywords</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="meta_keywords" name="meta_keywords">{{ (isset($data_row->meta_keywords))?$data_row->meta_keywords:old('meta_keywords') }}</textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Meta Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="meta_description" name="meta_description">{{ (isset($data_row->meta_description))?$data_row->meta_description:old('meta_description') }}</textarea>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label">Meta Other</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="meta_other" name="meta_other">{{ (isset($data_row->meta_other))?$data_row->meta_other:old('meta_other') }}</textarea>
                            </div>
                        </div>

                        <input type="hidden" name="submit_type" id="submit_type" value="1">
                        <div class="box-footer pull-right">
                            <button type="submit" class="btn btn-primary" onclick="actionType(1)">Save</button>
                            <button type="submit" class="btn bg-olive " onclick="actionType(2)">Save and Countinue</button>

                            <button type="reset" class="btn btn-default ">Reset</button>
                            <button type="button" class="btn btn-default" onclick="javascript:location.href='<?php echo url(ADMIN_FOLDER); ?>/<?php echo $page_name; ?>'">Back</button>
                        </div>
                    </div>
                    <!-- /.box-body -->
            </div>
        </div>
        <!-- /.row (main row) -->
    </div>
</section>


@endsection