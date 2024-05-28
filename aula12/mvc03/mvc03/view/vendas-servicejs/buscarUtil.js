import { exibirMensagemDeErro, preencherHtml } from "../utiljs/sistemaUtil.js";

function fcSucessoBuscarVenda(resposta){
    let venda = resposta.dados;
    //Usando IIFE para criar um bloco de código assíncrono
    (async ()=>{
        //Carregar formulário no modal
        await preencherHtml("formVendas.html", document.querySelector("#modalForm"));
        //preencher formulário
        document.querySelector('#id').value = venda.id;
        document.querySelector('#cliente').value = venda.cliente;
        document.querySelector('#cmbQuadrimestres').value = venda.quadrimestre;
        document.querySelector('#valor').value = venda.valor_venda;
        //Abrir modal
        document.querySelector(".meuModal").showModal();
    })();
}

function fcErroBuscarVenda(msg){
    exibirMensagemDeErro(document.querySelector(".msgErro"),msg)
}

export {fcSucessoBuscarVenda, fcErroBuscarVenda}