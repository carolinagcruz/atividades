<?php

	$textoInicio = $_POST["inicio"];
	$textoFim = $_POST["fim"];

	$textoInicio = explode("/",$textoInicio);
	$textoFim = explode("/", $textoFim);

	$tempoInicio = mktime (0, 0, 0, $textoInicio[1],$textoInicio[0], $textoInicio[2]);
	$tempoFim = mktime (0, 0, 0, $textoFim[1], $textoFim[0],$textoFim[2]);

	$tempoAtual = time();
	
	echo "Hoje é um dia bom para compras?";

	if ($tempoAtual >= $tempoInicio and $tempoAtual <=$tempoFim) {

		echo "Sim" ;
	}

	else ($tempoAtual <= $tempoInicio and $tempoAtual >= $tempoFim) {

	echo "Não";
	}
?>
