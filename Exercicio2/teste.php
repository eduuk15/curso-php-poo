<?php

require_once 'evento.php';
require_once 'palestra.php';
require_once 'ministrante.php';
require_once 'participante.php';
$oMinistrante = new Ministrante('Mathias', 20, 1.8);
$oParticipante = new Participante('Eduardo Knopp', 17, 1.75, 47996264041, 'Rua Elma Lenzi,275', 'eduardo@conectra.com.br');
$oPalestra = new Palestra('Análise Menino do Pijama Listrado', '2022-01-01', 'Vespertino', '2h', 'Análise de livro', 120);
$oPalestra->setMinistrante($oMinistrante);
$oPalestra->addParticipante($oParticipante);



$oEvento = new Evento('Feira do Livro', 'Rio do Sul', '2022-01-01', '6:30', '18:00');
$oEvento->addPalestra($oPalestra);
$oEvento->addParticipante($oParticipante);

echo '<pre>';
print_r ($oEvento);
echo '</pre>';

