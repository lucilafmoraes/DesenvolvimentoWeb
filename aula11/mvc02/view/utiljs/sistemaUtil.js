//Função para inserir código html em um elemento
async function preencherHtml(recurso, elemento){ 
    const meuFetch = await fetch(recurso);
    const resposta = await meuFetch.text();
    elemento.innerHTML = resposta; 
}

//Fechar ao clicar fora da área do modal
const modal = document.querySelector(".meuModal");
modal.addEventListener('click',(e)=>{
    //pegando as posições do modal na tela
    const areaModal = modal.getBoundingClientRect();
    //Verificando se o clique ocorreu fora do modal 
    //Seu professor pode explicar melhor esse código no quadro
    if(
        e.clientX.left < areaModal.left ||
        e.clientX.right > areaModal.right ||
        e.clientY < areaModal.top ||
        e.clientY > areaModal.bottom
    ){ 
        modal.close();
    }
}); 
//Recebe um elemento do DOM e a mensagem
function exibirMensagemDeErro(elemento,msg){
    elemento.textContent = msg;
    return;
}
//Recebe um elemento do DOM e a mensagem e talvez uma função a ser executada 
//o tempo em que a mensagem vai ficar na tela
//e talvez uma função de callback a ser executada ao final do tempo estimado
function exibirMensagemDeSucesso(elemento,msg,segundos, cbSucesso=null){
    elemento.textContent = msg;
    setTimeout(function(){
        elemento.textContent="";
        if(cbSucesso)
            cbSucesso();
    },segundos);
}

export {preencherHtml, exibirMensagemDeErro, exibirMensagemDeSucesso}