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

function exibirMensagemDeErro(elemento,msg){
    elemento.textContent = msg;
    return;
}

function exibirMensagemDeSucesso(elemento,msg,segundos, cbSucesso=null){
    elemento.textContent = msg;
    setTimeout(function(){
		elemento.textContent = "";
        if(cbSucesso)
            cbSucesso();
    },segundos);
}

export {preencherHtml, exibirMensagemDeErro, exibirMensagemDeSucesso}