import { fcSucessoExcluirVenda, fcErroExcluirVenda } from "./excluirUtil.js";
import { respostaFetch } from "../utiljs/obtemFetch.js";
(()=>{
    const corpoTabela = document.querySelector('tbody');
    corpoTabela.onclick = async function(evento){
        if(evento.target.tagName === 'A' && evento.target.textContent === '[EXCLUIR]'){
            const link = evento.target;
            let idVendaExcluir = parseInt(link.getAttribute("idVenda"));
            if(confirm(`Deseja realmente excluir a venda de id ${idVendaExcluir}?`)){
                let venda = {id:idVendaExcluir};
                try{
                    console.log('inicio')
                    let resposta = await respostaFetch("DELETE","../controller/vendasExcluir.php",venda); 
                    console.log(resposta)
                    resposta = await resposta.json();
                    console.log(resposta)
                    if(resposta.erro==false)
                        fcSucessoExcluirVenda(resposta);
                    else
                        fcErroExcluirVenda(resposta.msg);
                    console.log('fim')
                }catch(erro){
                    fcErroExcluirVenda(erro);
                }       
            }    
        }
    }
})();
