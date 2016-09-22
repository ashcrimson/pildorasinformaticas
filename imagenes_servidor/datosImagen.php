<?php

	// Recibimos los datos de la imagen

	$nombre_imagen=$_FILES['imagen']['name'];

	$tipo_imagen=$_FILES['imagen']['type'];

	$tamagno_imagen=$_FILES['imagen']['size'];

	

	if ($tamagno_imagen <=3000000) {
		# code...
		if ($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif") {
			# code...
		
	// Ruta de la carpeta destino en servidor

	$carpeta_destino=$_SERVER['DOCUMENT_ROOT'] . '/pildoras/uploads/';

	//Movemos la imagen del directorio temporal al directorio escogido

	move_uploaded_file($_FILES['imagen']['tmp_name'], $carpeta_destino.$nombre_imagen);


	} else {

		echo "Sólo se pueden subir imágenes jpg/jpeg/png/gif";
	}

	} else {

		echo "El tamaño es demasiado grande";
	}

	require("datos_conexion.php");

	$conexion=mysqli_connect($db_host,$db_usuario,$db_contra);

	if(!$conexion) {

		echo "Fallo al conectar con la BBDD";

		exit();
	}

	mysqli_select_db($conexion, $db_nombre) or die ("No se encuentra la base de datos");

	mysqli_set_charset($conexion, "utf8");

	//$sql="INSERT INTO productos (FOTO) VALUES ('$nombre_imagen') ";

	$sql= "UPDATE productos SET FOTO='$nombre_imagen' WHERE CÓDIGOARTÍCULO='AR01'";

	$resultado=mysqli_query($conexion, $sql);

?>