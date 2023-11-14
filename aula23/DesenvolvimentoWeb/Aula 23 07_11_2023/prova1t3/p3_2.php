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
    <thead><th>Descrição</th><th>Preço</th></thead>
    <tbody>
        <!--Código para gerar as linhas -->
        <?php
		
        ?>
    </tbody>
    <tfoot>
        <!-- Código para gerar a totalização -->
        <?php
            
        ?>
    </tfoot>
</table>
</body>
</html>