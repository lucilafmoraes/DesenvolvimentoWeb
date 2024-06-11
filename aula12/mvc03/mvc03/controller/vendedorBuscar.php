<?php
    //Obtenha a conexão com o banco de dados
    require_once("../model/funcoesUtil.php");
    $conexao = getConexao();
    $id = (isset($_GET["id"]) && $_GET["id"] !=null) ? intval($_GET["id"]) : "";

    if( $id != ""){
      try {
        $sql = "SELECT * FROM vendedor WHERE id=?";
        //Prepara a instrução e em seguida passa os argumentos. Evita SQL Injection
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $id );
        $stmt->execute();
        $vendedor = $stmt->fetchAll(PDO::FETCH_ASSOC)[0];
        
        responder(false,"{$stmt->rowCount()} vendedor de id {$id} obtido com sucesso!", $vendedor);
      }catch(PDOException $e) {
        responder(true,"Erro: Não foi possível buscar o vendedor no BD".$e->getMessage().".");
      }
    }else
        responder(true,"Erro: Não foi possível buscar o vendedor. Informações incompletas enviadas.");
?>