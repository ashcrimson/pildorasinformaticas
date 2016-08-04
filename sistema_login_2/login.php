<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style>
	
	h1, h2{
		text-align: center;
	}		

	table {
		width: 25%;
		background-color: #ffc;
		border: 2px dotted #f00;
		margin: auto;
	}

	.izq {
		text-align: right;
	}

	.der {
		text-align: left;
	}

	td {
		text-align: center;
		padding: 10px;
	}
</style>
</head>
<body>
<?php

if (isset($_POST["enviar"])) {
try {

	$base=new PDO("mysql:host=localhost; dbname=pruebas", "root", "");

	$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$sql="SELECT * FROM usuarios_pass WHERE USUARIOS= :login AND PASSWORD= :password";

	$resultado=$base->prepare($sql);

	$login=htmlentities(addslashes($_POST["login"]));

	$password=htmlentities(addslashes($_POST["password"]));

	$resultado->bindValue(":login", $login);

	$resultado->bindValue(":password", $password);

	$resultado->execute();

	$numero_registro=$resultado->rowCount();

	if($numero_registro!=0) {

		//echo "<h2>Adelante!!</h2>";

		session_start();

		$_SESSION["usuario"]=$_POST["login"];

		//header("location:usuarios_registrados1.php");


	} else {

		//header("location:login.php");

		echo "Error. Usuario o contraseña incorrectos";
	}

}catch (Exception $e) {

	die("Error: " . $e->getMessage());

}
}
?>
<?php

if(!isset($_SESSION["usuario"])) {

include('formulario.html');

} else {

	echo "Usario: " . $_SESSION["usuario"];
}

?>

<h2>CONTENIDO DE LA WEB</h2>
<table width="800" border="0">
	<tr>
		<td><img src="imagenes/1.png" width="300" height="116" alt=""></td>
		<td><img src="imagenes/2.png" width="300" height="116" alt=""></td>
	</tr>
	<tr>
		<td><img src="imagenes/3.jpg" width="300" height="116" alt=""></td>
		<td><img src="imagenes/4.jpg" width="300" height="116" alt=""></td>
	</tr>
</table>

</body>
</html>