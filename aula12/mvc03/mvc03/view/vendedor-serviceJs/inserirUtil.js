import { exibirMensagemDeErro, exibirMensagemDeSucesso } from "../utiljs/sistemaUtil.js";
import { listar } from "./listarUtil.js";
function fcSucessoInserirVendedor(resposta){
  
    exibirMensagemDeSucesso(document.querySelector(".msgSucesso"),resposta.msg,2000,listar)
    document.querySelector(".meuModal").close();
}

function fcErroInserirVendedor(msg){
    exibirMensagemDeErro(document.querySelector(".msgErro"),msg);
    document.querySelector(".meuModal").close();
}

export{fcSucessoInserirVendedor, fcErroInserirVendedor}