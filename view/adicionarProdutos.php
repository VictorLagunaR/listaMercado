<?php
    if (!isset($_SESSION)) {
        session_start();
        require_once ("../Controller/Api.php");
        $api = new Api();
    }
?>

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
        <?php
            $api -> nomeLista($_SESSION['idUsuario'],$_SESSION['IDlista']);
        ?>
        <h2 class="lista__produtoNome">Adicione um item na lista</h2>
        <div class="lista__adicionarProduto">
            <input type="text" class="adicionarProduto__input" placeholder="Ex: Batata">
            <button class="adicionarProduto__button">
                <span class="material-symbols-outlined adicionarProduto__icon">
                    add
                </span>
            </button>
        </div>

        <div class="produtos">
            <ul class="produtos__lista">
            </ul>
        </div>
    </main>


    <script src="assets/js/JQuery/jquery-3.5.1.min.js"></script>
    <script src="assets/js/produtos.js"></script>
</body>
</html>
