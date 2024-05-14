function obterRespostaFetch(metodo, url, dados = null){
    let configMetodo = null;
    if(metodo !=="GET"){
        configMetodo = {
            method : metodo,
            body : JSON.stringify(dados), //texto JSON
            headers :  {
                "Content-Type" : "application/json;charset=UTF-8"
            }
        }
    }

    const meuFetch = fetch(url,configMetodo)
    .then(resposta => verificarSeTemErro(resposta)) //devolve o retorno da função
    .then(resposta => resposta.json()) //devolve a promessa de que virá um Response JSON
    //Outra abordagem 
    /*.then(function(resposta){
        return verificarSeTemErro(resposta); //retorna um Response
    })
    .then(function(resposta){
         return resposta.json(); //Retorna a promessa de que virá um Response JSON
    } )*/
    return meuFetch;

    function verificarSeTemErro(resposta){
        console.log(resposta);
        if(! resposta.ok)
            throw new Error(resposta.status + " - " + resposta.statusText);
        return resposta;
    }
}

export {obterRespostaFetch}