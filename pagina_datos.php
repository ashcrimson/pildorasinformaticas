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
	
	$usuario=$_GET["usu"];
	$contra=$_GET["con"];

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(!$conexion) {

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	//$consulta="select * from productos where nombreartículo like '%$busqueda%'";

	$consulta="select * from usuarios where usuario = '$usuario' and contra='$contra'";

	echo "$consulta<br><br>";

	$resultados=mysqli_query($conexion,$consulta);

	while ($fila=mysqli_fetch_assoc($resultados)) {
		
		echo "Bienvenido $usuario <br> Estos son tus datos: <br>";
		
		echo "<table><tr><td>";

		echo $fila['usuario'] . "</td><td>";
		echo $fila['contra'] . "</td><td>";
		echo $fila['tfno'] . "</td><td>";
		echo $fila['direccion'] . "</td><td></tr></table>";

		echo "<br><br>";
	}

	mysqli_close($conexion);

	


?>
</body>
</html>