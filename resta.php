<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Calculo de numeros</title>
</head>
<body>
	<h1>Calculo de numeros</h1> <br><br>

	<?php

		//Recogemos las variables introducidas y confirmamos que son numeros

		$num3=0;

		if(is_numeric($_GET["numero1"]) and is_numeric($_GET["numero2"])){

			$num1 = floatval($_GET["numero1"]);
			$num2 = floatval($_GET["numero2"]);

			if(isset($_GET["opcion"])){

				$operacion=$_GET["opcion"];

			}else{

				$operacion="";

			}

			switch ($operacion) {
				
				
				case "Multiplicar":
					$num3 = $num1 * $num2;
					echo "La multiplicacion de ambos numeros es ".$num3;
					break;
				
			}


		}else{

			echo "Uno de los valores no es un numero. No se ha realizado la operacion";

		}





	?>
</body>
</html>