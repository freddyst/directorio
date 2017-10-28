<?php
	function Conectar()
	{
		$servidor = "localhost";
		$usuarioBD = "usrdirectorio";
		$passwordBD = "Upea$2017";

		$conexion = mysqli_connect($servidor, $usuarioBD, $passwordBD);
		if (!$conexion) 
		{
			die("No se pudo establecer conexion...");
		}
		return $conexion;
	}
?>
