<?php

	include("conexion.php");

	$id=$_GET["id"];

	$base->query("DELETE FROM DATOS_USUARIOS WHERE ID='$id'");

	header("Location:index.php");

?>