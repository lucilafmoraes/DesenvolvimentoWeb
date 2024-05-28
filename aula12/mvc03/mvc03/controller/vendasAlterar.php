<?php
    require_once("../model/funcoesUtil.php");
    $conexao = getConexao();
    $vendaPut = file_get_contents('php://input');
    $vendaMatriz = json_decode($vendaPut, true);

    $id = (isset($vendaMatriz["id"]) && $vendaMatriz["id"] != null) ? intval($vendaMatriz["id"]) : "";
    $cliente = (isset($vendaMatriz["cliente"]) && $vendaMatriz["cliente"] != null) 
    ? strtoupper($vendaMatriz["cliente"]) : "";
    $quadrimestre = (isset($vendaMatriz["quadrimestre"]) && $vendaMatriz["quadrimestre"] != null) ? 
    $vendaMatriz["quadrimestre"] : "";
    $valor = (isset($vendaMatriz["valor"]) && $vendaMatriz["valor"] > 0) ? floatval($vendaMatriz["valor"]) : "";

    if($id != "" && $cliente != "" && $quadrimestre != "" && $valor!= ""){
      try {
        $sql = "UPDATE venda SET cliente= ?, quadrimestre= ?,valor_venda= ? WHERE id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $cliente );
        $stmt->bindParam(2, $quadrimestre);
        $stmt->bindParam(3, $valor);
        $stmt->bindParam(4, $id);
        $stmt->execute();
        responder(false,"Venda de id $id alterada com sucesso! Linhas afetadas: {$stmt->rowCount()}");
      }catch(PDOException $e) {
        responder(true,"Erro: Não foi possível efetuar a alteração no BD".$e->getMessage().".");
      }
    }else
        responder(true,"Erro ao alterar venda. Informações incompletas enviadas."); 
?>