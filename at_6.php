<?php

function transformarTemperatura($numero, $escalaInicial, $escalaFinal)
{
    switch ($escalaInicial) {
        case "F":
            $grausCelsius = ($numero - 32) * 5 / 9;
            break;

        case "K":
            $grausCelsius = $numero - 273.15;
            break;

        case "C":
            $grausCelsius = $numero;
            break;
    }

    switch ($escalaFinal) {
        case "F":
            return ($grausCelsius * 9 / 5) + 32;

        case "K":
            return $grausCelsius + 273.15;

        case "C":
            return $grausCelsius;
    }
}

$temperatura = 44;
$escalaOrigem = "C";
$escalaDestino = "F";

$resultado = transformarTemperatura(
    $temperatura,
    $escalaOrigem,
    $escalaDestino
);

echo "Temperatura original: " . $temperatura . "°" . $escalaOrigem;
echo "<br>Temperatura convertida: " . $resultado . "°" . $escalaDestino;

?>