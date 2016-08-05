<!DOCTYPE html>
<html>
<head>
	<title>Funciones</title>
</head>
<body>
<?php
	/*function suma($num1, $num2)
	{
		$resultado = $num1 + $num2;

		return $resultado;
	}

	echo "La suma es " . suma(5,5);*/

	function fraseMayuscula($frase, $conversion=true)
	{
		$frase = strtolower($frase);

		if ($conversion == true) {
			$resultado = ucwords($frase);
		}else{
			$resultado = strtoupper($frase);
		}
		return $resultado;
	}

	echo (fraseMayuscula("esto es una prueba"));

?>
</body>
</html>