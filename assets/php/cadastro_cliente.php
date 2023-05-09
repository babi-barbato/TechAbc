<?php
 include('conexao.php'); //Inclui a conexão 
 session_start(); //inicia uma sessão (isso permte saber se está logado ou não)

if (isset($_POST["cadastrar"])){
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $conf_senha = $_POST['conf'];


    $sqli_email= "SELECT * FROM cadastro WHERE email = '$email'";
    $result = mysqli_query($conexao,$sql_email);
        
    if (mysqli_num_rows($result) != 0){  
     
        echo "<script>alert ('email ja cadastrado')</script>";

            while ($linha = mysqli_fetch_array($result)){
                if ($cpf == $linha['cpf']){
                    echo "<script>alert ('cpf ja cadastrado')</script>";} 
          
            }
    }

    $sql_cpf = "SELECT * FROM cadastro WHERE cpf = '$cpf'";
    $result2 = mysqli_query($conexao,$sql_cpf);
    if(mysqli_num_rows($result2) != 0){
        echo "<script> alert (' cpf ja cadastrado')</script>";
        
        echo "<script> window.location='../../pages/login.html'</script>"; 

    }
                            
}else{
    $sql_cpf = "SELECT * FROM cadastro WHERE cpf = '$cpf'";
    $result2 = mysqli_query($conexao,$sql_cpf);
    if(mysqli_num_rows($result2) != 0){
        echo "<script> alert (' cpf ja cadastrado, cadastrar novo email')</script>"; 
    
}else {         
      $sql=" INSERT INTO cadastro (nome, cpf, telefone, email, senha) VALUES ('$nome', '$cpf','$telefone', '$email', '$senha')";
    $result=mysqli_query($conexao,$sql);
    echo "<script> window.location='login.html'</script>"; }
      }

    
?>
