<!DOCTYPE html>
<html>
	<head>
		<title>Ejercicio</title>
		<link href="estilos.css" rel="stylesheet" type="text/css">
	</head>
	<body>
		<div id="main">
			<header>
				<h1>Ejercicio</h1>
			</header>
			<div id="contenido">
				<p>Vamos a realizar la siguiente ecuación de segundo grado= "2x<sup>2</sup> + 7x + 3 = 0";</p>
				<br/>
								
				<p>
			<?php 
				
				$variableA=2;
				$variableB=7;
				$variablec=3;
				$resultadoX1=(-$variableB+pow(pow($variableB,2)-(4*$variableA*$variablec),0.5))/(2*$variableA);
				$resultadox2=(-$variableB-pow(pow($variableB,2)-(4*$variableA*$variablec),0.5))/(2*$variableA);
				echo"Resultado 1= $resultadoX1.";
				echo"<br/>";
				echo" Resultado 2= $resultadox2.";
				?>
				</p>
			</div>
		</div>
	</body>
</html>