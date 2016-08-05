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

		$password = $_POST["contra"];
		$usuario = $_POST["nombre_usuario"];


		echo $usuario == "asdrubal" && $password == "1234" ? "puedes acceder" : "No puedes acceder";
	}

?>