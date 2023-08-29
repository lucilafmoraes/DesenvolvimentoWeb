<?php
//Declaração ( chave => valor )
$meuArray = array (
    'nome' => 'Juca',
    'idade' => 20,
    10 => 'chocolate',
    11 => 500,
    'time' => 'Flamengo'

);

echo $meuArray ['nome'] .'<br />'; //'Juca'
echo $meuArray ['idade'] .'<br />'; //20
echo $meuArray [10] .'<br />'; //chocolate
echo $meuArray [11] .'<br />'; //500
echo $meuArray ['time'] .'<br />'; //Flamengo

//Chaves automáticas

$novoArray = array ( 100, 200, 300);

$a = $novoArray[0]; //100
$b = $novoArray[1]; //200
$c = $novoArray[2]; //300 

echo $a .'<br />';
echo $b .'<br />';
echo $c .'<br />';

//numeração especificada

$trimestre = array(
    1 => 'Janeiro',
    'Fevereiro',
    'Março'
);

echo $trimestre [1] .'<br />'; //janeiro
echo $trimestre [2] .'<br />'; //fevereiro
echo $trimestre [3]; //março

?>