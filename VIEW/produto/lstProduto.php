<?php
// include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Produto.php';
/* $sql = "select * from produtos;";
 $con = \DAL\Conexao::conectar();
 $lstPdto = $con->query($sql);
*/
$bllPdto = new \BLL\Produto();
$lstPdto = $bllPdto->Select();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>

<body>
    <h1>Lista de Produtos </h1>
    <a class="btn-floating btn-large waves-effect waves-light red"><i class="material-icons"
            onclick="JavaScript:location.href='formProduto.php'">add</i></a>
    <table class="highlight">
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Validade</th>
            <th>Quantidade</th>
            <th>Funções</th>
        </tr>

        <?php foreach ($lstPdto as $pdto) { ?>
            <tr>
                <td><?php echo $pdto->getCodigo(); ?></td>
                <td><?php echo $pdto->getNome(); ?></td>
                <td><?php echo $pdto->getValor(); ?></td>
                <td><?php echo $pdto->getValidade(); ?></td>
                <td><?php echo $pdto->getQuantidade(); ?></td>
                <td>
                    <a class="btn-floating btn-small waves-effect waves-light blue"><i class="material-icons"
                            onclick="JavaScript:location.href='formProduto.php'">add</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light green"
                        onclick="JavaScript:location.href='formEditPdto.php?codigo=' + '<?php echo $pdto->getCodigo(); ?>'"><i
                            class="material-icons">edit</i></a>

                    <a class="btn-floating btn-small waves-effect waves-light orange"
                        onclick="JavaScript:location.href='formDetPdto.php?codigo=' + '<?php echo $pdto->getCodigo(); ?>'"><i
                            class="material-icons">details</i></a>


                    <a class="btn-floating btn-small waves-effect waves-light red"
                        onclick="JavaScript: remover( <?php echo $pdto->getCodigo(); ?>)"><i
                            class="material-icons">delete</i></a>

                </td>

            </tr>
        <?php } ?>
    </table>
</body>

</html>

<script>
    function remover(codigo) {
        if (confirm('Excluir o Produto ' + codigo + '?')) {
            location.href = 'remPdto.php?codigo=' + codigo;
        }
    }
</script>