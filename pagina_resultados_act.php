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
	
	$busqueda=$_GET["buscar"];

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(!$conexion) {

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	$consulta="select * from productos where nombreartículo like '%$busqueda%'";


	$resultados=mysqli_query($conexion,$consulta);

	while ($fila=mysqli_fetch_assoc($resultados)) {
		echo "<form action='Actualizar.php' method='get'>";

		echo "<input type='text' name='c_art' value='". $fila['CÓDIGOARTÍCULO'] ."'><br>";

		echo "<input type='text' name='n_art' value='". $fila['NOMBREARTÍCULO'] ."'><br>";

		echo "<input type='text' name='seccion' value='". $fila['SECCIÓN'] ."'><br>";

		echo "<input type='text' name='importado' value='". $fila['IMPORTADO'] ."'><br>";

		echo "<input type='text' name='precio' value='". $fila['PRECIO'] ."'><br>";

		echo "<input type='text' name='fecha' value='". $fila['FECHA'] ."'><br>";

		echo "<input type='text' name='p_orig' value='". $fila['PAÍSDEORIGEN'] ."'><br>";

		echo "<input type='submit' name='enviand' value='Actualizar!'>";

		echo "</form>";
		
	}
	mysqli_close($conexion);

	


?>
</body>
</html>