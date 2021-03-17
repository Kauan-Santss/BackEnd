
<?php

    // echo $_POST["carros"];
    $listaCidade = [
        1 => "Jandira",
        2 => "Itapevi",
        3 => "Barueri",
        4 => "Osasco",
        5 => "Santana de Panaíba",
        6 => "Carapicuiba",
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades</title>
</head>
<body>
    <form method="POST" action="processaExercicio.php">
    <label for="nome">Nome</label>
    <input type="text" name="nomeUsuario" id="nome">
    <label>Cidade</label>
        <select name="cidade" id="cidade" required>
            <option value="">SELECIONE</option>
               <?php
                    foreach ($listaCidade as $key => $cidade){
               ?>
               <option valeu="<?= $key ?>"> <?= $cidade ?> </option>
               <?php
                    }
                ?>
        </select>
        <button>Enviar</button>
    </form>
</body>
</html>