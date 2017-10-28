<?php
    
	$IdFono = $_POST['txtIdFono'];
	include("conexionbd.php");
	$conex = Conectar();
	if (!mysqli_select_db($conex, "directorio")) 
	{ 
		printf("ERROR: %s", mysqli_error($conex)); 
		die("No es posible conectar con la base de datos..."); 
	}
	else
	{
		$sql = "DELETE FROM trnDirectorio WHERE IdFono = '$IdFono';";
		mysqli_query($conex, $sql);	

		mysqli_close($conex);
		echo "<br><center>«Registro eliminado»</center><br><br>";
		echo "<center><A HREF=\"edicion.php\">Retornar</A></center>";
	}
?>
