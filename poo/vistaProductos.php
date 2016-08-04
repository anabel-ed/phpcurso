<?php
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');

	require "DevuelveProductos.php";

	$productos = new DevuelveProductos();

	$array_productos = $productos->getProductos();

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

<?php
	foreach ($array_productos as $elemento) 
	{
		echo "<table><tr><td>";
		echo $elemento['codigoArticulo'] . "</td><td>";
		echo $elemento['seccion'] . "</td><td>";
		echo $elemento['nombreArticulo'] . "</td><td>";
		echo $elemento['precio'] . "</td><td>";
		echo $elemento['fecha'] . "</td><td>";
		echo $elemento['importado'] . "</td><td>";
		echo $elemento['paisOrigen'] . "</td><tr><table>";

		echo "<br>";
		echo "<br>";
	}
?>

</body>
</html>