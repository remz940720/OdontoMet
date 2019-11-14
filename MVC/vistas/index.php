<?php
include_once ('../Controlador/controller.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>OdontoMet</title>
	<link rel="stylesheet"  href="css/login.css">
	<link rel="stylesheet"  href="css/login.css">
</head>
<body>
    <img src="img/encabezado.png" width="1000" height="900" class="encabezado" alt="encabezado">
	<form action="../Controlador/controller.php" class="formulario" method="post">
		<h1 class="titulo">INICIAR SESIÓN</h1>
		<input type="text" class="formulario__input" name="nombre">
		<label class="formulario__label">Usuario</label>
		<input type="password" class="formulario__input" name="contrasena">
		<label class="formulario__label">Contraseña</label>
		<input type="submit" class="submit" value="Iniciar Sesión" name="Login">
	</form>
	<script src="js/formLog.js"></script>
	<br>
	<footer> Información del dentista y del consultorio</footer>
</body>
</html>