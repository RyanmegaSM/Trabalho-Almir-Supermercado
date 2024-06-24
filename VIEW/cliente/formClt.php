<!DOCTYPE html>
<html lang="pt-br">



<script>
    function validarFormulario() {
        var nome = document.getElementById('nome').value.trim();
        var cpf = document.getElementById('cpf').value.trim();
        var telefone = document.getElementById('telefone').value.trim();

        // Validar o nome
        if (nome.length < 2 || nome.length > 40 || !/^[a-zA-ZÀ-ÿ ]+$/.test(nome)) {
            alert('Nome inválido. Deve conter apenas letras, entre 2 e 40 caracteres.');
            return false;
        }

        // Validar o CPF
        if (cpf.length !== 11 || isNaN(cpf)) {
            alert('CPF inválido. Deve conter exatamente 11 dígitos numéricos.');
            return false;
        }

        // Validar o telefone
        if (telefone.length < 10 || telefone.length > 11 || isNaN(telefone)) {
            alert('Telefone inválido. Deve conter apenas números, entre 10 e 11 dígitos.');
            return false;
        }

        return true;
    }
</script>

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Adicionar Clientes</title>
</head>

<body class="mainVH">
    <?php include_once '../Menu.php'; ?>
    <div class="mains">

        <div class="container green lighten-4 black -text cols 12">
            <div class="center green">
                <h1>Adicionar Cliente</h1>
            </div>
            <div class="row black-text">
                <form action="insClt.php" method="POST" class="col s12" id="paddForm"
                    onsubmit="return validarFormulario()">

                    <div class="input-field col s12">
                        <input placeholder="informe o Nome" id="nome" name="txtnome" type="text" class="validate"
                            required minlength="2" maxlength="40" pattern="[a-zA-ZÀ-ÿ ]+">
                        <label for="nome">Nome</label>
                    </div>

                    <div class="input-field col s12">
                        <input placeholder="informe o CPF" id="cpf" name="txtCpf" type="number" class="validate"
                            required minlength="11" maxlength="11" pattern="[0-9]+">
                        <label for="cpf">CPF</label>
                    </div>

                    <div class="input-field col s12">
                        <input placeholder="informe o Telefone" id="telefone" name="txttel" type="number"
                            class="validate" required minlength="10" maxlength="11" pattern="[0-9]+">
                        <label for="telefone">Telefone</label>
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
                            onclick="JavaScript:location.href='lstCliente.php'">
                            Voltar <i class="material-icons">arrow_back</i>
                        </button>
                        <br>
                        <br>
                    </div>

                </form>

            </div>
        </div>
    </div class>
    <?php include_once '../footer.php'; ?>
</body>

</html>