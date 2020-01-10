
@section('subtitle', 'Dashboard')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/template/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="/template/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/template/dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/template/dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="/template/bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="/template/bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="/template/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="/template/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="{{ asset('template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="/template/plugins/datepickerr/css/datepicker.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">
        <img src="/template/dist/img/logo-pgn-white.png" style="width:25px;">
      </span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>
        <i class="fa fa-file-text">
        </i>
        electronic form</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="/template/dist/img/user.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><b style="text-transform: uppercase;">{{ Auth::user()->username }}</b></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="/template/dist/img/user.jpg" class="img-circle" alt="User Image">

                <p>
                 {{ Auth::user()->username }}
                  <small>{{ Auth::user()->jabatan }}</small>
                </p>
              </li>
              
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="/profil" class="btn btn-info">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="{{ route('postlogout-ku') }}" class="btn btn-danger btn-block">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li>
          <a href="{{ route('dashboard-ku') }}">
            <i class="fa fa-home"></i> <span>Dashboard</span>
            <span class="pull-right-container">
            </span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Form</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
           
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i>Permohonan Hak Akses
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('data-mahasiswa-baru') }}"><i class="fa fa-circle-o"></i>Organik</a></li>
                <li><a href="{{ route('data-non-organik') }}"><i class="fa fa-circle-o"></i>Non Organik</a></li>
              </ul>
               <li><a href="{{ route('data-perubahan') }}"><i class="fa fa-circle-o"></i>Form Perubahan</a></li>
            </li>
           <!-- <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i>e-SIMI
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>GTM</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i>GDMR 1</a>  
                </li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i>GDMR 2</a>  
                </li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i>GDMR 3</a>  
                </li>
              </ul> -->
               <li><a href="{{ route('create-prev') }}"><i class="fa fa-circle-o"></i>Form Preventive</a></li>
          </ul>
          <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Master</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('data-akses-user') }}"><i class="fa fa-circle-o"></i>User Akses</a></li>
            <li class="header">
              <b style="color:white">FORM HAK AKSES</b>
            </li>
            <li><a href="{{ route('data-pic') }}"><i class="fa fa-circle-o"></i>PIC Layanan ICT</a></li>
            <li><a href="{{ route('data-apk') }}"><i class="fa fa-circle-o"></i>Aplikasi</a></li>
            <li><a href="{{ route('data-paa') }}"><i class="fa fa-circle-o"></i>Pemilik dan Admin Aplikasi</a></li>
            <li><a href="{{ route('data-notpc') }}"><i class="fa fa-circle-o"></i>Notebook dan PC</a></li>
             <li class="header">
              <b style="color:white">FORM PERUBAHAN</b>
            </li>
            <li><a href="{{ route('data-tp') }}"><i class="fa fa-circle-o"></i>Tipe Perubahan</a></li>
             <!-- <li class="header">
              <b style="color:white">SIMI</b>
            </li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i>Stasion and Offtake</a></li> -->
          </ul>
        </li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Transaction Report</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i>Permohonan Hak Akses
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="{{ route('rep-org') }}"><i class="fa fa-circle-o"></i>Organik</a></li>
                
                <li><a href="{{ route('rep-non') }}"><i class="fa fa-circle-o"></i>Non Organik</a></li>  
                
              </ul>
            <li><a href="{{ route('rep-perubahan') }}"><i class="fa fa-circle-o"></i>Permohonan Perubahan</a></li>
            <!-- <li class="treeview">
              <a href="#"><i class="fa fa-circle-o"></i>Permohonan SIMI
                <span class="pull-right-container">
                  <i class="fa fa-angle-left pull-right"></i>
                </span>
              </a>
              <ul class="treeview-menu">
                <li><a href="#"><i class="fa fa-circle-o"></i>GTM</a></li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i>GDMR 1</a>  
                </li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i>GDMR 2</a>  
                </li>
                <li class="treeview">
                  <a href="#"><i class="fa fa-circle-o"></i>GDMR 3</a>  
                </li> -->
          </ul>
        </li>
        </li>
       </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1 class="page-header" style="color:gray;">
        <b>@yield('subtitle')</b>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">@yield('title')</li>
      </ol>
    </section>

    <!-- Main content -->
    @yield('content')
   
    

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    
    <strong>Copyright &copy; 2019 PT. Perusahaan Gas Negara. Tbk All Rights Reserved</a>.</strong>
  </footer>

  <!-- Control Sidebar -->
 <!--  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <!-- <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul> -->
    <!-- Tab panes -->
    <!-- <div class="tab-content"> -->
      <!-- Home tab content -->
     <!--  <div class="tab-pane" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu"> -->
          <!-- <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-user bg-yellow"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                <p>New phone +1(800)555-1234</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                <p>nora@example.com</p>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <i class="menu-icon fa fa-file-code-o bg-green"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                <p>Execution time 5 seconds</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <!-- <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="label label-danger pull-right">70%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Update Resume
                <span class="label label-success pull-right">95%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-success" style="width: 95%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Laravel Integration
                <span class="label label-warning pull-right">50%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0)">
              <h4 class="control-sidebar-subheading">
                Back End Framework
                <span class="label label-primary pull-right">68%</span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      <!-- </div> -->
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
     <!--  <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div> -->
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
     <!--  <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div> -->
          <!-- /.form-group -->

          <!-- <div class="form-group">
            <label class="control-sidebar-subheading">
              Allow mail redirect
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Other sets of options are available
            </p>
          </div> -->
          <!-- /.form-group -->

          <!-- <div class="form-group">
            <label class="control-sidebar-subheading">
              Expose author name in posts
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Allow the user to show his name in blog posts
            </p>
          </div> -->
          <!-- /.form-group -->

        <!--   <h3 class="control-sidebar-heading">Chat Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Show me as online
              <input type="checkbox" class="pull-right" checked>
            </label>
          </div> -->
          <!-- /.form-group -->

         <!--  <div class="form-group">
            <label class="control-sidebar-subheading">
              Turn off notifications
              <input type="checkbox" class="pull-right">
            </label>
          </div> -->
          <!-- /.form-group -->

         <!--  <div class="form-group">
            <label class="control-sidebar-subheading">
              Delete chat history
              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
            </label>
          </div> -->
          <!-- /.form-group -->
       <!--  </form>
      </div> 
      <!-- /.tab-pane -->
   <!--  </div>
  </aside> -->
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="/template/bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/template/bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="/template/bower_components/raphael/raphael.min.js"></script>
<script src="/template/bower_components/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="/template/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="/template/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="/template/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="/template/bower_components/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/template/bower_components/moment/min/moment.min.js"></script>
<script src="/template/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="/template/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script type="text/javascript" src="template/plugins/datepickerr/js/bootstrap-datepicker.js"></script>
<!-- ChartJS 1.0.1 -->
<script src="/template/plugins/chartjs/Chart.min.js"></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="/template/plugins/chartjs/Chart.bundle.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="/template/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="/template/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/template/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/template/dist/js/demo.js"></script>
<script src="{{ asset('template/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
@yield('js')
</body>
</html>
