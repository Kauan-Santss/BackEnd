<?php
function Nome(){
    $nome = ["peixe", "gamgorra", "Scar", "m4", "pistol"];
    $nomeEspecifico = "winx";
    if (in_array($nomeEspecifico, $nome)){
        echo "true <br>";
        print_r ($nome);
    }else{
        echo "false";
    }
}
Nome();
?>