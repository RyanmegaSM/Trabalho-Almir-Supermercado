<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Adicionar Produtos</title>
</head>

<body class="mainVH">
    <?php include_once '../Menu.php'; ?>
    <div class="mains">


        <div class="container green lighten-4 black -text cols 12">
            <div class="center green ">

                <h1>Adicionar Produto</h1>

            </div>
            <div class="row black-text">
                <form action="insPdto.php" method="POST" class="col s12 " id="paddForm">


                    <div class="paddInput input-field col s12">
                        <input placeholder="Informe o nome do Produto" id="nome" name="txtNome" type="text"
                            class="validate">
                        <label for="nome">Nome</label>
                    </div>

                    <div class="paddInput input-field col s12">
                        <input placeholder="Informe o valor do Produto" id="valor" name="txtValor" type="text"
                            class="validate">
                        <label for="valor">Valor</label>
                    </div>

                    <div class="paddInput input-field col s12">
                        <input placeholder="Informe a quantidade de Produtos" id="quantidade" name="txtQuant"
                            type="number" class="validate">
                        <label for="quantidade">Quantidade</label>
                    </div>

                    <div class="paddInput input-field col s12">
                        <input placeholder="Informe a validade do Produto" id="validade" type="date" name="txtVali"
                            class="validate">
                        <label for="validade">Validade</label>
                    </div>

                    <div class="brown lighten-3 center col s12">
                        <br>
                        <button class="waves-effect waves-light btn green" type="save">
                            Salvar <i class="material-icons">save</i>
                        </button>
                        <button class="waves-effect waves-light btn red" type="reset">
                            Limpar <i class="material-icons">clear_all</i>
                        </button>
                        <button class="waves-effect waves-light btn blue" type="button"
                            onclick="javast:location.href='lstProduto.php'">
                            Voltar <i class="material-icons center">arrow_back</i>
                        </button>
                        <br>
                        <br>
                    </div>
                </form>


            </div>

        </div>
    </div>
    <?php include_once '../footer.php'; ?>
</body>

</html>