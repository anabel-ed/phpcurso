<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
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

			header("Location:usuarioRegistrados1.php");

		}else{

			header("location:login.php");

		}
		
	}catch(Exeption $e)
	{
		die("Error: " . $e->getMessage());
	}
?>