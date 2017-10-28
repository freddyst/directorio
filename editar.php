<?php
  $IdFono = $_GET['id'];

  include("conexionbd.php");
  $conex = Conectar();
  if (!mysqli_select_db($conex, "directorio")) 
  { 
    printf("ERROR: %s", mysqli_error($conex)); 
    die("No es posible conectar con la base de datos..."); 
  }
  else
  {
    $sql = "SELECT IdFono, Nombres, NoFono FROM trnDirectorio WHERE IdFono = '$IdFono';";
    if ($resultado = mysqli_query($conex, $sql)) 
    {
      echo "<div align=\"center\"><h2>Modificar Registro</h2>";
      echo '<form method="POST" action="registraeditar.php" >';
      echo "<TABLE border=1 align=\"center\">";
      //while ($registro = mysqli_fetch_array($resultado, MYSQL_ASSOC))  // Debian8x
      while ($registro = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) 
      {
        echo "<TR>";
          echo "<TD>";
            echo "Id.: ";
          echo "</TD>";
          echo "<TD>";
            echo '<input type="name" name="txtIdFono" value="' . $registro["IdFono"] . '" readonly="true"/>';
          echo "</TD>";
        echo "</TR>";
        echo "<TR>";
          echo "<TD>";
            echo "Nombres: ";
          echo "</TD>";
          echo "<TD>";
            echo '<input type="name" name="txtNombres" value="' . $registro["Nombres"] . '"/>';
          echo "</TD>";
        echo "</TR>";          
        echo "<TR>";
          echo "<TD>";
            echo "Fono: ";
          echo "</TD>";
          echo "<TD>";
            echo '<input type="name" name="txtNoFono" value="' . $registro["NoFono"] . '"/>';
          echo "</TD>";
        echo "</TR>";
        echo "<TR>";
          echo '<TD align="center" colspan="2">';
            echo '¿Esta seguro de MODIFICAR este registro?';
          echo "</TD>";
        echo "</TR>";
        echo "<TR>";
          echo '<TD align="center" colspan="2">';
            echo '<input type="submit" name="submit" value="Modificar" /> ';
            echo '<A HREF="edicion.php">Cancelar</A>';            
          echo "</TD>";
        echo "</TR>";
      }
    }
  }
  echo "</TABLE>";
  mysqli_close($con);
?>
