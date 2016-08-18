<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<style>
	td {
		border: 1px dotted #ff0000;
	}
	
</style>
<table>
	<tr>
		<td>NOMBRE DEL ARTÍCULO</td>
	</tr>
<?php

	foreach ($matrizproductos as $registro) {
		
		echo "<tr><td>" . $registro["NOMBREARTÍCULO"] . "</td></tr>";
	}
?>	
</table>

</body>
</html>