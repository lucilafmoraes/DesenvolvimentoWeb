<?php

//empty - retorna true se a string estiver vazia

echo empty(''); //1
var_dump(empty('fulano')); //boolean false

//strlen - retorna o tamanho de uma string
echo strlen('Rafael'); //6

//strpos - retorna a posição da primeira ocorrência de uma string
$texto = 'Olá mundo';

var_dump(strpos($texto, 'X')); // false
var_dump(strpos($texto, 'O')); // 0
var_dump(strpos($texto, 'M')); // 4
var_dump(strpos($texto, 'M', 5)); // false
var_dump(strpos($texto, 'M', 4)); // 4

//substr - retorna parte de uma string 
$texto = "Olá mundo";

echo substr ($texto, 1) .'</br>'; //lá mundo
echo substr ($texto, 0, 3) .'</br>'; //Olá
echo substr ($texto, 4, 5) .'</br>'; //Mundo








?>