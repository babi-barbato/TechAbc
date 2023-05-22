<?php
session_start(); 

if (isset($_POST['enviar'])){
    include('conexao.php'); 

    echo "<script>alert('ERRO')</script>";

    $ruasa=$_POST['ruas'];
    $bairo=$_POST['bairro'];

    // header ('Location:../../pages/cad_ennde.html');

}

?>