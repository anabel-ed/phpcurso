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
		$seccion = $_GET['seccion'];

		$peorigen = $_GET['p_origen'];

		
		$base = new PDO('mysql:host=localhost; dbname=prueba', 'root', 'root');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base->exec("SET CHARACTER SET utf8");

		$sql = "SELECT nombreArticulo, seccion, precio, paisOrigen FROM productos WHERE seccion = :secc AND paisOrigen= :porig";
		$resultado = $base->prepare($sql);

		$resultado->execute(array(":secc"=>$seccion, ":porig"=>$peorigen));

		while ($registro = $resultado->fetch(PDO::FETCH_ASSOC))
		{
			
			echo "Nombre Articulo: " . $registro['nombreArticulo'] . " Seccion: " . $registro['seccion'] . " Precio: " . $registro['precio'] . " Pais de Origen: " . $registro['paisOrigen'] . "<br>";
		}

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