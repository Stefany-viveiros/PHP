
<?php
#Produto 
$produto1 = "Sabão";
$produto2 = "Chocolate em pó";
$produto3 = "Café";

#marca
$marca1 = "Tixan" ;
$marca2 = "Nestlê" ;
$marca3 = "Caiçara" ;

#Valor
$valor1 = 17.90;
$valor2 =14.90;
$valor3 = 14.90;

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
  
    <div class = "container">
        <h1>Produtos</h1>
        
        <table border = "1">
            <tr>
                <th>Produto</th>
                <th>Marca</th>
                <th>Valor</th>
            </tr>

            <tr>
                <td><?php echo $produto1 ?> </td>
                <td><?php echo $marca1 ?> </td>
                <td><strong> R$ </strong> <?php echo $valor1 ?> </td>
            </tr>

            <tr>
                <td><?php echo $produto2 ?> </td>
                <td><?php echo $marca2 ?> </td>
                <td><strong> R$ </strong> <?php echo $valor2 ?> </td>
            </tr>

            <tr>
                <td><?php echo $produto3 ?> </td>
                <td><?php echo $marca3 ?> </td>
                <td><strong> R$ </strong> <?php echo $valor3 ?> </td>
            </tr>
                
        </table>
</div>
</body>
</html>