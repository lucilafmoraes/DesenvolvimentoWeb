<php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação 1 - semestre 3</title>
</head>
<body>
<?php
$pessoas = [
    ["nome"=>"Fulano","peso"=>85.0,"altura"=>1.80],
    ["nome"=>"Beltrano","peso"=>35.0,"altura"=>1.60],
    ["nome"=>"Ciclano","peso"=>110.0,"altura"=>1.85],
    ["nome"=>"Maria","peso"=>65.0,"altura"=>1.58],
    ["nome"=>"Pedro","peso"=>125.0,"altura"=>1.78]
];

function obtemSituacao(callable $fnCallback,float $peso, float $altura):string{
    $imc = $fnCallback($peso,$altura);
    if($imc<20)
        return "subpeso";
    elseif($imc<=25)
        return "normal";
    else
        return "sobrepeso";
}
?>  
<h3>Questão 1 - Cálculo do IMC</h3>
<?php
$fnImc = function(float $p,float $a):float{
    return ($p/($a*$a));
};

function obtemImc(float $p,float $a):float{
    return ($p/($a*$a));
}
?>
<ul>
<?php
foreach($pessoas as $p){
    $situacao = obtemSituacao(function(float $p,float $a):float{
        return ($p/($a*$a));
    }, $p['peso'], $p['altura']);

    $situacao = obtemSituacao($fnImc, $p['peso'], $p['altura']);

    $situacao = obtemSituacao('obtemImc', $p['peso'], $p['altura']);

    echo "<li>{$p['nome']} - {$situacao}</li>";
} 
?>
</ul>
</body>
</html>