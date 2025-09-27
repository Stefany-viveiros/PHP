<?php
    $nome =$_post{"time"};
    $ativo = $_post["ativo"]== "1";


    echo "<p><strong>Nome: </strong>$nome</p>";
    echo "<p> <strong>time: </strong>$time</p>";
    echo "<p> <strong>Ativo: </strong>". ($ativo ? "true": "false") . "</p>";