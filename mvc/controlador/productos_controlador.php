<?php

	require_once("modelo/productos_modelo.php");

	$producto=new productos_modelo();

	$matrizproductos=$producto->get_productos();

	require_once("vista/productos_view.php");
?>