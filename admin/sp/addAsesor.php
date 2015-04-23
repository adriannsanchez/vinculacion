<?php

require_once("../../config/Controlador.php");
require_once("../../config/Conexion.php");


session_start();

if(isset($_POST['btnGuardar']))
{
     $obj=new Modelo;

$nombre = utf8_decode($_POST['nombre']);
$apellidos = utf8_decode($_POST['apellidos']);
$usuario = utf8_decode($_POST['usuario']);
$contrasena = $_POST['contrasena'];
$correo = utf8_decode($_POST['correo']);
$telefono = $_POST['telefono'];
$cargo = $_POST['cargo'];
$matricula = $_POST['matricula'];
$telefonoEmpresa = $_POST['telefonoEmpresa'];
$empresa = $_POST['empresa'];
$sitioWeb = $_POST['sitioWeb'];

mysql_query("SET NAMES utf8");
// $insert=$obj->insertar("asesorEmpresarial","empresa,telefono,correo","'$empresa','$telefono','$correo'");
$insert=$obj->insertar("usuarios","nombre,apellidos,usuario,contrasena,correo,telefono,tipo,empresa,telefonoEmpresa,matricula,cargo,sitioWeb","'$nombre','$apellidos','$usuario','$contrasena','$correo','$telefono','asesorE','$empresa','$telefonoEmpresa','NULL','$cargo','$sitioWeb'");
if($insert){
  header("Location: listaAsesores.php");
    }

    $rs = mysql_query("SELECT MAX(id) AS id FROM profesores");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
}
echo $id;


}
if(isset($_POST['btnActualizar'])){
  $obj=new Modelo;

$nombre = utf8_decode($_POST['nombre']);
$apellidos = utf8_decode($_POST['apellidos']);
$correo = utf8_decode($_POST['correo']);
$telefono = $_POST['telefono'];
$matricula = $_POST['matricula'];
mysql_query("SET NAMES utf8");

$insert=$obj->actualizar("usuarios","nombre,apellidos,correo,telefono","'$nombre','$apellidos','$correo','$telefono'");
}
    ?>
