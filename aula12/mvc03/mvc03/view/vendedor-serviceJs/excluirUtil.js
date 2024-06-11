import { listar } from "./listarUtil.js";
import { exibirMensagemDeErro, exibirMensagemDeSucesso } from "../utiljs/sistemaUtil.js";

function fcSucessoExcluirVendedor(resposta){
 
    exibirMensagemDeSucesso(document.querySelector(".msgSucesso"),resposta.msg,2000,listar)
    document.querySelector(".meuModal").close();
}

function fcErroExcluirVendedor(msg){
    exibirMensagemDeErro(document.querySelector(".msgErro"),msg)
}

export {fcSucessoExcluirVendedor, fcErroExcluirVendedor}