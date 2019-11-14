<?php
include_once '../Modelo/Modelo.php';

$modelo=new Modelo();

 if (isset($_POST["Login"])) {
    $nombre=$_POST["nombre"];
    $contrasena=$_POST["contrasena"];
    $modelo->Login($nombre,$contrasena);
}
?>