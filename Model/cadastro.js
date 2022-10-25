
//recebendo os inputs com a classe form__input
const inputs = document.querySelectorAll(".form__input");

//recebendo o spam de mensagens do input de confirmação de senha
const mensagem = document.querySelector(".confirm")

//recebendo valor das senhas digitadas pelo o usuario
var password = document.querySelector("#password");
password = password.value;
var passwordConfirm = document.querySelector("#passwordConfirm").value;
passwordConfirm = passwordConfirm.value;

const submit = document.querySelector(".btnCadastrar");

//criando condição ao apertar o botao de enviar
//ao apertar acionara a função para verificar se todos os campos da respectiva classe foram preenchidos


submit.addEventListener('click',function verificacao(event){

    if(password == passwordConfirm){
        password.classList.remove("erro");
        passwordConfirm.classList.remove("erro");
        password.classList.add("sucess");
        passwordConfirm.classList.add("sucess");
        
        for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value.length == 0) {
            event.preventDefault()
            inputs[i].parentNode.classList.add("erro")
            submit.classList.add("notSubmit")
            console.log(password)
            console.log(passwordConfirm)
        }
        else{
            inputs[i].parentNode.classList.remove("erro")
            inputs[i].parentNode.classList.add("sucess")
        }
    }
    else{
        event.preventDefault()
        password.classList.add("erro");
        passwordConfirm.classList.add("erro");
        mensagem.textContent = "As senhas não são iguais";
    }

})
