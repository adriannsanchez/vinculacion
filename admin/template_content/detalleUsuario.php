<?php

include_once '../../config/Controlador.php';
session_start();
  // $user=$_POST["nombre"];
  // $nombre=$_SESSION['nombre'];
  $usuario=$_SESSION['id'];
  $tipo=$_SESSION['tipo'];
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Form Component</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />




    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->


  </head>

  <body>

  <section id="container" class="">
      <!--header start-->
      <header class="header white-bg">
          <div class="sidebar-toggle-box">
              <div data-original-title="Toggle Navigation" data-placement="right" class="fa fa-bars tooltips"></div>
          </div>
          <!--logo start-->
          <a href="index.html" class="logo" >UT<span>Cancún | Estadías</span></a>
          <!--logo end-->

          <div class="top-nav ">
              <ul class="nav pull-right top-menu">
                  <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li>
                  <!-- user login dropdown start-->
                  <li class="dropdown">
                      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                          <img alt="" src="img/avatar1_small.jpg">
                          <span class="username"><?php $miUsuario=Elusuario($_SESSION['usuario']);
            echo utf8_encode($miUsuario['nombre']); echo " "; echo utf8_encode($miUsuario['apellidos']);?></span>
                          <b class="caret"></b>
                      </a>
                      <ul class="dropdown-menu extended logout">
                          <div class="log-arrow-up"></div>
                          <li><a href="#"><i class=" fa fa-suitcase"></i>Perfil</a></li>

                          <li><a href="login.html"><i class="fa fa-key"></i>Salir</a></li>
                      </ul>
                  </li>
                  <!-- user login dropdown end -->
              </ul>
          </div>
      </header>
      <!--header end-->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
                  <li>
                      <a  href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li>
                      <a href="listaUsuarios.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Usuarios</span>
                      </a>
                  </li>
                  <li>
                      <a  href="listaAlumnos.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Alumnos</span>
                      </a>
                  </li>
                  <li>
                      <a  href="listaProfesores.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Asesor Académico</span>
                      </a>
                  </li>
                  <li>
                      <a href="listaAsesores.php">
                          <i class="fa fa-dashboard"></i>
                          <span>Asesor Empresarial</span>
                      </a>
                  </li>
                  <li>
                      <a  href="index.html">
                          <i class="fa fa-dashboard"></i>
                          <span>Reportes</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-laptop"></i>
                          <span>Layouts</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="boxed_page.html">Boxed Page</a></li>
                          <li><a  href="horizontal_menu.html">Horizontal Menu</a></li>
                          <li><a  href="language_switch_bar.html">Language Switch Bar</a></li>
                          <li><a  href="email_template.html" target="_blank">Email Template</a></li>
                      </ul>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                            Información General
                          </header>
                          <div class="panel-body">
                              <form class="form-horizontal"  action="modificarAsesor.php" method="post" enctype="multipart/form-data" role="form" onSubmit="">
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Nombre:</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bullhorn"></i>
                                              <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="<?php echo $_GET['nombre']; ?>" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Apellidos:</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bullhorn"></i>
                                              <input type="text" class="form-control" name="apellidos" placeholder="Apellidos" value="<?php echo $_GET['apellido']; ?>" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Usuario:</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bullhorn"></i>
                                              <input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php echo $_GET['usuario']; ?>" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Password:</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bullhorn"></i>
                                              <input type="password" class="form-control" name="contrasena" placeholder="Contraseña" value="<?php echo $_GET['pwd']; ?>" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Correo:</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bullhorn"></i>
                                              <input type="email" class="form-control" name="correo" placeholder="Correo" value="<?php echo $_GET['correo']; ?>" required>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Telefono:</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bullhorn"></i>
                                              <input type="text" class="form-control" name="telefono" placeholder="Telefono" value="<?php echo $_GET['telefono']; ?>" required>
                                              <input type="hidden" class="form-control" name="id" placeholder="Telefono" value="<?php echo $_GET['id']; ?>">

                                          </div>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Empresa:</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bullhorn"></i>
                                              <input type="text" class="form-control" name="empresa" placeholder="Empresa" value="<?php echo $_GET['empresa']; ?>" required>

                                          </div>

                                      </div>
                                  </div>
                                  <div class="form-group">
                                      <label  class="col-lg-3 col-sm-3 control-label">Telefono Empresa:</label>
                                      <div class="col-lg-9">
                                          <div class="iconic-input">
                                              <i class="fa fa-bullhorn"></i>
                                              <input type="text" class="form-control" name="telefonoEmpresa" placeholder="Telefono Empresa" value="<?php echo $_GET['telefonoEmpresa']; ?>" required>

                                          </div>

                                      </div>
                                  </div>
                                  <input type="submit" class="btn btn-primary" name="btnGuardar"/>

                              </form>
                          </div>
                      </section>
                  </div>
              </div>



                  </div>
              </div>
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2015. Universidad Tecnológica de Cancún
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>

    <script src="js/jquery-ui-1.9.2.custom.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

  <!--custom switch-->
  <script src="js/bootstrap-switch.js"></script>
  <!--custom tagsinput-->
  <script src="js/jquery.tagsinput.js"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="js/ga.js"></script>

  <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
  <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
  <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
  <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>

  <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
  <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

  <!--script for this page-->
  <script src="js/form-component.js"></script>

  </body>
</html>
