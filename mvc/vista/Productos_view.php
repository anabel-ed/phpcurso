<!DOCTYPE html>
<html>
<head>
	<title>Productos</title>
</head>
<body>

<table>
	
	<tr>
		<td>NOMBRE DEL PRODUCTO</td>
	</tr>

<?php

	foreach ($matrizproductos as $registro) {
		
		echo "<tr><td>" . $registro["nombreArticulo"] . "</tr></td>";
	}

?>
</table>
</body>
</html>