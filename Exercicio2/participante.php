<?php

class Participante
{
    private $nome;
    private $idade;
    private $altura;
    private $fone;
    private $endereco;
    private $email;

    public function __construct ( $nome, $idade, $altura, $fone, $endereco, $email)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
        $this->fone = $fone;
        $this->endereço = $endereco;
        $this->email = $email;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getIdade()
    {
        return $this->idade;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    public function getFone()
    {
        return $this->fone;
    }

    public function getEndereco()
    {
        return $this->endereco;
    }

    public function getEmail()
    {
        return $this->email;
    }

}
