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
    <title>Detalhes Cargo</title>
</head>

<body class="mainVH_DetCargo">
    <?php include_once '../Menu.php'; ?>

    <div class="mains">

        <div class="container green lighten-4 black -text cols 12">
            <div class="center green">
                <h1>Detalhes do Cargo</h1>
            </div>

            <div class="row black-text">

                <div class="input-field col s8">
                    <h5>ID: <?php echo $cargo->getID() ?></h5>
                    <input type="hidden" name="txtID" value=<?php echo $id; ?>>
                </div>

                <div class="input-field col s5">
                    <h5>Nome: <?php echo $cargo->getNome() ?></h5>
                </div>
                <div class="input-field col s12">
                    <h5>Descrição: <?php echo $cargo->getDesc() ?></h5>
                </div>
                <div class="input-field col s12">
                    <h5>Salário: <?php echo $cargo->getSal() ?></h5>
                </div>
                <div class="input-field col s12">
                    <h5>Quantidade de Funcionários: <?php echo $cargo->getQtdfunc() ?></h5>
                </div>
                <div class="brown lighten-3 center col s12">
                    <br>

                    <button class="waves-effect waves-light btn green" type="button"
                        onclick="JavaScript:location.href='formEdtCar.php?id=' + '<?php echo $cargo->getID(); ?>'">Editar
                        <i class="material-icons">edit</i>
                    </button>


                    <button class="waves-effect waves-light btn red" type="button"
                        onclick="JavaScript: remover( <?php echo $cargo->getId(); ?> )">Deletar <i
                            class="material-icons">delete</i>
                    </button>

                    <button class="waves-effect waves-light btn blue" type="button"
                        onclick="JavaScript:location.href='formCar.php'">
                        Novo<i class="material-icons">add</i>
                    </button>




                    <button class="waves-effect waves-light btn orange" type="button"
                        onclick="JavaScript:location.href='lstCargo.php'">
                        Voltar <i class="material-icons">arrow_back</i>
                    </button>
                    <br>
                    <br>
                </div>
            </div>
        </div>


    </div>


    <?php include_once '../footer.php'; ?>
</body>

</html>
<script>
    function remover(id) {
        if (confirm('Excluir o Cargo ' + id + '?')) {
            location.href = 'remCar.php?id=' + id;
        }
    }
</script>