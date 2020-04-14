<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title','Service Admin')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <x-main_css/>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
    <!-- Navbar -->
    <x-nav/>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    @yield('sidebar')

    <!-- Content Wrapper. Contains page content -->
    @yield('wrapper')
    <!-- /.content-wrapper -->

    <x-footer/>


</div>
<!-- ./wrapper -->

<x-main_js/>
</body>
</html>
