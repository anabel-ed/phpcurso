<?php

	require_once("modelo/ProductosModelo.php");

	$productos = new ProductosModel();

	$matrizproductos = $productos->getProductos();

	require_once("vista/Productos_view.php");

?>