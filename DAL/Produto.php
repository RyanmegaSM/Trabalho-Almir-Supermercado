<?php
    namespace DAL; //Data Acess Layer
    include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\DAL\Conexao.php';
    include_once 'C:\xampp\htdocs\Trabalho-Almir-Supermercado\MODEL\Produto.php' ;



    class Produto{
       
        public function Select(){
            $sql = "Select * from produtos;"; 
            $con = Conexao::conectar();
            $dados = $con->query($sql);
            $con = Conexao::desconectar();

            foreach ($dados as $linha){
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
    }


?>