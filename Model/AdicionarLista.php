<?php
    session_start();
    require_once "../Controller/Api.php";

    $adicionar = new Api();

    $adicionar -> adicionarLista($_POST['novaLista'],$_SESSION['idUsuario']);
?>