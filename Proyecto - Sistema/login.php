<!DOCTYPE html>
<html>
<head>
	<title>Inicio de sesion</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">


  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="./plugins/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./plugins/assets/icon/themify-icons/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="./plugins/assets/icon/icofont/css/icofont.css">
  <link rel="stylesheet" type="text/css" href="./plugins/assets/css/style.css">
  <link rel="stylesheet" type="text/css" href="./plugins/assets/css/color/color-1.css" id="color" /></head>

<body class="fix-menu">

<?php
session_start();

if(isset($_SESSION['usuario'])){
        header('Location: index.php');
    }

include 'DataBase/Db.php';
include 'controlador/UserModel.php';
?>
<br>
<br>
<br>
<br>
<center>
	<div class="card" style="width: 26rem; Height: 20rem;">
		<div>
		<br>
        	<div class="login-main-text">
            	<h3>PLANILLA DE PAGOS</h3>
            	<p><h5>INICIO DE SESIÓN</h5></p>
         	</div>
      	</div>
      	<div class="">
         	<div class="col-md-12">
            	<div class="login-form">
               		<form class="form-horizontal" method="POST">
                  		
                  		<div class="form-group">
                     		<input type="text" class="form-control" placeholder="Usuario" name="usu">
                  		</div>

                  		<div class="form-group">
                     		<input type="password" class="form-control" placeholder="Contraseña" name="contra" type="password">
                  		</div>
                  		<button type="submit" class="btn btn-outline-primary waves-effect btn-block" name="submit">Ingresar</button>
               		</form>
               		<br>
               		<div class="">
               			<a href="#"> ¿Olvidaste tu contraseña? </a>
               		</div>
            	</div>
         	</div>
      	</div>
    </div>
    <div class="alert col-lg-4">
		<?php include 'controlador/UserController.php'; ?>
		
	</div>
</center>
</body>
</html>