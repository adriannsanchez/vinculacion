<?php

class Conexion {

    var $conect;

    function Conexion() {

    }

    function getCon() {
        return $this->conect;
    }

    function conectar() {
        if (!($con = @mysql_connect("localhost", "root", ""))) {
            echo"Error al conectar a la base de datos";
            exit();
        }
        if (!@mysql_select_db("vinculacion", $con)) {
            echo "error al seleccionar la base de datos";
            exit();
        }
        $this->conect = $con;
        return true;
    }

}

?>
