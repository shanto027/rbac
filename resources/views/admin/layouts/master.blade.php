<!DOCTYPE html> 
<html class="loading" lang="en" data-textdirection="ltr">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0"> 
    <title>Pump Tracking Admin panel</title>  
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/app-assets/images/ico/favicon.ico')}}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700" rel="stylesheet">

    @include('admin.includes.css')
    @stack('css')
  </head>
  <!-- END: Head-->

  <!-- BEGIN: Body-->
  <body class="vertical-layout vertical-menu-modern 2-columns  navbar-sticky footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
    <div class="header-navbar-shadow"></div>
    @include('admin.includes.navbar')
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    @include('admin.includes.sidebar');
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    @yield('content')

    <!-- BEGIN: Footer-->
    @include('admin.includes.footer')
    <!-- END: Footer-->


    @include('admin.includes.js')
    @stack('js')

  </body>
  <!-- END: Body--> 
</html>