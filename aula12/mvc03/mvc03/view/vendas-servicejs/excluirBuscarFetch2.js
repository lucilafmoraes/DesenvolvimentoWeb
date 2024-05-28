import { fcSucessoExcluirVenda, fcErroExcluirVenda } from "./excluirUtil.js";
import { fcSucessoBuscarVenda, fcErroBuscarVenda } from "./buscarUtil.js";
import { respostaFetch } from "../utiljs/obtemFetch.js";
(()=>{
    const corpoTabela = document.querySelector('tbody');
    corpoTabela.onclick = async function(evento){
        const link = evento.target;
        let idVenda = parseInt(link.getAttribute("idVenda"));
        if(link.tagName === 'A' && link.textContent === '[EXCLUIR]'){
            if(confirm(`Deseja realmente excluir a venda de id ${idVenda}?`)){
                let venda = {id:idVenda};
                try{
                    console.log('inicio excluir')
                    let resposta = await respostaFetch("DELETE","../controller/vendasExcluir.php",venda); 
                    resposta = await resposta.json();
                    if(resposta.erro==false)
                        fcSucessoExcluirVenda(resposta);
                    else
                        fcErroExcluirVenda(resposta.msg);
                    console.log('fim')
                }catch(erro){
                    fcErroExcluirVenda(erro);
                }       
            }      
        }else if(link.tagName === 'A' && link.textContent === '[ALTERAR]'){
            try{
                console.log('inicio alterar')
                let resposta = await respostaFetch("GET",`../controller/vendasBuscar.php?id=${idVenda}`); 
                resposta = await resposta.json();
                if(resposta.erro==false)
                    fcSucessoBuscarVenda(resposta);
                else
                    fcErroBuscarVenda(resposta.msg);
                console.log('fim')
            }catch(erro){
                fcErroBuscarVenda(erro);
            }       
        }      
    }
})();
