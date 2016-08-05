<style>
	.resultado {
		color: red;
		font-weight: bold;
		font-size: 32px;
	}
</style>

<?php

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
	if(!strcmp("Incremento", $calculo)){
		$numero1++;
		$resultado = $numero1;
		echo "<p class='resultado'>El resultado es: $resultado</p>";

	}
	if(!strcmp("Decrementos", $calculo)){
		$numero1--;
		$resultado = $numero1;
		echo "<p class='resultado'>El resultado es: $resultado</p>";

	}
}



?>