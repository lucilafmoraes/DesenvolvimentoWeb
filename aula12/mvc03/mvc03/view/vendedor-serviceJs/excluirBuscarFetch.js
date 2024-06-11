import { fcSucessoExcluirVendedor, fcErroExcluirVendedor } from "./excluirUtil.js";
import { fcSucessoBuscarVendedor, fcErroBuscarVendedor } from "./buscarUtil.js";
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
    let idVendedor = parseInt(link.getAttribute("idVendedor"));
    if(confirm(`Deseja realmente excluir o vendedor de id ${idVendedor}?`)){
        let vendedor = {id:idVendedor};
        meuFetch("DELETE","../controller/vendedorExcluir.php",vendedor)
        .then(resposta=>{
            if(resposta.erro==false)
                fcSucessoExcluirVendedor(resposta);
            else
                fcErroExcluirVendedor(resposta.msg);
        })
        .catch(erro=>fcErroExcluirVendedor(erro))
    }      
}

function buscar(link){
    let idVendedor = parseInt(link.getAttribute("idVendedor"));
    meuFetch("GET", `../controller/vendedorBuscar.php?id=${idVendedor}`)
    .then(resposta=>{
        if(resposta.erro==false)
            fcSucessoBuscarVendedor(resposta);
        else
            fcErroBuscarVendedor(resposta.msg);
    })
    .catch(erro=>fcErroBuscarVendedor(erro))
}