<?php
namespace VIEW\Produto;

include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Produto.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Produto.php';


function validarNome($nome)
{
    $nome = trim($nome);
    return (strlen($nome) >= 2 && strlen($nome) <= 40 && preg_match('/^[a-zA-ZÀ-ÿ ]+$/', $nome));
}

function validarValor($valor)
{
    return (is_numeric($valor) && $valor > 0);
}

function validarQuantidade($quantidade)
{
    return (is_numeric($quantidade) && intval($quantidade) == $quantidade && $quantidade > 0);
}

function validarValidade($validade)
{
    if (preg_match('/^\d{4}-\d{2}-\d{2}$/', $validade)) {
        list($ano, $mes, $dia) = explode('-', $validade);
        if (checkdate($mes, $dia, $ano)) {
            $dataAtual = date('Y-m-d');
            return ($validade > $dataAtual);
        }
    }
    return false;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['txtNome'];
    $valor = $_POST['txtValor'];
    $quantidade = $_POST['txtQuant'];
    $validade = $_POST['txtVali'];

    $nomeValido = validarNome($nome);
    $valorValido = validarValor($valor);
    $quantidadeValida = validarQuantidade($quantidade);
    $validadeValida = validarValidade($validade);

    if ($nomeValido && $valorValido && $quantidadeValida && $validadeValida) {
        $produto = new \MODEL\Produto();
        $produto->setNome($nome);
        $produto->setValor($valor);
        $produto->setQuantidade($quantidade);
        $produto->setValidade($validade);

        $bllProduto = new \BLL\Produto();
        $result = $bllProduto->Insert($produto);

        if ($result->errorCode() == '00000') {
            header("Location: lstProduto.php");
            exit();
        } else {
            echo "Erro ao inserir produto: " . $result->errorInfo()[2];
        }
    } else {
        echo "<script>alert('Por favor, preencha todos os campos corretamente.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Método de requisição inválido.'); window.history.back();</script>";
}
?>