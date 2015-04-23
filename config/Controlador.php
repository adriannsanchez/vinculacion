<?php

include 'Modelo.php';


function login($usuario,$contrasena) {
    $obj = new Modelo;

    $consulta = $obj->consultar("*", "usuarios", "where usuario='$usuario' and contrasena='$contrasena'");
	if($obj->Filas($consulta)==1){
	$eltipo=$obj->ElArray($consulta);
	$tipo=$eltipo['tipo'];
        $id=$eltipo['idparticipante'];
	session_start();
	$_SESSION['tipo'] = $tipo;
	$_SESSION['id'] = $id;

        return $eltipo;
        }
 else {
     return false;
 }
}
function nomCom($nom) {
    $obj = new Modelo;

    $consulta = $obj->consultar("nombre", "usuarios", "where usuario='$nom'");
	if($obj->Filas($consulta)==1){
	// $eltipo=$obj->ElArray($consulta);
	// $tipo=$eltipo['tipo'];
  //       $id=$eltipo['idparticipante'];
	// session_start();
	// $_SESSION['tipo'] = $tipo;
	// $_SESSION['id'] = $id;

        return $eltipo;
        }
 else {
     return false;
 }
}


function Elusuario($usuario) {
    $obj = new Modelo;
	$usuario = $obj->consultar("*", "usuarios", "where usuario='$usuario'");
	$arrays = $obj->ElArray($usuario);
  // $_SESSION['nombre'] = $nombre;
    return $arrays;
}
function ElTaller($usuario,$descripcion) {
    $obj = new Modelo;
	$usuario = $obj->consultar("*", "tallerUsuario", "where usuario='$usuario' and descripcion='$descripcion'");
	$arrays = $obj->ElArray($usuario);
  $_SESSION['nombre'] = $nombre;
    return $arrays;
}
function ElComprobante($usuario) {
    $obj = new Modelo;
	$usuario = $obj->consultar("*", "comprobantes", "where usuario ='$usuario'");
	$arrays = $obj->ElArray($usuario);
  $_SESSION['archivo'] = $nombre;
    return $arrays;
}

  function Newparticipante($nombre,$correo,$telefono,$institucion,$usuario,$contrasena) {
    $obj = new Modelo;
    $usuario = $obj->insertar("usuarios", "", "0,'$nombre','$correo','$telefono','$institucion','$usuario','$contrasena'");
    if($usuario){
      //$eltipo=  login($correo,$contrasena);
        $id=mysql_insert_id();
      	//$_SESSION['tipo'] = $tipo;
	$_SESSION['id'] = $id;
    }
     return $usuario;
}
function NewProfesor($nombre,$apellidos,$correo,$telefono,$institucion){
$obj =  new Modelo;
$usuario = $obj->insertar("profesores", "", "0,'$nombre','$apellidos','$correo,'$telefono','$institucion'");
if($usuario){
$id=mysql_insert_id();
$_SESSION['id'] = id;
}
return $usuario;
}

function eventos()
{
    $obj = new Modelo;
    $consulta = $obj->consultar("*", "eventos inner join descripciones on eventos.idevento=descripciones.idevento", " where tipo <> 4 order by fecha ASC, inicio ASC");
    return $consulta;
}


function eventosfull()
{
    $obj = new Modelo;
    $consulta = $obj->consultar("*", "eventos inner join descripciones on eventos.idevento=descripciones.idevento", "order by fecha ASC, inicio ASC");
    return $consulta;
}
function mieventos ($usuario){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "eventos inner join descripciones on eventos.idevento=descripciones.idevento inner join participantes_eventos on participantes_eventos.iddescripcion=descripciones.iddescripcion ", "where eventos.tipo=4 || idparticipante=$usuario  order by fecha ASC, inicio ASC");

}
function talleres()
{
    $obj = new Modelo;
    $consulta = $obj->consultar("*", "taller", "");
    return $consulta;
}

function talleristas($id)
{
    $obj = new Modelo;
    $consulta = $obj->consultar("*", "talleristas", "where idtaller=".$id);
    return $consulta;
}

function inscritos($id)
{
    $obj = new Modelo;
    $consulta = $obj->consultar("*", "participantes_eventos", "where iddescripcion=$id");
    if($obj->Filas($consulta)>=1)
        return $obj->Filas($consulta);
    else{
        return 0;

    }
}
function listainscritos($id)
{
    $obj = new Modelo;
    $consulta = $obj->consultar("*", "participantes_eventos inner join participantes on participantes_eventos.idparticipante=participantes.idparticipante", "where iddescripcion=$id");
    if($obj->Filas($consulta)>=1)
        return $consulta;
    else{
        return false;

    }
}



function agregar($evento,$id)
{
    $obj = new Modelo;
    $consulta = $obj->consultar("*", "eventos inner join descripciones on eventos.idevento=descripciones.idevento", "where iddescripcion=$evento");
    $datos= $obj->ElArray($consulta);

            if ($datos['cupo'] > inscritos($evento)) {
        $obj->insertar("participantes_eventos", "", "0,$id,$evento");
        return true;
    } else {
         return false;
    }
}
function validar ($usuario,$id){
     $obj = new Modelo;
    $consulta = $obj->consultar("*", "participantes_eventos", "where iddescripcion=$id and idparticipante=$usuario");
    if($obj->Filas($consulta)>=1)
        return true;
    else{
        return false;

    }
}

function validarhora ($usuario,$id,$inicio,$fin,$fecha){
     $obj = new Modelo;
    $consulta = $obj->consultar("*", "participantes_eventos inner join descripciones on
        participantes_eventos.iddescripcion=descripciones.iddescripcion ", "where idparticipante=$usuario and fecha='$fecha' and (inicio between '$inicio' and '$fin' or fin between '$inicio' and '$fin' )");
    if($obj->Filas($consulta)>=1)
        return true;
    else{
        return false;

    }
}

function quitar($usuario,$descripcion)
{
    $obj = new Modelo;
    $obj->eliminar ("tallerUsuario", "  usuario=$usuario and descripcion=$descripcion");

}

// Lista de usuarios
function participantes(){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "usuarios ", "order by nombre");
}

// Lista de alumnos
function alumnos(){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "usuarios ", "where tipo = 'alumno' order by nombre");
}
// Lista de profesores
function profesoresInscritos(){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "usuarios ", "where tipo = 'profesor' order by nombre");
}
// Lista de Asesores Empresariales
function asesores(){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "usuarios ", "where tipo = 'asesorE' order by nombre");
}

function taller(){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "talleres ", "where fecha = '2015-04-16' order by fecha");
}
function taller2(){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "talleres ", "where fecha = '2015-04-17' order by fecha");
}
function taller3(){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "talleres ", "where fecha = '2015-04-18' order by fecha");
}
function horario($usuarioLogado){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "tallerUsuario ", "where fecha = '2015-04-16' and usuario = '$usuarioLogado' order by fecha");
}
function horario2($usuarioLogado){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "tallerUsuario ", "where fecha = '2015-04-17' and usuario = '$usuarioLogado' order by fecha");
}
function horario3($usuarioLogado){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "tallerUsuario ", "where fecha = '2015-04-18' and usuario = '$usuarioLogado' order by fecha");
}
function pagos(){
     $obj = new Modelo;
   return $consulta = $obj->consultar("*", "comprobantes ", "order by usuario");
}
function profesores(){
      $obj = new Modelo;
       return $consulta = $obj->consultar("*", "participantes ", "where id=$id");
}
function elparticipante($id){
     $obj = new Modelo;
   return $obj->ElArray($consulta = $obj->consultar("*", "participantes ", "where idparticipante=$id"));
}

function validalimite()
{
    $obj = new Modelo;
  $consulta = participantes();
    if($obj->Filas($consulta)>=301)
        return false;
    else{
        return true;

    }
}

function quitarevento($evento)
{
    $obj = new Modelo;
    $obj->eliminar ("descripciones", "  iddescripcion=$evento");

}

  function Newevento($nombre,$persona,$descripcion, $tipo, $fecha, $inicio, $fin, $cupo, $lugar) {
    $obj = new Modelo;
    $obj->insertar("eventos", "", "0,'$nombre','$persona','$descripcion','$tipo'");
    $id=mysql_insert_id();
    $obj->insertar("descripciones", "", "0,'$fecha','$inicio','$fin','$lugar','$cupo','$id'");

}
 function nuevoTallerUsuario($nombre,$descripcion,$fecha,$usuario) {
    $obj = new Modelo;
    $obj->insertar("tallerUsuario", "", "0,'$nombre','$descripcion','$fecha','$usuario'");

}
function guardaruta($ruta,$id){
    $obj = new Modelo;
    $obj->insertar("ficha", "", "0,CURDATE(),'$ruta',$id");
   }

function recuperaruta($id){
    $obj = new Modelo;
   $consulta = $obj->consultar("*", "ficha", "where idparticipante=$id");
   if($obj->Filas($consulta)>=1)
        return $obj->ElArray ($consulta);
    else{
        return false;

    }
   }
   function actualizapago($id){
       $obj = new Modelo;
       $update=$obj->actualizar("participantes", "pago_estado='pagado'", "where idparticipante=$id");
       return $update;
   }
  //  function actualizarUsuario($nombre,$apellidos,$correo,$telefono,$usuario){
  //    $obj = new Modelo;
  //    $update=$obj->actualizar("usuarios", "nombre='$nombre' AND apellidos='$apellidos' AND correo='$correo' AND telefono='$telefono'", "where usuario=$usuario");
  //    return $update;
  //  }
   function guardafactura($nombre,$direccion,$rfc,$id){
    $obj = new Modelo;
    $obj->insertar("facturas", "","0,'$nombre','$direccion','$rfc',$id");
   }
   function recuperafactura($id){
    $obj = new Modelo;
   $consulta = $obj->consultar("*", "facturas", "where idparticipante=$id");
   if($obj->Filas($consulta)>=1)
        return $obj->ElArray ($consulta);
    else{
        return false;

    }
   }
 function recuperaruta2($id){
    $obj = new Modelo;
   $consulta = $obj->consultar("*", "ficha", "where idparticipante=$id");
   if($obj->Filas($consulta)>=1)
        return $consulta;
    else{
        return false;

    }
   }
?>
