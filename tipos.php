<?php
    // Tipos primitivos

    // String
        $nome = "Stefany";
        echo "Nome: ".$nome ." " ."Tipo: ".getType(value: $nome) ."<hr>";

        //Inteiro (Integer)
        $idade = 26;
        echo "Idade: " .$idade . " Anos " . "Tipo: " .getType(value: $idade) . "<hr>";
        
        //Ponto flutuante (Float)
        $preco = 19.90;
        echo "Preço: " .$preco . " " . "Tipo: " .getType (value: $preco) . "<hr>";
        
        //Bollean (Boolean)
        $temCarro = true;
        echo "Tem carro? " .$temCarro . "Tipo: " .getType(value: $temCarro) . "<hr>";
        
        //Null
        $vazio = null;
        echo "Vazio:" .$vazio. "Tipo: " .getType(value: $vazio) . "<hr>";
    
        // Array
        $cores = ["Vermelho", "azul", "verde"];
        echo "cores:";
        print_r ($cores);
        echo "Tipo: " .getType(value: $cores);
        echo "<hr>";
    
    
    
    
    
    ?>