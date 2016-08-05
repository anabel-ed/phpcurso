<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	
	session_start();

	if(!isset($_SESSION["usuario"]))
	{
		header("Location:login.php");
	}
?>
	<h1>Bienvenidos Usuarios</h1>
<?php
	
	echo "Hola " . $_SESSION["usuario"] . "<br></br>";

?>
	<p>Esto es informacion para usuarios registrados</p>

	<a href="cierre.php"><p>Cerrar Sesión</p></a>
</body>
</html>