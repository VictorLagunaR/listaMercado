const adicionarLista = document.querySelector(".container__adicionar-lista") 
const form = document.querySelector("#adicionar-lista");
const excluir = document.querySelector(".excluir");
const adicionar = document.querySelector(".submit");
const nomeLista = document.querySelector(".adicionar__input");
const erro = document.querySelector(".mensagemErro");
adicionarLista.addEventListener('click', function(){
    form.style.display = "flex";
    adicionarLista.style.display = "none";

})



excluir.addEventListener('click', function (e) {
    e.preventDefault();
    form.style.display = "none";
    adicionarLista.style.display = "flex";
    nomeLista.value = "";
    erro.style.display = "none";
})

adicionar.addEventListener('click',function (event) {
        
    if (nomeLista.value.length == 0) {
        event.preventDefault();
        erro.style.display = "block";
    }
})
