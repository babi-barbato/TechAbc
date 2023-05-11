<?php
 session_start(); //inicia uma sessão (isso permte saber se está logado ou não)
 
 if (isset($_POST["cadastrar"])){
    include('conexao.php'); //Inclui a conexão 
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    


    $sqli_email= "SELECT * FROM cliente WHERE email = '$email'";
    $result1 = mysqli_query($conexao,$sql_email);
        
    if (mysqli_num_rows($result1) != 0){  
     
        echo "<script>alert ('email ja cadastrado')</script>";

            while ($linha = mysqli_fetch_array($result1)){
                if ($cpf == $linha['cpf']){
                    echo "<script>alert ('cpf ja cadastrado')</script>";} 
          
            }
    }

    $sql_cpf = "SELECT * FROM cliente WHERE cpf = '$cpf'";
    $result2 = mysqli_query($conexao,$sql_cpf);
    if(mysqli_num_rows($result2) != 0){
        echo "<script> alert (' cpf ja cadastrado')</script>";
        
        echo "<script> window.location='../../pages/login.html'</script>"; 

    
                            
}else{
    $sql_cpf = "SELECT * FROM cliente WHERE cpf = '$cpf'";
    $result2 = mysqli_query($conexao,$sql_cpf);
    if(mysqli_num_rows($result2) != 0){
        echo "<script> alert (' cpf ja cadastrado, cadastrar novo email')</script>"; }
      else {         
      $sql="INSERT INTO clientes (`nome`, `cpf`, `email`, `telefone`, `senha`) VALUES ('$nome', '$cpf','$email','$telefone','$senha')";
    $result=mysqli_query($conexao,$sql);
    echo "<script> window.location.href=' ../html/login.php'</script>"; }
      
      }
    }
    
?>
