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
		$sec = $_GET["seccion"];
		$nom = $_GET["n_art"];
		$pre = $_GET["precio"];
		$fec = $_GET["fecha"];
		$imp = $_GET["importado"];
		$por = $_GET["p_orig"];

		
		$base = new PDO('mysql:host=localhost; dbname=prueba', 'root', 'root');
		
		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base->exec("SET CHARACTER SET utf8");

		/*$sql = "SELECT nombreArticulo, seccion, precio, paisOrigen FROM productos WHERE seccion = :secc AND paisOrigen= :porig";*/

		$sql = "INSERT INTO productos (codigoArticulo, seccion, nombreArticulo, precio, fecha, importado, paisOrigen) VALUES (:c_art, :seccion, :n_art, :precio, :fecha, :importado, :p_orig)";

		$resultado = $base->prepare($sql);

		//$resultado->execute(array(":secc"=>$seccion, ":porig"=>$peorigen));

		$resultado->execute(array(":c_art"=>$cod, ":seccion"=>$sec, ":n_art"=>$nom, ":precio"=>$pre, ":fecha"=>$fec, ":importado"=>$imp, ":p_orig"=>$por));

		/*while ($registro = $resultado->fetch(PDO::FETCH_ASSOC))
		{
			
			echo "Nombre Articulo: " . $registro['nombreArticulo'] . " Seccion: " . $registro['seccion'] . " Precio: " . $registro['precio'] . " Pais de Origen: " . $registro['paisOrigen'] . "<br>";
		}*/

		echo "Registro Guardado";

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