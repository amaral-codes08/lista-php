<?php

function esconderCpf($numero)
{
    $tamanho = strlen($numero);
    $numero = str_split($numero);

    for ($i = 0; $i < ($tamanho - 4); $i++) {
        $numero[$i] = "*";
    }

    $cpfFormatado = implode("", $numero);

    return $cpfFormatado;
}

$cpf = "98765432100";

echo "O CPF é: " . $cpf;

echo "<br>CPF Formatado: " . esconderCpf($cpf);

?>