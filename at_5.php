<?php

function verificarFrase($frase)
{
    $totalPalavras = 0;
    $totalCaracteres = 0;
    $totalVogais = 0;
    $totalConsoantes = 0;
    $estaNaPalavra = false;

    $frase = str_split(strtolower($frase));

    foreach ($frase as $letra) {
        $totalCaracteres++;

        if ($letra == " ") {
            $estaNaPalavra = false;
        } else if (!$estaNaPalavra) {
            $totalPalavras++;
            $estaNaPalavra = true;
        }

        if (strpos("aeiou", $letra) !== false) {
            $totalVogais++;
        } else if (strpos("bcdfghjklmnpqrstvwxyz", $letra) !== false) {
            $totalConsoantes++;
        }
    }

    return [
        "palavras" => $totalPalavras,
        "caracteres" => $totalCaracteres,
        "vogais" => $totalVogais,
        "consoantes" => $totalConsoantes
    ];
}

$fraseEscolhida = "Eu odeio de programar em PHP";
$informacoes = verificarFrase($fraseEscolhida);

echo "Texto: " . $fraseEscolhida;
echo "<br>Palavras: " . $informacoes["palavras"];
echo "<br>Caracteres: " . $informacoes["caracteres"];
echo "<br>Vogais: " . $informacoes["vogais"];
echo "<br>Consoantes: " . $informacoes["consoantes"];

?>