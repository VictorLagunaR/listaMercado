const lista = document.querySelectorAll(".lista__btn");

function acessar(){
    const id = this.dataset.id;
    $.ajax({
        url: 'http://localhost/cadastro/Model/acessarLista.php',
        method: 'POST',
        data: {ID:id},
        datatype: 'jyson'
    }).done(function(){
        window.location.href = "./adicionarProdutos.php";
    })
    
}

for (let i = 0; i < lista.length; i++) {
    lista[i].addEventListener('click', acessar);
}

