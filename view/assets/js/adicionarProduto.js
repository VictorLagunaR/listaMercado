const buttonAdd = document.querySelector(".adicionarProduto__button");
const novoProduto = document.querySelector(".adicionarProduto__input");

function criarProduto(){
     $.ajax({
          url: 'http://localhost/cadastro/Model/adicionandoProduto.php',
          method: 'POST',
          data: {nome: novoProduto.value},
          datatype: 'jyson'
      }).done(function(){
          novoProduto.value = ""
      })
     
}

buttonAdd.addEventListener('click',criarProduto)
    