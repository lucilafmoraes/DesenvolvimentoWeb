import { listar } from "./listarUtil.js";
import { exibirMensagemDeErro, exibirMensagemDeSucesso } from "../utiljs/sistemaUtil.js";

function fcSucessoExcluirVenda(resposta){
    //Exibe a mensagem por 2 segundos e redireciona p/ vendasListar.html
    exibirMensagemDeSucesso(document.querySelector(".msgSucesso"),resposta.msg,2000,listar)
    document.querySelector(".meuModal").close();
}

function fcErroExcluirVenda(msg){
    exibirMensagemDeErro(document.querySelector(".msgErro"),msg)
}

export {fcSucessoExcluirVenda, fcErroExcluirVenda}