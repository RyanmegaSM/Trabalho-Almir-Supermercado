<?php
namespace VIEW\funcionario;

include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Funcionario.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Funcionario.php';


function validarNome($nome)
{
    $nome = trim($nome);
    return (strlen($nome) >= 2 && strlen($nome) <= 40 && preg_match('/^[a-zA-ZÀ-ÿ ]+$/', $nome));
}

function validarCPF($cpf)
{
    $cpf = preg_replace('/[^0-9]/', '', $cpf);
    return (strlen($cpf) == 11 && is_numeric($cpf));
}


function validarCargoId($cargo_id)
{
    return (is_numeric($cargo_id) && $cargo_id > 0);
}

function validarTelefone($telefone)
{
    $telefone = preg_replace('/[^0-9]/', '', $telefone);
    return (strlen($telefone) >= 10 && strlen($telefone) <= 11 && is_numeric($telefone));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['txtnome'];
    $cpf = $_POST['txtCpf'];
    $cargo_id = $_POST['txtCargo'];
    $telefone = $_POST['txttel'];

    $nomeValido = validarNome($nome);
    $cpfValido = validarCPF($cpf);
    $cargoIdValido = validarCargoId($cargo_id);
    $telefoneValido = validarTelefone($telefone);

    if ($nomeValido && $cpfValido && $cargoIdValido && $telefoneValido) {
        $funcionario = new \MODEL\Funcionario();
        $funcionario->setNome($nome);
        $funcionario->setcpf($cpf);
        $funcionario->setCargo_Id($cargo_id);
        $funcionario->settelefone($telefone);


        $bllFunc = new \BLL\Funcionario();
        $result = $bllFunc->Insert($funcionario);

        if ($result->errorCode() == '00000') {
            header("Location: lstFuncionario.php");
            exit();
        } else {
            echo "Erro ao inserir funcionario: " . $result->errorInfo()[2];
        }
    } else {
        echo "<script>alert('Por favor, preencha todos os campos corretamente.'); window.history.back();</script>";
    }
} else {
    echo "<script>alert('Método de requisição inválido.'); window.history.back();</script>";
}

?>