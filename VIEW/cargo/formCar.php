<!DOCTYPE html>
<html lang="pt-Br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Adicionar Cargos</title>
</head>

<body class="mainVH">
    <?php include_once '../Menu.php'; ?>
    <div class="mains">

        <div class="container green lighten-4 black -text cols 12">
            <div class="center green">
                <h1>Adicionar Cargo</h1>
            </div>

            <div class="row  black-text">
                <form action="insCar.php" method="POST" class="col s12" id="paddForm">
                    <div class="input-field col s12">
                        <input placeholder="informe o Nome do Cargo" id="nome" name="txtNome" type="text"
                            class="validate">
                        <label id="nome" for="nome">Nome</label>
                    </div>

                    <div class="input-field col s12">
                        <input placeholder="informe a Descrição" id="descricao" name="txtDesc" type="text"
                            class="validate">
                        <label for="descricao">Descrição</label>
                    </div>

                    <div class="input-field col s12">
                        <input placeholder="informe o Salario" id="salario" name="txtSal" type="number"
                            class="validate">
                        <label for="descricao">salario</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="informe a Quantidade de funcionarios" id="qtdfunc" name="txtQtdfunc"
                            type="number" class="validate">
                        <label for="compra">Quantidade de funcionarios</label>
                    </div>

                    <div class="brown lighten-3 center col s12">
                        <br>
                        <button class="waves-effect waves-light btn green" type="submit">
                            Gravar <i class="material-icons">save</i>
                        </button>
                        <button class="waves-effect waves-light btn red" type="reset">
                            Limpar <i class="material-icons">clear_all</i>
                        </button>
                        <button class="waves-effect waves-light btn blue" type="button"
                            onclick="JavaScript:location.href='lstCargo.php'">
                            Voltar <i class="material-icons">arrow_back</i>
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

</html