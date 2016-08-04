<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

	if (!$_COOKIE["idioma_seleccionado"]) {

		header("Location:pagina1.php");

	}elseif($_COOKIE["idioma_seleccionado"]=="es") {

		header("Location:spanish.php");

	}elseif($_COOKIE["idioma_seleccionado"]=="in") {

		header("Location:english.php");
	}
?>
</body>
</html>