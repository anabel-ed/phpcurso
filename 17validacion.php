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

		$password = $_POST["password"];
		$usuario = $_POST["nombre_usuario"];


		/*if($edad <= 18){

			echo "Eres menor de edad";
		
		}else if($edad <= 40){
		
			echo "Eres joven";
		
		}else if ($edad <=65 ) {
		
			echo "Eres Maduro";
		
		}else{
			echo "Cuidate";
		}*/


		switch (true) {
			case $usuario == 'juan' && password == '1234':
				echo "Hola " . $usuario;
				break;

			case $usuario == 'pedro' && password == '1234':
				echo "Hola " . $usuario;
				break;

			case $usuario == 'maria' && password == '1234':
				echo "Hola " . $usuario;
				break;
			
			default:
				echo "Ususario no autorizado";
				break;
		}



	}

?>