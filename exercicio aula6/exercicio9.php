<?php

    function numeroPrimo(int $number){

        for($i = 2; $i < $number; $i ++){

            $sobraDivisão = $number % $i;

            if($sobraDivisão == 0){
                return "$number Não é primo";
            }

        }

        return "O $number é primo";

    }

    echo numeroPrimo(113);