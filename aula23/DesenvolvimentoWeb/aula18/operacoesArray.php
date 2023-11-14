<?php

//OPERAÇÕES: definir, incluir, alterar e excluir
$arr = ["zero", "um", "dois", "tres", "quatro"];
print_r($arr);
//adicionando elemento
$arr[] = "cinco";
//alterando elemento
$arr[1] = "ummm";
$arr[4] = "quatrrro";
//excluindo elementos
unset($arr[3]);

print_r($arr);
?>