<?php

Class Conectar{
	public static function conexion(){
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$bd = "OdontoMet";
		$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
		
		return $conexion;


	}

	
}

?>
	