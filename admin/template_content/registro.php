<!DOCTYPE html>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=ISO-8859-1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>UT Cancún</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="add.php" method="post" enctype="multipart/form-data" role="form" onSubmit="">
        <h2 class="form-signin-heading">Registro de usuarios</h2>
        <div class="login-wrap">
            <p>Ingresa tus datos personales</p>
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" autofocus>
            <input type="text" name="apellidos" class="form-control" placeholder="Apellidos" autofocus>
            <input type="text" name ="correo" class="form-control" placeholder="Email" autofocus>
            <input type="text" name ="telefono" class="form-control" placeholder="Telefono" autofocus>
            <div class="radios">
                <label class="label_radio col-lg-6 col-sm-6" for="radio-01">
                    <input name="sample-radio" id="radio-01" value="1" type="radio" checked /> Estudiante
                </label>
                <label class="label_radio col-lg-6 col-sm-6" for="radio-02">
                    <input name="sample-radio" id="radio-02" value="1" type="radio" /> Profesor
                </label>
            </div>

            <p> Ingresa los datos de tu cuenta</p>
            <input type="text" name="usuario" class="form-control" placeholder="Usuario" autofocus>
            <input type="password" name="contrasena" class="form-control" placeholder="Password">
            <input type="password" class="form-control" placeholder="Re-type Password">
            <!-- <label class="checkbox">
                <input type="checkbox" value="agree this condition"> Estoy de acuerdo
            </label> -->
            <button class="btn btn-lg btn-login btn-block" name="btnGuardar" type="submit">Registrarme</button>

            <div class="registration">
                Estoy registrado.
                <a class="" href="login.html">
                    Iniciar sesión
                </a>
            </div>

        </div>

      </form>

    </div>


  </body>
</html>
