<style>
	h1{
		text-align:center;
	}

	table{
		background-color:#FFC;
		padding:5px;
		border:#666 5px solid;
	}
	
	.no_validado{
		font-size:18px;
		color:#F00;
		font-weight:bold;
	}
	
	.validado{
		font-size:18px;
		color:#0C3;
		font-weight:bold;
	}


</style>

<?php

	if(isset($_POST["enviando"])) {

		$edad=$_POST["edad_usuario"];

		$nombre=$_POST["nombre_usuario"];

		switch (true) :

			case $edad<=18:
				
				echo "Eres menor de edad";

				//break;

			case $edad<=40:

				
				echo "Eres joven";

				//break;
			
			case $edad<=65:
				
				echo "Eres maduro";

				//break;

			default:
				
				echo "Cuídate";
				
		endswitch;
	}

		/*if ($edad<=18) {

			echo "Eres menor de edad";
		}else if($edad<=40) {

			echo "Eres joven";
		}else if ($edad<=65) {

			echo "eres maduro";
		}else {

			echo "Cuídate";
		}
	}
	*/
?>