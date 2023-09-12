<?php

function obterMedia(array $compras) : float {
    $somaCompras = array_sum($compras);
    $qtdCompras = count ($compras);
    return ($somaCompras / $qtdCompras);
}

?>