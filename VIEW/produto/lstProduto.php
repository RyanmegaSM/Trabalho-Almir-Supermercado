<?php
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Produto.php';



$bllPdto = new \BLL\Produto();
$lstPdto = $bllPdto->Select();

?>


<!DOCTYPE html>
<html lang="pt-br">



<body>
    <?php include_once '../Menu.php'; ?>

    <h1 style="text-align: center;">Lista de Produtos </h1>

    <table class="highlight">
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Valor</th>
            <th>Validade</th>
            <th>Quantidade</th>
            <th>Funções</th>



            <a class="btn-floating btn-large waves-effect waves-light black"><i class="material-icons"
                    onclick="JavaScript:location.href='../Menu.php'">arrow_back</i></a>


        </tr>

        <?php foreach ($lstPdto as $pdto) { ?>
            <tr>
                <td><?php echo $pdto->getCodigo(); ?></td>
                <td><?php echo $pdto->getNome(); ?></td>
                <td><?php echo $pdto->getValor(); ?></td>
                <td><?php echo $pdto->getValidade(); ?></td>
                <td><?php echo $pdto->getQuantidade(); ?></td>
                <td>


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
    <a class="btn-floating btn-large right waves-effect waves-light blue"><i class="material-icons"
            onclick="JavaScript:location.href='formProduto.php'">add</i></a>
    <a class="waves-effect waves-light btn-large light blue "><i class="material-icons"
            onclick="JavaScript:location.href='formProduto.php'">add</i></a>
    <?php include_once '../footer.php'; ?>

</body>

</html>

<script>
    function remover(codigo) {
        if (confirm('Excluir o Produto ' + codigo + '?')) {
            location.href = 'remPdto.php?codigo=' + codigo;
        }
    }
</script>