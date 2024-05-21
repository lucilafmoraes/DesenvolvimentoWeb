import { fcSucessoExcluirVenda, fcErroExcluirVenda } from "./excluirUtil.js";
import { meuFetch } from "../utiljs/obtemFetch.js";
(()=>{
    const corpoTabela = document.querySelector('tbody');
    corpoTabela.onclick = function(evento){
        if(evento.target.tagName === 'A' && evento.target.textContent === '[EXCLUIR]'){
            const link = evento.target;
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
                //meuFetch2("DELETE","../controller/vendasExcluir.php",fcSucessoExcluirVenda, fcErroExcluirVenda, venda);
            }      
        }
    }
})();
