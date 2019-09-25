<!DOCTYPE html>
<html>
	<head>
			<title>Calculadora</title>
	</head>
<body>
	<?php
	$valor1= $_POST['valor1'];
	$valor2= $_POST['valor2'];
	$escolha=$_POST["rdbCalc"];
	if($escolha=="+")
	{
		$resultado=$valor1+$valor2;
		echo("O resultado da conta é: $resultado");
	}
	if($escolha=="-")
	{
		$resultado=$valor1-$valor2;
		echo("O resultado da conta é: $resultado");
	}
	if($escolha=="*")
	{
		$resultado=$valor1*$valor2;
		echo("O resultado da conta é: $resultado");
	}
	if($escolha=="/")
	{
		$resultado=$valor1/$valor2;
		echo("O resultado da conta é: $resultado");
	}
	else
	{
		echo("Escolha invalida");
	}
	?>
</body>
</html>