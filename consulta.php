<?php 
	include("conexionbd.php");
	$con = Conectar();
	if (!mysqli_select_db($con, "directorio")) 
	{ 
		printf("ERROR: %s", mysqli_error($con)); 
		die("No es posible conectar con la base de datos..."); 
	}
	else
	{
		$sql = "SELECT IdFono, Nombres, NoFono FROM trnDirectorio";
		$resultado = mysqli_query($con, $sql);
		echo "<div align=\"center\"><h2>Listado Telefonico</h2>";
		echo "<TABLE border=1 align=\"center\">";
	    echo "<TR>";
		    echo "<TD>Id.</TD>";
		    echo "<TD>Nombres</TD>";
		    echo "<TD>Fono</TD>";
	    echo "</TR>";
		//while ($registro = mysqli_fetch_array($resultado, MYSQL_ASSOC))  // Debian 8x
        while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) 			
		{
		    echo "<TR>";
		    echo "<td>";
		        echo $registro['IdFono'];
		    echo "</td>";
		    echo "<td>";
		    	echo $registro["Nombres"];
		    echo "</td>";
		    echo "<td>";
		    	echo $registro["NoFono"];
		    echo "</td>";
		    echo "</TR>";
		}
		echo "</TABLE>";
		echo "<A HREF=\"index.html\">Volver</A>";
		echo "</div>";
	}
	mysqli_close($con);
?>
