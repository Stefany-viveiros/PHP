<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de time</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body class= "bg-ligth">
    <main class= "container">
        <h2 class ="mt-3 mb-3">Digite o nome de um time</h2>
        <form action="processa.php" method="post">

            <article class= "mb-3">
            <label for="time" class= "form-label">Nome do time:</label>
            <input type="text" class= "form-control" id="time" name= "time" require/>


            </article>
        <button type= "submit" class= "btn btn-primary">Verificar</button>
        </form>

    </main>
</body>
</html>