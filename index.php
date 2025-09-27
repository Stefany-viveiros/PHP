<?php
    $frutas = ["Maça", "Banana", "Laranja", "Morango", "Pêra", "Carambola"];

    $alunos = [
        ["nome"=> "João", "idade" => 20, "nota" => 9.5],
        ["nome"=> "Juliana", "idade" => 21, "nota" => 7.5],
        ["nome"=> "Fernando", "idade" => 18, "nota" => 3.5],
        ["nome"=> "Ana", "idade" => 32, "nota" => 5],
    ];

    //Dados: string
    //preço: float
    //int: inteiro

    $produtos = [
        ["nome" => "Notebook", "preco" => 3500, "estoque" => 0],
        ["nome" => "Tablet", "preco" => 899.50, "estoque" => 8],
    ];

    $cursos = [
        "TI" => [
            ["nome" => "Programação Web", "duracao" => 6],
            ["nome" => "Banco de Dados", "duracao" => 4],
        ],
        "Administracao" => [
            ["nome" => "Gestão de Projetos", "duracao" => 31],
            ["nome" => "Marketing Digital", "duracao" => 4],
        ]
        
    ];


    //Funções auxiliares
    function formatarPreco($preco){
        return'R$' . number_format($preco, 2,',', '.');
    }

    function temEstoque ($quantidade){
        return $quantidade > 0;
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <h1 class="text-info ">Lista de Frutas</h1>
        <h2 class="text-danger">1. Array indexado simples</h2>

        <ul>
            <?php foreach($frutas as $fruta):?>
                <li> <?=$fruta ?></li>
            <?php endforeach; ?>
        </ul>

        <hr>
        <h3 class="text-danger"> 2. Array associado em tabela</h3>
        <table class=" table table-bordered border-primary">
            <tr>
                <th>Nome</th>
                <th>Idade</th>
                <th>Nota</th>
                <th>Situação</th>
            </tr>
            
            <?php foreach ($alunos as $aluno) : ?>
            <tr>
               <td><?=$aluno['nome'] ?></td>
               <td><?=$aluno['idade'] ?></td>
               <td><?=$aluno['nota'] ?></td>
               <td><?=$aluno['nota']>= 6? "Aprovado" : "Reprovado" ?> </td>
            </tr>
            <?php endforeach; ?>

        </table>
        <hr>
        <h4 class="text-danger">Produtos com função</h4>
        <table class=" table table-bordered border-primary">
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Disponivel</th>

        <?php foreach ($produtos as $produto) : ?>
                <tr>
                    <td><?=$produto['nome'] ?></td>
                    <td><?=formatarPreco($produto['preco']) ?></td>
                    <td><?=$produto['estoque'] ?></td>
                    <td style="color: <?= temEstoque($produto['estoque']) ? 'green' : 'red'?>">
                    <?= temEstoque($produto['estoque']) ? 'Sim' : 'Não' ?> </td>
                </tr>
        <?php endforeach; ?>
                </tr>
        </table>
        <hr>

        <h5 class ="mb-4">Array multidimensional complexo</h5>
        <?php foreach ($cursos as $area => $cursosArea) : ?>
        <h6 class="text-info"> Área: <?php echo $area ?></h6>
        <table class="table table-bordered border-primary">
                <tr>
                    <th>Cursos</th>
                    <th>Duração (meses)</th>
                </tr>
                <?php foreach ($cursosArea as $curso) :?>
                <tr>
                    <td><?php echo $curso ['nome'] ?></td>
                    <td><?php echo $curso ['duracao'] ?></td>
                </tr>
        <?php endforeach; ?>
        </table>
        <?php endforeach; ?>

        <article class ="mt-4 mb-4">
            <a href="pets.php">Lista de pets</a>
        </article>            
    </main>
   
    


</body>
</html>

