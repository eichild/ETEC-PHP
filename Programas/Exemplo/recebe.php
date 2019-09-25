<?php

	echo "Dados do Cliente: <br>";
	$name= $_POST['name'];
	echo "Nome : $name <br>";
	//echo 'Nome:' .$name;

	$email= $_POST['email'];
	echo "Email : $email <br>";
	
	$datanas= $_POST['datanas'];
	echo "Data de nascimento : $datanas <br>";

	$salbruto= $_POST['salhora'] * $_POST['horatramp'];
	echo "Salario Bruto : $salbruto <br>";
?>