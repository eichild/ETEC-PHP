<!DOCTYPE html>
<html>
	<head>
		<title>Radio button</title>
	</head>
<body>
	<?php
		$escolha=$_POST["RDBSexo"];
			if($escolha=="M")
				{
					echo ("Masculino");
				}
			else
				{
					echo("Feminino");
				}
			?>
	</body>
</html>