
const fazRequisicaoAjax = function(metodo, url, cbSucesso, cbErro, dados = null){
    const xhr = new XMLHttpRequest();
    xhr.open(metodo,url); 
	xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify(dados)); //Serializa o objeto (se houver) p/ ser enviado com texto JSON
    //Monitore a mudança de estado da requisição
    xhr.onreadystatechange = function(){
        //Quando o readyState da requisição for 4 (completa), verifique seu status
        if(xhr.readyState === 4 ){
            console.log(xhr.response);
            if( xhr.status>=400 ){
                cbErro('Erro do cliente '+xhr.status+' - '+xhr.statusText+'.');
            }
           else{
                let resposta = JSON.parse(xhr.responseText);
                if(resposta.erro === false){
                    cbSucesso(resposta);
                }else{//resposta.erro===true significa que tem erro
                    cbErro(resposta.msg);
                }
            }
        }//Fim de if(xhr.readyState === 4 )              
    }//Fim do monitoramento de estado
}//Fim de faz requisicaoAjax

export {fazRequisicaoAjax}