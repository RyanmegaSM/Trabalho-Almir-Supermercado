<?php
namespace VIEW\funcionario;

include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Funcionario.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Funcionario.php';

$funcionario = new \MODEL\Funcionario();

$funcionario->setId($_POST['txtID']);
$funcionario->setNome($_POST['txtnome']);
$funcionario->setcpf($_POST['txtCpf']);
$funcionario->setCargo_Id($_POST['txtCargo']);
$funcionario->settelefone($_POST['txttel']);


$bllFunc = new \BLL\Funcionario();
$result = $bllFunc->Update($funcionario);

header("location: lstFuncionario.php");
?>