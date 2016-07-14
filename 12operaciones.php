<style>
	.resultado {
		color: red;
		font-weight: bold;
		font-size: 32px;
	}
</style>
<?php

if (isset($_POST["button"])) {

	$numero1 = $_POST["num1"];
	$numero2 = $_POST["num2"];
	$operacion = $_POST["operacion"];

calcular($operacion);



}

function calcular($calculo){
	global $numero1;
	global $numero2;

	if(!strcmp("Suma", $calculo)){
		$resultado = $numero1 + $numero2;
		echo "<p class='resultado'>El resultado es: $resultado</p>";

	}
	if(!strcmp("Resta", $calculo)){
		$resultado = $numero1 + $numero2;
		echo "<p class='resultado'>El resultado es: $resultado</p>";

	}
	if(!strcmp("Multiplicacion", $calculo)){
		$resultado = $numero1 + $numero2;
		echo "<p class='resultado'>El resultado es: $resultado</p>";

	}
	if(!strcmp("Division", $calculo)){
		$resultado = $numero1 + $numero2;
		echo "<p class='resultado'>El resultado es: $resultado</p>";

	}
	if(!strcmp("Modulo", $calculo)){
		$resultado = $numero1 + $numero2;
		echo "<p class='resultado'>El resultado es: $resultado</p>";

	}
}



?>