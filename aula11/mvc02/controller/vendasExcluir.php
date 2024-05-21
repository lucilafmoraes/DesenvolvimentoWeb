<?php
    //Obtenha a conexão com o banco de dados
    require_once("../model/funcoesUtil.php");
    $conexao = getConexao();
    //Recupera o texto JSON via post (Quando se envia via requisição AJAX, não temos $_POST)
    $vendaDelete = file_get_contents('php://input');
    //Decodifica o texto JSON p/ uma matriz associativa (argumento true de json_decode)
    $vendaMatriz = json_decode($vendaDelete, true);

    $id = (isset($vendaMatriz["id"]) && $vendaMatriz["id"] != null) ? 
    intval($vendaMatriz["id"]) : "";

    if( $id != ""){
      try {
        $sql = "DELETE FROM vendas WHERE id=?";
        //Prepara a instrução e em seguida passa os argumentos. Evita SQL Injection
        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(1, $id );
        $stmt->execute();
        responder(false,"{$stmt->rowCount()} venda de id {$id} excluída com sucesso! 
        Linhas afetadas: {$stmt->rowCount()}");
      }catch(PDOException $e) {
        responder(true,"Erro: Não foi possível efetuar a exclusão no BD".$e->getMessage().".");
      }
    }else
        responder(true,"Erro: Não foi possível efetuar a exclusão. Informações incompletas enviadas.");
?>