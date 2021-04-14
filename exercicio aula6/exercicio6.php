<?php

function getKey (array $vetor){
    $chaves = [];
    foreach ($vetor as $key => $value) {
        $chaves[] = $key;
    }
    return $chaves;
}

$vetoresChaves = [
    "chave1" => "valor1", 
    999 => "valor2",
    "abobrinha" => "valor3"
];

$vetorDeChaves = getKey($vetoresChaves);

print_r($vetoresChaves);