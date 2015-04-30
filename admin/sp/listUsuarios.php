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


          <section class="wrapper site-min-height">
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Lista de usuarios
                          </header>
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
                                    $participantes = participantes();
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
                                          <td class="center hidden-phone"><button class="btn btn-danger">Editar</button></td>
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
