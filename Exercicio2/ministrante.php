<?php

class Ministrante
{
    private $nome;
    private $idade;
    private $altura;

    public function __construct ( $nome, $idade, $altura)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->altura = $altura;
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

}

