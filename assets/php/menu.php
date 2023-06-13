<?php
    include("conexao.php");//chama o php de conexao

    if(!isset($_SESSION)){ //se a sessão não estiver iniciada 
        session_start();//inicia agora
    }
    if(isset($_POST["notebook"])){//Se a pessoa clicou no botão de notebook
        $_SESSION['titulo'] = "Notebooks"; //O titulo da pagina sera NOTEBOOKS
        $_SESSION['produto'] = "notebooks";// e a tabela sera notebooks
        $_SESSION['tipo'] = "notebooks"; // o tipo na hora da pesquisa sera notebooks
        header("Location: produtosGerais.php"); //leva para a pag desses produtos
    }

    if(isset($_POST["monte"])){//se a pessoa clicou no monte seu pC
        header("Location: monte_pc.php"); //leva para a pag de monte seu PC
    }

    //Segue o meesmo padrão do if(issest($_POST['nootebok'])) - mudando apenas qual produto irá pegar
    if(isset($_POST["fone"])){
        $_SESSION['titulo'] = "Fones";
        $_SESSION['produto'] = "acessorios";
        $_SESSION['tipo'] = "fone";
        header("Location: produtosGerais.php"); 
    }
    
    //Segue o meesmo padrão do if(issest($_POST['nootebok'])) - mudando apenas qual produto irá pegar
    if(isset($_POST["mouse"])){
        $_SESSION['titulo'] = "Mouses";
        $_SESSION['produto'] = "acessorios";
        $_SESSION['tipo'] = "mouse";
        header("Location: produtosGerais.php");     
    }
    
    //Segue o meesmo padrão do if(issest($_POST['nootebok'])) - mudando apenas qual produto irá pegar
    if(isset($_POST["desktop"])){
        $_SESSION['titulo'] = "Desktops";
        $_SESSION['produto'] = "desktops";
        $_SESSION['tipo'] = "desktop";
        header("Location: produtosGerais.php");     
    }
    
    //Segue o meesmo padrão do if(issest($_POST['nootebok'])) - mudando apenas qual produto irá pegar
    if(isset($_POST["mousePad"])){
        $_SESSION['titulo'] = "Mouse Pads";
        $_SESSION['produto'] = "acessorios";
        $_SESSION['tipo'] = "mousePad";
        header("Location: produtosGerais.php");     
    }
    
    //Segue o meesmo padrão do if(issest($_POST['nootebok'])) - mudando apenas qual produto irá pegar
    if(isset($_POST["monitor"])){
        $_SESSION['titulo'] = "Monitores";
        $_SESSION['produto'] = "acessorios";
        $_SESSION['tipo'] = "monitor";
        header("Location: produtosGerais.php");     
    }
    
    //Segue o meesmo padrão do if(issest($_POST['nootebok'])) - mudando apenas qual produto irá pegar
    if(isset($_POST["cooler"])){
        $_SESSION['titulo'] = "Coolers";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "cooler";
        header("Location: produtosGerais.php");     
    }
    
    //Segue o meesmo padrão do if(issest($_POST['nootebok'])) - mudando apenas qual produto irá pegar
    if(isset($_POST["armazenamento"])){
        $_SESSION['titulo'] = "Armazenamentos";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "armazenamento";
        header("Location: produtosGerais.php");     
    }
    
    //Segue o meesmo padrão do if(issest($_POST['nootebok'])) - mudando apenas qual produto irá pegar
    if(isset($_POST["ram"])){
        $_SESSION['titulo'] = "Memórias Ram";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "ram";
        header("Location: produtosGerais.php");     
    }
    
    //Segue o meesmo padrão do if(issest($_POST['nootebok'])) - mudando apenas qual produto irá pegar
    if(isset($_POST["gabinete"])){
        $_SESSION['titulo'] = "Gabinetes";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "gabinete";
        header("Location: produtosGerais.php");     
    }
    
    //Segue o meesmo padrão do if(issest($_POST['nootebok'])) - mudando apenas qual produto irá pegar
    if(isset($_POST["processador"])){
        $_SESSION['titulo'] = "Procesadores";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "processador";
        header("Location: produtosGerais.php");     
    }
    
    //Segue o meesmo padrão do if(issest($_POST['nootebok'])) - mudando apenas qual produto irá pegar
    if(isset($_POST["fonte"])){
        $_SESSION['titulo'] = "Fontes";
        $_SESSION['produto'] = "pecas";
        $_SESSION['tipo'] = "fonte";
        header("Location: produtosGerais.php");     
    }

    if (isset($_POST['pesquisar'])) {//se a pessoa clicou no botão de pesquisa
        echo "<script>alert('pesquisou')</script>";//faz um echo para verificação
        $_SESSION['nomeProduto'] = $_POST['search-value'];//a session['nomeProduto'] recebe o nome do que você pesquisou
        header("Location: ../pages/produtosPesquisa.php");// leva para a página de resultados
    }

?>