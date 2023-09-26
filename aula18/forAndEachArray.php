<?php

//for

$estacoes = ["outono", "inverno", "primavera", "verao"];
$tamanhoArray = count($estacoes); //ou sizeof
for($i=0; $i<$tamanhoArray; $i++){
    echo "$i: " .$estacoes[$i]. "<br>";
}

//foreach

foreach($estacoes as $valorDoItemNessaIteracao){
    echo "$valorDoItemNessaIteracao <br>";
}

foreach($estacoes as $estacao){
    echo "$estacao <br>";
}

//Foreach(chave e valor)
 foreach($estacoes as $chave => $valorAssociado){
     echo "chave : <b>{$chave}</b> - valor: {$valorAssociado} <br>";
}

foreach($estacoes as $chave => $estacao){
    echo "chave <b>{$chave}</b> => {$estacao} (valor associado à chave <b>{$chave}</b>)<br>";
}

?>