<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ejercicio 01 - Operaciones con PHP</title>
</head>
<body>
	<form method="post" action="">
		Ingresar valor 1: <br>	<input type="text" name="valor1"><br>
		Ingresar valor 2: <br>	<input type="text" name="valor2"><br>
		Resultado : <br>
		<input type="submit" name="Suma" value="Suma">
	</form>

<?php
	$numero1=$_POST['valor1'];
	$numero2=$_POST['valor2'];
		$suma=$numero1+$numero2;
		echo "El resultado de la suma es : ".$suma;
?>
</body>
</html>