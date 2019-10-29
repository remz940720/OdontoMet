<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <title>Sesion abierta</title>
  <link rel="stylesheet" href="../css/inicio.css">
</head>
<body>
   <img src="../img/encabezado.png" width="1300" height="700" class="encabezado" alt="encabezado"> 
  <a href="index.php" class="button cerrar radius">Cerrar sesión</a>
  <div class="contenido">
    <a href="registro.php" class="button radius">Agregar nuevo paciente</a>
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
                   </tr>
                </thead>
                <tr>
                <td>123456</td>
                <td>Adriana</td>
                <td>Femenino</td>
                <td>Quetzalcoatl, 12</td>
                <td>5533445565</td>
                <td>05/03/1997</td>
                <td>soltera</td>
                <td>estudiante</td>
                <td>mexico</td>
                <td>22</td>
                <td>Rocio</td>
                </tr>
                <tr>
                <td>123456</td>
                <td>Adriana</td>
                <td>Femenino</td>
                <td>Quetzalcoatl, 12</td>
                <td>5533445565</td>
                <td>05/03/1997</td>
                <td>soltera</td>
                <td>estudiante</td>
                <td>mexico</td>
                <td>22</td>
                <td>Rocio</td>
                </tr>
            </table>
    </div>
    <a href="inicio.php" class="button radius">Regresar</a>
  </div>
  <footer> Información del dentista y del consultorio</footer>
</body>
</html>