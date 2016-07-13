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

<?php

	if(isset($_POST["enviando"])){

		$usuario = $_POST["nombre_usuario"];
		$edad = $_POST["edad_usuario"];


		if($usuario=="Juan" && $edad >=18){
			echo "<p class='valido'>Puedes Entrar</p>";
		}else{
			echo "<p class=\"no_validado\">"."No puedes entrar"."</p>";
		}
	}

?>