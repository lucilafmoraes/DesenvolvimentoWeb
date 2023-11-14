<?php
//criando um array de produtos
$produtos = array();

//criando um array de frutas e preenchendo de uma forma específica
$frutas = array();
$frutas[0]='Maça';
$frutas[1]='Banana';

//criando um array completo
$legumes = array("Inhame", "Batata");

//colocando os arrays $frutas e $legumes nas posições 0 e 1 de $produtos
array_push($produtos, $frutas, $legumes);
array_push($produtos, array('couve', 'Mostarda','Rúcula'));

//adicionando um legume na linha 1 e coluna 2 de produtos
$produtos[1][2] ='cenoura';

//adicionando uma 3 fruta ao array
$frutas[2]='laranja';

//recolocando o array de frutas
$produtos[0] = $frutas;
print_r($produtos);

//acessando uma posição especifica do array
echo $produtos[2][1];
?>