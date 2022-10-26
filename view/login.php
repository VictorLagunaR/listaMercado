<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/corpo.css">
    <link rel="stylesheet" href="assets/css/javascriptVerificacao.css">
    <title>Login</title>
</head>
<body>
    <div class='box'>
        <div class='wave -one'></div>
        <div class='wave -two'></div>
        <div class='wave -three'></div>
    </div>
    <main class="main">
        <div class="logo">
            <img src="assets/imagens/logo.png" alt="logo" class="logo__img">
        </div>
        <form class="main__login" action="../Controller/login.php">
            <div class="login__box">
                <label for="" class="login__label"><img src="assets/imagens/email-icon.png" alt=""></label>
                <input type="email" class="login__input" placeholder="Login">
                <span class="mensagem">Preencha o campo</span>
            </div>
            <div class="login__box">
                <label for="" class="login__label"><img src="assets/imagens/password-icon.png" alt=""></label>
                <input type="password" class="login__input" placeholder="Senha">
                <span class="mensagem">Preencha o campo</span>
            </div>
            <div class="login__box checkbox">
                <label for="conexao">Mantenha-me Conectado</label>
                <input type="checkbox" name="conexao" id="conexao">
                <span class="mensagem">Preencha o campo</span>
            </div> 
            <div class="login__buttons">
                <input type="submit" value="Login" id="btnLogin" value="Login">
                <p class="buttons__descricao">
                    Não tem uma conta?
                </p>
                <a href="cadastro.php" class="buttons__link">Cadastre-se agora!</a>
                <a href="#" class="buttons__link">Esqueci a minha senha</a>
            </div>
        </form>            
    </main>

    <script src="../Model/login.js"></script>
</body>
</html>