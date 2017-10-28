<?php

	$IdFono  = $_POST['txtIdFono'];
	$Nombres = $_POST['txtNombres'];
	$NoFono  = $_POST['txtNoFono'];
 
	echo "<div align=\"center\">";
	echo "txtIdFono => ".$IdFono."<br/>";
	echo "txtNombres => ". $Nombres."<br/>";
	echo "txtNoFono => ". $NoFono."<br/>";
    
	include("conexionbd.php");
	$conex = Conectar();
	if (!mysqli_select_db($conex, "directorio")) 
	{ 
		printf("ERROR: %s", mysqli_error($conex)); 
		die("No es posible conectar con la base de datos..."); 
	}
	else
	{
		$sql = "SELECT IdFono FROM trnDirectorio WHERE IdFono = '$IdFono';";
		if ($resultado = mysqli_query($conex, $sql)) 
		{
		    $cantidad_registro = mysqli_num_rows($resultado);
		    if ($cantidad_registro == 1)
		    {
		    	printf("IdFono [ %d ] existe en [trnDirectorio].<br><br>", $IdFono);
		    	mysqli_free_result($resultado);
		    }
		    else
		    {
		    	$sql = "INSERT INTO trnDirectorio VALUES('$IdFono','$Nombres','$NoFono');";
				mysqli_query($conex, $sql);	
				echo "«Registrado correctamente».<br><br>";
		    }
		}
		mysqli_close($conex);
		echo "<A HREF=\"edicion.php\">Volver</A>";
	}
	echo "</div>";
?>
