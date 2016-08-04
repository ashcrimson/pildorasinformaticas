<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	table, tr, td {
    border: 1px solid black;
    border-collapse: collapse;
}
	</style>
</head>
<body>
<?php
	

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	$usuario= mysqli_real_escape_string($conexion,$_GET["usu"]);
	$contra= mysqli_real_escape_string($conexion,$_GET["con"]);

	if(!$conexion) {

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	//$consulta="select * from productos where nombreartículo like '%$busqueda%'";

	$consulta="delete from usuarios where usuario = '$usuario' and contra='$contra'";

	echo "$consulta<br><br>";

	/*if(mysqli_query($conexion, $consulta)) {

		echo "Baja procesada";
	}*/
	mysqli_query($conexion, $consulta);

	if(mysqli_affected_rows($conexion)>0) {

		echo "Baja procesada";


	} else {

		echo "No se ha encontrado usuario";

	}


	mysqli_close($conexion);

	


?>
</body>
</html>