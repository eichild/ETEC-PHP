<!DOCTYPE html>
<html>
<head>
	<title> Viagem</title>
</head>
<body>
	<h1>
		Orçamento de sua viagem
	</h1>

	
	<form action="Recebe.php" method="post">

	Origem:
	<select name="cmdOrigem">
	<option value="sp">São Paulo</option>
	<option value="rj">Rio de janeiro</option>
	<option value="pr">Curitiba</option>
	</select>
<br>
	
	Destino:
	<select name="cmdDestino">
	<option value="sp">São Paulo</option>
	<option value="rj">Rio de janeiro</option>
	<option value="pr">Curitiba</option>
	</select>
<br>
	<input type="submit" name="btnCalcular" value="Calcular">
</body>
</html>