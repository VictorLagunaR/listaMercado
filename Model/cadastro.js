
//recebendo os inputs com a classe form__input
const inputs = document.querySelectorAll(".form__input");

//recebendo o spam de mensagens do input de confirmação de senha
const mensagemConfirm = document.querySelector(".confirm")
const mensagemSenha = document.querySelector(".password")

//recebendo as tags das senhas
const password = document.querySelector("#password");

const passwordConfirm = document.querySelector("#passwordConfirm");


const submit = document.querySelector(".btnCadastrar");

//criando condição ao apertar o botao de enviar
//ao apertar acionara a função para verificar se todos os campos da respectiva classe foram preenchidos


submit.addEventListener('click',function verificacao(event){
    //recebendo valor das senhas digitadas pelo o usuario
    const senha = password.value;
    const senhaConfirm = passwordConfirm.value;

    //verificando os inputs se estão preenchidos
    for (let i = 0; i < inputs.length; i++) {
        if (inputs[i].value.length == 0) {
            event.preventDefault()
            inputs[i].parentNode.classList.add("erro")
            submit.classList.add("notSubmit")
        }
        else{
            inputs[i].parentNode.classList.remove("erro")
            inputs[i].parentNode.classList.add("sucess")
        }
    }
    console.log(password.parentNode);

    //verificação das senhas se são iguais e se possuem no  mínimo oito caracterers
    if(senha == senhaConfirm && senha.length > 7){
        console.log("on")
        password.parentNode.classList.remove("erro");
        passwordConfirm.parentNode.classList.remove("erro");
        password.parentNode.classList.add("sucess");
        passwordConfirm.parentNode.classList.add("sucess");

        mensagemConfirm.textContent = "";
        mensagemSenha.innerHTML = "";
    }
    else if(senha != senhaConfirm){
            
            const mensagemSenha = document.querySelector(".password")

            event.preventDefault();

            submit.classList.add("notSubmit")
            password.parentNode.classList.remove("sucess");
            passwordConfirm.parentNode.classList.remove("sucess");
            passwordConfirm.parentNode.classList.add("erro");
            password.parentNode.classList.add("erro");
            mensagemSenha.innerHTML = "";
            mensagemConfirm.textContent = "As senhas não são iguais";
            if (senha.length < 8) {
                mensagemSenha.innerHTML = "A senha deve ter no mínimo oito caracteres!";
            }
    }
    else{
        event.preventDefault();

        submit.classList.add("notSubmit")
        password.parentNode.classList.remove("sucess");
        passwordConfirm.parentNode.classList.remove("sucess");
        passwordConfirm.parentNode.classList.add("erro");
        password.parentNode.classList.add("erro");
        mensagemConfirm.textContent = "";
        mensagemSenha.innerHTML = "A senha deve ter no mínimo oito caracteres!";
    }

})
