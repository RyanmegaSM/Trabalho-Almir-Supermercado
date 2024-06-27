<?php
namespace DAL;

include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Funcionario.php';

class Funcionario
{
    public function Select()
    {
        $sql = "Select * from funcionario;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        Conexao::desconectar();

        foreach ($registros as $linha) {
            $func = new \MODEL\Funcionario();
            $func->setId($linha['id']);
            $func->setNome($linha['nome']);
            $func->setcpf($linha['cpf']);
            $func->setCargo_Id($linha['cargo_id']);
            $func->settelefone($linha['telefone']);
            $lstFunc[] = $func;
        }

        return $lstFunc;


    }

    public function SelectByID(int $id)
    {
        $sql = "Select * from funcionario where id=?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();

        $func = new \MODEL\Funcionario();
        $func->setId($linha['id']);
        $func->setNome($linha['nome']);
        $func->setcpf($linha['cpf']);
        $func->setCargo_Id($linha['cargo_id']);
        $func->settelefone($linha['telefone']);

        return $func;

    }

    public function Insert(\MODEL\Funcionario $funcionario)
    {
        $sql = "INSERT INTO funcionario (nome, cpf, cargo_id, telefone) VALUES ('{$funcionario->getnome()}','{$funcionario->getcpf()}', '{$funcionario->getCargo_Id()}','{$funcionario->gettelefone()}');";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        Conexao::desconectar();

        return $result;
    }

    public function Update(\MODEL\Funcionario $funcionario)
    {
        $sql = "UPDATE funcionario SET nome = ?, cpf = ?, cargo_id = ?, telefone = ? WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($funcionario->getNome(), $funcionario->getCPF(), $funcionario->getCargo_Id(), $funcionario->gettelefone(), $funcionario->getID()));
        Conexao::desconectar();

        return $result;

    }

    public function Delete(int $id)
    {
        $sql = "delete from funcionario WHERE id = ?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        Conexao::desconectar();

        return $result;

    }

    public function SelectNome(string $nome)
    {

        $sql = "select * from funcionario WHERE nome like  '%" . $nome . "%' order by nome;";


        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql);


        $lstClt = null;
        foreach ($result as $linha) {

            $funcionario = new \MODEL\Funcionario();

            $funcionario->setId($linha['id']);
            $funcionario->setNome($linha['nome']);
            $funcionario->setcpf($linha['cpf']);
            $funcionario->setCargo_Id($linha['cargo_id']);
            $funcionario->settelefone($linha['telefone']);

            $lstFunc[] = $funcionario;

        }
        return $lstFunc;

    }

}
?>