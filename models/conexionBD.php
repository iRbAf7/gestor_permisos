<?php
function conexionBD(){


	$servidor = "localhost"; $usuario = "root"; $contrasenia = "12345"; $database = "v2_permisos_encuestas";
	try{
		$conexion = new PDO("mysql:host=$servidor;dbname=$database;charset=UTF8", $usuario, $contrasenia);
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e){
		echo "Error: " . $e->getMessage();
	}
	return($conexion);
}


