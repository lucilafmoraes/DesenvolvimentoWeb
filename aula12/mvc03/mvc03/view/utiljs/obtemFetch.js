function meuFetch(metodo, url, dados = null){
    let configMetodo = trataMetodo(metodo, dados);
    const meuFetch = fetch(url,configMetodo)
    .then(resposta => verificarSeTemErro(resposta)) //devolve o retorno da função
    .then(resposta => resposta.json()) //devolve a promessa de que virá um Response JSON
    return meuFetch;
}

function meuFetch2(metodo, url, cbSucesso, cbErro,dados = null){
    let configMetodo = trataMetodo(metodo, dados);

    const meuFetch = fetch(url,configMetodo)
    .then(resposta => verificarSeTemErro(resposta)) //devolve o retorno da função
    .then(resposta => resposta.json()) //devolve a promessa de que virá um Response JSON
    .then(resposta=>{
        if(resposta.erro==false)
            cbSucesso(resposta);
        else
            cbErro(resposta.msg);
    })
    .catch(erro=>cbErro(erro));
    return meuFetch;
}

async function respostaFetch(metodo, url, dados = null){
    let configMetodo = trataMetodo(metodo, dados);
    let resposta = await fetch(url,configMetodo)
    resposta = verificarSeTemErro(resposta); 
    return resposta;
}

function trataMetodo(metodo, dados = null){
    let configMetodo=null;
    if(metodo !=="GET"){
        configMetodo = {
            method : metodo,
            body : JSON.stringify(dados), //texto JSON
            headers :  {
                "Content-Type" : "application/json;charset=UTF-8"
            }
        }
    }
    return configMetodo;
}

function verificarSeTemErro(resposta){
    if(! resposta.ok)
        throw new Error(resposta.status + " - " + resposta.statusText);
    return resposta;
}

export {meuFetch, respostaFetch, meuFetch2}
