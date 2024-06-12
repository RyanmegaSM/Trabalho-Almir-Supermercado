<?php
   include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\Conexao.php' ;
   include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Produto.php' ;


   $sql = "Select * from produtos;"; 
   $con = Conexao::conectar();
   $dados = $con->query($sql);


   foreach ($dados as $linha){
    $pdto = new \MODEL\Produto();
    $pdto->setCodigo($linha['codigo']);
    $pdto->setNome($linha['nome']);
    $pdto->setValor($linha['valor']);
    $pdto->setValidade($linha['validade']);
    $pdto->setQuantidade($linha['quantidade']);
    $lstpdto[] = $pdto;
   }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos usando MODEL</title>
</head>
<body>
    <h1>Lista de Produtos</h1>
    <table>
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Validade</th>
            <th>Quantidade</th>
        </tr>

        <?php
        foreach($lstpdto as $pdto){ ?>
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