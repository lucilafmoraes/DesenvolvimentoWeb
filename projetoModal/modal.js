//Recuperando botões
const btnModalAbrir = document.querySelector("#btnAbrirModal");
const btnModalFechar = document.querySelector("#btnFecharModal");
const modalForm = document.querySelector("#modalForm");

//recuperando o modal
const modal = document.querySelector("#modalDialog");

//Fazendo modal abrir
btnModalAbrir.onclick = function(){
    modal.showModal();
}

//Fazendo modal fechar
btnModalFechar.addEventListener('click',()=>{
    modal.close();
});

//Submeter formulário
modalForm.addEventListener('submit', (e)=>{
    e.preventDefault();
    modal.close();
})

//Fechar ao clicar fora do modal
modal.addEventListener('click', (e)=>{
    //pegando as posições do modal na tela
    const areaModal = modal.getBoundingClientRect();
    //verificando se o clique ocorreu fora do modal
    if(
        e.clientX.left < areaModal.left ||
        e.clientX.right > areaModal.right ||
        e.clientY < areaModal.top ||
        e.clientY > areaModal.bottom
    ){
        dialog.close();
    }
});