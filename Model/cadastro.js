function mensagemErro(elemento){
    if(msg.length() > 0 ){

        const caixa = elemento;
        const mensagem = document.createElement("span");

        mensagem.textContent = "Por favor preencha o Campo!"

        caixa.classList.add("erro");
        caixa.appendChild(mensagem);
    }
}

function mensagemSucesso(){
    const mensagem = document.createElement("span");

    mensagem.innerText = msg;

    caixa.classList.add("Cadastro realizado com sucesso!");
    caixa.appendChild(mensagem);
}

var nomeInput = document.querySelector("#name").value;
var idadeInput = document.querySelector("#nascimento").value;
var localidadeInput = document.querySelector("#localidade").value;
var emailInput = document.querySelector("#email").value;
var senhaInput = document.querySelector("#password").value;

const form  = document.querySelector(".form");

form.addEventListener('submit', function(e) {
    e.preventDefault();

    if (nomeInput.length() == 0) {
        mensagemErro(document.querySelector("#name"), )
    }
    else if(idadeInput.length() == 0){
        mensagemErro(document.querySelector("#nascimento"), )
    }
    else if(localidadeInput.length() == 0){
        mensagemErro(document.querySelector("#localidade"), )
    }
    else if(emailInput.length() == 0){
        mensagemErro(document.querySelector("#email"), )
    }
    else if(senhaInput.length() == 0){
        mensagemErro(document.querySelector("#password"), )
    }
})