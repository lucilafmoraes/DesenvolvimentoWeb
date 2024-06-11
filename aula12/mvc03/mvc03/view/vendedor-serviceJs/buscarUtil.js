import { exibirMensagemDeErro, preencherHtml } from "../utiljs/sistemaUtil.js";

function fcSucessoBuscarVendedor(resposta){
    let vendedor = resposta.dados;
    
    (async ()=>{

        await preencherHtml("formVendedor.html", document.querySelector("#modalFormVendedor"));
        document.querySelector('#id').value = vendedor.id;
        document.querySelector('#nome').value = vendedor.nome;
        document.querySelector('#percentual_comissao').value = vendedor.percentual_comissao;
        document.querySelector(".meuModal").showModal();
    })();
}

function fcErroBuscarVendedor(msg){
    exibirMensagemDeErro(document.querySelector(".msgErro"),msg)
}

export {fcSucessoBuscarVendedor, fcErroBuscarVendedor}
