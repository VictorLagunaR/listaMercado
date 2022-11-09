<!-- <?php
    if (!isset($_SESSION)) {
        session_start();
    }
?> -->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="assets/css/corpo.css">
    <link rel="stylesheet" href="assets/css/sistema.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="assets/css/header.css">
    <title>Lista de Comprar</title>
</head>
<body>
    <header class="cabecalho">
        <button id="usuario">
            <img src="assets/imagens/email-icon.png" id="usuario__icon" alt="usuario">
        </button>
        <a href="" class="cabecalho__link">
            <img src="assets/imagens/logo.png" alt="Logo empresa" class="link__logo">
        </a>
        <button id="menu">
            <span class="material-symbols-outlined" id = "menuIcon">
                menu
            </span>
            
            <ul class="menu__submenu">
                <li class="submenu__item"><a href="" class="item__link">Coisas</a></li>
                <li class="submenu__item"><a href="" class="item__link">Mais items</a></li>
                <li class="submenu__item"><a href="" class="item__link">Não sei</a></li>
                <li class="submenu__item"><a href="" class="item__link">sair</a></li>
            </ul>
        </button>
    </header>
    <main class="container">
        <h1 class="container__titulo">Minhas listas</h1>
        <ul class="container__listas">
            <li class="listas__lista">
                <h3 class="lista__nome">Compras pra casa</h3>
            </li>
            <li class="listas__lista">
                <h3 class="lista__nome">hoje</h3>
            </li>
            <li class="listas__lista">
                <h3 class="lista__nome">Corn dog</h3>
            </li>
        </ul>
        <button class="container__adicionar-lista"> 
            <span class="material-symbols-outlined">
            add
            </span>
            Nova lista
        </button>
        <form action="../Model/AdicionarLista.php" method="post" id="adicionar-lista">
            <input type="text" class="adicionar__input" placeholder="Nome da Lista:">
            <spam class="mensagemErro">Insira um nome!</spam>
            <div class="adicionar__buttons">
                <button class="adicionar__enviar  excluir" >Excluir</button>
                <input type="submit" class="adicionar__enviar submit" value="Adicionar">
            </div>
        </form>
    </main>


    <script src="../Model/adicionar-item.js"></script>
</body>
</html>
