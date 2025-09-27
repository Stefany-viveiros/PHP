<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class="bg-ligth">
    <main class= "container mt-5">
        <section class= "card shadow p-4">
            <h2>Verifique seu nome</h2>


            <form action="verifica.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Digite seu nome: </label>
                <input type="text" class="form-control" id="nome" name="nome"/>
            </div>
            <button type ="submit" class= "btn btn-primary">Enviar</button>
            </form>
        </section>

</main>
</body>
</html> 