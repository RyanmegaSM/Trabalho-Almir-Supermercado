<?php
namespace VIEW\Produto;

include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Produto.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Produto.php';

$produto = new \MODEL\Produto();



$produto->setCodigo($_POST['txtCod']);
$produto->setNome($_POST['txtNome']);
$produto->setValor($_POST['txtValor']);
$produto->setQuantidade($_POST['txtQuant']);
$produto->setValidade($_POST['txtVali']);


$bllPdto = new \BLL\Produto();
$result = $bllPdto->Update($produto);


header("location: lstProduto.php");



?>