<?php
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Cargo.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Cargo.php';

$id = $_GET['id'];


$bllCar = new BLL\Cargo();
$cargo = $bllCar->SelectByID($id);
?>



<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Editar Cargo</title>
</head>

<body class="mainVH_DetCargo">
    <?php include_once '../menu.php'; ?>

    <div class="mains">

        <div class="container green lighten-4 black -text cols 12">
            <div class="center green">
                <h1>Editar Cargo</h1>
            </div>
            <div class="row black-text">
                <form action="edtCar.php" method="POST" class="col s12" id="paddForm">

                    <div class="paddInput input-field col s8">
                        <label for="id" class="black-text bold">ID: <?php echo $cargo->getID() ?></label>
                        </br> </br>
                        <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                    </div>

                    <div class="paddInput input-field col s12">
                        <input placeholder="informe o Nome" id="nome" name="txtNome" type="text" class="validate"
                            value="<?php echo $cargo->getNome(); ?>">
                        <label id="nome" for="nome">Nome</label>
                    </div>

                    <div class="paddInput input-field col s12">
                        <input placeholder="informe a Descrição" id="desc" name="txtDesc" type="text" class="validate"
                            value="<?php echo $cargo->getDesc(); ?>">
                        <label id="desc" for="descricao">Descrição</label>
                    </div>

                    <div class="paddInput input-field col s12">
                        <input placeholder="informe o Salario" id="salario" name="txtSal" type="number" class="validate"
                            value="<?php echo $cargo->getSal(); ?>">
                        <label id="salario" for="salario">Salario</label>
                    </div>


                    <div class="paddInput input-field col s12">
                        <input placeholder="Funcionarios" id="qtdfunc" name="txtQtdfunc" type="number" class="validate"
                            value="<?php echo $cargo->getQtdfunc(); ?>">
                        <label id="qtdfunc" for="qtdfunc">Funcionarios</label>
                    </div>


                    <div class="brown lighten-3 center col s12">
                        <br>
                        <button class="waves-effect waves-light btn green" type="submit"
                            onclick="JavaScript:location.href='lstCargo.php'">
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
</body>

</html>