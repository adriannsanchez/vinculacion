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
    <meta name="description" content="Sistema de Estadías de la Universidad Tecnológica de Cancún">
    <meta name="author" content="Adrián Sánchez de Jesús">
    <meta name="keyword" content="Ut, Cancún, Vinculación, Estadías">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>UT Cancún</title>

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
                      <a class="active" href="#" onClick="inicio()">
                          <i class="fa fa-th-large"></i>
                          <span>Inicio</span>
                      </a>
                  </li>
                  <li>
                      <a href="#" onClick="usuarios()">
                          <i class="fa fa-users"></i>
                          <span>Usuarios</span>
                      </a>
                  </li>
                  <li>

                      <a href="#" onclick="alumnos()">
                          <i class="fa fa-sort-amount-desc"></i>
                          <span>Alumnos</span>
                      </a>
                  </li>
                  <li>
                      <a  href="#"  onclick="profesores()">
                          <i class="fa fa-book"></i>
                          <span>Asesor Académico</span>
                      </a>
                  </li>
                  <li>
                      <a  href="#" onclick="asesores()">
                          <i class="fa fa-plane"></i>
                          <span>Asesor Empresarial</span>
                      </a>
                  </li>
                  <li>
                      <a  href="#">
                          <i class="fa fa-download"></i>
                          <span>Reportes</span>
                      </a>
                  </li>
                  <li>
                      <a  href="#" onClick="faq()">
                          <i class="fa fa-question"></i>
                          <span>FAQ</span>
                      </a>
                  </li>

                  <!-- <li class="sub-menu">
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
                  </li> -->

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>

      <section id="main-content">
        <section class="wrapper site-min-height">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                          <h1>Hola mundo soy el sistema de estadías</h1>
                        </header>
                        <div class="panel-body">

                        </div>
                    </section>
                </div>
            </div>
        </section>
      </section>

      <footer class="site-footer">
          <div class="text-center">
            2015. Universidad Tecnológica de Cancún.
              <a href="#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
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


    <script src="js/common-scripts.js"></script>


      <script type="text/javascript" charset="utf-8">
          $(document).ready(function() {
              $('#example').dataTable( {
                  "aaSorting": [[ 4, "desc" ]]
              } );
          } );
      </script>
      <script type="text/javascript">
      var Ajax        = new XMLHttpRequest();
      var DIV_Destino = document.getElementById("main-content");
      function inicio() {
          Ajax.open("GET", "init.php", true);
          Ajax.onreadystatechange = function() {
              if(Ajax.readyState==4 && Ajax.status==200) {
                  DIV_Destino.innerHTML = Ajax.responseText;
              }
          }
          Ajax.send();
      }
      function usuarios() {
          Ajax.open("GET", "listUsuarios.php", true);
          Ajax.onreadystatechange = function() {
              if(Ajax.readyState==4 && Ajax.status==200) {
                  DIV_Destino.innerHTML = Ajax.responseText;
              }
          }
          Ajax.send();
      }
          function alumnos() {
              Ajax.open("GET", "listaAlumnos.php", true);
              Ajax.onreadystatechange = function() {
                  if(Ajax.readyState==4 && Ajax.status==200) {
                      DIV_Destino.innerHTML = Ajax.responseText;
                  }
              }
              Ajax.send();
          }
          function profesores() {
              Ajax.open("GET", "listaProfesores.php", true);
                  // true = asincronico, no espera a que finalice
              Ajax.onreadystatechange = function() {
                  if(Ajax.readyState==4 && Ajax.status==200) {
                      DIV_Destino.innerHTML = Ajax.responseText;
                  }
              }
              Ajax.send();
          }
          function asesores() {
              Ajax.open("GET", "listaAsesores.php", true);
                  // true = asincronico, no espera a que finalice
              Ajax.onreadystatechange = function() {
                  if(Ajax.readyState==4 && Ajax.status==200) {
                      DIV_Destino.innerHTML = Ajax.responseText;
                  }
              }
              Ajax.send();
          }
          function faq() {
              Ajax.open("GET", "faq.html", true);
                  // true = asincronico, no espera a que finalice
              Ajax.onreadystatechange = function() {
                  if(Ajax.readyState==4 && Ajax.status==200) {
                      DIV_Destino.innerHTML = Ajax.responseText;
                  }
              }
              Ajax.send();
          }
          function detalle() {
              Ajax.open("GET", "detalleUsuario.php", true);
                  // true = asincronico, no espera a que finalice
              Ajax.onreadystatechange = function() {
                  if(Ajax.readyState==4 && Ajax.status==200) {
                      DIV_Destino.innerHTML = Ajax.responseText;
                  }
              }
              Ajax.send();
          }
      </script>
  </body>
</html>
