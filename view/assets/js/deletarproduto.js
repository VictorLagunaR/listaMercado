const produto = document.querySelectorAll(".lista__produto");
const excluir = document.querySelectorAll(".produto__excluir");

function excluirProduto() {
    this.parentNode.classList.add("deletado");
}

for (let i = 0; i < produto.length; i++) {
    excluir[i].addEventListener('click',excluirProduto)
}