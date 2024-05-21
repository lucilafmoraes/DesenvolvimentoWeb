const obtemXMLHttpRequest = function(metodo, url, dados = null){
    const xhr = new XMLHttpRequest();
    xhr.open(metodo,url); 
	xhr.setRequestHeader('Content-Type', 'application/json');
    xhr.send(JSON.stringify(dados)); //Serializa o objeto (se houver) p/ ser enviado com texto JSON
    //Monitore a mudança de estado da requisição
    return xhr;
}//Fim de faz requisicaoAjax

export {obtemXMLHttpRequest}