<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminLTE 3 | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/Admin/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="/Admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="/Admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="/css/admin/admin.css">
    <link rel="stylesheet" href="/Admin/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="/Admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="/Admin/plugins/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="/Admin/plugins/bootstrap/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <style>
        .ck-editor__editable {
            min-height: 300px;
        }
    </style>
</head>
<body class="hold-transition sidebar-mini text-sm">
    <div class="wrapper">

        @include('admin.include.header')

        @include('admin.include.main_sidebar')

        <div class="content-wrapper px-2">
            <section class="content-header clearfix mt-2">
                @yield('main-header')
            </section>

            <!-- Main content -->
            <section class="content">
                @yield('main-content')
            </section>
        </div>
        @include('admin.include.footer')
    </div>
    
    <script src="/Admin/plugins/jquery/jquery.min.js"></script>
    <script src="/Admin/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/Admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/Admin/plugins/chart.js/Chart.min.js"></script>
    <script src="/Admin/plugins/sparklines/sparkline.js"></script>
    <script src="/Admin/plugins/jquery-knob/jquery.knob.min.js"></script>
    <script src="/Admin/plugins/moment/moment.min.js"></script>
    <script src="/Admin/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="/Admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="/Admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <script src="/Admin/dist/js/adminlte.min.js"></script>
    <script src="https://widget.cloudinary.com/v2.0/global/all.js" type="text/javascript"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/20.0.0/classic/ckeditor.js"></script>
    <script>
        $( document ).ready(function() {
            function activeFilter (e) {
                $('.nav-link').removeClass('active');
                $(this).addClass('active');
            }
        });
    </script>
    @yield('main-script')
</body>
</html>

