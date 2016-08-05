<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Coneccion PDO con consultas</title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php
	
	try
	{
		$cod = $_GET["c_art"];
		
		$base = new PDO('mysql:host=localhost; dbname=prueba', 'root', 'root');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base->exec("SET CHARACTER SET utf8");

		$sql = "DELETE FROM productos WHERE codigoArticulo = :c_art";

		$resultado = $base->prepare($sql);

		$resultado->execute(array(":c_art"=>$cod));

		echo "Registro eliminado";

		$resultado->closeCursor();

	
	}catch(Exception $e)
	{

		die('Error: ' . $e->GetMessage());

	}finally
	{
		$base = null;
	}



?>

</body>
</html>