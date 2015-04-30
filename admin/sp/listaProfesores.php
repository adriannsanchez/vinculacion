<?php

include_once '../../config/Controlador.php';
session_start();
  // $user=$_POST["nombre"];
  // $nombre=$_SESSION['nombre'];
  $usuario=$_SESSION['id'];
  $tipo=$_SESSION['tipo'];
 ?>
          <section class="wrapper site-min-height">
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                              Lista de profesores
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
                                          <th class="hidden-phone">Edición</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                    $participantes = profesoresInscritos();
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
                                          <th class="hidden-phone">Edición</th>
                                      </tr>
                                      </tfoot>
                          </table>
                                </div>
                          </div>
                      </section>
                  </div>
              </div>
          </section>
