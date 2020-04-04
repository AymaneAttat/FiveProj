<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Restaurent</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('inc/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link">Restaurent</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fas fa-power-off" style="color: red;"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <i class="nav-icon far fa-circle text-danger"></i>
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('inc/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Admin Espace</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('roles.index')}}" class="nav-link {{Request::is('roles') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Manage Roles
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('permissions.index')}}" class="nav-link {{Request::is('permissions') ? 'active' : ''}}">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Manage Permissions
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-copy"></i>
              <p> Manage Users
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('users.create')}}" class="nav-link {{Request::is('users/create') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Create User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('users.index')}}" class="nav-link {{Request::is('users') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> User List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Manage Articles
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('articles.create')}}" class="nav-link {{Request::is('articles/create') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Create Article</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('articles.index')}}" class="nav-link {{Request::is('articles') ? 'active' : ''}}">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Article List</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link">
              <a class="nav-link" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                              <i class="nav-icon far fa-circle text-danger"></i>
                 {{ __('Logout') }}
             </a>

             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    
    <!-- /.content-header -->
    @include('notification.messages')
        <div class="container">
            @yield('content')
        </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2020 .</strong>
    All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('inc/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('inc/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('inc/js/demo.js')}}"></script>
</body>
</html>
