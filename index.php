<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h1 style >Bem vindos</h1>
    <br>
    <a href="calc.php"> Ir para a página calc</a>
    <br><br>

    <a href="cal.php"> 

    <?php echo "Olá PHP"?>

    <br><br>

    <?php echo "Stefany" ?>
    
    <?php
    $nome = "Stefany";
    $idade = 26;
    ?>

    <h2>
        <?php echo "Meu nome é ". $nome;?>
    </h2>

   <h3>
        <?php echo "Minha idade é ".$idade;?>
   </h3>

   <hr>

   <strong>
        <?php 
            $hora = new DateTime();
            echo $hora->format('H:i:s');

        ?>

   </strong>
    
</body>
</html>