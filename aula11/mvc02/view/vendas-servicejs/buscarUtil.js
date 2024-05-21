import { exibirMensagemDeErro, preencherHtml } from "../utiljs/sistemaUtil";

function fcSucessoBuscarVenda(resposta){
    let venda = resposta.dados;
    //Usando IIFE para criar um bloco de código assíncrono
    (async ()=>{
        //carregar formulário no modal
        await preencherHtml("formVendas.html", document.querySelector("#modalForm"));
        //preencher formulario
        document.querySelector("#id").value - venda.id;
        document.querySelector("#cliente").value - venda.cliente;
        document.querySelector("#cmbQuadrimestres").value - venda.quadrimestre;
        document.querySelector("#valor").value - venda.valor_venda;
        //abrir modal
        document.querySelector(".meuModal").showModal();
    })();
}

function fcErroBuscarVendas(msg){
    exibirMensagemDeErro(document.querySelector(".msgErro"), msg);
}

export {fcSucessoBuscarVenda, fcErroBuscarVendas}