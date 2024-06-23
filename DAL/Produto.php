<?php
namespace DAL;

include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\DAL\Conexao.php';
include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Produto.php';



class Produto
{

    public function Select()
    {
        $sql = "Select * from produtos;";
        $con = Conexao::conectar();
        $dados = $con->query($sql);
        Conexao::desconectar();

        foreach ($dados as $linha) {
            $pdto = new \MODEL\Produto();
            $pdto->setCodigo($linha['codigo']);
            $pdto->setNome($linha['nome']);
            $pdto->setValor($linha['valor']);
            $pdto->setValidade($linha['validade']);
            $pdto->setQuantidade($linha['quantidade']);
            $lstPdto[] = $pdto;
        }
        return $lstPdto;
    }

    public function SelectByCod(int $codigo)
    {
        $sql = "Select * from produtos where codigo=?; ;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($codigo));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        Conexao::desconectar();


        $pdto = new \MODEL\Produto();
        $pdto->setCodigo($linha['codigo']);
        $pdto->setNome($linha['nome']);
        $pdto->setValor($linha['valor']);
        $pdto->setValidade($linha['validade']);
        $pdto->setQuantidade($linha['quantidade']);


        return $pdto;
    }


    public function SelectNome(string $nome)
    {

        $sql = "select * from produtos WHERE nome like  '%" . $nome . "%' order by nome;";

        $pdo = Conexao::conectar();
        $query = $pdo->prepare($sql);
        $result = $pdo->query($sql);


        $lstPdto = null;
        foreach ($result as $linha) {

            $produto = new \MODEL\Produto();

            $produto->setCodigo($linha['codigo']);
            $produto->setNome($linha['nome']);
            $produto->setValor($linha['valor']);
            $produto->setValidade($linha['validade']);
            $produto->setQuantidade($linha['quantidade']);

            $lstPdto[] = $produto;

        }
        return $lstPdto;

    }



    public function Insert(\MODEL\Produto $produto)
    {
        $sql = "INSERT INTO produtos (nome, valor, quantidade, validade) VALUES ('{$produto->getNome()}', '{$produto->getValor()}', '{$produto->getQuantidade()}', '{$produto->getValidade()}');";

        $con = Conexao::conectar();
        $result = $con->query($sql);
        Conexao::desconectar();


        return $result;


    }

    public function Update(\MODEL\Produto $produto)
    {

        $sql = "UPDATE produtos SET nome = ?, valor = ?, quantidade = ?,  validade = ? WHERE codigo=? ";



        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($produto->getNome(), $produto->getValor(), $produto->getQuantidade(), $produto->getValidade(), $produto->getCodigo()));

        Conexao::desconectar();


        return $result;


    }


    public function Delete(int $codigo)
    {
        $sql = "DELETE from produtos  WHERE codigo=? ";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($codigo));
        Conexao::desconectar();


        return $result;


    }




}


?>