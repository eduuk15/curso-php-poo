<?php

class Evento
{
    private $nome;
    private $local;
    private $data;
    private $inicio;
    private $fim;
    private $palestras;
    private $participantes;

    public function __construct ( $nome, $local, $data, $inicio, $fim)
    {
        $this->nome = $nome;
        $this->local = $local;
        $this->data = $data;
        $this->inicio = $inicio;
        $this->fim = $fim;
        $this->palestras = [];
        $this->participantes = [];
    }

    public function addPalestra(Palestra $palestra)
    {
        $this->palestras[] = $palestra;
    }

    public function getPalestras()
    {
        return $this->palestras;
    }

    public function addParticipante( Participante $oParticipante)
    {
        $this->participantes[] = $oParticipante;
    }

    public function getParticipantes()
    {
        return $this->participantes;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getLocal()
    {
        return $this->local;
    }

    public function getData()
    {
        return $this->data;
    }

    public function getInicio()
    {
        return $this->nome;
    }

    public function getFim()
    {
        return $this->fim;
    }


}