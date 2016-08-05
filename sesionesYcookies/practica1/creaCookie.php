<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php

	setcookie("idiomaSeleccionado", $_GET["idioma"], time() + 86400);
	header("Location:verCookie.php");

?>
</body>
</html>