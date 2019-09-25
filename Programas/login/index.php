<?php
session_start();
	if(!isset($_session["logado"])){
		header("location:login.php");
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
	<meta charset="utf-8">
</head>
<body>
<h1>Bem Vindo<h1>
<a href="pagina2.php"><h5> Acessar pagina 2<h5>
<a href="#"><h6> Sair<h6>
</body>
</html>