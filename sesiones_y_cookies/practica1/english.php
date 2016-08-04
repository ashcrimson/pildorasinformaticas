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
<h1>7 Wonders of the World</h1>	
<p>&nbsp;</p>
<p>Welcome to my example webpage. Then you will see an exhibition of the 7 Wonders of the World pictures</p>
<p>&nbsp;</p>
<table width="25%" border="0" align="center">
	<tr>
		<td><img src="img/chichenitza2.jpg" width="250" height="187" alt=""></td>
		<td><img src="img/ciudaddepetra1.jpg" width="250" height="187" alt=""></td>
		<td><img src="img/coliseoromano1.jpg" width="250" height="187" alt=""></td>
	</tr>
	<tr>
		<td>Chichen Itza</td>
		<td>Petra City</td>
		<td>Roman Coloseum</td>
	</tr>
	<tr>
		<td><img src="img/cristoredentor1.jpg" width="250" height="187" alt=""></td>
		<td><img src="img/machupicchu1.jpg" width="250" height="187" alt=""></td>
		<td><img src="img/murallachina1.jpg" width="250" height="187" alt=""></td>
	</tr>
	<tr>
		<td>Cristo Redentor</td>
		<td>Machu Picchu</td>
		<td>Great Wall of China</td>
	</tr>
	<tr>
		<td></td>
		<td><img src="img/tajmahal1.jpg" width="250" height="187" alt=""></td>
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