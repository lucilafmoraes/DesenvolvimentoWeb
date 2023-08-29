<?php

function soma(float $a, float $b):float{
    return($a+$b);
}
function somav2(float $a, float $b):float{
    $numArgs = func_num_args();
    $args = func_get_args();
    $resultado =0.0;
    for($i=0;$i<$numArgs;$i++)
        $resultado += $args[$i];
    return $resultado;
}

$a=20;
$b=50;


echo 'o resultado da soma de $x e $y é' .soma($a, $b)."<br>";
echo 'O resultado da soma de $x, $y e outros números é' .somav2($a, $b, 7.8, 90.6)."<br>";
?>