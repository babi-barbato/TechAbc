<?php
include('conexao.php');//inclui o php de conexão
include('bloqueio.php');// inclui o php de bloqueio

if(isset($_POST["compra"])){//se a pessoa clicou no btn de comprar agora
    $sqlProdutos = "SELECT * FROM ".$_SESSION['produto']." WHERE id = ".$_SESSION['testea'].""; //seleciona o produto de uma determinada tabela
    $resultado = mysqli_query($conexao,$sqlProdutos); //resultado

    while ($linha = mysqli_fetch_array($resultado)){//tranforma em while para teste interno do TECHABC
        echo $linha['nome'];//Teste interno do TECHABC
    }
    header("Location: ../../pages/pagamento.php");//leva para a página de pagamento
}

if(isset($_POST["carrinho"])){//se a pessoa clicou no btn de carrinho
    $sqlProdutos = "SELECT * FROM ".$_SESSION['produto']." WHERE id = ".$_SESSION['testea'].""; //seleciona todos os produtos de uma determinada tabela
    $resultado = mysqli_query($conexao,$sqlProdutos); //resultado
    
    while ($linha = mysqli_fetch_array($resultado)){//cria um while que acomula esse valor dp resultadp
        $_SESSION['idProdutoCar'] = $linha['id'];//session do idProdutoCar é igual ao id do produto que adicionei no carrinho
    }

    //SQLTESTE: realiza a inserção dos dados (id pessoa, id produto, nome tabela desse produto) na tabela carrinho
    $sqlTeste = "INSERT INTO carrinho VALUES ('".$_SESSION['idProdutoCar']."','".$_SESSION['idPe']."','".$_SESSION['produto']."')";
    $sqlResult = mysqli_query($conexao,$sqlTeste);//realiza o sql acima
    header("Location: ../../pages/carrinho.php");//leva para a página de carrinho

}
?>

