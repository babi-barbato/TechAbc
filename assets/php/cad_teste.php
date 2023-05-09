<?php
session_start(); 

 
if (isset($_POST['cadastrar'])){
    include('conexao.php'); 
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    
    $sql_email= "SELECT * FROM cadastro WHERE email = '$email'";
    $result1 = mysqli_query($conexao,$sql_email);
    if (mysqli_num_rows($result1) !=0){
        echo "<script> alert ('email ja cadastrado')</script>";

    }

} else{
    $sql="INSERT INTO cadastro (`nome`, `cpf`, `telefone`, `email`, `senha`) VALUES ('$nome', '$cpf','$telefone','$email', '$senha')"; 
    $result = mysqli_query($conexao,$sql);
   
}
