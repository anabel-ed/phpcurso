<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Operadores comparación</title>
	<style>
		h1 {
			text-align: center;
		}

		table {
			background-color: #FFC;
			padding: 5px;
			border: #666 5px solid;
		}

		.valido {
			font-size: 18px;
			color: #0c3;
			font-weight: bold;
		}

		.no_validado {
			font-size: 18px;
			color: #F00;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<h1>USANDO OPERADORES DE COMPARACIÓN</h1>
	<form action="9validacion.php" method="post" accept-charset="utf-8" name="datos_usuario" id="datos_usuario">
		<table width="15%" align="center">
			<tbody>
				<tr>
					<td>nombre</td>
					<td>
						<label for="nombre_usuario"></label>
						<input type="text" name="nombre_usuario" id="nombre_usuario">
					</td>
				</tr>
				<tr>
					<td>edad</td>
					<td>
						<label for="edad_usuario"></label>
						<input type="text" name="edad_usuario" id="edad_usuario">
					</td>
				</tr>
				<tr>
					<td>&nbsp;</td>
					<td>&nbsp;</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" name="enviando" id="enviando" value="Enviar">
					</td>
				</tr>
			</tbody>
		</table>

	</form>
</body>
</html>