<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style>

table {
	text-align: center;
}

h1 {
	text-align: center;
}

p {
	font-size: 1.5em;
	color: #00f;
}
</style>
</head>
<body>
<?php

	if (!$_COOKIE["idioma_seleccionado"]) {

		header("Location:pag1.php");

	}
?>
<h1>7 Maravillas del mundo</h1>	
<p>&nbsp;</p>
<p>Bienvenid@ ami página de ejemplo. A continuación podrás ver una muestra de fotografía de las 7 maravillas del mundo</p>
<p>&nbsp;</p>
<table width="25%" border="0" align="center">
	<tr>
		<td><img src="img/chichenitza2.jpg" width="250" height="187" alt=""></td>
		<td><img src="img/ciudaddepetra1.jpg" width="250" height="187" alt=""></td>
		<td><img src="img/coliseoromano1.jpg" width="250" height="187" alt=""></td>
	</tr>
	
	<tr>
		<td>Chichen Itza</td>
		<td>Ciudad de Petra</td>
		<td>Coliseo Romano</td>
	</tr>
	<tr>
		<td><img src="img/cristoredentor1.jpg" width="250" height="187" alt=""></td>
		<td><img src="img/machupicchu1.jpg" width="250" height="187" alt=""></td>
		<td><img src="img/murallachina1.jpg" width="250" height="187" alt=""></td>
	</tr>
	<tr>
		<td>Cristo Redentor</td>
		<td>Machu Picchu</td>
		<td>Muralla China</td>
	</tr>
	<tr>
		<td></td>
		<td>><img src="img/tajmahal1.jpg" width="250" height="187" alt=""></td>
		<td></td>
	</tr>
	<tr>
		<td></td>
		<td>Taj Mahal</td>
		<td></td>
	</tr>
</table>
</body>
</html>