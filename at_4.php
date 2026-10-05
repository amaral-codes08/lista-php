<?php

function criarSenha($quantidade)
{
    $simbolos = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!@#$%^&*()_+-=[]{}|;':,./<>?";
    $totalSimbolos = strlen($simbolos);
    $senha = "";

    for ($contador = 0; $contador < $quantidade; $contador++) {
        $posicao = random_int(0, $totalSimbolos - 1);
        $senha .= $simbolos[$posicao];
    }

    return $senha;
}

$numeroCaracteres = 1981;
$senhaGerada = criarSenha($numeroCaracteres);

echo "Quantidade de caracteres: " . $numeroCaracteres;
echo "<br>Senha gerada: " . $senhaGerada;

?>