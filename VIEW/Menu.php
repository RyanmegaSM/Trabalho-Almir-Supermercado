<?php
session_start();
if (!isset($_SESSION['login']))
    Header("Location: ../index.php");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


    <title>Menu Principal</title>
</head>

<body>
    <nav>
        <div class="nav-wrapper green">
            <a href="#" class="brand-logo right">
                <img src="../image/logo.png" alt="logo" width="130" height="65">
            </a>
            <ul id="nav-mobile" class="left hide-on-med-and-down">
                <li><a href="/Trabalho-Almir-Supermercado/VIEW/produto/lstProduto.php">Produtos</a></li>
                <li><a href="/Trabalho-Almir-Supermercado/VIEW/funcionario/lstFuncionario.php">Funcionarios</a></li>
                <li><a href="/Trabalho-Almir-Supermercado/VIEW/cliente/lstCliente.php">Clientes</a></li>
                <li><a href="/Trabalho-Almir-Supermercado/VIEW/cargo/lstCargo.php">Cargos</a></li>
                <li><a href="/Trabalho-Almir-Supermercado/VIEW/Logout.php">Sair</a></li>
            </ul>
        </div>
    </nav>
</body>

</html>