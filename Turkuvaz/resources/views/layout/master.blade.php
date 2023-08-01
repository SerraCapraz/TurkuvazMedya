<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href={{URL::asset("https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback")}}>
    <!-- Font Awesome -->
    <link rel="stylesheet" href={{URL::asset("plugins/fontawesome-free/css/all.min.css")}}>
    <!-- Ionicons -->
    <link rel="stylesheet" href={{URL::asset("https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css")}}>
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href={{URL::asset("plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css")}}>
    <!-- iCheck -->
    <link rel="stylesheet" href={{URL::asset("plugins/icheck-bootstrap/icheck-bootstrap.min.css")}}>
    <!-- JQVMap -->
    <link rel="stylesheet" href={{URL::asset("plugins/jqvmap/jqvmap.min.css")}}>
    <!-- Theme style -->
    <link rel="stylesheet" href={{URL::asset("dist/css/adminlte.min.css")}}>
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href={{URL::asset("plugins/overlayScrollbars/css/OverlayScrollbars.min.css")}}>
    <!-- Daterange picker -->
    <link rel="stylesheet" href={{URL::asset("plugins/daterangepicker/daterangepicker.css")}}>
    <!-- summernote -->
    <link rel="stylesheet" href={{URL::asset("plugins/summernote/summernote-bs4.min.css")}}>
</head>
<body>
<!-- Navbar -->
<nav class="navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">

        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route("homepage")}}" class="nav-link">Home</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route("user")}}" class="nav-link">User</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route("category")}}" class="nav-link">Category</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route("product")}}" class="nav-link">Product</a>
        </li>


    </ul>


    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li class="nav-item d-none d-sm-inline-block">

            <p class="nav-link"><i class="fas fa-user"></i> {{Auth::user()->username}}</p>
        </li>

        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{route("logout")}}" class="nav-link">Logout</a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->


<div class="d-flex flex-column align-items-center">
    <h1>@yield("header")</h1>
    @yield("context")
</div>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src={{URL::asset("plugins/chart.js/Chart.min.js")}}></script>
<!-- Sparkline -->
<script src={{URL::asset("plugins/sparklines/sparkline.js")}}></script>
<!-- JQVMap -->
<script src={{URL::asset("plugins/jqvmap/jquery.vmap.min.js")}}></script>
<script src={{URL::asset("plugins/jqvmap/maps/jquery.vmap.usa.js")}}></script>
<!-- jQuery Knob Chart -->
<script src={{URL::asset("plugins/jquery-knob/jquery.knob.min.js")}}></script>
<!-- daterangepicker -->
<script src={{URL::asset("plugins/moment/moment.min.js")}}></script>
<script src={{URL::asset("plugins/daterangepicker/daterangepicker.js")}}></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src={{URL::asset("plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js")}}></script>
<!-- Summernote -->
<script src={{URL::asset("plugins/summernote/summernote-bs4.min.js")}}></script>
<!-- overlayScrollbars -->
<script src={{URL::asset("plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js")}}></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src={{URL::asset("dist/js/pages/dashboard.js")}}></script>

</body>
</html>
