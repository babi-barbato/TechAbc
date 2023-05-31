<?php
    include("../assets/php/conexao.php");
    if(!isset($_SESSION)){ //se já não tiver uma $_SESSION
        session_start(); //Inicia a session
    }

    if(!isset($_SESSION['user'])){ //se a pessoa não estiver logada ocorre:
        die(header("Location: login.html")); //leva para a pag de login
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
    <?php
    $tamanhoLoop = 0;
    $sql = "SELECT * FROM carrinho where fkCliente = 1";
    
    $result = mysqli_query($conexao,$sql); //resultado
    $_SESSION['array'] = [];
    while ($linha = mysqli_fetch_array($result)){
        array_push($_SESSION['array'],$linha['fkProduto']);

        echo "<br><br>";
    }
    $conta = "SELECT count(fkCliente) FROM carrinho where fkCliente = 1";
    $testeando = mysqli_query($conexao,$conta); //resultado
    
    for($i = 0; $i < 3; $i++){
        if(isset($_SESSION['array'][$i])){

        

        $sql2 = "SELECT * FROM acessorios where ".$_SESSION['array'][$i]." = id";
        $result = mysqli_query($conexao,$sql2);
        
        while($linha2 = mysqli_fetch_array($result)){
            echo $linha2['nome'];
            echo "<br>";
        }
    }
    
    }
    ?>
    <img src="" alt="">
    <div id="nome"></div>
    <div id="preco"></div>
</body>
</html>