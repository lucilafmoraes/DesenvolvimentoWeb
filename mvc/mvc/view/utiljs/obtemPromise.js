
function obterPromise(metodo, url, cbSucesso, cbErro, dados = null){
    const promise = new Promise(function(resolve, reject){
        const xhr = new XMLHttpRequest();
        xhr.open(metodo,url); 
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.send(JSON.stringify(dados)); //Serializa o objeto p/ ser enviado com texto JSON
        //Monitore a mudança de estado da requisição
        xhr.onload = () =>{
            if( xhr.status>=400 ){
                reject('Erro do cliente '+xhr.status+' - '+xhr.statusText+'.');
            }
           else{
                resolve(JSON.parse(xhr.response));
            }
        }//Fim do onload
    })
    .then(resposta=>{
        if(resposta.erro === false){
            cbSucesso(resposta);
        }else{
            cbErro(resposta.msg);
        }
    });
    //Fim de new Promise
    console.log(promise);
    return promise;
}

export {obterPromise}
