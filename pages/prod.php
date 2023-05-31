<?php
    include('../assets/php/conexao.php');
    session_start();
        
    for($i = 0; $i < 100; $i++){
        if(isset($_POST[$i])){
            $_SESSION['testea'] = $i;
        }
    }
    
    
header('Location: produtoUnico.php');

?>