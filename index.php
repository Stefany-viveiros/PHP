<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Revisão de Tipos primitivos em PHP</title>
</head>
<body>
    <h2>Tipos Primitivos - PHP</h2>

    <form method="post" action= "tipos.php">
        <label for="nome">Nome (string) </label>
        <input type="text" name ="nome" id="nome" /> 
        <br><br>

        <label for="idade">Idade (int) </label>
        <input type="text" name = "idade" id="idade"/>
        <br><br>

        <label for="ativo">Está ativo? (boolean): </label>
        <select name="ativo" id="ativo">
            <option value="1">Sim</option>
            <option value="2">Não</option>
        </select><br><br>

        <input type="submit" value="Enviar" />
    </form>

    <hr>
    <h3>Qual é o seu time?</h3>

    <form method="post" action= "time.php">
    <label for="time">Time:</label>
    <input type="text" name= "time" id="time /><br><br>
    


    <label for="ativo">Está ativo? (boolean): </label>
    <select name="ativo" id="ativo">
            <option value="1">Sim</option>
            <option value="2">Não</option>
        </select><br><br>

        <input type="submit" value="Enviar" />

    </form>

</body>
</html>