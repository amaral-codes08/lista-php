<?php
function ordenarNomes($texto)
{
	$nomes = explode(",", $texto);
	sort($nomes);

	return $nomes;
}

$nomesCoisados = ordenarNomes("Luiza Baptista,Lucas Amaral,Gabriel Barbosa,Bruno Henrique");
echo implode(", ", $nomesCoisados);
?>