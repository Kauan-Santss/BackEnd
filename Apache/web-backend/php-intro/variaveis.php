<?php

$nome = "fulano de tal";

$idade = 19;

$anoNascimento = date("Y") - $idade;
/*
Exibir o nome do usuário e o seu ano de nascimento
*/

echo "Olá $nome, o seu ano de nascimento é $anoNascimento, portanto você tem $idade anos. <br>";

echo "Hoje é " . date("d/m/Y");