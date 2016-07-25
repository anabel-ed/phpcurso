<?php
	
	$cod = $_GET["c_art"];
	$sec = $_GET["seccion"];
	$nom = $_GET["n_art"];
	$pre = $_GET["precio"];
	$fec = $_GET["fecha"];
	$imp = $_GET["importado"];
	$por = $_GET["p_orig"];

	require("ConexionBD.php");

	$conexion = mysqli_connect($bd_host, $bd_usuario, $bd_password);

	if (mysqli_connect_errno())
	{
		echo "No pudo conectar a la base de datos";
		exit();
	}
	mysqli_select_db($conexion, $bd_nombre) or die ("No se encurentra la Base de Datos");

	mysqli_set_charset($conexion, "utf-8");

	$consulta = "UPDATE productos SET 	codigoArticulo = '$cod',
										seccion = '$sec',
										nombreArticulo = '$nom',
										precio = $pre,
										fecha = '$fec',
										importado = $imp,
										paisOrigen = '$por'
								WHERE 	codigoArticulo = '$cod'";

	$resultados = mysqli_query($conexion, $consulta);

	if ($resultados == false)
	{
		echo "error en la consulta";
	}else{
		echo "Registro guardado" . "<br>";
		echo "<table><tr><td>$cod</td></tr>";
		echo "<tr><td>$sec</td></tr>";
		echo "<tr><td>$nom</td></tr>";
		echo "<tr><td>$pre</td></tr>";
		echo "<tr><td>$fec</td></tr>";
		echo "<tr><td>$imp</td></tr>";
		echo "<tr><td>$por</td></tr></table>";

	}

	mysqli_close($conexion);


?>