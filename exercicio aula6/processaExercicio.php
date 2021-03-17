<?php

    $nome = $_POST["nomeUsuario"];
    $listaCidade = [
        1 => "Jandira",
        2 => "Itapevi",
        3 => "Barueri",
        4 => "Osasco",
        5 => "Santana de Panaíba",
        6 => "Carapicuiba",
    ];

    $cidadeSelecionada = $_POST["cidade"];

    // echo "Ola $nome, de $cidadeSelecionada";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../styles-global.css" />
  <title>Seja Bem-Vindo</title>
</head>
<body>
    <h1>Olá <em><?= $nome ?></em>, de <em><?= $cidadeSelecionada ?></em>. SEJA BEM VINDO!!!</h1>
</body>