<?php
if(!isset($_SESSION)){ //inicia a sessão
    session_start();
}

include('conexao.php');//inclui php de conexão
include('bloqueio.php');//inclui php de bloqueio


if(isset($_POST['favoritos'])){//se a pessoa clicou no produto de adicionar nos favoritos

    $sqlFavoritos = "SELECT * FROM ".$_SESSION['produto']." WHERE id = ".$_SESSION['testea'].""; //seleciona todos os produtos de uma determinada tabela
    $result = mysqli_query($conexao,$sqlFavoritos); //resultado
    
    while ($linha = mysqli_fetch_array($result)){ //transforma em um while
        $_SESSION['idFavoritos'] = $linha['id'];//session['idFavoritos] vai receber o valor do id do produto que eu favoritei
    }

    echo"<script>alert('Produto Adicionado aos Favoritos')</script>";//alerta

    //sqlTeste2: é o sql que adiciona na tabela favoritos o id desse produto, junto com o nome da tabela que ele pertence e o id da pessoa
    $sqlTeste2 = "INSERT INTO favoritos VALUES ('".$_SESSION['idPe']."','".$_SESSION['idFavoritos']."','".$_SESSION['produto']."')";
    $sqlResult2 = mysqli_query($conexao,$sqlTeste2);//realiza sql acima

    header("Location: ../../pages/favoritos.php");//leva para a página de favoritos

}
?>