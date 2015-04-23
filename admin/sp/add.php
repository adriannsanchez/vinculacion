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
$matricula = $_POST['matricula'];
mysql_query("SET NAMES utf8");

$insert=$obj->insertar("usuarios","nombre,apellidos,usuario,contrasena,correo,telefono","'$nombre','$apellidos','$usuario','$contrasena','$correo','$telefono'");
if($insert){
  header("Location: index.html");
    }

    $rs = mysql_query("SELECT MAX(id) AS id FROM profesores");
if ($row = mysql_fetch_row($rs)) {
$id = trim($row[0]);
}
echo $id;


}
    ?>
