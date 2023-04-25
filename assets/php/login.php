<?php
    include('conexao.php'); //Inclui a conexão 
    session_start(); //inicia uma sessão (isso permte saber se está logado ou não)
   
   if(isset($_POST['user']) || isset($_POST['senha'])){ //esse email e senha é do html (é pegado por meio do NAME do input)

       if(strlen($_POST['user']) == 0 ){ //caso a pessoa não tenha digitado nada aparecera isso
           echo "<script> alert('Preencha seu e-mail')</script>";
           echo "<script> window.location='../../pages/login.html'</script>";

       }else if(strlen($_POST['senha']) == 0 ){ // caso a pessoa não tenha digitado nehnhuma senha aparece isso
           echo "<script> alert('Preencha sua senha')</script>";
           echo "<script> window.location='../../pages/login.html'</script>";

       }else{// se a pessoa digitou tudo certinho vai seguir o código abaixo
            $email = $_POST['user'];// crio a variavel email e pego o valor digitado no email
            $senha = $_POST['senha'];// crio a variavel senha e pego o valor digitado na senha

            $sql_code = "SELECT * FROM clientes WHERE email = '$email' AND senha = '$senha'"; //verifico se o email e senha digitados tem no banco
            $result = mysqli_query($conexao,$sql_code);// pega o resultado fazendo a conexão
            $quantidade = mysqli_num_rows($result); // pego a qtd de linhas (se tiver uma linha significa que tem um login)
           
            while ($linha = mysqli_fetch_array($result)){ // crio um while para armazenar as informações
           
                if($email == "babi@gmail.com" && $senha == "babi"){ //email de adm abaixo

                    $_SESSION['user'] = $linha['user'];// crio uma variavel global e dou a ela o valor do email
                    header("Location: ../../pages/produtosGerais.html"); //leva para a pag cadastrar produtos
                    
                }else if($quantidade == 1){ //parte de clientes abaixo
                    
                    $_SESSION['user'] = $linha['user'];// crio uma variavel global e dou a ela o valor do email
                    header("Location: ../html/agenda.php"); //leva para a pag da agenda

                }
            }
            echo "<script> alert('Falha ao logar! E-mail ou senha incorretos') </script>"; //se a pessoa digitou algo errado aparece um alert
            echo "<script> window.location='../../pages/login.html'</script>";// Leva para a página de login
       }
   }

?>