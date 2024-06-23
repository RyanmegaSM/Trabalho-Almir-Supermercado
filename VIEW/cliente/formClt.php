<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Clientes</title>
</head>

<body>
    <?php include_once '../Menu.php'; ?>
    <div class="container #80cbc4 teal lighten-3 black-text col s12">
        <div class="center green">
            <h1>Adicionar Cliente</h1>
        </div>
        <div class="row">
            <form action="insClt.php" method="POST" class="col s12">
                <div class="input-field col s8">
                    <input placeholder="informe o Nome" id="nome" name="txtnome" type="text" class="validate">
                    <label id="nome" for="nome">Nome</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe o CPF" id="cpf" name="txtCpf" type="number" class="validate">
                    <label id="cpf" for="cpf">CPF</label>
                </div>
                <div class="input-field col s8">
                    <input placeholder="informe o Telefone" id="telenone" name="txttel" type="number" class="validate">
                    <label id="telefone" for="telefone">Telefone</label>
                </div>
                <div class="brown lighten-3 center col s12">
                    <br>
                    <button class="waves-effect waves-light btn green" type="submit"
                        onclick="JavaScript:location.href='lstCliente.php'">
                        Salvar <i class="material-icons">save</i>
                    </button>
                    <button class="waves-effect waves-light btn red" type="reset">
                        Limpar <i class="material-icons">clear_all</i>
                    </button>
                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='lstCliente.php'">
                        Voltar <i class="material-icons">arrow_back</i>
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