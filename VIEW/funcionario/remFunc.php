<?php
namespace VIEW\funcionario;

include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Funcionario.php';

$id = $_GET['id'];


$bllFunc = new \BLL\Funcionario();
$result = $bllFunc->Delete($id);

header("location: lstFuncionario.php");
?>