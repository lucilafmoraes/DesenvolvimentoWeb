<?php
    function getConexao(){
        //Declara uma conexão (um objeto do tipo PDO)
        $pdo=null;
        try{
            $dsn="mysql:host=localhost;dbname=supermercado;charset=utf8";
            $pdo = new PDO($dsn,"root","");
            //Coloca o PDO para trabalhar em modo de exceção
            $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            //Retorna a conexão via pdo
            return $pdo;
        }catch(PDOException $e){
            /*Ao encontrar algum erro/ inconsistência com o BD, respondemos o cliente com uma 
            mensagem em português concatenada com a mensagem nativa de PDOException*/
            responder(true,"Erro ao conectar com o BD. {$e->getMessage()}");
        }
    }

    function responder(bool $erro, string $msg, array $dados=null){
        //Definindo o formato e o tipo de acentuação da resposta que será enviada ao cliente
        header("Content-Type:application/json;charset=utf-8");
        //Definindo um array com os dados da resposta a ser enviada ao cliente
        $resposta = ["erro"=>$erro, "msg"=>$msg,"dados"=>$dados];
        //Utilizando a função json_encode para transformar a resposta em um JSON serializado
        $respostaJSON = json_encode($resposta);
        //Já que o envio da resposta no formato JSON é a última etapa da comunicação com o cliente,
        //utilizamos die no lugar de echo. 
        die($respostaJSON); 
    }

?>