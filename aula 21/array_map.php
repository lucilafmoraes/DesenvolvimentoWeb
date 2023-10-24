<?php
//1) Crie um arquivo PHP para testar o uso de array_map com um array unidimensional
$numeros = [1,2,3,4,5];
//array_map(<callback>, <array>):<array>
//a cada iteração minha função de callback tem um elemento float
$numeros2 = array_map(
    function(int $n){
        return $n*$n*$n;
    },
    $numeros
);
//com arrow function
$numeros2 = array_map(fn(int $n) => $n*$n*$n, $numeros);
//imprimindo a estrutura
print_r($numeros2);
 

?>