<?php

	require_once("modelo/PersonasModelo.php");

	$personas = new PersonasModel();
	$matrizpersonas = $personas->getPersonas();
	
	require_once("vista/PersonasView.php");

?>
