<?php
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Funcionario.php';
use BLL\Funcionario;

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else
    $busca = null;

$bllFunc = new \BLL\Funcionario();

if ($busca == null)
    $lstFunc = $bllFunc->Select();
else
    $lstFunc = $bllFunc->SelectNome($busca);

?>

<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Lista de Funcionarios</title>
</head>

<body class="Back_Color">
    <?php include_once '../Menu.php'; ?>


    <section class="section_Color container">

        <h1 style="text-align:center;">Lista de Funcionarios</h1>

        <div class="row">
            <div class="input-field">
                <form action="../Funcionario/lstFuncionario.php" method="GET" id="frmBuscaFunc" class="col s8">
                    <div class="input-field col s8">
                        <input type="text" placeholder="informe o nome do Funcionario" class="form-control col s10"
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
                <th>CPF</th>
                <th>Cargo</th>
                <th>Telefone</th>
                <th>Operações</th>
            </tr>

            <?php foreach ($lstFunc as $func) { ?>
                <tr>
                    <td> <?php echo $func->getID(); ?> </td>
                    <td> <?php echo $func->getNome(); ?> </td>
                    <td> <?php echo $func->getCPF(); ?> </td>
                    <td> <?php echo $func->getCargo_Id(); ?> </td>
                    <td> <?php echo $func->gettelefone(); ?> </td>
                    <td>
                        <a class="btn-floating btn-small waves-effect waves-light green"
                            onclick="JavaScript:location.href='formEdtFunc.php?id=' + '<?php echo $func->getID(); ?>'">
                            <i class="material-icons">edit</i></a>

                        <a class="btn-floating btn-small waves-effect waves-light orange"
                            onclick="JavaScript:location.href='formDetFunc.php?id=' + '<?php echo $func->getID(); ?>'">
                            <i class="material-icons">details</i></a>

                        <a class="btn-floating btn-small waves-effect waves-light red"
                            onclick="JavaScript: remover( <?php echo $func->getId(); ?> )">
                            <i class="material-icons">delete</i></a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <div class="center-align">
            <div class="center-align" style="display:inline-block;margin: 1rem 0;">
                <button class="btn-large waves-effect waves-light black center-align " type="" name="action"
                    onclick="JavaScript:history.back()">
                    <i class="material-icons center">arrow_back</i>
                </button>
            </div>

            <div class="center-align " style="margin: 1rem 0;display:inline-block;">
                <button class="btn waves-effect waves-light btn-large light blue center-align " type="submit"
                    name="action" onclick="JavaScript:location.href='formFunc.php'">
                    <i class="material-icons center">add</i>
                </button>
            </div>
            </divclass>

    </section>

    <?php include_once '../footer.php'; ?>
</body>

</html>
<script>
    function remover(id) {
        if (confirm('Excluir o funcionario ' + id + '?')) {
            location.href = 'remFunc.php?id=' + id;
        }
    }
</script>