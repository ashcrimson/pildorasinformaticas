<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

<?php

if (isset($_COOKIE["prueba"])) {

	echo $_COOKIE["prueba"];

}else {

	echo "La cookie no se ha creado";
}
	
?>	
</body>
</html>