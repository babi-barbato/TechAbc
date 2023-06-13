<?php
include("conexao.php");//inclui a conexão

if(!isset($_SESSION)){ //inicia a sessão
    session_start();
}
if(isset($_POST['pagar'])){//se a pessoa conclui a compra (clicando no cartão, boleto ou pix)

    $sql = "DELETE FROM carrinho WHERE fkCliente = ".$_SESSION['idPe']."";//deleta todos os produtos do carrinho desse cliente que fez a compra
    $resultados = mysqli_query($conexao,$sql);//resulta a sql com a conexão
    echo "<script>window.location.href = '../../pages/carrinho.php'</script>";//leva para a página de carrinho

}
?>