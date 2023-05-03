<?php
    include("../assets/php/conexao.php");

    if(!isset($_SESSION)){ //inicia a sessão
        session_start();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" name="form" method="post">
        <button name="nota" value="" type="submit"> ss</button>
        <input name="fone" value="fone" type="submit">
    </form>
</body>
</html>
    <?php
        if(isset($_POST["nota"])){
             $_SESSION['titulo'] = "Notebooks";
             $_SESSION['produto'] = "notebooks";
             $_SESSION['tipo'] = "notebooks";
             header("Location: ./produtosGerais.php"); //leva para a pag cadastrar produtos
        }

        if(isset($_POST["fone"])){
             $_SESSION['titulo'] = "Fones";
             $_SESSION['produto'] = "acessorios";
             $_SESSION['tipo'] = "fone";
             header("Location: ./produtosGerais.php"); //leva para a pag cadastrar produtos
        }

        
    ?>
