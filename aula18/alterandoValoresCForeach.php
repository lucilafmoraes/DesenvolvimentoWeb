<?php

$nums = range(0,10);
//imprimindo array
print_r($nums);

//alterando valores com foreach
foreach($nums as $chave => $valor){
    //imprimindo valores alterados
    $valor *= 10;
    echo $valor. "\n";
}
//imprimindo array novamente
print_r($nums);

foreach($nums as $chave => &$valor){
    $valor *= 10;
    echo $valor. "\n";
}
//imprimindo array com valores alterados
print_r($nums);




?>