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
    
    if(isset($_POST["desktop"])){
        $_SESSION['titulo'] = "Desktops";
        $_SESSION['produto'] = "desktops";
        $_SESSION['tipo'] = "desktop";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos    
    }
    
    if(isset($_POST["mousePad"])){
        $_SESSION['titulo'] = "Mouse Pads";
        $_SESSION['produto'] = "acessorios";
        $_SESSION['tipo'] = "mousePad";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos    
    }
    
    if(isset($_POST["monitor"])){
        $_SESSION['titulo'] = "Monitores";
        $_SESSION['produto'] = "acessorios";
        $_SESSION['tipo'] = "monitor";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos    
    }
    
    if(isset($_POST["cooler"])){
        $_SESSION['titulo'] = "Coolers";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "cooler";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos    
    }
    
    if(isset($_POST["armazenamento"])){
        $_SESSION['titulo'] = "Armazenamentos";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "armazenamento";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos    
    }
    
    if(isset($_POST["ram"])){
        $_SESSION['titulo'] = "Memórias Ram";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "ram";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos    
    }
    
    if(isset($_POST["gabinete"])){
        $_SESSION['titulo'] = "Gabinetes";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "gabinete";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos    
    }
    
    if(isset($_POST["processador"])){
        $_SESSION['titulo'] = "Procesadores";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "processador";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos    
    }
    
    if(isset($_POST["fonte"])){
        $_SESSION['titulo'] = "Fontes";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "fonte";
        header("Location: produtosGerais.php"); //leva para a pag cadastrar produtos    
    }

    if (isset($_POST['pesquisar'])) {
        echo "<script>alert('pesquisou')</script>";

        $_SESSION['nomeProduto'] = $_POST['search-value'];

        
        header("Location: ../pages/produtosPesquisa.php");
        
    }



?>