<?php

//TRABALHANDO EM MODO ESTRITO
// 0= como se nn declarasse scrict type, =1 em modo estrito (como se fosse booleano)
declare(strict_types=1);

//FUNCOES NOMEADAS 

echo "<h3>FUNCOES NOMEADAS</h3>";
function multiplicar(float $n1, float $n2, float ...$numeros): float{
    $resultado = $n1 * $n2;
    foreach($numeros as $numero)
        $resultado *= $numero;
    return $resultado;
}

echo "<hr> O resultado da multiplicação é " .multiplicar(10,2.5,2,3). "<br>";
var_dump(multiplicar(10,2.5,2,3)); 
echo "<hr>";

//FUNCAO ANÔNIMA (lambda) tipo closure

echo "<h3>FUNÇÃO ANÔNIMA (lambda) TIPO CLOSURE</h3>";
$margemDeLucro = 25;
$obterPrecoDeVenda = function(float $custo, float $margem):float{
    return $custo + ($custo * $margem) / 100; 
};

echo "Com lammbda o preço de venda é R\$" .$obterPrecoDeVenda(100, $margemDeLucro). "<br>";
var_dump($obterPrecoDeVenda);       //chamar funcao anonima com sifrao, pois está armazenada em uma variavel
echo "<hr>";

//FUNÇÃO ANÔNIMA CLOSURE
$margemDeLucro = 25;
echo "<h3>FUNÇÃO ANÔNIMA (closure)</h3>";
$obterPrecoDeVendaClosure = function(float $custo) use($margemDeLucro) :float {
    return $custo + (($custo * $margemDeLucro) / 100);
};

echo "Com Closure o preço de venda é R\$" .$obterPrecoDeVendaClosure(100). "<br>";
var_dump($obterPrecoDeVendaClosure); 
echo "<hr>";


//USANDO ARROW FUNCTION
echo "<h3>ARROW FUNCTION</h3>";
$precoDeVenda2 = fn($custo, $margem) => $custo += (($custo * $margem) / 100);
//Vai imprimir a arrow function que também é  um closure
var_dump($precoDeVenda2);
//Vai imprimir o resultado da chamada de função
echo "<br>";
$precoDeVenda = 20;
var_dump($precoDeVenda2($precoDeVenda, $margemDeLucro));

//ARROW FUNCTION UTILIZANDO VARIÁVEL EXTERNA 


$margemDeLucro = 30;
echo "<h3>Arrow Function utilizando variável externa</h3>";
$obterPrecoDeVendaArrow2 = fn(float $custo): float => $custo + (($custo * $margemDeLucro) / 100);
echo "Com Arrow function acessando escopo externo o preço de venda  é R\$" .$obterPrecoDeVendaArrow2(100). "<br>";
var_dump($obterPrecoDeVendaArrow2);
echo "<hr>";




?>
