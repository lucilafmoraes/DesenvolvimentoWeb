import { exibirMensagemDeErro } from "../utiljs/sistemaUtil.js";
import { meuFetch } from "../utiljs/obtemFetch.js";
function montarTabela(vendas){
    //Recupera o corpo da tabela
    const corpoTabela = document.querySelector('tbody');
    corpoTabela.innerHTML="";
    //percorre o array de vendas criando uma linha para cada venda e pendurando no corpo da tabela 
    vendas.forEach(venda=>{
        const linha = criarLinha(venda);
        corpoTabela.appendChild(linha);
    });
}//Fim da função

function criarLinha(venda){
    //Para cada venda, use a função map para criar 4 colunas
    const tr = document.createElement('tr');
    const [ cId, cCliente, cValor, cQuadrimestre, cAcoes ] = 
    [ 'td', 'td', 'td', 'td', 'td' ].map( coluna => document.createElement(coluna) );
    //Pendure de uma única vez as 4 colunas
    tr.append(cId, cCliente, cValor, cQuadrimestre, cAcoes);
    //Extraia os atributos de venda para 4 variáveis
    let {id,cliente, valor_venda, quadrimestre} = venda;
    //Preencha cada coluna com seu valor (conteúdo de sua variável)
    cId.textContent = id;
    cCliente.textContent = cliente;
    cValor.textContent = valor_venda;
    cQuadrimestre.textContent = quadrimestre;
    cAcoes.innerHTML = `<a href="#" idVenda=${id}>[EXCLUIR]</a>
    <a href="#" idVenda=${id} >[ALTERAR]</a>`;
    //Retorne a linha criada
    return tr;
}  

function listar(){
    meuFetch("GET","../controller/vendasListar.php")
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
    montarTabela(dados);
}
function fcErroListarVendas(msg){
    exibirMensagemDeErro(document.querySelector(".msgErro"),msg)
}

export {fcSucessoListarVendas,fcErroListarVendas, listar}