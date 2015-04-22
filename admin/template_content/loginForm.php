<?php
require_once("../../config/Controlador.php");

  $usuario= $_POST["usuario"];
  $contrasena= $_POST["contrasena"];
  $user = login($usuario,$contrasena);

		if(!$user){
		echo "<script> type='text/javascript'> alert('\t No pudiste iniciar sesión');
		window.location='index.html';</script>";

	 	}
     if($user['tipo'] == "admin"){
       session_start();
	$_SESSION['usuario'] = $usuario;
     echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; url=inicio.php\">";
     header("Location: dash.php");
      }

     if($user['tipo'] == "alumno"){
       session_start();
	$_SESSION['usuario'] = $usuario;

       echo "<META HTTP-EQUIV=\"Refresh\" CONTENT=\"0; url=inicio.php\">";
       header("Location: asesorAlumno.php");
    }



	?>
