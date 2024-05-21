<?php
//obtenha a conexão com o banco de dados
require_once("../model/funcoesUtil.php");
$con = getConexao();
$id = (isset($_GET["id"]) && $_GET["id"] !=null) ? intval($_GET["id"]) : "";

if($id != ""){
    try{
        $sql = "SELECT * FROM vendas WHERE id=?";
        //prepara a instrução e em seguida passa os argumentos. evita SQL injection.
        $stmt = $con->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $venda = $stmt->fetchAll(PDO::FETCH_ASSOC[0]);

        responder(false, "{$stmt->rowCount()} venda de id {$id} obtida com sucesso!", $venda);
        
    }catch(PDOException $e){
        responder(true, "Erro: não foi possível buscar a venda no BD" .$e->getMessage().".");
    }
    
}else
    responder(true, "erro: não foi possível buscar a venda. Informações incompletas enviadas.");

?>