<?php
//primeira definição de array indexado
$cores=array("azul", "amarelo", "Verde", "branco");

print_r($cores);

//Outras formas de fazer o mesmo array
$cores2[0] = "azul";
$cores2[1] = "amarelo";
$cores2[2] = "verde";
$cores2[3] = "branco";

print_r($cores2);

$cores3[] = "azul";
$cores3[] = "amarelo";
$cores3[] = "verde";
$cores3[] = "branco";

print_r($cores3);

$cores4 = ["azul", "amarelo", "verde", "branco"];

print_r($cores4);

$cores5[10] = "azul";
$cores5[11] = "amarelo";
$cores5[12] = "verde";
$cores5[13] = "branco";

print_r($cores5);

?>