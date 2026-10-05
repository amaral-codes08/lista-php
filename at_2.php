<?php
function inverterTexto($texto)
{
    return strrev($texto);
}

$textoCoisado = "Joinville esporte clube vai subir pra serie C";

echo "Texto original: " . $textoCoisado;
echo "<br>Texto invertido: " . inverterTexto($textoCoisado);
echo "<br>Quantidade de caracteres: " . strlen($textoCoisado);
?>