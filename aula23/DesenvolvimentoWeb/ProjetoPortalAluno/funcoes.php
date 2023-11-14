<?php

function Media (float $nota1, float $nota2) : float 
{
    float $media;
    $media = ($nota1 + $nota2) / 2;
    return $media;
}

function ObteFrequencia (float $aulas, float $faltas) : float
{
    float $frequencia;
    $frequencia = (($aulas - $faltas)*100) / $aulas;
    return $frequencia;
}

function SituacaoAluno (float $media) : string
{
    if ($media > 7 && $frequencia > 75 ) {

        echo "Aprovado";
    }
    elseif ($media < 4 && $frequencia > 75) {

        echo "Reprovado";
    }
    elseif ($media > 4 && $frequencia >75) {

        echo "Recuperação";
    }
    elseif ($frequencia < 75) {

        echo "Reprovado";
    }
}

?>