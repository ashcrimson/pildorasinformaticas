<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

<?php

	function ejecuta_consulta($labusqueda){

	//$busqueda=$_GET["buscar"];

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(!$conexion) {

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	$consulta="select * from productos where nombreartículo like '%$labusqueda%'";


	$resultados=mysqli_query($conexion,$consulta);
echo "<table>";
	while ($fila=mysqli_fetch_assoc($resultados)) {
		echo "<tr>";
		foreach($fila as $x => $x_value) {

		echo "<td>" .$x_value . "</td>";
		
	}
	echo "</tr>";
	}
echo "</table>";
	mysqli_close($conexion);
}

?>
</head>
<body>

<?php

	$mibusqueda=$_GET["buscar"];

	$mipag=$_SERVER["PHP_SELF"];

	if ($mibusqueda!=NULL) {
		
		ejecuta_consulta($mibusqueda);
	}else{

		echo "<form action='" . $mipag . "' method='get'>
		<label>Buscar:<input type='text' name='buscar'></label>

		<input type='submit' name='enviando' value='Dale!'>
		</form>";
	}
?>	
</body>
</html>