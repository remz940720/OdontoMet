<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<title>Sesion abierta</title>
	<link rel="stylesheet" href="../css/inicio2.css">
</head>
<body>
	<img src="../img/encabezado.png" width="1300" height="700" class="encabezado" alt="encabezado"> 
	<a href="index.php" class="button cerrar radius">Cerrar sesión</a>
	
	<div class="contenido">
    <label class="label">Bienvenido:</label><br>
		<input type="text" class="input" placeholder="Buscar por número de expediente">
		<a href="buscar.php" class="button buscar radius">Buscar</a>
		<div class="tabla">
			<table>
                <thead>
              	   <tr>
              	   <td>Nº de expediente</td>
              	   <td>Nombre</td>
              	   <td>Sexo</td>
              	   <td>Dirección</td>
              	   <td>Teléfono</td>
              	   <td>Fecha de nacimiento</td>
              	   <td>Estado civil</td>
              	   <td>Ocupación</td>
              	   <td>Derechohabiencia</td>
              	   <td>Edad</td>
              	   <td>Nombre del parentesco</td>
                   <td></td>
                   </tr>
                </thead>
                <tr>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
                <td><a href="antecedentes.php" class="button llenar radius">Llenar expediente clínico</a></td>
                </tr>
                <tr>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
              	<td></td>
                <td><a href="antecedentes.php" class="button llenar radius">Llenar expediente clínico</a></td>
                </tr>
            </table>
		</div>
	</div>
	<footer> Información del dentista y del consultorio</footer>
</body>
</html>