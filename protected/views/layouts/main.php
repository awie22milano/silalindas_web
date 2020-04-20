<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SILALINDAS</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <!--<link rel="stylesheet" href="<?php // echo Yii::app()->theme->baseUrl; ?>/dist/css/ionicons.min.css">-->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo Yii::app()->theme->baseUrl; ?>/dist/css/font.css" rel="stylesheet">

   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
  
    <!-- jQuery -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/moment/moment.min.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
    <!-- Summernote -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/dist/js/adminlte.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/dist/js/demo.js"></script>

    <script src="https://unpkg.com/leaflet@1.6.0/dist/leaflet.js" integrity="sha512-gZwIG9x3wUXg2hdXF6+rVkLF/0Vi9U8D2Ntg4Ga5I5BZpVkVxlJWbSQtXPSiUTtC0TjtGOmxa1AJPuV0CPthew=="
   crossorigin=""></script>
  
  <script type="text/javascript"> 
    function display_c(){
    var refresh=1000; // Refresh rate in milli seconds
    mytime=setTimeout('display_ct()',refresh)
    }

    function display_ct() {
    var x = new Date().toLocaleString('id-ID', { timeZone: 'Asia/Jakarta' })
    document.getElementById('ct').innerHTML = x+ " WIB";
    display_c();
    }

    function deleteConfirmation() {
      return confirm("Anda Yakin mau menghapus data ini ?");
    }
   </script>

</head>
<body class="hold-transition sidebar-mini layout-fixed" onload=display_ct();>

<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>
    <ul class="navbar-nav">
      <li class="nav-item">
        Welcome to SILALINDAS, Sistem Lalu Lintas Cerdas!
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
          <div id="ct">test</div>  
      </li>     
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo Yii::app()->request->baseUrl; ?>" class="brand-link">
      <img src="<?php echo Yii::app()->theme->baseUrl; ?>/dist/img/transport.png" alt="SILALINDAS Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SILALINDAS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo Yii::app()->theme->baseUrl; ?>/dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <?php 
            $explode1=explode("php?r=",$_SERVER['REQUEST_URI']);
            $halaman=explode("/",$explode1[1]); 
            $class_menu_dashboard="nav-link";
            $class_menu_peta="nav-link";
            $class_menu_about="nav-link";
            if($halaman[0]=="site"){
                $active_page="Dashboard";
                $class_menu_dashboard="nav-link active";
            }
            else if($halaman[0]=="peta"){
                $active_page="Peta";
                $class_menu_peta="nav-link active";
            }
            else if($halaman[0]=="about"){
                $active_page="About";
                $class_menu_about="nav-link active";
            }
            
      ?> 
      
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          
          <li class="nav-header"><!--EXAMPLES--></li>
          <li class="nav-item">
            <a href="<?php echo Yii::app()->controller->createUrl('site/dashboard')?>" class="<?php echo $class_menu_dashboard; ?>">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <!--<span class="badge badge-info right">2</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo Yii::app()->controller->createUrl('peta/index')?>" class="<?php echo $class_menu_peta; ?>">
              <i class="nav-icon far fa-image"></i>
              <p>
                Peta
                <!--<span class="badge badge-info right">2</span>-->
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo Yii::app()->controller->createUrl('about/index')?>" class="<?php echo $class_menu_about; ?>">
              <i class="nav-icon fas fa-table"></i>
              <p>
                About
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo Yii::app()->controller->createUrl('site/logout')?>" class="nav-link">
              <i class="nav-icon far"></i>
              <p>
                Logout
              </p>
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
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?php echo $active_page; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo Yii::app()->request->baseUrl; ?>">Home</a></li>
              <li class="breadcrumb-item active"><?php echo $active_page; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <?php echo $content; ?> 
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
  </div>
  <footer class="main-footer">
      <strong>Copyright &copy; PLTI Kelompok 3</strong>
  </footer>

  <aside class="control-sidebar control-sidebar-dark">
  </aside>
</div>


<?php //} ?>
</body>
</html>
