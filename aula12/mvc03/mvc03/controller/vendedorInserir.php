<?php
    require_once("../model/funcoesUtil.php");
    $conexao = getConexao();
    //Recupera o texto JSON via post (Quando se envia via requisição AJAX, não temos $_POST)
    $vendedorPost = file_get_contents('php://input');
    //Decodifica o texto JSON p/ uma matriz associativa (argumento true de json_decode)
    $vendedorMatriz = json_decode($vendedorPost, true);

    $vendedor = (isset($vendedorMatriz["nome"]) && $vendedorMatriz["nome"] != null) ? 
    strtoupper($vendedorMatriz["nome"]) : "";
    $perComissao = (isset($vendedorMatriz["percentual_comissao"]) && $vendedorMatriz["percentual_comissao"] > 0) ? $vendedorMatriz["percentual_comissao"] : "";

    if( $vendedor != "" && $perComissao != ""){
      try {
        $sql = "INSERT INTO vendedor(nome, percentual_comissao) VALUES(?,?)";
        //Prepara a instrução e em seguida passa os argumentos. Evita SQL Injection
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $vendedor );
        $stmt->bindParam(2, $perComissao);
        $stmt->execute();
        responder(false,"{$stmt->rowCount()} vendedor inserido com sucesso! O id inserido 
        foi {$conexao->lastInsertId()}");
      }catch(PDOException $e) {
        responder(true,"Erro: Não foi possível efetuar a inserção no BD".$e->getMessage().".");
      }
    }else
      responder(true,"Erro ao inserir vendedor. Informações incompletas enviadas.");
?>