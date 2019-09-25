<?php
session_start();
	if(!isset($_session["logado"])){
		header("location:index.php");
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>pagina2</title>
</head>
<body>
<h1>Pagina 2<h1>
<a href="index.php"><h5>Voltar ao menu<h5>
</body>
</html>