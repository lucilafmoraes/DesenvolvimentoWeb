<?php
declare(strict_types=1);
require_once('conexao.php');
$con = null;
try{
    $con = getConexao();
    $sql = "select * FROM filmes ORDER BY titulo";
    $ps = $con->prepare($sql);
    $ps->execute();
    $filmes = $ps->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($filmes);
    echo "<pre/><hr>";
    foreach($filmes as $filme){
        echo "Id: {$filme['ID']} - Titulo: {$filme['titulo']} - Nota: {$filme['nota']}<hr>";
    }
}catch(PDOException $e){
    die("Erro ao conectar com o banco de dados e/ou exibir filmes. {$e->getMessage()}");
}
?>