<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
		<h2>Login<h2>
		<form action="" method="post">
			Usuario:
			<input type="text" name="Usuario">
			<br>
			Senha:
			<input type="password" name="Senha">
			<br>
			<input type="submit" name="btnEnviar" value="Enviar">
			<?php
			$usuario=$_POST["Usuario"];
			$senha=$_POST["Senha"];
				if ($usuario=="2info" && $senha=="infolab") {
				session_start();
				$_session["Logado"]=$usuario;
				header("location:pagina2.php");
				}
			else
			{
				echo "Usuario ou senha inválido";
			}
			?>
</form>
</body>
</html>