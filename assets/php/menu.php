<?php
    include("conexao.php");

    if(!isset($_SESSION)){ //inicia a sessão
        session_start();
    }
    if(isset($_POST["notebook"])){
        $_SESSION['titulo'] = "Notebooks";
        $_SESSION['produto'] = "notebooks";
        $_SESSION['tipo'] = "notebooks";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos
    }

    if(isset($_POST["monte"])){
        header("Location: monte_pc.php"); //leva para a pag cadastrar produtos
    }

    if(isset($_POST["fone"])){
        $_SESSION['titulo'] = "Fones";
        $_SESSION['produto'] = "acessorios";
        $_SESSION['tipo'] = "fone";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos
    }
    
    if(isset($_POST["mouse"])){
        $_SESSION['titulo'] = "Mouses";
        $_SESSION['produto'] = "acessorios";
        $_SESSION['tipo'] = "mouse";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos    
    }

?>