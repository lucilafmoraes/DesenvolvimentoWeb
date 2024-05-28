import { exibirMensagemDeErro, exibirMensagemDeSucesso } from "../utiljs/sistemaUtil.js";
import { listar } from "./listarUtil.js";
function fcSucessoAlterarVenda(resposta){
    //Exibe a mensagem por 2 segundos e redireciona p/ vendasListar.html
    exibirMensagemDeSucesso(document.querySelector(".msgSucesso"),resposta.msg,2000,listar)
    document.querySelector(".meuModal").close();
}

function fcErroAlterarVenda(msg){
    exibirMensagemDeErro(document.querySelector(".msgErro"),msg);
    document.querySelector(".meuModal").close();
}

export{fcSucessoAlterarVenda, fcErroAlterarVenda}