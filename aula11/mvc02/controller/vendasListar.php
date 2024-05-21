<?php
    //Obtenha a conexão com o banco de dados
    require_once("../model/funcoesUtil.php");
    //Solicitando a conexão com o banco de dados
    $conexao = getConexao();
    //Tente executar o comando de consulta na referida tabela
    try{
        $sql = <<<SQL
            SELECT * from vendas
        SQL;
        $stmt = $conexao->prepare($sql);
        $stmt->execute();
        //Em caso de sucesso, envie as linhas da tabela pelo atributo dados de $resposta
        //Esses dados deverão estar no formado de matriz associativa (PDO::FETCH_ASSOC)
        $vendas = $stmt->fetchAll(PDO::FETCH_ASSOC);
        //Erro,msg,dados (ou não)
        responder(false,"Vendas listadas com sucesso!",$vendas);
    }catch(PDOException $e){
        responder(true,"Erro ao listar vendas.");
    }
?>