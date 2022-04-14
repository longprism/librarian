
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Librarian</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/dist/css/AdminLTE.min.css')}}">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="{{asset('bower_components/admin-lte/dist/css/skins/_all-skins.min.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Comfortaa:700" rel="stylesheet">
</head>

<style type="text/css">
  @media print
  {
    div.not(.printable) {display:none;}
  }
</style>
<!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">
  @include('dashuser.headers')
  <!-- Full Width Column -->
  <div class="content-wrapper">
    <div class="container">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1><small></small></h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
          <li class="active">Pustaka</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        @yield('userco')
        <!-- /.box -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.container -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 2.4.0
      </div>
      <strong>Copyright &copy; 2014-2016 All rights
      reserved.
    </div>
    <!-- /.container -->
  </footer>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script>
</script>

<script src="{{asset('bower_components/jquery/dist/jquery.min.js')}}"></script>
<!-- Bootstrap 3.3.7 -->
<script src="{{asset('bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{asset('bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{asset('bower_components/fastclick/lib/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('bower_components/admin-lte/dist/js/adminlte.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('bower_components/admin-lte/dist/js/demo.js')}}"></script>
</body>
</html>
