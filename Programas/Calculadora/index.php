<!DOCTYPE html>
<html>
	<head>
		<title>Calculadora</title>
	</head>
<body>
		<form action="recebe.php" method ="post">
		<label>Informe o primeiro valor a ser usado na conta:</label>
		<input type="number" name="valor1">
		<br>
		<label>Informe o segundo valor a ser usado na conta:</label>
		<input type="number" name="valor2">
		<br>
			Selecione:
		<br>
		<input type="radio" name="rdbCalc" value="+">Soma<br>
		<input type="radio" name="rdbCalc" value="-">Subtração<br>
		<input type="radio" name="rdbCalc" value="*">Multiplicação<br>
		<input type="radio" name="rdbCalc" value="/">Divisão<br>
		<input type="Submit" name="btnEnviar">

</body>
</html>