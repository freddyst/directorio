<html>
	<head>
		<title>Adici&oacuten de Registro</title>
	</head>
	<body>
		<div align="center">
			<h1>Nuevo Registro</h1>
		</div>
		<form method="POST" action="registraagregar.php" >
			<table align="center" margin="auto">
				<tr>
					<td>
						Id registro:
					</td>
					<td>
						<input type="number" name="txtIdFono" />
					</td>
				</tr>
				<tr>
					<td>
						Nombres y apellidos:
					</td>
					<td>
						<input type="text" name="txtNombres" />
					</td>
				</tr>
				<tr>
					<td>
						Telefono
					</td>
					<td>
						<input type="text" name="txtNoFono" />
					</td>
				</tr>
				<tr>
					<td align="center" colspan="2">
						<input type="submit" name="submit" value="Agregar" />
						<?php echo "<A HREF=\"edicion.php\">Cancelar</A>";?>
					</td>
				</tr>
			</table>
			
		</form>

	</body>
</html>
