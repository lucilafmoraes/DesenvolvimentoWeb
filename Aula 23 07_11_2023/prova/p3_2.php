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
$produtos = [
    ["descricao"=>"Queijo Minas","preco"=>25.0],
    ["descricao"=>"Manteiga","preco"=>14.0],
    ["descricao"=>"Queijo Prato","preco"=>22.0],
    ["descricao"=>"Presunto KG","preco"=>30.0],
    ["descricao"=>"Leite","preco"=>8.0]
];

?>  
<h3>Questão 2 - Tabela de produtos</h3>
<table border="1">
    <thead>
        <th>Descrição</th><th>Preço</th>
    </thead>
    <tbody>
        <!--Código para gerar as linhas -->
        <?php
        $total=0.0;
        foreach($produtos as $p){
            $total += $p['preco'];
            echo "<tr><td>{$p['descricao']}</td><td>{$p['preco']}</td></tr>";
        } ?>
    </tbody>
    <tfoot>
        <!-- Código para gerar a totalização -->
        <?php
            $total = round($total,2);
            echo "<tr><td>TOTAL</td><td>$total</td></tr>";
        ?>
    </tfoot>
</table>
</body>
</html>