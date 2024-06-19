<?php
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Produto.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Produto.php';
$codigo = $_GET['codigo'];


$bllPdto = new BLL\Produto();
$produto = $bllPdto->SelectByCod($codigo);


?>


<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>


    <title>Detalhes de Produtos</title>



</head>

<body>
    <div class="container green lighten-4 black -text cols 12">
        <div class="center green ">

            <h1>Detalhes do Produto</h1>

        </div>
        <div class="row black-text">
            <div class="input-field col s6">
                <h5>Codigo: <?php echo $produto->getCodigo() ?></h5>
                <input type="hidden" name="txtCod" value=<?php echo $codigo; ?>>
            </div>

            <div class="input-field col s10">
                <h5>Nome: <?php echo $produto->getNome() ?></h5>
            </div>

            <div class="input-field col s8">
                <h5>Valor: <?php echo $produto->getValor() ?></h5>
            </div>

            <div class="input-field col s8">
                <h5>Quantidade: <?php echo $produto->getQuantidade() ?></h5>
            </div>

            <div class="input-field col s10">
                <h5>Validade: <?php echo $produto->getValidade() ?></h5>
            </div>
            <div class="brown lighten-3 center col s12">
                <br>
                <button class="waves-effect waves-light btn green" type="button"
                    onclick="JavaScript:location.href='formEditPdto.php?codigo=' + '<?php echo $produto->getCodigo(); ?>'">
                    Editar <i class="material-icons"></i>
                </button>


                <button class="waves-effect waves-light btn blue" type="button"
                    onclick="JavaScript:location.href='formProduto.php'">
                    Adicionar <i class="material-icons"></i>
                </button>


                <button class="waves-effect waves-light btn red" type="button"
                    onclick="JavaScript: remover( <?php echo $produto->getCodigo(); ?>)">
                    Deletar <i class="material-icons"></i>
                </button>

                <button class="waves-effect waves-light btn orange" type="button"
                    onclick="javaScript:location.href='lstProduto.php'">
                    Voltar <i class="material-icons"></i>
                </button>




                <br>
                <br>
            </div>
        </div>

    </div>
</body>

</html>

<script>
    function remover(codigo) {
        if (confirm('Excluir o Produto ' + codigo + '?')) {
            location.href = 'remPdto.php?codigo=' + codigo;
        }
    }
</script>