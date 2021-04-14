<?php

    function calculaMedia(array $notas){
        $soma = 0;

        foreach($notas as $nota){
            
            $soma += $nota;

        }

        $media = $soma / count($notas);

        return ($media);

    }

    $notasJoao = [100, 45, 0, 75, 80, 95];

    $mediaJoao = calculaMedia($notasJoao);

    echo "Média do João é: " .number_format($mediaJoao, 1);