<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

 if(isset($_COOKIE["idioma_seleccionado"])) {

 	if($_COOKIE["idioma_seleccionado"]=="es") {

		header("Location:spanish.php");

	}elseif($_COOKIE["idioma_seleccionado"]=="in") {

		header("Location:english.php");
	}
 }

?>
<table width="25%" border="0" align="center">
	<tr>
		<td colspan="2" align="center"><h1>Elige idioma</h1></td>
	</tr>
	<tr>
		<td align="center"><a href="creaCookie.php?idioma=es"><img src="img/esp.gif" width="90" height="60" alt=""></a></td>
		<td align="center"><a href="creaCookie.php?idioma=in"><img src="img/ing.jpg" width="90" height="60" alt=""></a></td>
	</tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
</body>
</html>