<?php

//USANDO ARROW FUNCTION

$precoDeVenda2 = fn($custo, $margem) => $custo += (($custo * $margem) / 100);
//Vai imprimir a arrow function que também é  um closure
var_dump($precoDeVenda2);
//Vai imprimir o resultado da chamada de função
echo "<br>";
var_dump($precoDeVenda2($precoDeCusto, $MargemDeLucro))















?>