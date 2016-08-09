<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	try{

		$base = new PDO("mysql:host=localhost; dbname=prueba", "root", "root");

		$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

		$base->exec("SET CHARACTER SET UTF8");

		$sql = "SELECT nombreArticulo, seccion, precio, paisOrigen FROM productos WHERE seccion=DEPORTES";

		$resultado = $base->prepare($sql);

		$resultado->execute(array());

		while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)): 

			echo "Nombre Articulos: " . $registro["nombreArticulo"] . "Seccion: " . $registro["seccion"] . "Precio: " . $registro["precio"] . "Pais de origen: " . $registro["paisOrigen"] . "<br>";

		endwhile;

		$resultado->closeCursor();

	}catch(Exception $e){

		echo "Linea de error" . $e->getLine();

	}

?>
</body>
</html>