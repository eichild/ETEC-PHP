<?php

	$reais= $_POST['reais'];	
	$dolar= '3.11';
	$dolar = number_format($dolar,2,",",".");
	$conversao= $reais / $dolar;
	$conversao = number_format($conversao,2,",",".");

	echo "Reais : R$$reais <br>";
	echo "Dólar : $$dolar <br>";
	echo "Conversão é : $$conversao"

?>