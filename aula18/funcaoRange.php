<?php

//função range
//sintaxe: range(inicio, fim, intervalo de incremento );
//range($low, $high, $step = NULL);
//quando não é declarado o intervalo de incremento, ele considera 1 
range(0, 5);
range(0, 5, 2);

$x = range(1, 11);
print_r($x);

$x = range(11, 1);
print_r($x);

$y = range(11, 1, 4);
print_r($y);

$z = range("a", "z", 2);
print_r($z);


?>