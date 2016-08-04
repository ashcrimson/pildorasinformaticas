<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
	table, th, tr, td {
		border: 1px solid;
		border-collapse: collapse;
	}

	td, th {
		padding: 25px;
	}
	</style>
</head>
<body>

<?php

	session_start();

	if(!isset($_SESSION["usuario"])) {

		header("Location:login.php");
	}
?>

<h1>Bienvenidos Usuarios</h1>

<?php

	echo "Hola: " . $_SESSION["usuario"] . "<br><br>";
?>

<p><a href="cierre.php">Cierre Sesión</a></p>
<table>
	<tr>
		<th colspan="3">Zona usuarios Registrados</th>
	</tr>
	<tr>
		<td><a href="usuarios_registrados2.php">Página 1</a></td>
		<td><a href="usuarios_registrados3.php">Página 2</a></td>
		<td><a href="usuarios_registrados4.php">Página 3</a></td>
	</tr>
</table>
</body>
</html>