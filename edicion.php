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
    }
    echo "<div align=\"center\"><h2>Edicion de Directorio</h2>";
    echo "<TABLE border=1 align=\"center\">";

    echo "<TR>";
      echo '<TD align="center" colspan="6">';
       echo '<A HREF="agregar.php">«Nuevo»</A>';
      echo "</TD>";
    echo "</TR>";
    echo "<TR>";
    echo "<TD>Id.</TD>";
    echo "<TD>Nombres</TD>";
    echo "<TD>Fono</TD>";
    echo "<TD colspan=\"2\">-</TD>";
    echo "</TR>";
    //while ($registro = mysqli_fetch_array($resultado, MYSQL_ASSOC))  // Debian 8
    while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) 
    {
        echo "<TR>";
        echo "<td>";
            echo $registro["IdFono"];
        echo "</td>";
        echo "<td>";
            echo $registro["Nombres"];
        echo "</td>";
        echo "<td>";
            echo $registro["NoFono"];
        echo "</td>";

        echo "<TD>";
        echo'[<a href="editar.php?id=' . $registro["IdFono"] . '">Editar</a>]';
        echo "</TD>";
        echo "<TD>";
        echo'[<a href="eliminar.php?id=' . $registro["IdFono"] . '">Eliminar</a>]';
        echo "</TD>";
        echo "</TR>";
    }
    echo "</TABLE>";
    echo "<br>";
    echo "<A HREF=\"index.html\">Principal</A>";
    echo "</div>";

    mysqli_close($con);
?>
