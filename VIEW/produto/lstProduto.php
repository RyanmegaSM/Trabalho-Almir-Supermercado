<?php
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Produto.php';


if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else
    $busca = null;

$bllPdto = new \BLL\Produto();

if ($busca == null)
    $lstPdto = $bllPdto->Select();
else
    $lstPdto = $bllPdto->SelectNome($busca);



?>


<!DOCTYPE html>
<html lang="pt-br">



<body>
    <?php include_once '../Menu.php'; ?>


    <section class="container">
        <h1 style="text-align: center;">Lista de Produtos </h1>

        <div class="row">
            <div class="input-field ">
                <form action="../Produto/lstProduto.php" method="GET" id="frmBuscaProduto" class="col s8">
                    <div class="input-field col s8">
                        <input type="text" placeholder="informe o nome do Produto" class="form-control col s10"
                            id="txtBusca" name="busca">
                        <button class="btn waves-effect waves-light green col m1" type="submit" name="action">
                            <i class="material-icons right">search</i></button>
                    </div>
                </form>
            </div>
        </div>


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
                    <td><?php echo "R$" . number_format($pdto->getValor(), 2, ",", "."); ?></td>
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
        <div class="center-align">
            <div class="center-align" style="display:inline-block;margin: 1rem 0;">
                <button class="btn-large waves-effect waves-light black center-align " type="" name="action"
                    onclick="JavaScript:history.back()">
                    <i class="material-icons">arrow_back</i>
                </button>
            </div>

            <div class="center-align " style="margin: 1rem 0;display:inline-block;">
                <button class="btn waves-effect waves-light btn-large light blue center-align " type="submit"
                    name="action" onclick="JavaScript:location.href='formProduto.php'">
                    <i class="material-icons">add</i>
                </button>
            </div>
            </divclass>


    </section>


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