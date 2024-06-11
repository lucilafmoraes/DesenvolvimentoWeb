
import { listar } from "./listarUtil.js";
import { preencherHtml } from "../utiljs/sistemaUtil.js";

(()=>{
    
    listar();
    const btnInserirVendedor = document.querySelector("#btnInserirVendedor");
    btnInserirVendedor.addEventListener('click',async ()=>{
        await preencherHtml("formVendedor.html", document.querySelector("#modalFormVendedor"));
        document.querySelector(".meuModal").showModal();
    })
    const btnFecharModal = document.querySelector("#btnFecharModalVendedor");
    btnFecharModal.onclick=()=>{
        document.querySelector(".meuModal").close();
    }
})();       
