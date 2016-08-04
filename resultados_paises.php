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
	
	$pais = $_GET["buscar"];

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(!$conexion) {

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	$sql="SELECT CÓDIGOARTÍCULO, SECCIÓN, PRECIO, PAÍSDEORIGEN FROM PRODUCTOS WHERE PAÍSDEORIGEN=?";

	$resultado=mysqli_prepare($conexion, $sql);

	$ok=mysqli_stmt_bind_param($resultado, "s", $pais);

	$ok=mysqli_stmt_execute($resultado);

	if(!$ok) {

		echo "Error al ejecutar la consulta";

	} else {

		$ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);

		echo "Artículos encontrados: <br><br>";

		while (mysqli_stmt_fetch($resultado)) {
			
			echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
		}

		mysqli_stmt_close($resultado);
	}
	


?>
</body>
</html>