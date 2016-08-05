<!DOCTYPE html>
<html>
<head>
	<title>Elije Idima</title>
	<link rel="stylesheet" type="text/css" href="../../css/style.css">
</head>
<body>
<?php

	if (isset($_COOKIE["idiomaSeleccionado"])) {
		
		if ($_COOKIE["idiomaSeleccionado"] == "es")
		{
			header("Location:spanish.php");
		
		}elseif ($_COOKIE["idiomaSeleccionado"] == "en")
		{
			header("Location:english.php");
		}

	}

?>
	<table class="img">
		<tr>
			<td colspan="2"><h1>Elije un Idioma</h1></td>
		</tr>
		<tr>
			<td><a href="creaCookie.php?idioma=es"><img src="../../img/esp.png" alt=""></a></td>
			<td><a href="creaCookie.php?idioma=en"><img src="../../img/eng.png" alt=""></a></td>
		</tr>
	</table>
</body>
</html>