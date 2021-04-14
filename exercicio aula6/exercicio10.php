<?php

function comparacaoVetor(array $vetor, array $vetorComparado)
{
    foreach ($vetorComparado as $valorVetor2) {
        $encontrado = false;
        foreach ($vetor as $valorVetor1) {
            if ($valorVetor1 == $valorVetor2) {
                $encontrado = true;
                continue;
            }
        }
        if (!$encontrado) {
            return false;
        }
        return true;
    }
}

$vetor1 =  [1, 3, 5, 9, 14];
$vetor2 = [1, 5, 14];
if (comparacaoVetor($vetor1, $vetor2)) {
    echo "sim, está contido";
} else {
    echo "nao esta contido ";
}