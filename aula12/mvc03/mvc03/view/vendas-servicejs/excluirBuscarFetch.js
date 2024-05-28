import { fcSucessoExcluirVenda, fcErroExcluirVenda } from "./excluirUtil.js";
import { fcSucessoBuscarVenda, fcErroBuscarVenda } from "./buscarUtil.js";
import { meuFetch } from "../utiljs/obtemFetch.js";
(()=>{
    const corpoTabela = document.querySelector('tbody');
    corpoTabela.onclick = function(evento){
        const link = evento.target;
        if(link.tagName === 'A' && link.textContent === '[EXCLUIR]'){
            excluir(link);  
        }else if(link.tagName === 'A' && link.textContent === '[ALTERAR]'){
            buscar(link);
        }      
    }
})();

function excluir(link){
    let idVenda = parseInt(link.getAttribute("idVenda"));
    if(confirm(`Deseja realmente excluir a venda de id ${idVenda}?`)){
        let venda = {id:idVenda};
        meuFetch("DELETE","../controller/vendasExcluir.php",venda)
        .then(resposta=>{
            if(resposta.erro==false)
                fcSucessoExcluirVenda(resposta);
            else
                fcErroExcluirVenda(resposta.msg);
        })
        .catch(erro=>fcErroExcluirVenda(erro))
    }      
}

function buscar(link){
    let idVenda = parseInt(link.getAttribute("idVenda"));
    meuFetch("GET",
    `../controller/vendasBuscar.php?id=${idVenda}`)
    .then(resposta=>{
        if(resposta.erro==false)
            fcSucessoBuscarVenda(resposta);
        else
            fcErroBuscarVenda(resposta.msg);
    })
    .catch(erro=>fcErroBuscarVenda(erro))
}
