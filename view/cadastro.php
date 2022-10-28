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
                    <select class="form__select" name="localidade" id="localidade" placeholder="Localização">
                            
                        <option value="São Paulo">São Paulo</option>
                        <option value="Acre">Acre (AC)</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amapá">Amapá</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Ceará">Ceará</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Espírito Santo">Espírito Santo</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="Tocantins">Tocantins</option>
                    </select>
                </div>

                <div class="form__botoes">
                    <input type="submit" value="Cadastrar" class="btnCadastrar" required>
                    <a href="index.php" class="botoes__link">Já tem uma Conta?</a>
                </div>         
            </form>
            
        </div>
    </main>

    <script src="../Model/cadastro.js"></script>
</body>
</html>