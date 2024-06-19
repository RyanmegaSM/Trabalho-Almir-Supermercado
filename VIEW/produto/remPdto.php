<?php
namespace VIEW\Produto;


include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Produto.php';

$codigo = $_GET['codigo'];





$bllPdto = new \BLL\Produto();
$result = $bllPdto->Delete($codigo);


header("location: lstProduto.php");



?>