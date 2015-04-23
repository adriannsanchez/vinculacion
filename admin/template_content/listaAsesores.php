<?php

include_once '../../config/Controlador.php';
session_start();
  // $user=$_POST["nombre"];
  // $nombre=$_SESSION['nombre'];
  $usuario=$_SESSION['id'];
  $tipo=$_SESSION['tipo'];
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Dynamic Table</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_page.css" rel="stylesheet" />
    <link href="assets/advanced-datatable/media/css/demo_table.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/data-tables/DT_bootstrap.css" />
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
                  <!-- <li>
                      <input type="text" class="form-control search" placeholder="Search">
                  </li> -->
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
                          <li><a href="#"><i class=" fa fa-suitcase"></i>Profile</a></li>
                          <li><a href="login.html"><i class="fa fa-key"></i> Log Out</a></li>
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
                      <a   href="listaUsuarios.php">
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
                      <a class="active" href="listaAsesores.php">
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
          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Lista de asesores empresariales
                          </header>
                          <section class="panel">

                              <div class="panel-body">

                                  <a href="#myModal-1" data-toggle="modal" class="btn btn-xs btn-warning">
                                    Nuevo asesor empresarial
                                  </a>

                                  <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-1" class="modal fade">
                                      <div class="modal-dialog">
                                          <div class="modal-content">
                                              <div class="modal-header">
                                                  <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                  <h4 class="modal-title">Agregar nuevo asesor empresarial</h4>
                                              </div>
                                              <div class="modal-body">

                                                  <form class="form-horizontal"  action="addAsesor.php" method="post" enctype="multipart/form-data" role="form" onSubmit="">
                                                      <div class="form-group">
                                                          <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Nombre</label>
                                                          <div class="col-lg-10">
                                                              <input type="text" name="nombre" class="form-control" id="inputEmail4" placeholder="Nombre">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Apellidos</label>
                                                          <div class="col-lg-10">
                                                              <input type="text" name="apellidos" class="form-control" id="inputPassword4" placeholder="Apellidos">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Cargo</label>
                                                          <div class="col-lg-10">
                                                              <input type="text" name="cargo" class="form-control" id="inputPassword4" placeholder="Cargo">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Telefono</label>
                                                          <div class="col-lg-10">
                                                              <input type="text" name="telefono" class="form-control" id="inputPassword4" placeholder="Telefono">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Correo</label>
                                                          <div class="col-lg-10">
                                                              <input type="text" name="correo" class="form-control" id="inputPassword4" placeholder="Correo">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Usuario</label>
                                                          <div class="col-lg-10">
                                                              <input type="text" name="usuario" class="form-control" id="inputPassword4" placeholder="Usuario">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Contraseña</label>
                                                          <div class="col-lg-10">
                                                              <input type="password" name="contrasena" class="form-control" id="inputPassword4" placeholder="Contraseña">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Empresa</label>
                                                          <div class="col-lg-10">
                                                              <input type="text" name="empresa" class="form-control" id="inputPassword4" placeholder="Empresa">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Telefono Empresa</label>
                                                          <div class="col-lg-10">
                                                              <input type="text" name="telefonoEmpresa" class="form-control" id="inputPassword4" placeholder="Telefono empresa">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <label for="inputPassword1" class="col-lg-2 col-sm-2 control-label">Sitio web</label>
                                                          <div class="col-lg-10">
                                                              <input type="text" name="sitioWeb" class="form-control" id="inputPassword4" placeholder="Sitio web">
                                                          </div>
                                                      </div>
                                                      <div class="form-group">
                                                          <div class="col-lg-offset-2 col-lg-10">
                                                              <button type="submit" name="btnGuardar" class="btn btn-default">Guardar</button>
                                                          </div>
                                                      </div>
                                                  </form>

                                              </div>

                                          </div>
                                      </div>
                                  </div>

                              </div>
                          </section>


                          <div class="panel-body">

                                <div class="adv-table">
                                    <table  class="display table table-bordered table-striped" id="example">
                                      <thead>
                                      <tr>
                                          <th>#</th>
                                          <th>Nombre</th>
                                          <th>Apellidos</th>
                                          <th>Usuario</th>
                                          <th>Contraseña</th>
                                          <th class="hidden-phone">Correo</th>
                                          <th class="hidden-phone">Telefono</th>
                                          <th class="hidden-phone">Tipo</th>
                                          <th class="hidden-phone">Edición</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                    $participantes = asesores();
                                    $a = 1;
                                    while ($participante = mysql_fetch_array($participantes)) {
                                        ?>
                                      <tr class="gradeX">
                                          <td><?php echo $a++ ?></td>
                                          <td><?php echo utf8_encode($participante['nombre']) ?></td>
                                          <td><?php echo utf8_encode($participante['apellidos']) ?></td>
                                          <td class="center hidden-phone"><?php echo $participante['usuario'] ?></td>
                                          <td class="center hidden-phone"><?php echo $participante['contrasena'] ?></td>
                                          <td class="center hidden-phone"><?php echo $participante['correo'] ?></td>
                                          <td class="center hidden-phone"><?php echo $participante['telefono']; ?></td>
                                          <td class="center hidden-phone"><?php echo $participante['tipo']; ?></td>
                                          <td class="center hidden-phone"><a href="detalleUsuario.php?nombre=<?php echo utf8_encode($participante['nombre']) ?>&&apellido=<?php echo utf8_encode($participante['apellidos']) ?>
                                            &&correo=<?php echo utf8_encode($participante['correo']) ?>&&telefono=<?php echo utf8_encode($participante['telefono']) ?>&&usuario=<?php echo utf8_encode($participante['usuario']) ?>" class="btn btn-danger">Eliminar</a>
                                            <a href="detalleUsuario.php?nombre=<?php echo utf8_encode($participante['nombre']) ?>&&apellido=<?php echo utf8_encode($participante['apellidos']) ?>
                                              &&correo=<?php echo utf8_encode($participante['correo']) ?>&&telefono=<?php echo utf8_encode($participante['telefono']) ?>&&usuario=<?php echo utf8_encode($participante['usuario']) ?>&&id=<?php echo utf8_encode($participante['id']) ?>
                                              &&pwd=<?php echo utf8_encode($participante['contrasena']) ?>&&empresa=<?php echo utf8_encode($participante['empresa']) ?>&&telefonoEmpresa=<?php echo utf8_encode($participante['telefonoEmpresa']) ?>" class="btn btn-danger">Editar</a></td>
                                      </tr>
                                      <?php
                                    }
                                    ?>
                                    </tbody>
                                      <tfoot>
                                      <tr>
                                          <th>#</th>
                                          <th>Nombre</th>
                                          <th>Apellidos</th>
                                          <th>Usuario</th>
                                          <th>Contraseña</th>
                                          <th class="hidden-phone">Correo</th>
                                          <th class="hidden-phone">Telefono</th>
                                          <th class="hidden-phone">Tipo</th>
                                          <th class="hidden-phone">Edición</th>
                                      </tr>
                                      </tfoot>
                          </table>
                                </div>
                          </div>
                      </section>
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
    <!--<script src="js/jquery.js"></script>-->
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <script type="text/javascript" language="javascript" src="assets/advanced-datatable/media/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="assets/data-tables/DT_bootstrap.js"></script>
    <script src="js/respond.min.js" ></script>


  <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>

    <!--script for this page only-->

      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
  </body>
</html>
