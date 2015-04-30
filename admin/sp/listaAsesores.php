<?php

include_once '../../config/Controlador.php';
session_start();
  // $user=$_POST["nombre"];
  // $nombre=$_SESSION['nombre'];
  $usuario=$_SESSION['id'];
  $tipo=$_SESSION['tipo'];
;
 ?>
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
                            <section class="panel">

                                <div class="panel-body">
<!--
                                    <a href="#myModal-2" data-toggle="modal" class="btn btn-xs btn-warning">
                                      Detalle Asesor Empresarial
                                    </a> -->

                                    <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal-2" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                                    <h4 class="modal-title">Detalle Asesor Empresarial</h4>
                                                </div>
                                                <div class="modal-body">

                                                    <form class="form-horizontal"  action="addAsesor.php" method="post" enctype="multipart/form-data" role="form" onSubmit="">
                                                        <div class="form-group">
                                                            <label for="inputEmail1" class="col-lg-2 col-sm-2 control-label">Nombre</label>
                                                            <div class="col-lg-10">
                                                                <input type="text" name="nombre" class="form-control" id="inputEmail4" placeholder="Nombre" value="<?php echo utf8_encode($participante['nombre']) ?>">
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
                                          <th class="hidden-phone">Edición</th>
                                      </tr>
                                      </thead>
                                      <tbody>
                                        <?php
                                        $participantes = asesores();
                                        $resultado = count($participantes);
                                        $a = 1
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
                                          <td class="center hidden-phone"><a href="detalleUsuario.php?nombre=<?php echo utf8_encode($participante['nombre']) ?>&&apellido=<?php echo utf8_encode($participante['apellidos']) ?>
                                            &&correo=<?php echo utf8_encode($participante['correo']) ?>&&telefono=<?php echo utf8_encode($participante['telefono']) ?>&&usuario=<?php echo utf8_encode($participante['usuario']) ?>" class="btn btn-danger">Eliminar</a>
                                            <a href="detalleUsuario.php?nombre=<?php echo utf8_encode($participante['nombre']) ?>&&apellido=<?php echo utf8_encode($participante['apellidos']) ?>
                                              &&correo=<?php echo utf8_encode($participante['correo']) ?>&&telefono=<?php echo utf8_encode($participante['telefono']) ?>&&usuario=<?php echo utf8_encode($participante['usuario']) ?>&&id=<?php echo utf8_encode($participante['id']) ?>
                                              &&pwd=<?php echo utf8_encode($participante['contrasena']) ?>&&empresa=<?php echo utf8_encode($participante['empresa']) ?>&&telefonoEmpresa=<?php echo utf8_encode($participante['telefonoEmpresa']) ?>" class="btn btn-danger" onClick="detalle()">Editar</a>
                                              <a  href="#myModal-2" data-toggle="modal" class="btn btn-danger">DETALLE</a></td>
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
