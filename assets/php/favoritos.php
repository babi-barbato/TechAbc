<?php

include('conexao.php');
include('bloqueio.php');


if(isset($_POST['favoritos'])){

    $sqlFavoritos = "SELECT * FROM ".$_SESSION['produto']." WHERE id = ".$_SESSION['testea'].""; //seleciona todos os produtos de uma determinada tabela
    $result = mysqli_query($conexao,$sqlFavoritos); //resultado
    
    while ($linha = mysqli_fetch_array($result)){
        $_SESSION['idFavoritos'] = $linha['id'];
    }

    echo"<script>alert('Produto Adicionado aos Favoritos')</script>";

    $sqlTeste2 = "INSERT INTO favoritos VALUES ('".$_SESSION['idPe']."','".$_SESSION['idFavoritos']."','".$_SESSION['produto']."')";
    $sqlResult2 = mysqli_query($conexao,$sqlTeste2);
    header("Location: ../../pages/favoritos.php");

}
?>