import { fcSucessoInserirVendedor,fcErroInserirVendedor } from "./inserirUtil.js";
import { fcSucessoAlterarVendedor, fcErroAlterarVendedor } from "./alterarUtil.js";
import { meuFetch2 } from "../utiljs/obtemFetch.js";
      
const formEnviar = document.querySelector('#modalFormVendedor');
formEnviar.addEventListener('submit', function(event){
    event.preventDefault();
    let id = parseInt(document.querySelector('#id').value);
    console.log(id)
    let nome = document.querySelector('#nome').value;
    let perComissao = parseFloat(document.querySelector('#percentual_comissao').value);
    let vendedor = {
        "id": id,
        "nome": nome,
        "percentual_comissao": perComissao
    };

    if(vendedor.id>0)
        meuFetch2("PUT","../controller/vendedorAlterar.php",fcSucessoAlterarVendedor,fcErroAlterarVendedor,vendedor);
    else
        meuFetch2("POST","../controller/vendedorInserir.php",fcSucessoInserirVendedor,fcErroInserirVendedor,vendedor); 
})

