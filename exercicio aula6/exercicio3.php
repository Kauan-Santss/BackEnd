<?php

function arrayInvertido($entrada, $saida){​
    $entrada = ["Olá", 1, 2, "Trinta"];
    $saida = array_reverse($entrada);
    $preserved = array_reverse($entrada, true);
    foreach ($saida as $valeu) {​
        echo "$valeu <br>";
    }​
}​
arrayInvertido($entrada, $saida);
?>
    
    
  
  

