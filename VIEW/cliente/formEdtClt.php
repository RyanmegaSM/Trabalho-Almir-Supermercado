<?php
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Cliente.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Cliente.php';

$id = $_GET['id'];


$bllClt = new BLL\Cliente();
$cliente = $bllClt->SelectByID($id);
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Editar Clientes</title>

</head>

<body class="mainVH">
    <?php include_once '../Menu.php'; ?>
    <div class="mains">

        <div class="container green lighten-4 black -text cols 12">
            <div class="center green">
                <h1>Editar Cliente</h1>
            </div>
            <div class="row black-text">
                <form action="edtClt.php" method="POST" class="col s12" id="paddForm">
                    <div class="paddInput input-field col s12">
                        <label for="id" class="black-text bold">ID: <?php echo $cliente->getID() ?></label>
                        </br> </br>
                        <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                    </div>

                    <div class="paddInput input-field col s12">
                        <input placeholder="informe o Nome" id="nome" name="txtnome" type="text" class="validate"
                            value="<?php echo $cliente->getNome(); ?>">
                        <label id="nome" for="nome">Nome</label>
                    </div>
                    <div class="paddInput input-field col s12">
                        <input placeholder="informe o CPF" id="cpf" name="txtCpf" type="number" class="validate"
                            value="<?php echo $cliente->getCPF(); ?>">
                        <label id="cpf" for="cpf">CPF</label>
                    </div>
                    <div class="paddInput input-field col s12">
                        <input placeholder="informe o Telefone" id="telenone" name="txttel" type="number"
                            class="validate" value="<?php echo $cliente->gettelefone(); ?>">
                        <label id="telefone" for="telefone">Telefone</label>
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


    </div>

    <?php include_once '../footer.php'; ?>
</body>

</html>