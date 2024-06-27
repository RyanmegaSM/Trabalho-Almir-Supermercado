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
                            class="validate" required pattern="^[A-Za-zÀ-ÿ\s]{2,30}$"
                            title="Nome deve ter entre 2 e 30 caracteres e conter apenas letras e espaços">
                        <label id="nome" for="nome">Nome</label>
                    </div>

                    <div class="input-field col s12">
                        <input placeholder="informe a Descrição" id="descricao" name="txtDesc" type="text"
                            class="validate" required pattern="^[A-Za-zÀ-ÿ\s]{2,50}$"
                            title="Descrição deve ter entre 2 e 50 caracteres e conter apenas letras e espaços">
                        <label for="descricao">Descrição</label>
                    </div>

                    <div class="input-field col s12">
                        <input placeholder="informe o Salario" id="salario" name="txtSal" type="text" class="validate"
                            step="0.01" required min="0" title="Salário deve ser um número entre 1 e 9999999">
                        <label for="descricao">salario</label>
                    </div>
                    <div class="input-field col s12">
                        <input placeholder="informe a Quantidade de funcionarios" id="qtdfunc" name="txtQtdfunc"
                            type="number" class="validate" required min="0" max="9999"
                            title="Quantidade de funcionários deve ser um número entre 0 e 9999">
                        <label for="compra">Quantidade de funcionarios</label>
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

    <script>
        function validateForm() {
            const nome = document.getElementById('nome').value;
            const descricao = document.getElementById('descricao').value;
            const salario = document.getElementById('salario').value;
            const qtdfunc = document.getElementById('qtdfunc').value;

            const nomeRegex = /^[A-Za-z\s]{2,30}$/;
            const descricaoRegex = /^[A-Za-z\s]{2,50}$/;
            const salarioRegex = /^\d{1,7}$/;
            const qtdfuncRegex = /^\d{1,4}$/;

            if (!nomeRegex.test(nome)) {
                alert("Nome deve ter entre 2 e 30 caracteres e conter apenas letras e espaços");
                return false;
            }

            if (!descricaoRegex.test(descricao)) {
                alert("Descrição deve ter entre 2 e 50 caracteres e conter apenas letras e espaços");
                return false;
            }

            if (!salarioRegex.test(salario)) {
                alert("Salário deve ser um número entre 1 e 9999999");
                return false;
            }

            if (!qtdfuncRegex.test(qtdfunc)) {
                alert("Quantidade de funcionários deve ser um número entre 1 e 9999");
                return false;
            }

            return true;
        }
    </script>


</body>

</html