<!DOCTYPE html>
<html>
<head>
	<title>Funciones 2</title>
</head>
<body>
<?php

function cambiaMayuscula(&$param)
{
	$param = strtolower($param);
	$param = ucwords($param);
	return $param;
}

$cadena = "hOLa MUndO";
echo cambiaMayuscula($cadena) . "<br>";

echo $cadena;

?>
</body>
</html>