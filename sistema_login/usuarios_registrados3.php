<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
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

	echo "Usuario: " . $_SESSION["usuario"] . "<br><br>";
?>

<p><a href="cierre.php">Cierre Sesión</a></p>

<p>Esto es información sólo para usuarios registrados.</p>

<a href="usuarios_registrados1.php">Volver</a>

</body>
</html>