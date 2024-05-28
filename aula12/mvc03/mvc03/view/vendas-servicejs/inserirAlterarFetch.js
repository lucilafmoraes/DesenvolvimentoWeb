import { fcSucessoInserirVenda, fcErroInserirVenda } from "./inserirUtil.js";
import { fcSucessoAlterarVenda, fcErroAlterarVenda } from "./alterarUtil.js";
import { meuFetch2 } from "../utiljs/obtemFetch.js";
//Recupera o elemento (Também poderíamos usar o form e o evento submit)        
const formEnviar = document.querySelector('#modalForm');
formEnviar.addEventListener('submit', function(event){
    //Evita o comportamento default de submeter o formulário
    event.preventDefault();
    //Monta um objeto venda recuperando os elementos do DOM
    let id = parseInt(document.querySelector('#id').value);
    let cliente = document.querySelector('#cliente').value;
    let quadrimestre = parseInt(document.querySelector('#cmbQuadrimestres').value);
    let valor = parseFloat(document.querySelector('#valor').value);
    let venda = {
        "id": id,
        "cliente": cliente,
        "quadrimestre" : quadrimestre,
        "valor" : valor
    };
    //Faz o fetch
    if(venda.id>0)
        meuFetch2("PUT","../controller/vendasAlterar.php",fcSucessoAlterarVenda,fcErroAlterarVenda,venda);
    else
        meuFetch2("POST","../controller/vendasInserir.php",fcSucessoInserirVenda,fcErroInserirVenda,venda); 
})



