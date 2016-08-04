<?php
	
	try{
		$base = new PDO("mysql:host=localhost; dbname=prueba", 'root', 'root');
		$pase->setAttribute(PDO::ATTR_MODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM USUARIO_PASS WHERE USUARIO= :login and PASSWORD= :password";
		$resultado = $base->prepare($sql);
		$login = htmlentities(addslashes($_POST['login']));
		$password = htmlentities(addslashes($_POST['password']));
		
	}catch(Exeption $e)
	{
		die("Error: " . $e->getMessage());
	}
?>