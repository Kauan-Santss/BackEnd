<?php
    $listaDeNomes = array (
        1 => "Kauan",
        2 => "Pedro",
        3 => "Gabriel",
        4 => "José",
    );

    $nomes = "Kauan";

    function apaga_vetor($listaDeNomes, $nomes){
        foreach ($listaDeNomes as $key => $nomeLista){
            if($nomeLista == $nomes){
                echo "Encontrado <br>";
                unset ($listaDeNomes[$key]);
                print_r ($listaDeNomes);
                return $listaDeNomes;
            }
            else {
                echo "False";
                return $listaDeNomes;
            }
        }
    }

    apaga_vetor($listaDeNomes, $nomes);
    