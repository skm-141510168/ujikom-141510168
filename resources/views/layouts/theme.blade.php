<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>My Aplication</title>


  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link href="{{url('/assets/vendor/bootstrap/css/bootstrap.min.css')}}"rel="stylesheet">


  <!-- Bootstrap 3.3.6 -->
  <link href="{{url('/assets/bootstrap/css/bootstrap.min.css')}}"rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{url('/assets/https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css')}}"rel="stylesheet">
  <!-- Ionicons -->
  <link href="{{url('/assets/https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css')}}"rel="stylesheet">
  <!-- Theme style -->
  <link href="{{url('/assets/dist/css/AdminLTE.min.css')}}"rel="stylesheet">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link href="{{url('/assets/dist/css/skins/_all-skins.min.css')}}"rel="stylesheet">

  <link href="{{url('/sweetalert/sweetalert.css')}}"rel="stylesheet">




  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<!-- ADD THE CLASS layout-boxed TO GET A BOXED LAYOUT -->
<body class="hold-transition skin-blue layout-boxed sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
     
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>My</b>Aplicantion</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
      <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
     
      <a href="#" class="btn btn-info btn-sm" data-toggle="offcanvas" role="button">
        <span  class="glyphicon glyphicon-list"></span>
      </a>
     
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->
          
             
          <!-- Notifications: style can be found in dropdown.less -->
          
          <!-- User Account: style can be found in dropdown.less -->
             <ul class="nav navbar-top-links navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    <i class="fa fa-user fa-fw"></i> <span class="fa fa-caret-down"></span>
                                </a>

                                <ul class="dropdown-menu dropdown-user" role="menu">
                                    <li>
                                    <li><a href="#"><i class="fa fa-bar-chart-o fa-child"></i> {{ Auth::user()->name }}</a></li>
                                    <li class="divider"></li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i>
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                </ul>
            <!-- /.navbar-top-links -->
              <!-- User image -->
            
              
              
              <!-- Menu Footer-->
              
          <!-- Control Sidebar Toggle Button -->
         
        </ul>
      </div>
    </nav>
  </header>

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview active">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Layout Table</span>
            <span class="pull-right-container">
              <span class="label label-primary pull-right"></span>
            </span>
          </a>
          <ul class="treeview-menu">

            <li class="active"><a href="{{url('/golongan')}}"><i class="fa fa-circle-o"></i>Golongan</a></li>

            <li class="active"><a href="{{url('/jabatan')}}"><i class="fa fa-circle-o"></i>Jabatan</a></li>

            <li class="active"><a href="{{url('/kategorilembur')}}"><i class="fa fa-circle-o"></i>Kategori Lembur</a></li>

            <li class="active"><a href="{{url('/pegawai')}}"><i class="fa fa-circle-o"></i>Pegawai</a></li>

            <li class="active"><a href="{{url('/lemburpegawai')}}"><i class="fa fa-circle-o"></i>Lembur Pegawai</a></li>

            <li class="active"><a href="{{url('/tunjangan')}}"><i class="fa fa-circle-o"></i>Tunjangan Pegawai</a></li>

            <li class="active"><a href="{{url('/penggajian')}}"><i class="fa fa-circle-o"></i>Penggajian</a></li>
          </ul>
        </li>
                
       
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">  
        <big><center>PENGGAJIAN KARYAWAN</center></big>
        <br>______________________________________________________________________________________________</br>
    </section>
    @yield('content')

    <!-- Main content -->
    
     
      <!-- /.box -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.3.8
    </div>
    <strong>Copyright &copy; 2017-2019 <a href="http://Neko.com">Neko To Nyaww</a>.</strong> All rights
    reserved.
  </footer>
 
 
     
     
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
 
 
</div>
<!-- ./wrapper -->
 
<!-- jQuery 2.2.3 -->
<script src="{{url('/assets/plugins/jQuery/jquery-2.2.3.min.js')}}"></script>
<!-- Bootstrap 3.3.6 -->
<script src="{{url('/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- SlimScroll -->
<script src="{{url('/assets/plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
<!-- FastClick -->
<script src="{{url('/assets/plugins/fastclick/fastclick.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{url('/assets/dist/js/app.min.js')}}"></script>
<!-- AdminLTE for demo purposes -->



<script src="{{url('/sweetalert/sweetalert.min.js')}}"></script>
    @include('sweet::alert')

</body>
</html>
