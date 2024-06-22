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
    <title>Editar Produtos</title>
</head>

<body>
    <?php include_once '../Menu.php'; ?>
    <div class="container green lighten-4 black -text cols 12">
        <div class="center green ">

            <h1>Alterar Produto</h1>

        </div>
        <div class="row black-text">
            <form action="edtPdto.php" method="POST" class="col s12">
                <div class="input-field col s6">
                    <label for="codigo" class="black-text bold">Codigo: <?php echo $produto->getCodigo() ?></label>
                    </br> </br>
                    <input type="hidden" name="txtCod" value=<?php echo $codigo; ?>>

                    <div class="input-field col s10">
                        <input placeholder="Informe o nome do Produto" id="nome" name="txtNome" type="text"
                            class="validate" value="<?php echo $produto->getNome(); ?>">
                        <label for="nome">Nome</label>
                    </div>

                    <div class="input-field col s8">
                        <input placeholder="Informe o valor do Produto" id="valor" name="txtValor" type="number"
                            class="validate" value="<?php echo $produto->getValor(); ?>">
                        <label for="valor">Valor</label>
                    </div>

                    <div class="input-field col s8">
                        <input placeholder="Informe a quantidade de Produtos" id="quantidade" name="txtQuant"
                            type="number" class="validate" value="<?php echo $produto->getQuantidade(); ?>">
                        <label for="quantidade">Quantidade</label>
                    </div>

                    <div class="input-field col s10">
                        <input placeholder="Informe a validade do Produto" id="validade" name="txtVali" type="date"
                            class="validate" value="<?php echo $produto->getValidade(); ?>">
                        <label for="validade">Validade</label>
                    </div>
                    <div class="brown lighten-3 center col s12">
                        <br>
                        <button class="waves-effect waves-light btn green" type="submit">
                            Salvar <i class="material-icons"></i>
                        </button>
                        <button class="waves-effect waves-light btn red" type="reset">
                            Limpar <i class="material-icons"></i>
                        </button>
                        <button class="waves-effect waves-light btn blue" type="button"
                            onclick="javaScript:location.href='lstProduto.php'">
                            Voltar <i class="material-icons"></i>
                        </button>
                        <br>
                        <br>
                    </div>
            </form>
        </div>

    </div>
    <?php include_once '../footer.php'; ?>
</body>

</html>