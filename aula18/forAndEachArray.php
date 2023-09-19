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

?>