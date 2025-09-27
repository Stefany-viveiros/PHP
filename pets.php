
<?php
$pets = [
    ["nome" => "Rex", "tipo" => "Cachorro🐶", "idade" => 5, "preco" => 1200.00],
    ["nome" => "Mingau", "tipo" => "Gato🐈", "idade" => 3, "preco" => 850.50],
    ["nome" => "Piu Piu", "tipo" => "Pássaro🐦", "idade" => 2, "preco" => 150.00],
    ["nome" => "Nemo", "tipo" => "Peixe🐟", "idade" => 1, "preco" => 45.90],
    ["nome" => "Thor", "tipo" => "Hamster🐹", "idade" => 1.5, "preco" => 75.25]
];

$petsQuantidade = [];

foreach ($pets as $pet) {
    $pet["preco"] = number_format($pet["preco"], 2, ',', '.');
    $petsQuantidade[] = $pet;
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <title>Lista de Pets</title>
    <link href="https:/cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
</head>
<body>

<main class="container">
    <h2 class= "text-info text-center p-1 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-3"">📒Lista de Pets</h2>

    <table class="table table-bordered border-primary text-center">
        <tr>
            <th>Nome📋</th>
            <th>Tipo⁉️</th>
            <th>Idade (anos)🔢 </th>
            <th>Preço💰</th>
        </tr>
        <?php
        foreach ($petsQuantidade as $pet) {
            echo "<tr>";
            echo "<td>" . $pet["nome"] . "</td>";
            echo "<td>" . $pet["tipo"] . "</td>";
            echo "<td>" . $pet["idade"] . "</td>";
            echo "<td> R$ " . $pet["preco"] . "</td>";
            echo "</tr>";
        } 
   
        ?>
    </table>

    <article>
        <a href="index.php">Voltar</a>
    </article>
    </main>
    

</body>
</html>

