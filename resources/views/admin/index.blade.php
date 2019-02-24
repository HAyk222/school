<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Page</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Ajax -->
  <meta name="_token" content="{{csrf_token()}}" />
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="{{url('/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{url('/fonts/font-awesome.min.css')}}"> 
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{url('/dist/css/skins/_all-skins.min.css')}}">
  <link rel="stylesheet" href="{{url('/css/admin.css')}}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body class="hold-transition skin-purple sidebar-mini">
  <div class="loader-overlay">
    <div class="loader-overlay-content">
      <img src="http://<?php
  echo $_SERVER['HTTP_HOST']; ?>/images/loader.gif" alt="loader" class="loader">
      <div>Խնդրում ենք Սպասել</div>
    </div>
  </div>
  <div class="update-alert"></div>
  @yield('content')

  <script src="{{url('/bootstrap/js/bootstrap.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{url('/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{url('/dist/js/app.min.js')}}"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="{{url('/dist/js/demo.js')}}"></script>
  <script src="{{url('/js/admin.js')}}"></script>
</body>
</html>
