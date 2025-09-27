<?php
    $nome = $_post{"nome"};
    $idade = (int)$_post["idade"];
    $ativo = $_post["ativo"] == "1";

    echo "<p><strong>Nome: </strong>$nome</p>";
    echo "<p> <strong>Idade: </strong>$idade</p>";
    echo "<p> <strong>Ativo: </strong>" . ($ativo?: true": "false") . "</p>";
?>