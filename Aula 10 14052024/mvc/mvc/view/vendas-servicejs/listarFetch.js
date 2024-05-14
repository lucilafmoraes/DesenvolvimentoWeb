//Fazendo os imports
import { listar } from "./listarUtil.js";
import { preencherHtml } from "../utiljs/sistemaUtil.js";
//Utilizando IIFE (Função autoinvocável)
(()=>{
    listar();
    const btnInserir = document.querySelector("#btnInserirVenda");
    btnInserir.addEventListener('click',async ()=>{
        await preencherHtml("formVendas.html", document.querySelector("#modalFormInserir"));
        document.querySelector(".meuModal").showModal();
    })
    const btnFecharModal = document.querySelector("#btnFecharModal");
    btnFecharModal.onclick=()=>{
        document.querySelector(".meuModal").close();
    }
})();       