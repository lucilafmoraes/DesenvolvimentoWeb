import { fcSucessoInserirVenda, fcErroInserirVenda } from "./inserirUtil.js";
//Recupera o elemento (Também poderíamos usar o form e o evento submit)        
const formEnviar = document.querySelector('#modalFormInserir');
formEnviar.addEventListener('submit', function(event){
    //Evita o comportamento default de submeter o formulário
    event.preventDefault();
    //Monta um objeto venda recuperando os elementos do DOM
    let cliente = document.querySelector('#cliente').value;
    let quadrimestre = parseInt(document.querySelector('#cmbQuadrimestres').value);
    let valor = parseFloat(document.querySelector('#valor').value);
    let venda = {
        "cliente": cliente,
        "quadrimestre" : quadrimestre,
        "valor" : valor
    };

    fetch("../controller/vendasInserir.php",{
        method : "POST",
        body : JSON.stringify(venda), //texto JSON
        headers :  {
            "Content-Type" : "application/json;charset=UTF-8"
        }
    })
    .then(resposta => {//Cada then representa uma promise
        if(! resposta.ok) //Lance um erro a ser capturado pelo catch
            throw new Error(resposta.status + " - " + resposta.statusText);
        return resposta; ;//Retorne a resposta dando prosegmento à promise
    })
    .then(resposta => resposta.json()) //Equivalente à função JSON.parse()
    .then(resposta=>{
        if(resposta.erro==false)
            fcSucessoInserirVenda(resposta);
        else
            fcErroInserirVenda(resposta.msg);
    })
    .catch(erro=>fcErroInserirVenda(erro)); 
})



