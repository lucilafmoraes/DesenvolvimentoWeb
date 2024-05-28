import { exibirMensagemDeErro } from "../utiljs/sistemaUtil.js";
import { meuFetch } from "../utiljs/obtemFetch.js";
function montarTabelaVendedor(vendedor){
    //Recupera o corpo da tabela
    const corpoTabelaVendedor = document.querySelector('tbody');
    corpoTabelaVendedor.innerHTML="";
    //percorre o array de vendas criando uma linha para cada venda e pendurando no corpo da tabela 
    vendedor.forEach(vendedor=>{
        const linha = criarLinha(vendedor);
        corpoTabelaVendedor.appendChild(linha);
    });
}//Fim da função

function criarLinhaVendedor(vendedor){
    //Para cada venda, use a função map para criar 4 colunas
    const tr = document.createElement('tr');
    const [ cId, cVendedor, cPercentual ] = 
    [ 'td', 'td', 'td'].map( coluna => document.createElement(coluna) );
    //Pendure de uma única vez as 4 colunas
    tr.append(cId, cVendedor, cPercentual);
    //Extraia os atributos de venda para 4 variáveis
    let {id, vendedor, percentual} = vendedor;
    //Preencha cada coluna com seu valor (conteúdo de sua variável)
    cId.textContent = id;
    cVendedor.textContent = vendedor;
    cPercentual.textContent = percentual;
    //Retorne a linha criada
    return tr;
}  

function listar(){
    meuFetch("GET","../controller/vendedorListar.php")
    .then(resposta=>{
        if(resposta.erro === false){
            fcSucessoListarVendas(resposta);
        }else{
            fcErroListarVendas(resposta.msg);
        }
    })
    .catch(erro=>fcErroListarVendas(erro));
}

//Funções que tratam a resposta
function fcSucessoListarVendas(resposta){
    let dados = resposta.dados;
    montarTabelaVendedor(dados);
}
function fcErroListarVendas(msg){
    exibirMensagemDeErro(document.querySelector(".msgErro"),msg)
}

export {fcSucessoListarVendas,fcErroListarVendas, listar}