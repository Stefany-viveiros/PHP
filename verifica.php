<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <section class="card shadow p-4">

            <h1 class= "mb-4">Resultado da verificação</h1>

            <?php
            $nome = $_POST["nome"];

            echo "<div class='alert alert-success'>Olá, <strong> $nome </strong></div>";
            
            switch($nome) {
                case "João":
                    echo "<div class='alert alert-info'> Você é monitor da turma. </div>";
                    break;
                case "Maria":
                    echo "<div class='alert alert-info'> Você é representante da turma. </div>";
                    break;
            
                case "Giovanni":
                    echo "<div class='alert alert-danger'> Você é o professor da turma. </div>";
                    break;
                
                case "Adriana":
                    echo "<div class='alert alert-warning'> Você é a professora da turma. </div>";
                    break;

                default:
                    echo "<div class='alert alert-dark'> Bem vindo à aula!</div>";
                 }   
            ?>

        </section>
    <a href="programa.php" class="btn btn-link mt-3">Voltar</a>
    </main>
    
</body>
</html>