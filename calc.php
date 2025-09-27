<?php
    $soma = 10 + 2;
    $sub = 10 - 2;
    $mult = 10 * 2;
    $div = 10 / 2;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calc</title>
</head>
<body>
    <h1>Calc</h1>

    <br>

    <a href="index.php">Home</a>
    <br><br>
    <strong>
        <?php 
        echo 'A soma é: '.$soma;
        ?>
        
    </strong>
    <h2>
        <?php echo 'A sub é:'.$sub;?>
    </h2>

    <br>

    <h3>
         <?php echo 'A mult é:'.$mult;?>
    </h3>

    <br>

    <h4>
        
        <?php echo 'A div é:'.$div;?>
    </h4>

    <br>

</body>
</html>
