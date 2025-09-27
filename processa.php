<?php include 'times_especiais.php'?>




<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado do Time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body class ="bd-light">
    <main class="container">
        <section class ="card shadow p-4">
        <h2 class="mb-4 text-success text-center">Resultado</h2>

        <?php
            $time = $_POST['time'];

            echo "<div class= 'mb-2'><strong> $time </strong> </div>";

            switch ($time) {


                case "Bangu":
                case "Paulista":
                echo "<span class='text-primary'>{$timesEspeciais[$time]}</span>";
                break;
        
            default:
            echo "<span class='text-success'> Bem vindo ao campeonato, $time!</span>";

            } 
               
        
        ?>

        </section>
        
        
    
    </main>
    
    
</body>
</html>