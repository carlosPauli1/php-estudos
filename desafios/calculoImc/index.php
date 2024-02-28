<?php

$peso= 79.5;
$altura= 1.75;
$resultado = $peso / $altura ** 2;

echo "Seu IMC é de $resultado. Você está com o IMC "; 

if ($resultado < 18) {
    echo "Abaixo do esperado";
} elseif ($resultado > 18 && $resultado < 25) {
    echo "Dentro do esperado";
}
else {
    echo "Acima do esperado ";
}