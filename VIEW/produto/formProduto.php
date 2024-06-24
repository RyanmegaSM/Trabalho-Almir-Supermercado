<!DOCTYPE html>
<html lang="pr-br">

<script>
    function validarFormularioPdto() {
        var nome = document.getElementById('nome').value;
        var valor = document.getElementById('valor').value;
        var quantidade = document.getElementById('quantidade').value;
        var validade = document.getElementById('validade').value;

        // Validar o nome
        if (nome.length < 2 || nome.length > 40 || !/^[a-zA-ZÀ-ÿ ]+$/.test(nome)) {
            alert('Nome inválido. Deve conter apenas letras, entre 2 e 40 caracteres.');
            return false;
        }

        // Verifique se o valor é um número positivo
        if (isNaN(valor) || valor <= 0) {
            alert('O valor do produto deve ser um número positivo.');
            return false;
        }

        if (!Number.isInteger(Number(quantidade)) || quantidade <= 0) {
            alert('A quantidade do produto deve ser um número inteiro positivo.');
            return false;
        }

        // Verifique se a validade é uma data válida e no futuro
        var dataAtual = new Date();
        var dataValidade = new Date(validade);
        if (isNaN(dataValidade.getTime()) || dataValidade <= dataAtual) {
            alert('A validade do produto deve ser uma data válida no futuro.');
            return false;
        }


        return true;
    }
</script>


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
                <form action="insPdto.php" method="POST" class="col s12 " id="paddForm" onsubmit="return
                    validarFormularioPdto()">


                    <div class="paddInput input-field col s12">
                        <input placeholder="Informe o nome do Produto" id="nome" name="txtNome" type="text"
                            class="validate" required minlength="2" maxlength="40" pattern="[a-zA-ZÀ-ÿ ]+">
                        <label for="nome">Nome</label>
                    </div>

                    <div class="paddInput input-field col s12">
                        <input placeholder="Informe o valor do Produto" id="valor" name="txtValor" type="text"
                            step="0.01" class="validate" required min="0.01">
                        <label for="valor">Valor</label>
                    </div>

                    <div class="paddInput input-field col s12">
                        <input placeholder="Informe a quantidade de Produtos" id="quantidade" name="txtQuant"
                            type="number" class="validate" required min="1">
                        <label for="quantidade">Quantidade</label>
                    </div>

                    <div class="paddInput input-field col s12">
                        <input placeholder="Informe a validade do Produto" id="validade" type="date" name="txtVali"
                            class="validate" required>
                        <label for="validade">Validade</label>
                    </div>

                    <div class="brown lighten-3 center col s12">
                        <br>
                        <button class="waves-effect waves-light btn green" type="submit">
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