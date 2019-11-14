<?php 
Class Conectar{
	public static function conexion(){
		$servidor = "localhost";
		$usuario = "root";
		$password = "";
		$bd = "OdontoMet";
		echo $usuario . "<br>";
		echo $servidor . "<br>";
		$conexion = mysqli_connect($servidor, $usuario, $password, $bd);
		if (!$conexion) {
			echo "Error: No se pudo conectar a MySQL" .PHP_EOL ."<br>";
			echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL. "<br>";
			echo "error de depuración: <br>" . mysqli_connect_error() . PHP_EOL . "<br>";
			exit;
		}
		echo "Éxito: Se realizó una conexión apropiada a MySQL!". "<br>";
	

		mysqli_close($conexion);
		return $conexion;
	

	}
	

	
}
	
?>
	