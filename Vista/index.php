<?php
/*  Si la variable Session esta vacia lleva a el usuario al Login*/
session_start();
if (!isset($_SESSION['S_ID_USER'])) {

  header('Location:../claseb/index.php');
  # code...
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Athena USB</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../plantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="../plantilla/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../plantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../plantilla/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../plantilla/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../plantilla/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../plantilla/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../plantilla/plugins/summernote/summernote-bs4.css">
   <link rel="stylesheet" href="../plantilla/plugins/Datatable/datatables.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="stylesheet" href="../plantilla/plugins/select22/select2.min.css">
 
</head>
<style>
  .swal2-popup{
    font-size:1.6rem !important;

  }

</style>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- SEARCH FORM -->
   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
    
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
      <li class="dropdown user user-menu open">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
              <img src="../plantilla/dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?php echo $_SESSION['S_NOM_USER']?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../plantilla/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  <?php echo $_SESSION['S_NOM_USER']?>
                  <small>Activo desde 2020</small>
                </p>
              </li>
              <!-- Menu Body -->
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Cambiar Contraseña</a>
                </div>
                <div class="pull-right">
                  <a href="../Controlador/Controller_user/cerrar_sesion.php" class="btn btn-default btn-flat">Cerrar Sesion</a>
                </div>
              </li>
            </ul>
          </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php" class="brand-link">
      <img src="../plantilla/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" >Athena USB</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../plantilla/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION['S_NOM_USER']?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="list-group" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Llama la funcion cargar_contenido la cual llevara a las diferentes vistas-->
          <li class="list-group-item list-group-item-warning" onclick="cargar_contenido('contenido_principal','Usuario/vista_usuario.php')"><i class="nav-icon fas fa-user-plus"></i> Administracion Usuarios       
 
          </li>
          <li class="list-group-item list-group-item-warning" onclick="cargar_contenido('contenido_principal','Estudiante/vista_estudiante.php')"><i class="nav-icon fas fa fa-edit"></i> Estudiantes       
 
          </li>
           <li class="list-group-item list-group-item-warning" onclick="cargar_contenido('contenido_principal','Estudiante/vista_estudiante.php')"><i class="nav-icon fas fa-users"></i> Practicantes       
 
          </li>
           <li class="list-group-item list-group-item-warning" onclick="cargar_contenido('contenido_principal','Estudiante/vista_estudiante.php')"><i class="nav-icon fas fa fa-thumbs-up"></i> Convenios       
 
          </li>
            

        </ul>


      </nav>
      <!-- /.sidebar-menu -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Inicio</a></li>
              <li class="breadcrumb-item active">Principal</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  
    <!-- Main content -->
    <section class="content">
      <div class="row" id="contenido_principal">

         <div class="col-lg-12 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>USUARIOS</h3>
   

            </div>
          
            <a onclick="cargar_contenido('contenido_principal','Usuario/vista_usuario.php')" class="nav-link active">
              Consulte o agregue usuarios a el sistema
            </a>
          </div>

          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>ESTUDIANTES</h3>
   

            </div>
          
            <a onclick="cargar_contenido('contenido_principal','Estudiante/vista_estudiante.php')" class="nav-link active">
              Consulte o registre estudiantes
            </a>
          </div>
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>PRACTICANTES</h3>
   

            </div>
          
            <a onclick="cargar_contenido('contenido_principal','Estudiante/vista_estudiante.php')" class="nav-link active">
              Consulte o registre bitacoras
            </a>
          </div>
          <div class="small-box bg-secondary">
            <div class="inner">
              <h3>CONVENIOS</h3>
   

            </div>
          
            <a onclick="cargar_contenido('contenido_principal','Estudiante/vista_estudiante.php')" class="nav-link active">
              Consulte o registre convenios
            </a>
          </div>
        </div>



                

      </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright usb<a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../plantilla/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../plantilla/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../plantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../plantilla/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../plantilla/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../plantilla/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../plantilla/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../plantilla/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../plantilla/plugins/moment/moment.min.js"></script>
<script src="../plantilla/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plantilla/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../plantilla/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../plantilla/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../plantilla/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../plantilla/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../plantilla/dist/js/demo.js"></script>
<script src="../plantilla/plugins/Datatable/datatables.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<script src="../plantilla/plugins/select22/select2.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="sweetalert2.all.min.js"></script>

<script>
  function cargar_contenido(contenedor,contenido){

      $("#"+contenedor).load(contenido); 

  }

</script>
</body>
</html>
