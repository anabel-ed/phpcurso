<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>operadores matematicos</title>
</head>
<body>
	<form action="" name="form1" method="post" accept-charset="utf-8">
		<p>
			<label for="num1"></label>
			<input type="text" name="num1" id="num1">
			<label for="num2"></label>
			<input type="text" name="num2" id="num2">
			<label for="num1"></label>
			<select id="operacion" name="operacion">
				<option>Suma</option>
				<option>Resta</option>
				<option>Multiplicacion</option>
				<option>Division</option>
				<option>Modulo</option>
				<option>Incremento</option>
				<option>Decrementos</option>

			</select>
		</p>
		<p>
			<input type="submit" name="button" id="button" value="Enviar" onclick="prueba">
		</p>
	</form>
	<p>&nbsp;</p>
	<?php
		include("13operaciones.php");

		if(isset($_POST["button"])) {

		$numero1 = $_POST["num1"];
		$numero2 = $_POST["num2"];
		$operacion = $_POST["operacion"];

		calcular($operacion);


		}
	?>
</body>
</html>