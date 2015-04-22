<?php

include_once 'Conexion.php';

class Modelo {

    //constructor
    function Modelo() {

    }

    //Consultas dinámicas
    // consultar Datos de la BD
    function consultar($campos, $tabla, $condicion = null) {
        $con = new Conexion();
        if ($con->conectar() == true) {
            $query = "select " . $campos . " from " . $tabla . " " . $condicion . "";
       //echo "<br/>". $query;
            $result = @mysql_query($query);
            if (!$result)
                return false;
            else
                return $result;
        }
    }

    //Insertar Datos BD
    function insertar($tabla, $campos, $valor) {
        $con = new Conexion();
        if ($con->conectar() == true) {

        $query = "INSERT INTO " . $tabla . " " . "( $campos )" . " VALUES (" . $valor . ")";
            echo $query;
            $result = @mysql_query($query);
            if (!$result)
                return false;
            else
                return true;
        }
    }

    // actualizar un nuevo empleado en la base de datos
    function actualizar($tabla, $campos, $condicion) {
        $con = new Conexion();
        if ($con->conectar() == true) {
    echo "<BR>".    $query = "UPDATE " . $tabla . " SET " . $campos . " " . $condicion . "";
            $result = mysql_query($query);
            if (!$result)
                return false;
            else
                return true;
        }
    }

    //realiza el recorrido de la consulta
    function ElArray($cad) {
        $con = new Conexion();
        if ($con->conectar() == true) {
            $tu = mysql_fetch_array($cad);
            return $tu;
        }
    }

    //verifica cuantas filas existen en la consulta
    function Filas($cad) {
        $con = new Conexion();
        if ($con->conectar() == true) {
            $tu = mysql_num_rows($cad);
            return $tu;
        }
    }

    //Elimina los datos Seleccionados en la base de datos
    function eliminar($tabla, $condicion) {
        $con = new Conexion();
        if ($con->conectar() == true) {

  $query = "DELETE FROM " . $tabla . " WHERE " . $condicion . "";
            $result = @mysql_query($query);
            if (!$result)
                return false;
            else
                return true;
        }
    }

}

?>
