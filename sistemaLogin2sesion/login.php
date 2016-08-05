<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>formulario</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
	
	if (isset($_POST["enviar"]))
	{
		try{
			$base = new PDO("mysql:host=localhost; dbname=prueba", 'root', 'root');
			$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "SELECT * FROM USUARIO_PASS WHERE USUARIOS= :login and PASSWORD= :password";
			$resultado = $base->prepare($sql);
			$login = htmlentities(addslashes($_POST["login"]));
			$password = htmlentities(addslashes($_POST["password"]));
			$resultado->bindValue(":login", $login);
			$resultado->bindValue(":password", $password);
			$resultado->execute();
			$numero_registro = $resultado->rowCount();

			if ($numero_registro != 0)
			{

				session_start();
				
				$_SESSION["usuario"] = $_POST["login"];

				//header("Location:usuarioRegistrados1.php");

			}else{

				echo "Error. Usuario o contraseña incorrectos";
				//header("location:login.php");

			}
			
		}catch(Exeption $e)
		{
			die("Error: " . $e->getMessage());
		}
	}
?>

<?php 

	if (!isset($_SESSION["usuario"]))
	{
		include("formulario.html");	
	}else{

		echo "Usuario: " . $_SESSION["usuario"];
	}




 ?>

	<h2>Contenido de la pagina</h2>

	<table class="img">
		<tr>
			<td><img src="../img/imagen1.jpg" alt=""></td>
			<td><img src="../img/imagen2.jpg" alt=""></td>
		</tr>
		<tr>
			<td><img src="../img/imagen3.jpg" alt=""></td>
			<td><img src="../img/imagen4.jpg" alt=""></td>
		</tr>
	</table>
<a href="cierre.php"><p>Cerrar Sesión</p></a>
</body>
</html>