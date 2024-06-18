<?php
namespace BLL;

include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\DAL\Produto.php';


class Produto
{

    public function Select()
    {
        $dalPdto = new \DAL\Produto();
        return $dalPdto->Select();
    }


    public function SelectByCod(int $codigo)
    {
        $dalPdto = new \DAL\Produto();
        return $dalPdto->SelectByCod($codigo);
    }


    public function Insert(\MODEL\Produto $produto)
    {
        $dalPdto = new \DAL\Produto();

        return $dalPdto->Insert($produto);
    }

    public function Update(\MODEL\Produto $produto)
    {
        $dalPdto = new \DAL\Produto();

        return $dalPdto->Update($produto);
    }


}

?>