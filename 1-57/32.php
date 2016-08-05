<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>arreglos</title>
	<link rel="stylesheet" href="">
</head>
<body>
<?php
	$alimentos = array("fruta"=> array("tropical"=>"kiwi",
										"citrico"=>"mandarina",
										"otros"=>"mazana"
										),
						"leche"=> array("animal"=>"vaca",
										"vegetal"=>"coco"
										),
						"carne"=> array("vacuno"=>"lomo",
										"porcino"=>"pata"
										)
						);
	//echo $alimentos["carne"]["vacuno"];

	/*foreach ($alimentos as $c_alimento => $alimento) {

		echo "$c_alimento:<br>";

		while (list($clave, $valor)=each($alimento)) {

			echo "----$clave = $valor<br>";

		}
		echo "<br>";
	}*/


	echo var_dump($alimentos);

?>
</body>
</html>