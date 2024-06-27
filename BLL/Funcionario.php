<?php
namespace BLL;

include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\DAL\Funcionario.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\BLL\Cargo.php';
use DAL;

class Funcionario
{
    public function Select()
    {
        $dalFunc = new \DAL\Funcionario();
        return $dalFunc->Select();
    }

    public function SelectByID(int $id)
    {
        $dalFunc = new \DAL\Funcionario();
        return $dalFunc->SelectByID($id);
    }

    public function Insert(\MODEL\Funcionario $funcionario)
    {
        $dalFunc = new \DAL\Funcionario();

        $bllCar = new \BLL\Cargo();
        $cargo = $bllCar->SelectByID($funcionario->getCargo_id());
        $quantidade = $cargo->getQtdfunc();
        $quantidade++;
        $cargo->setQtdfunc($quantidade);
        $bllCar->Update($cargo);

        return $dalFunc->Insert($funcionario);
    }

    public function Update(\MODEL\Funcionario $funcionario)
    {
        $dalFunc = new \DAL\Funcionario();

        return $dalFunc->Update($funcionario);
    }

    public function Delete(int $id)
    {
        $dalFunc = new \DAL\Funcionario();

        return $dalFunc->Delete($id);
    }

    public function SelectNome(string $nome)
    {
        $dalFunc = new \DAL\Funcionario();
        return $dalFunc->SelectNome($nome);
    }

}
?>