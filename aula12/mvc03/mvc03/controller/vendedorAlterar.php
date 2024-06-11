<?php
    require_once("../model/funcoesUtil.php");
    $conexao = getConexao();
    $vendedorPut = file_get_contents('php://input');
    $vendedorMatriz = json_decode($vendedorPut, true);

    $id = (isset($vendedorMatriz["id"]) && $vendedorMatriz["id"] != null) ? intval($vendedorMatriz["id"]) : "";
    $vendedor = (isset($vendedorMatriz["nome"]) && $vendedorMatriz["nome"] != null) ? strtoupper($vendedorMatriz["nome"]) : "";
    $perComissao = (isset($vendedorMatriz["percentual_comissao"]) && $vendedorMatriz["percentual_comissao"] != null) ? 
    $vendedorMatriz["percentual_comissao"] : "";


    if($id != "" && $vendedor != "" && $perComissao != ""){
      try {
        $sql = "UPDATE vendedor SET nome= ?, percentual_comissao= ? WHERE id=?";
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $vendedor );
        $stmt->bindParam(2, $perComissao);
        $stmt->bindParam(3, $id);
        $stmt->execute();
        responder(false,"Vendedor de id $id alterada com sucesso! Linhas afetadas: {$stmt->rowCount()}");
      }catch(PDOException $e) {
        responder(true,"Erro: Não foi possível efetuar a alteração no BD".$e->getMessage().".");
      }
    }else
        responder(true,"Erro ao alterar vendedor. Informações incompletas enviadas.", [$id, $vendedor, $perComissao]); 
?>