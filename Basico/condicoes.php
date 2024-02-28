<?php

$idade = 21;

echo "Você só pode entrar se for maior de 18 anos" .PHP_EOL;

if ($idade >= 18) {
    echo "Você tem $idade anos. Pode entrar". PHP_EOL;
} else {
    echo "Você não idade suficiente". PHP_EOL;
}

// Operador OR ou || 
// if ($idade >= 18 || $idade >= 16) {
//     echo "Você tem $idade anos. Pode entrar". PHP_EOL;
// } else {
//     echo "Você não idade suficiente". PHP_EOL;
// }

// -----------------------------------------------------

// Operador AND ou &&
// if ($idade >= 18 && $idade >= 16) {
//     echo "Você tem $idade anos. Pode entrar". PHP_EOL;
// } else {
//     echo "Você não idade suficiente". PHP_EOL;
// }

// Ternaario 
//  $variavel = $condicao ? $valorSeVerdadeiro : $valorSeFalso;
$idade = 15;
$mensagem = $idade < 18 ? 'Você é menor de idade' : 'Você é maior de idade';
echo $mensagem;