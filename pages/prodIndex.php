<?php
    include('../assets/php/conexao.php');//Inclui a conexão php
    session_start();//inicia a sessão
        
    for($i = 0; $i < 200; $i++){//loop para percorrer todos os produtos
        if(isset($_POST[$i])){//se a pessoa clicou no produto do index acpnte:
            $_SESSION['produto'] = 'acessorios';// a tabela sera acessorios
            $_SESSION['testea'] = $i;//o id do produto sera o id do produto que a pessoa clicou
        }
    }
    
header('Location: produtoUnico.php');//leva para a página de produto Unico
?>