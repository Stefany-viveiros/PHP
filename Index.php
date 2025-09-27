<?php
    $nome1 = "Fernando";
    $nome2 = "Caio";
    $nome3 = "Felipe";
    $idade = 65;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Curso de PHP</h1>
    <H2>Lista de nomes</H2>

    <ul>
        <li> <?php echo $nome1 .' '.$idade?> Anos </li>
        <li> <?php echo $nome2 ?> </li>
        <li> <?php echo $nome3 ?> </li>
    </ul>
</body>
</html>