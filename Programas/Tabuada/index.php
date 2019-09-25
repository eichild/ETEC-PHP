<!DOCTYPE html>
<html>
<head>
	<title>Tabuada</title>
</head>
<body>
	<?php

	for($operador = 1; $operador <= 10; $operador++){
			echo "<table border=1>";
			echo "<tr>
					<td colspan='2'>Tabuada Do $operador</td>
					</tr>";

		for($i=1; $i <=10;$i++){
			$resp = $operador * $i;
			
			echo "<tr>
				<td>$operador x $i</td>
				<td>$resp</td>
				</tr>";
		}
	echo "</table><br>";
	}
?>
</body>
</html>