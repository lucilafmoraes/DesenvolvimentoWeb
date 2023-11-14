<?php

//parte escrita na prova
require_once("funcoes.php");
$infoCompras = array(
    ['cliente' => 'CLIENTE A',
    'compras' => [500, 2500, 3000]],
    ['cliente' => 'CLIENTE B',
    'compras' => [800, 400]],
    ['cliente' => 'CLIENTE C',
    'compras' => [600, 800, 1000, 600]]
);

//print_r($infoCompras);

//parte não necessária (thead)
echo '<h1>PROVA FINAL - SEGUNDO TRIMESTRE</h1>';
echo '<hr>';
echo '<br>';
echo '<table border=1px>';
echo '<tr>
        <th>CLIENTE</th>
        <th>COMPRAS</th>
        <th>MÉDIA DE COMPRAS</th>
        <th>TOTAL DE COMPRAS</th>
    </tr>';

//tbody
$soma = 0;
foreach ($infoCompras as $compras){

    echo '<td>'.$compras['cliente'].'</td>';
    echo '<td>';
    foreach($compras['compras'] as $valores){
        echo "$valores  ";
    }
    echo '</td>';
    echo '<td>'.obterMedia($compras['compras']).'</td>';
    echo '<td>'.array_sum($compras['compras']).'</td>';
    $soma += array_sum($compras['compras']);
    echo '</tr>';
}
//tfoot
echo "<tfoot>";
echo "<tr><td colspan=3>TOTAL</td><td>$soma</td></tr>";
echo "</tfoot>";
echo '</table>';
?>