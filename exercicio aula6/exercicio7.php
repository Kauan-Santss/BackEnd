<?php

    function maiorMenor(array $inteiros){

        $maior = $inteiros[0];
        $menor = $inteiros[0];

        foreach ($inteiros as $number){

            if($number > $maior){
                $maior = $number;
            }

            if($number < $menor){
                $menor = $number;
            }
        }

        return ["Maior" => $maior, 
                "Menor" => $menor];

    }
    $notas = [100, 90, 92, 50, 150,10];

    print_r (maiorMenor($notas));