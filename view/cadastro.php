<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/cadastro.css">
    <link rel="stylesheet" href="assets/css/corpo.css">
    <link rel="stylesheet" href="assets/css/javascriptVerificacao.css">
    <title>Cadastro</title>
</head>
<body>
    <div class='box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>
    <main class="principal">
        <div class="main__aside">
            <img src="assets/imagens/mercadoCadastro.png">
        </div>
        <div class="logo">
            <img src="assets/imagens/logo.png" alt="logo" class="logo__img">
        </div>
        <div class="principal__login">
            <h1 class="login__titulo">Cadastre-se</h1>
            <form class="login__form" action="../Model/Cadastramento.php" method="POST">
                <div class="form__control">
                    <input type="text" name="name" id="name" class="form__input" required placeholder="Nome">
                    <span class="mensagem">Preencha o campo</span>
                </div>
                <div class="form__control">
                    <input type="email" name="email" id="email" class="form__input" required placeholder="E-mail">
                    <span class="mensagem">Preencha o campo</span>
                </div>
                <div class="form__control">
                    <input type="password" name="password" id="password" class="form__password" required placeholder="Senha">
                    <span class="mensagem password"></span>
                </div>
                <div class="form__control">
                    <input type="password" name="password" id="passwordConfirm" class="form__password" required placeholder="Confirme a senha">
                    <span class="mensagem confirm"></span>
                </div>
                <div class="form__control">
                    <input type="date" name="nascimento" id="nascimento" class="form__input" required placeholder="Data de nascimento">
                    <span class="mensagem">Preencha o campo</span>
                </div>
                <div class="form__control">
                    <select class="form__select" name="localidade" id="localidade" placeholder="Localiza????o">
                            
                        <option value="S??o Paulo">S??o Paulo</option>
                        <option value="Acre">Acre (AC)</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amap??">Amap??</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Cear??">Cear??</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Esp??rito Santo">Esp??rito Santo</option>
                        <option value="Goi??s">Goi??s</option>
                        <option value="Maranh??o">Maranh??o</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Par??">Par??</option>
                        <option value="Para??ba">Para??ba</option>
                        <option value="Paran??">Paran??</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piau??">Piau??</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        <option value="Rond??nia">Rond??nia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="S??o Paulo">S??o Paulo</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="Tocantins">Tocantins</option>
                    </select>
                </div>

                <div class="form__botoes">
                    <input type="submit" value="Criar uma Conta" class="btnCadastrar" required>
                    <a href="index.php" class="botoes__link">J?? tem uma Conta?</a>
                </div>         
            </form>
            
        </div>
    </main>

    <script src="assets/js/cadastro.js"></script>
</body>
</html>