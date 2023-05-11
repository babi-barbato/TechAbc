<?php
session_start(); 

 
if (isset($_POST['cadastrar'])){

    include('conexao.php'); 
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    
    $sql_email= "SELECT * FROM clientes WHERE email = '$email'";
    $result1 = mysqli_query($conexao,$sql_email);
        
    if (mysqli_num_rows($result1) != 0){  
     
        echo "<script>alert ('email ja cadastrado')</script>";
        echo "<script>  window.location.href=' ../../pages/login.html '</script>";
    }else {

           
     $sql_cpf = "SELECT * FROM clientes WHERE cpf = '$cpf'";
    $result2 = mysqli_query($conexao,$sql_cpf);
    if(mysqli_num_rows($result2) != 0){
        echo "<script> alert (' cpf ja cadastrado')</script>";
        
        echo "<script> window.location='../../pages/login.html'</script>";

    }  else{


     $sql="INSERT INTO clientes (nome, cpf, email, telefone, senha,idClientes) VALUES ('$nome', '$cpf','$email','$telefone','$senha','')"; 
     $result = mysqli_query($conexao,$sql);
     header ( 'Location:../../pages/login.html');
    }
}
}
