<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eliminar</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<h1>Eliminar de Articulos</h1>
	<form action="eliminar_registro.php" method="get" accept-charset="utf-8" name="form1">
		<table align="center">
			<tr>
				<td>Codigo Articulo</td>
				<td><label for="c_art"><input type="text" name="c_art" id="c_art"></label></td>
			</tr>
			<tr>
				<td>Sección</td>
				<td><label for="seccion"><input type="text" name="seccion" id="seccion"></label></td>
			</tr>
			<tr>
				<td>Nombre articulo</td>
				<td><label for="n_art"><input type="text" name="n_art" id="n_art"></label></td>
			</tr>
			<tr>
				<td>Precio</td>
				<td><label for="precio"><input type="text" name="precio" id="precio"></label></td>
			</tr>
			<tr>
				<td>Fecha</td>
				<td><label for="fecha"><input type="text" name="fecha" id="fecha"></label></td>
			</tr>
			<tr>
				<td>Importado</td>
				<td><label for="importado"><input type="text" name="importado" id="importado"></label></td>
			</tr>
			<tr>
				<td>Pais de Origen</td>
				<td><label for="p_orig"><input type="text" name="p_orig" id="p_orig"></label></td>
			</tr>
			<tr>
				<td>&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td align="center"><input type="submit" name="eliminar" id="eliminar" value="Eliminar"></td>
				<td align="center"><input type="reset" name="borrar" id="borrar" value="Borrar"></td>
			</tr>
		</table>
	</form>
</body>
</html>