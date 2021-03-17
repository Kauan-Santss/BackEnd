<?php

    // echo $_POST["carros"];
    $listaCarros = [
        1 => "Ferrari",
        2 => "Lamborghini",
        3 => "Porshe",
        4 => "Fusca",
        5 => "Opala",
        6 => "Brasilia",
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SELECT</title>
</head>
<body>
    <form method="POST">
    <label>Carros</label>
        <select name="carros" id="carros" required>
            <option value="">SELECIONE</option>
               <?php
                    foreach ($listaCarros as $key => $carros){
               ?>
               <option valeu="<?= $key ?>"> <?= $carros ?> </option>
               <?php
                    }
                ?>
        </select>
        <button>Enviar</button>
    </form>
</body>
</html>