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
	
	$c_art = $_GET["c_art"];
	$secc = $_GET["secc"];
	$n_art = $_GET["n_art"];
	$pre = $_GET["pre"];
	$fec = $_GET["fec"];
	$imp = $_GET["imp"];
	$p_ori = $_GET["p_ori"];

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(!$conexion) {

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	$sql="INSERT INTO PRODUCTOS (CÓDIGOARTÍCULO, SECCIÓN, NOMBREARTÍCULO, PRECIO, FECHA, IMPORTADO, PAÍSDEORIGEN) VALUES (?,?,?,?,?,?,?)";

	$resultado=mysqli_prepare($conexion, $sql);

	$ok=mysqli_stmt_bind_param($resultado, "sssssss", $c_art, $secc, $n_art, $pre, $fec, $imp, $p_orig);

	$ok=mysqli_stmt_execute($resultado);

	if(!$ok) {

		echo "Error al ejecutar la consulta";

	} else {

		//$ok=mysqli_stmt_bind_result($resultado, $codigo, $seccion, $precio, $pais);

		echo "Agregado nuevo registro";

		/*while (mysqli_stmt_fetch($resultado)) {
			
			echo $codigo . " " . $seccion . " " . $precio . " " . $pais . "<br>";
		}
*/
		mysqli_stmt_close($resultado);
	}
	


?>
</body>
</html>