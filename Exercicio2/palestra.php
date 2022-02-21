<?php

class Palestra
{
    private $nome;
    private $data;
    private $turno;
    private $duracao;
    private $tema;
    private $sala;
    private $ministrante;
    private $participantes;

    public function __construct ( $nome, $data, $turno, $duracao, $tema, $sala )
    {
        $this->nome = $nome;
        $this->data = $data;
        $this->turno = $turno;
        $this->duracao = $duracao;
        $this->tema = $tema;
        $this->sala = $sala;
        $this->participantes = [];
    }

    public function setMinistrante( Ministrante $ministrante )
    {
        $this->ministrante = $ministrante;
    }

    public function getMinistrante()
    {
        return $this->ministrante;
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

    public function getData()
    {
        return $this->data;
    }

    public function getTurno()
    {
        return $this->turno;
    }

    public function getDuracao()
    {
        return $this->duracao;
    }

    public function getTema()
    {
        return $this->tema;
    }

    public function getSala()
    {
        return $this->sala;
    }
}