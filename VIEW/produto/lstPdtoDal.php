<?php
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\DAL\Produto.php';
use DAL\Produto;

$dalPdto = new DAL\Produto();
$lstPdto = $dalPdto->Select(); 




?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos usando MODEL</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    
 
    <table class ="highlight">
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Validade</th>
            <th>Quantidade</th>
        </tr>

        <?php
        foreach($lstPdto as $pdto){ ?>
            <tr>
                <td><?php echo $pdto->getCodigo(); ?></td>
                <td><?php echo $pdto->getNome(); ?></td>
                <td><?php echo $pdto->getValor(); ?></td>
                <td><?php echo $pdto->getValidade(); ?></td>
                <td><?php echo $pdto->getQuantidade(); ?></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>