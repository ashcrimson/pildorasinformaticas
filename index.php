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
	
	try {

		$base=new PDO('mysql::host=localhost; dbname=pruebas', 'root', '');

		echo "Conexión OK";

	}catch(Exception $e) {

		die('Error: ' . $e->GetMessage());

	} finally {

		$base=null;
	}
?>

	


</body>
</html>