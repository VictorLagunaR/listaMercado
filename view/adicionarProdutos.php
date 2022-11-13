<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/header.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="assets/css/corpo.css"> 
    <link rel="stylesheet" href="assets/css/adicionarProdutos.css">   
    <title>Adicionar produtos</title>
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

    <main class="lista">
        <h1 class="lista__nome">Nome</h1>
        <h2 class="lista__produtoNome">Adicione um item na lista</h2>
        <div class="lista__adicionarProduto">
            <input type="text" class="adicionarProduto_input" placeholder="Ex: Batata">
            <button class="adicionarProduto__button">
                <span class="material-symbols-outlined adicionarProduto__icon">
                    add
                </span>
            </button>
        </div>

        <div class="produtos">
            <ul class="produtos__lista">
                <li class="lista__produto">
                    <h3 class="produto__nome">nome produto1</h3>
                    <button class="produto__excluir">
                        <span class="material-symbols-outlined">
                            close
                            </span>
                    </button>
                </li>
                <li class="lista__produto">
                    <h3 class="produto__nome">nome produto2</h3>
                    <button class="produto__excluir">
                        <span class="material-symbols-outlined ">
                            close
                            </span>
                    </button>
                </li>
            </ul>
        </div>
    </main>

    <script src="../Model/deletarProduto.js"></script>
</body>
</html>
