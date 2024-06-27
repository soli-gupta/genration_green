<!DOCTYPE html>

<html>



<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>{{$title}} - {{env('APP_NAME')}}</title>

    <base href="{{ BASE_URL }}" />

    <link rel="shortcut icon" href="./assets/images/favicon.ico">

    <link rel="shortcut icon" href="/favicon.ico">

    <link rel="apple-touch-icon" sizes="180x180" href="{{ URL::asset('assets/admin')}}/dist/img/apple-touch-icon.png">

    <link rel="icon" type="image/png" sizes="32x32" href="{{ URL::asset('assets/admin')}}/dist/img/favicon-32x32.png">

    <link rel="icon" type="image/png" sizes="16x16" href="{{ URL::asset('assets/admin')}}/dist/img/favicon-16x16.png">

    <!-- Tell the browser to be responsive to screen width -->

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.7 -->

    <link rel="stylesheet" href="{{ URL::asset('assets/admin')}}/bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Font Awesome -->

    <link rel="stylesheet" href="{{ URL::asset('assets/admin')}}/bower_components/font-awesome/css/font-awesome.min.css">

    <!-- Ionicons -->

    <link rel="stylesheet" href="{{ URL::asset('assets/admin')}}/bower_components/Ionicons/css/ionicons.min.css">

    <!-- Theme style -->

    <link rel="stylesheet" href="{{ URL::asset('assets/admin')}}/dist/css/AdminLTE.min.css">

    <!-- AdminLTE Skins. Choose a skin from the css/skins

       folder instead of downloading all of them to reduce the load. -->

    <link rel="stylesheet" href="{{ URL::asset('assets/admin')}}/dist/css/skins/_all-skins.min.css">

    <!-- Morris chart -->

    <link rel="stylesheet" href="{{ URL::asset('assets/admin')}}/bower_components/morris.js/morris.css">

    <!-- jvectormap -->

    <link rel="stylesheet" href="{{ URL::asset('assets/admin')}}/bower_components/jvectormap/jquery-jvectormap.css">

    <!-- Date Picker -->

    <link rel="stylesheet" href="{{ URL::asset('assets/admin')}}/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">

    <!-- Daterange picker -->

    <link rel="stylesheet" href="{{ URL::asset('assets/admin')}}/bower_components/bootstrap-daterangepicker/daterangepicker.css">

    <!-- bootstrap wysihtml5 - text editor -->

    <link rel="stylesheet" href="{{ URL::asset('assets/admin')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">



    <link rel="stylesheet" href="{{ URL::asset('assets/admin')}}/bower_components/select2/dist/css/select2.min.css">

    <?php

    $admin_modules_array = explode(',', Auth::user()->admin_modules);

    ?>



    <!-- Google Font -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>



<body class="hold-transition skin-blue layout-top-nav">



    <style type="text/css">
        .container {

            width: auto;

            padding: 0 20px;

        }



        .sorting a,

        .sorting_asc a,

        .sorting_desc a {

            width: 100%;

            display: inline-block;

            position: relative;

            cursor: pointer;

            color: #333;

            white-space: nowrap;

            vertical-align: middle;

        }



        .sorting a:after,

        .sorting_asc a:after,

        .sorting_desc a:after {

            content: "";

            display: inline-block;

            width: 14px;

            height: 18px;

            background-size: auto 16px;

            position: relative;

            right: 0;

            top: auto;

            margin-left: 3px;

            vertical-align: middle;

        }



        .sorting_asc a:after {

            background-size: 20px auto;

        }



        .sorting_desc a:after {

            background-size: 20px auto;

        }



        /* Chrome, Safari, Edge, Opera */

        input::-webkit-outer-spin-button,

        input::-webkit-inner-spin-button {

            -webkit-appearance: none;

            margin: 0;

        }



        /* Firefox */

        input[type=number] {

            -moz-appearance: textfield;

        }
    </style>

    <div class="wrapper">

        <!-- header -->



        <header class="main-header">

            <nav class="navbar navbar-static-top">

                <!--    <div class="container" style="width: 1300px"> -->

                <div class="container">

                    <div class="navbar-header">

                        <a href="<?php echo url(ADMIN_FOLDER); ?>" class="navbar-brand"><b>{{env('APP_NAME')}}</b>

                            Admin</a>

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">

                            <i class="fa fa-bars"></i>

                        </button>

                    </div>



                    <!-- Collect the nav links, forms, and other content for toggling -->

                    <div class="collapse navbar-collapse pull-left" id="navbar-collapse">

                        <ul class="nav navbar-nav">

                            <li class="<?php echo ($page_name == 'dashboard') ? 'active' : '' ?>">

                                <a href="<?php echo ADMIN_URL; ?>/dashboard"><span>Dashboard</span></a>

                            </li>



                            <li class=" <?php echo (in_array($page_name, array('cms-page', 'cms-block', 'cms-banner'))) ? 'active' : ''; ?>

                        dropdown">



                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">General<span class="caret"></span></a>

                                <ul class="dropdown-menu" role="menu">



                                    @if(in_array('cms-page',$admin_modules_array) ||

                                    in_array('all-modules',$admin_modules_array))

                                    <li class="<?php echo ($page_name == 'cms-page') ? 'active' : '' ?>">

                                        <a href="<?php echo ADMIN_URL; ?>/cms-page">

                                            <span>CMS Page</span></a>

                                    </li>

                                    @endif



                                    @if(in_array('pledge',$admin_modules_array) ||

                                    in_array('all-modules',$admin_modules_array))

                                    <li class="<?php echo ($page_name == 'pledge') ? 'active' : '' ?>">

                                        <a href="<?php echo ADMIN_URL; ?>/pledge">

                                            <span>Pledge</span></a>

                                    </li>

                                    @endif



                                    @if(in_array('registration-form',$admin_modules_array) ||

                                    in_array('all-modules',$admin_modules_array))

                                    <li class="<?php echo ($page_name == 'registration-form') ? 'active' : '' ?>">

                                        <a href="<?php echo ADMIN_URL; ?>/registration-form">

                                            <span>Registration Form</span></a>

                                    </li>

                                    @endif



                                </ul>

                            </li>

                            <li class="<?php echo ($page_name == 'setting' || $page_name == 'profile' || $page_name == 'admin-user' || $page_name == 'redirect-url') ? 'active' : '' ?> dropdown">



                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">System<span class="caret"></span></a>

                                <ul class="dropdown-menu" role="menu">



                                    <li class="<?php echo ($page_name == 'profile') ? 'active' : '' ?>">

                                        <a href="<?php echo ADMIN_URL; ?>/profile"> <span>Profile</span></a>

                                    </li>



                                    @if(in_array('admin-user',$admin_modules_array) ||

                                    in_array('all-modules',$admin_modules_array))

                                    <li class="<?php echo ($page_name == 'admin-user') ? 'active' : '' ?>"><a href="<?php echo ADMIN_URL; ?>/admin-user"><span>Admin Users</span></a></li>

                                    @endif





                                    @if(in_array('setting',$admin_modules_array) ||

                                    in_array('all-modules',$admin_modules_array))

                                    <li class="<?php echo ($page_name == 'setting') ? 'active' : '' ?>"><a href="<?php echo ADMIN_URL; ?>/setting"><span>Setting</span></a></li>

                                    @endif



                                </ul>

                            </li>



                            <li><a href="<?php echo url('/'); ?>" target="_blank"><span>Front Website</span></a></li>



                        </ul>

                    </div>

                    <!-- /.navbar-collapse -->

                    <!-- Navbar Right Menu -->



                    <div class="navbar-custom-menu">

                        <ul class="nav navbar-nav">

                            <!-- User Account Menu -->

                            <li class="dropdown user user-menu">

                                <!-- Menu Toggle Button -->

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    <!-- The user image in the navbar-->

                                    <img src="{{ URL::asset('assets/admin')}}/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">

                                    <!-- hidden-xs hides the username on small devices so only the image appears. -->

                                    <span class="hidden-xs">

                                        <?php echo Auth::user()->name; ?>

                                    </span>

                                </a>

                                <ul class="dropdown-menu">

                                    <!-- The user image in the menu -->

                                    <li class="user-header">

                                        <img src="{{ URL::asset('assets/admin')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                                        <p>

                                            <?php echo Auth::user()->name; ?>

                                            <small>Member since

                                                <?php echo Auth::user()->created_at->format('j F, Y'); ?>

                                            </small>

                                        </p>

                                    </li>

                                    <!-- Menu Body -->



                                    <!-- Menu Footer-->

                                    <li class="user-footer">

                                        <div class="pull-left">

                                            <a href="<?php echo ADMIN_URL; ?>/profile" class="btn btn-default btn-flat">Profile</a>

                                        </div>

                                        <div class="pull-right">



                                            <a href="javascript:void(0)" class="btn btn-default btn-flat" onclick="event.preventDefault();

                                                 document.getElementById('logout-form').submit();">Sign out</a>



                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                                {{ csrf_field() }}

                                            </form>

                                        </div>

                                    </li>

                                </ul>

                            </li>

                        </ul>

                    </div>

                    <!-- /.navbar-custom-menu -->

                </div>

                <!-- /.container-fluid -->

            </nav>

        </header>



        <!-- end header -->

        <!-- Content Wrapper. Contains page content -->

        <div class="content-wrapper">

            <!-- Content Header (Page header) -->

            <section class="content-header">

                <h1>

                    {{$title}}

                </h1>



            </section>

            @if ($errors->any())

            <div class="alert alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)

                    <li>{{ $error }}</li>

                    @endforeach

                </ul>

            </div>

            @endif



            @if(session()->has('message_susuccess'))

            <div class="alert alert-success">

                {{ session()->get('message_susuccess') }}

            </div>

            @endif



            @if(session()->has('message_error'))

            <div class="alert alert-error">

                {{ session()->get('message_error') }}

            </div>

            @endif



            <div class="alert alert-danger alert-dismissible" id="error_common" style="display:none;">

                <!--  <button class="close" type="button" data-dismiss="alert" aria-hidden="true">×</button> -->

                <lable id="error_common_msg"></lable>

            </div>

            <div class="main_content-wrapper">



                @yield('content')



            </div>



            <!-- /.content -->

        </div>

        <!-- /.content-wrapper -->



        <footer class="main-footer">

            <div class="pull-right hidden-xs">

                <b>Version</b> CMS-Laravel 10

            </div>

            <strong>{{env('APP_NAME')}} ©

                <?php echo date('Y'); ?> All rights reserved.

            </strong> Powered By : <a target="_blank" href="https://www.grapesdigital.com/">Grapes Digital</a>

        </footer>



    </div>

    <!-- ./wrapper -->



    <!-- jQuery 3 -->

    <script src="{{ URL::asset('assets/admin')}}/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- jQuery UI 1.11.4 -->

    <script src="{{ URL::asset('assets/admin')}}/bower_components/jquery-ui/jquery-ui.min.js"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>

    <!-- Bootstrap 3.3.7 -->

    <script src="{{ URL::asset('assets/admin')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>



    <!-- Select2 -->

    <script src="{{ URL::asset('assets/admin')}}/bower_components/select2/dist/js/select2.full.min.js"></script>

    <!-- Morris.js charts -->

    <script src="{{ URL::asset('assets/admin')}}/bower_components/raphael/raphael.min.js"></script>

    <!-- <script src="{{ URL::asset('assets/admin')}}/bower_components/morris.js/morris.min.js"></script> -->

    <!-- Sparkline -->

    <script src="{{ URL::asset('assets/admin')}}/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js">

    </script>

    <!-- jvectormap -->

    <script src="{{ URL::asset('assets/admin')}}/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>

    <script src="{{ URL::asset('assets/admin')}}/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

    <!-- jQuery Knob Chart -->

    <script src="{{ URL::asset('assets/admin')}}/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

    <!-- daterangepicker -->

    <script src="{{ URL::asset('assets/admin')}}/bower_components/moment/min/moment.min.js"></script>

    <script src="{{ URL::asset('assets/admin')}}/bower_components/bootstrap-daterangepicker/daterangepicker.js">

    </script>

    <!-- datepicker -->

    <script src="{{ URL::asset('assets/admin')}}/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js">

    </script>

    <!-- Bootstrap WYSIHTML5 -->

    <script src="{{ URL::asset('assets/admin')}}/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>

    <!-- Slimscroll -->

    <script src="{{ URL::asset('assets/admin')}}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>

    <!-- FastClick -->

    <script src="{{ URL::asset('assets/admin')}}/bower_components/fastclick/lib/fastclick.js"></script>

    <!-- AdminLTE App -->

    <script src="{{ URL::asset('assets/admin')}}/dist/js/adminlte.min.js"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <!-- <script src="{{ URL::asset('assets/admin')}}/dist/js/pages/dashboard.js"></script> -->

    <!-- AdminLTE for demo purposes -->

    <script src="{{ URL::asset('assets/admin')}}/dist/js/demo.js"></script>

    <link href="{{ URL::asset('assets/summernote') }}/summernote.css" rel="stylesheet">

    <script src="{{ URL::asset('assets/summernote') }}/summernote.min.js"></script>



    <script src="{{ URL::asset('assets/admin')}}/common-script.js?v=2"></script>



    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous" referrerpolicy="no-referrer">

    </script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css" integrity="sha512-ZKX+BvQihRJPA8CROKBhDNvoc2aDMOdAlcm7TUQY+35XYtrd3yh95QOOhsPDQY9QnKE0Wqag9y38OIgEvb88cA==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <script>
        lightbox.option({

            'disableScrolling': true,

        })
    </script>



    <script>
        // summernote start

        $(document).ready(function() {

            $(".datepicker").datepicker({

                format: "yyyy-mm-dd",

                autoclose: true

            });

            $('.summernote').summernote({

                height: 230,

                minHeight: null,

                maxHeight: null,

                focus: false,

                callbacks: {

                    onImageUpload: function(files, editor, welEditable) {

                        for (var i = files.length - 1; i >= 0; i--) {

                            sendFile(files[i], this);

                        }

                    },

                },

            });

        });



        function sendFile(file, el) {

            var form_data = new FormData();

            form_data.append('file', file);

            $.ajax({

                data: form_data,

                type: "POST",

                url: "<?php echo url(ADMIN_FOLDER); ?>/summernotefilesave",

                cache: false,

                contentType: false,

                enctype: 'multipart/form-data',

                processData: false,

                success: function(url) {

                    $(el).summernote('editor.insertImage', url);

                }

            });

        }

        // summernote end 
    </script>

    @stack('admin-after-scripts')

</body>



</html>