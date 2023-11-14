<?php

//FUNÇÕES ANÔNIMAS E CALLBACK
echo "<h3>FUNÇÕES ANÔNIMAS E CALLBACK</h3>";
echo "<p>Função anônima com spread operator</p><br>";
$obterMedia = function(float ...$notas):float{
    //return array_sum($notas) / sizeof($notas); //solução simples
    //solução complicada
    $soma = 0;
    foreach($notas as $nota)
        $soma += $nota;
    return $soma / func_num_args();
};
//Fazendo o callback
$obterSituacao = function(callable $fnMedia, float ...$notasDoAluno):string{
    $media = $fnMedia(...$notasDoAluno); //Linha importante
    if($media>=7)
        return "Aprovado";
    elseif($media>=4)
        return "Recuperação";
    else
        return "Aprovado";
};
echo "Com \$obterMedia como callback de \$obterSituacao, a situação é: " .$obterSituacao('obterMedia',8,6,7). "<br>";
var_dump($obterMedia); echo "<hr>";
var_dump($obterSituacao); echo "<hr>";


?>