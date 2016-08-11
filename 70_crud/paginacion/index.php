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

		$tamanio_paginas = 3;

		if (isset($_GET["pagina"]))
		{
			if ($_GET["pagina"] == 1) 
			{
				header("Location:index.php");
			}else{
				$pagina = $_GET["pagina"];
			}
		}else{
			$pagina = 1;
		}

		$empezar_desde = ($pagina - 1) * $tamanio_paginas;

		$sql = "SELECT * FROM datos_usuarios";

		$resultado = $base->prepare($sql);

		$resultado->execute(array());

		$num_fila = $resultado->rowCount();

		$total_paginas = ceil($num_fila / $tamanio_paginas);

		echo "numero de registros de la consulta " . $num_fila . "<br>";

		echo "Motramos " . $total_paginas . " registros por pagina <br>";

		echo "Mostrando la pagina " . $pagina . " de " . $total_paginas . "<br><br>";

		$resultado->closeCursor();


		$sql_limit = "SELECT * FROM datos_usuarios LIMIT $empezar_desde,$tamanio_paginas";

		$resultado = $base->prepare($sql_limit);

		$resultado->execute(array());

		while ($registro = $resultado->fetch(PDO::FETCH_ASSOC)): 

			echo "Id: " . $registro["Id"] . " " . "Nombre: " . $registro["Nombre"] . " "  . "Apellido: " . $registro["Apellido"] . " "  . "Direccion: " . $registro["Direccion"] . "<br>";

		endwhile;

	}catch(Exception $e){

		echo "Linea de error: " . $e->getLine();

	}

		for ($i = 1; $i<=$total_paginas ; $i++):

			echo " <a href='?pagina=" . $i . "'>" . $i . "</a>";

		endfor;

?>
</body>
</html>