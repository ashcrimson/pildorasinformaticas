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

$autenticado=false;

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

		$autenticado=true;

		if (isset($_POST["recordar"])) {
			
			setcookie("nombre_usuario", $_POST["login"], time()+86400);
		}


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

	if ($autenticado==false) {
		
		if(!isset($_COOKIE["nombre_usuario"])) {

			include("formulario.html");
		}
	}

	if (isset($_COOKIE["nombre_usuario"])) {
		
		echo "¡Hola " . $_COOKIE["nombre_usuario"] . "!";

	} elseif($autenticado) {

		echo "¡Hola " . $_POST["login"] . "!";
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

<?php

	if ($autenticado==true || isset($_COOKIE["nombre_usuario"])) {

		include("zona_registrados.html");
	}
?>

</body>
</html>