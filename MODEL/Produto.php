<?php
    namespace MODEL;
    class Produto{
        private ?int $codigo;
        private ?string $nome;
        private ?float $valor;
        private ?\DateTime $validade;
        private ?int $quantidade;

        public function  __construct(){ }

        public function getCodigo(){
           return $this->codigo;
        }

        public function setCodigo(int $codigo){
            $this->codigo = $codigo;
        }

        public function getNome(){
            return $this->nome;
        }
        public function setNome(string $nome){
            $this->nome = $nome;
        }
        public function getValor(){
            return $this->valor;
        } 
        public function setValor(float $valor){
             $this->valor = $valor;   
        }
        public function getValidade(){
           return $this->validade;   
       }
       public function setValidade(\DateTime $validade){
        $this->validade = $validade;   
       }
       public function getQuantidade(){
        return $this->quantidade;   
       }
       public function setQuantidade(int $quantidade){
        $this->quantidade = $quantidade;   
   }





    }


?>