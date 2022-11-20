const buttonAdd = document.querySelector(".adicionarProduto__button");
const novoProduto = document.querySelector(".adicionarProduto__input");

function criarProduto(){
     $.ajax({
          url: 'http://localhost/cadastro/Model/adicionandoProduto.php',
          method: 'POST',
          data: {nome: novoProduto.value},
          datatype: 'jyson'
      }).done(function(){
          novoProduto.value = "";
          getProdutos();
      })
     
}

function getProdutos() {
    $.ajax({
        url: 'http://localhost/cadastro/Model/acessandoProdutos.php',
        method: 'GET',
        datatype: 'json'
    }).done(function(result){
      if (typeof result === "string") {
        $('.produtos__lista').html("");
        $('.produtos__lista').prepend('<h4 class = "notFind">'+ result +'</h4>')
      }
      else{
          $('.produtos__lista').html("");
        for (let i = 0; i < result.length; i++) {
          $('.produtos__lista').prepend('<li class="lista__produto ><div class = "produto__container"><h3 class="produto__nome">' + result[i].nome + '</h3></div><button class="produto__excluir" data-iProduto=' + result[i].idproduto + '><span class="material-symbols-outlined">close</span></button></li>')
        }

        //criando função de deletar produto
        
        const excluir = document.querySelectorAll(".produto__excluir");
        function deletarproduto(){
          const id = this.dataset.iproduto;
          console.log(id)
          
          $.ajax({
              url: 'http://localhost/cadastro/Model/deletarProduto.php',
              method: 'POST',
              data: {ID:id},
              datatype: 'jyson'
          }).done(function(result){
              console.log(result);
              getProdutos();
          })
          
         }
        for (let i = 0; i < excluir.length; i++) {
          excluir[i].addEventListener('click',deletarproduto)
        }
      }
        
    });
}
getProdutos();

buttonAdd.addEventListener('click',criarProduto);


    