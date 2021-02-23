<?php

    $nome = $_GET["nome"]; 

    $idade = $_GET["idade"];

    $ano_nascimento = date("Y") - $idade;

    echo "<h1>Olá, $nome, você nasceu em  $ano_nascimento</h1> <br>";

    if($idade > 60){
        echo "<h2> Você é do grupo de risco! Cuidado!</h2>";
    }