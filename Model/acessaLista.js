const lista = document.querySelectorAll(".lista__btn");

function acessar(){
    const id = this.dataset.id;
    sessionStorage.setItem("idcliente", id)
    console.log(sessionStorage.getItem("idcliente"))
    console.log(id)
}

for (let i = 0; i < lista.length; i++) {
    lista[i].addEventListener('click', acessar);
}

