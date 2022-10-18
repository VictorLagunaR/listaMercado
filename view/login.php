<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <main>
        <h1 class="titulo">Login</h1>
        <div class="container">
            <form class="container__entrada" action="../Controller/login.php">
                <label for="" class="entrada__label">E-mail</label>
                <input type="text" class="entrada__input">
                <label for="" class="entrada__label">Password</label>
                <input type="text" class="entrada__input">
                
                <div class="container__buttons">
                    <input type="submit" value="Login" id="btnLogin">
                </div>
            </form>
            
        </div>
    </main>
</body>
</html>