<?php
    include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\DAL\Conexao.php';
    $sql = "select * from produtos;";
    $con = \DAL\Conexao::conectar();
    $lstPdto = $con->query($sql);

    ?>

    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lista de Produtos</title>
    </head>
    <body>
        <h1>Lista de Produtos </h1>
        <table>
           <tr>
                <th>Codigo</th>
                <th>Nome</th>
                <th>Valor</th>
                <th>Validade</th>
                <th>Quantidade</th>
           </tr>

            <?php  foreach($lstPdto as $pdto){?>
                <tr>
                    <td><?php echo $pdto['codigo']; ?></td>
                    <td><?php echo $pdto['nome']; ?></td>
                    <td><?php echo $pdto['valor']; ?></td>
                    <td><?php echo $pdto['validade']; ?></td>
                    <td><?php echo $pdto['quantidade']; ?></td>
                </tr>
            <?php } ?>
        </table>
    </body>
    </html>