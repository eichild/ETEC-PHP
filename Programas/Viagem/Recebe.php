<?php
	$origem=$_POST['cmdOrigem'];
	$destino=$_POST['cmdDestino'];

	if ($origem == "sp" && $destino == "rj" || $origem == "rj" && $destino == "sp") {
		echo ("Voce pagara R$ 138,00 reais por sua viagem!");
	}
else if($origem == "sp" && $destino == "pr" || $origem =="pr" && $destino =="sp" ){
	echo ("Você pagara R$ 159,00 reais por sua viagem!");
}
else if ($origem == "rj" && $destino == "pr" || $origem =="pr" && $destino =="rj" ) {
	echo ("Você pagara R$ 203,00 reais por sua viagem!");
}
elseif ($origem == $destino ) {
	echo ("Origem e destino invalidos");
}


	?>