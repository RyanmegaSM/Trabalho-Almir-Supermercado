<?php

namespace MODEL;

class Funcionario
{
    private ?int $id;
    private ?string $nome;
    private ?int $cpf;
    private ?int $cargo_id;
    private ?int $telefone;


    public function __construct()
    {
    }

    public function getID()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCPF()
    {
        return $this->cpf;
    }

    public function getCargo_Id()
    {
        return $this->cargo_id;
    }

    public function gettelefone()
    {
        return $this->telefone;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    public function setcpf(int $cpf)
    {
        $this->cpf = $cpf;
    }

    public function setCargo_Id(int $cargo_id)
    {
        $this->cargo_id = $cargo_id;
    }

    public function settelefone(int $telefone)
    {
        $this->telefone = $telefone;
    }
}

?>