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
	
	$autenticado = false;

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

				$autenticado = true;

				if (isset($_POST["recordar"]))
				{
					setcookie("nombreUsuario", $_POST["login"], time() + 86400);
				}

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

	if ($autenticado == false) {
		
		if (!isset($_COOKIE["nombreUsuario"]))
		{
			include ("formulario.html");
		}

	}

	if (isset($_COOKIE["nombreUsuario"])) {
		echo "Bienvenido " . $_COOKIE["nombreUsuario"];
	}elseif ($autenticado == true) {
		echo "Bienvenido " . $_POST["login"];
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

<?php
	
	if ($autenticado == true || isset($_COOKIE["nombreUsuario"])) {
		include("zonaRegistrados.html");
	}

?>

<a href="cierre.php"><p>Cerrar Sesión</p></a>
</body>
</html>