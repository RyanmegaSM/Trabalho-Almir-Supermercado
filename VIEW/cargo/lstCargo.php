<?php
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Cargo.php';
use BLL\Cargo;

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else
    $busca = null;

$bllCar = new \BLL\Cargo();

if ($busca == null)
    $lstCar = $bllCar->Select();
else
    $lstCar = $bllCar->SelectNome($busca);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Listar Cargos</title>
</head>

<body class="Back_Color">
    <?php include_once '../Menu.php'; ?>

    <section class="section_Color container">
        <h1 style="text-align: center;">Lista de Cargos</h1>

        <div class="row">
            <div class="input-field">
                <form action="../Cargo/lstCargo.php" method="GET" id="frmBuscaCargo" class="col s8">
                    <div class="input-field col s8">
                        <input type="text" placeholder="informe o nome do Cargo" class="form-control col s10"
                            id="txtBusca" name="busca">
                        <button class="btn waves-effect waves-light green col m1" type="submit" name="action">
                            <i class="material-icons right">search</i></button>
                    </div>
                </form>
            </div>
        </div>


        <table class="highlight">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Salario</th>
                <th>Quantidade de Funcionarios</th>
                <th>Funções</th>
            </tr>

            <?php foreach ($lstCar as $car) { ?>
                <tr>
                    <td> <?php echo $car->getID(); ?> </td>
                    <td> <?php echo $car->getNome(); ?> </td>
                    <td> <?php echo $car->getDesc(); ?> </td>
                    <td> <?php echo "R$" . number_format($car->getSal(), 2, ",", "."); ?> </td>
                    <td> <?php echo $car->getQtdfunc(); ?> </td>
                    <td>


                        <a class="btn-floating btn-small waves-effect waves-light green"
                            onclick="JavaScript:location.href='formEdtCar.php?id=' + '<?php echo $car->getID(); ?>'">
                            <i class="material-icons">edit</i></a>

                        <a class="btn-floating btn-small waves-effect waves-light orange"
                            onclick="JavaScript:location.href='formDetCar.php?id=' + '<?php echo $car->getID(); ?>'">
                            <i class="material-icons">details</i></a>

                        <a class="btn-floating btn-small waves-effect waves-light red"
                            onclick="JavaScript: remover( <?php echo $car->getId(); ?> )">
                            <i class="material-icons">delete</i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <div class="center-align">
            <div class="center-align" style="display:inline-block;margin: 1rem 0;">
                <button class="btn-large waves-effect waves-light black center-align " type="" name="action"
                    onclick="JavaScript:history.back()">
                    <i class="material-icons">arrow_back</i>
                </button>
            </div>


            <div class="center-align " style="margin: 1rem 0;display:inline-block;">
                <button class="btn waves-effect waves-light btn-large light blue center-align " type="submit"
                    name="action" onclick="JavaScript:location.href='formCar.php'">
                    <i class="material-icons">add</i>
                </button>
            </div>
    </section>


    <?php include_once '../footer.php'; ?>
</body>

</html>
<script>
    function remover(id) {
        if (confirm('Excluir o Cliente ' + id + '?')) {
            location.href = 'remCar.php?id=' + id;
        }
    }
</script>