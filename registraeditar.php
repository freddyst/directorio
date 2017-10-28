<?php
    
	$IdFono  = $_POST['txtIdFono'];
	$Nombres = $_POST['txtNombres'];
	$NoFono  = $_POST['txtNoFono'];

	include("conexionbd.php");
	$conex = Conectar();
	if (!mysqli_select_db($conex, "directorio")) 
	{ 
		printf("ERROR: %s", mysqli_error($conex)); 
		die("No es posible conectar con la base de datos..."); 
	}
	else
	{
		$sql = "UPDATE trnDirectorio SET Nombres = '$Nombres', NoFono = '$NoFono' WHERE IdFono = '$IdFono';";
		mysqli_query($conex, $sql);	
		mysqli_close($conex);
		echo "<br><center>«Registro modificado»</center><br><br>";
		echo "<center><A HREF=\"edicion.php\">Retornar</A></center>";
	}
?>
