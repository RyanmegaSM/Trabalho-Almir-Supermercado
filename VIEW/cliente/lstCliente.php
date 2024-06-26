<?php
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Cliente.php';
use BLL\Cliente;

if (isset($_GET['busca']))
    $busca = $_GET['busca'];
else
    $busca = null;

$bllClt = new \BLL\Cliente();

if ($busca == null)
    $lstClt = $bllClt->Select();
else
    $lstClt = $bllClt->SelectNome($busca);

?>

<!DOCTYPE html>
<html lang="pt-br">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style2.css">
    <title>Lista de Clientes</title>
</head>

<body class="Back_Color">
    <?php include_once '../Menu.php'; ?>


    <section class="section_Color container">

        <h1 style="text-align:center;">Lista de Clientes</h1>

        <div class="row">
            <div class="input-field">
                <form action="../Cliente/lstCliente.php" method="GET" id="frmBuscaCliente" class="col s8">
                    <div class="input-field col s8">
                        <input type="text" placeholder="informe o nome do Cliente" class="form-control col s10"
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
                <th>Telefone</th>
                <th>Operações</th>
            </tr>

            <?php foreach ($lstClt as $clt) { ?>
                <tr>
                    <td> <?php echo $clt->getID(); ?> </td>
                    <td> <?php echo $clt->getNome(); ?> </td>
                    <td> <?php echo $clt->getCPF(); ?> </td>
                    <td> <?php echo $clt->gettelefone(); ?> </td>
                    <td>
                        <a class="btn-floating btn-small waves-effect waves-light green"
                            onclick="JavaScript:location.href='formEdtClt.php?id=' + '<?php echo $clt->getID(); ?>'">
                            <i class="material-icons">edit</i></a>

                        <a class="btn-floating btn-small waves-effect waves-light orange"
                            onclick="JavaScript:location.href='formDetClt.php?id=' + '<?php echo $clt->getID(); ?>'">
                            <i class="material-icons">details</i></a>

                        <a class="btn-floating btn-small waves-effect waves-light red"
                            onclick="JavaScript: remover( <?php echo $clt->getId(); ?> )">
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
                    name="action" onclick="JavaScript:location.href='formClt.php'">
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
        if (confirm('Excluir o Cliente ' + id + '?')) {
            location.href = 'remClt.php?id=' + id;
        }
    }
</script>