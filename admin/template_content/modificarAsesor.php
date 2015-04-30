<?php

require_once("../../config/Controlador.php");
require_once("../../config/Conexion.php");


session_start();

if(isset($_POST['btnGuardar']))
{
     $obj=new Modelo;
     $id= $_POST['id'];
$nombre = utf8_decode($_POST['nombre']);
$apellidos = utf8_decode($_POST['apellidos']);
$usuario = utf8_decode($_POST['usuario']);
$contrasena = $_POST['contrasena'];
$correo = utf8_decode($_POST['correo']);
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];
$telefonoEmpresa = $_POST['telefonoEmpresa'];
$matricula = $_POST['matricula'];
mysql_query("SET NAMES utf8");

$update=$obj->actualizar("usuarios", "nombre='$nombre',apellidos='$apellidos',usuario='$usuario',contrasena='$contrasena',correo='$correo',telefono='$telefono',empresa='$empresa',telefonoEmpresa='$telefonoEmpresa'", "where id=$id");
if($update){
  header("Location: listaAsesores.php");
    }

//     $rs = mysql_query("SELECT MAX(id) AS id FROM profesores");
// if ($row = mysql_fetch_row($rs)) {
// $id = trim($row[0]);
// }
// echo $id;


}
    ?>
