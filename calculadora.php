<?php

class Calculadora
{
    private $valor;
    function __construct($inicial)
    {
        $this->valor = $inicial;
    }
    function soma($novo)
    {
        return $this->valor += $novo;
    }
    function divide($novo)
    {
        return $this->valor /= $novo;
    }
};
$calc = new Calculadora(10);
echo $calc->soma(20) . "<br>";
echo $calc->divide(2);