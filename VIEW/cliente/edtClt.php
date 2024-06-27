<?php
namespace VIEW\cliente;

include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Cliente.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Cliente.php';

$cliente = new \MODEL\Cliente();

$cliente->setId($_POST['txtID']);
$cliente->setNome($_POST['txtNome']);
$cliente->setcpf($_POST['txtCpf']);
$cliente->settelefone($_POST['txttel']);




$bllClt = new \BLL\Cliente();
$result = $bllClt->Update($cliente);

header("location: lstCliente.php");
?>