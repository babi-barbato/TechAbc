<?php
include('conexao.php');
include('bloqueio.php');

if(isset($_POST["compra"])){
    $sqlProdutos = "SELECT * FROM ".$_SESSION['produto']." WHERE id = ".$_SESSION['testea'].""; //seleciona todos os produtos de uma determinada tabela
    $resultado = mysqli_query($conexao,$sqlProdutos); //resultado

    while ($linha = mysqli_fetch_array($resultado)){
        echo $linha['nome'];
    }
    header("Location: ../../pages/cadastro_endereco.html");
}

if(isset($_POST["carrinho"])){
    $sqlProdutos = "SELECT * FROM ".$_SESSION['produto']." WHERE id = ".$_SESSION['testea'].""; //seleciona todos os produtos de uma determinada tabela
    $resultado = mysqli_query($conexao,$sqlProdutos); //resultado
    
    while ($linha = mysqli_fetch_array($resultado)){
        $_SESSION['idProdutoCar'] = $linha['id'];
    }

    $sqlTeste = "INSERT INTO carrinho VALUES ('".$_SESSION['idProdutoCar']."','".$_SESSION['idPe']."','".$_SESSION['produto']."')";
    $sqlResult = mysqli_query($conexao,$sqlTeste);
    header("Location: ../../pages/carrinho.php");

}
?>

