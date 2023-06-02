<?php
include("conexao.php"); 

if(!isset($_SESSION)){ //inicia a sessão
    session_start();
}

if (isset($_POST['cadastrar'])){
    
    include('conexao.php'); 
    $erro = 0;
    $nome=$_POST['nome'];
    $cpf=$_POST['cpf'];
    $telefone=$_POST['telefone'];
    $email=$_POST['email'];
    $senha=$_POST['senha'];
    $conf=$_POST['conf'];

    if(strlen($cpf) != 11){
        echo "<script>alert('CPF com tamanho incorreto')</script>";
        $erro++;
    }

    $soma1 = 0;
    $soma2 = 0;
    $cpfSeparado = str_split($cpf);
    
    for($cont = 0; $cont < 9; $cont++) {
        $soma1 += $cpfSeparado[$cont] * (10 - $cont); //atribui a variavel soma1 o numero do cpf_list (cpf_list(0))
    }

    if($soma1 % 11 > 1 || $soma1 % 11 < 0) { // se ele for menor q 1 ou maior q 0 (0,1) o número tem q ser 0 por isso o else 0
        $soma1 = 11 - ($soma1 % 11);
    }else{
        $soma1 = 0;
    }
    
      // Verificação do segundo dígito verificador
    for ($cont = 0; $cont < 10; $cont++) {
        $soma2 += $cpfSeparado[$cont] * (11 - $cont);
    }

    if($soma2 % 11 > 1 || $soma2 % 11 < 0) {
        $soma2 = 11 - ($soma2 % 11);
    }else{
        $soma2 = 0;
    }
    
      // Verifica se os dígitos verificadores são iguais aos do número fornecido
    if($soma1 != $cpfSeparado[9] || $soma2 != $cpfSeparado[10]) {
        $erro++;
    }

    $sql_email= "SELECT * FROM clientes WHERE email = '$email'"; //ferifica se o email ja é existente
    $result1 = mysqli_query($conexao,$sql_email);//testa a conexão
        
    if (mysqli_num_rows($result1) != 0){  
        echo "<script>alert ('email ja cadastrado')</script>";
        echo "<script>  window.location.href=' ../../pages/login.html '</script>";//se o result for diferente de zero, o email ja foi cadastrado e redireciona para a pagina de login
    } else {       
        $sql_cpf = "SELECT * FROM clientes WHERE cpf = '$cpf'"; //verifica se o cpf ja existe
        $result2 = mysqli_query($conexao,$sql_cpf);
        if(mysqli_num_rows($result2) != 0){
            echo "<script> alert ('cpf ja cadastrado')</script>";
            echo "<script> window.location='../../pages/cadastro_cliente.html'</script>";
        }else{
            if($senha != $conf){
                echo "<script>alert('Senhas diferentes')</script>";
                echo "<script> window.location='../../pages/cadastro_cliente.html'</script>";
            }else{
                if($erro != 0){
                    echo "<script>alert('CPF INVALIDO')</script>";
                    echo "<script>window.location='../../pages/cadastro_cliente.html'</script>";
                }else{
                    $sql="INSERT INTO clientes (nome, cpf, email, telefone, senha,idClientes) VALUES ('$nome', '$cpf','$email','$telefone','$senha','')"; 
                    $result = mysqli_query($conexao,$sql);
                    header ( 'Location:../../pages/cadastro_enderecos.php');
                }
            }
        }
    }
}
