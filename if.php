 <!DOCTYPE html>
 <html lang="pt-br">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estrutura de decisão</title>
 </head>
 <body>
    <h1>Estrutura de decisão</h1>

    <?php
        $idade = 16;
        
        if ($idade >= 18) {
            echo "Você tem $idade anos. Pode entrar";
        } else {echo "Você não tem 18 anos. Não pode entrar";}
    ?>

 </body>
 </html>