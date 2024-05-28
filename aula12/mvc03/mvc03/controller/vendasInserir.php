<?php
    //Obtenha a conexão com o banco de dados
    require_once("../model/funcoesUtil.php");
    $conexao = getConexao();
    //Recupera o texto JSON via post (Quando se envia via requisição AJAX, não temos $_POST)
    $vendaPost = file_get_contents('php://input');
    //Decodifica o texto JSON p/ uma matriz associativa (argumento true de json_decode)
    $vendaMatriz = json_decode($vendaPost, true);

    $cliente = (isset($vendaMatriz["cliente"]) && $vendaMatriz["cliente"] != null) ? 
    strtoupper($vendaMatriz["cliente"]) : "";
    $quadrimestre = (isset($vendaMatriz["quadrimestre"]) && $vendaMatriz["quadrimestre"] != null) ? 
    $vendaMatriz["quadrimestre"] : "";
    $valor = (isset($vendaMatriz["valor"]) && $vendaMatriz["valor"] > 0) ? $vendaMatriz["valor"] : "";

    if( $cliente != "" && $quadrimestre != "" && $valor!= ""){
      try {
        $sql = "INSERT INTO venda(cliente, quadrimestre,valor_venda) VALUES(?,?,?)";
        //Prepara a instrução e em seguida passa os argumentos. Evita SQL Injection
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $cliente );
        $stmt->bindParam(2, $quadrimestre);
        $stmt->bindParam(3, $valor);
        $stmt->execute();
        responder(false,"{$stmt->rowCount()} venda inserida com sucesso! O id inserido 
        foi {$conexao->lastInsertId()}");
      }catch(PDOException $e) {
        responder(true,"Erro: Não foi possível efetuar a inserção no BD".$e->getMessage().".");
      }
    }else
      responder(true,"Erro ao inserir venda. Informações incompletas enviadas.");
?>