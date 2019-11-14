
<?php

include_once"conexion.php";
class Modelo{
    public $conexion;

    public function __construct(){
        $this->conexion=Conectar::conexion();
    }


    //funciones

    public function Login($nombre,$contrasena){
      
      echo $nombre . "<br>";
      echo $contrasena . "<br>";
      
      
    }

}

?>