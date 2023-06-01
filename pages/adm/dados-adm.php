<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&family=Raleway:wght@500&display=swap');
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../../assets/css/meus_dados-style.css">
    <link rel="stylesheet" href="../../assets/css/menu_ofc_style.css">
    <link rel="stylesheet" href="../../assets/css/footer-style.css">
    <title>Visão dos Produtos</title>
</head>

<body>
    <script src="../../assets/js/menu-do-adm.js"></script>
    <script src="../toggleMenu.js"></script>

    <div class="divGeral">
        <div class="usuario" >
            <h1>Seja bem vindo <label style="color:blue">usuário</label></h1>
            <p>Nesta tela você consiguirá alterar algumas informações pessoais da sua conta</p>
        </div>
    <div class="divFormularios">
        <div class="divForms" >
            <div class="laranja">
                <label>Mudar Senha</label>
            </div>
            <div class="content">
                <form action="" method="post" name="form" >
                   <label> Email de Login:</label>
                    <input type="text" name="iptEmailLogin">
                   <label> Nova Senha:</label>
                    <input type="text" name="iptNovaSenha">
                   <label>Confirme sua nova Senha:</label>
                    <input type="text" name="iptConfNovaSenha">
                    <button name="btnSenha"class="mudar">Mudar</button>
                </form>
            </div>
        </div>
        <div class="divForms" >
            <div class="laranja">
                <label>Mudar Email</label>
            </div>
            <div class="content">
            <form action="" method="post" name="form">
                 <label>Senha de Login:</label>
                <input type="text" name="iptSenhaLogin">
                 <label> Novo Email:</label>
                <input type="text" name="iptNovoEmail">
                 <label>Confirme seu novo Email:</label>
                <input type="text" name="iptEmail">
                <button name="btnEmail" class="mudar">Mudar</button>
            </form>
            </div>
        </div>
        </div>
    </div>
</body>

</html>
<?php
    include('../../assets/php/conexao.php');
    if(isset($_POST['btnSenha'])){
        $email = $_POST['iptEmailLogin'];
        $novaSenha = $_POST['iptNovaSenha'];
        $confSenha = $_POST['iptConfNovaSenha'];
        
        if($confSenha != $novaSenha){
            echo "<script>alert('Senha Diferentes!')</script>";
        }else if($email == '' || $novoSenha = '' || $confSenha = ''){
            echo "<script>alert('Preencha todos os campos')</script>";
        }else{
            echo "<script>alert('Senhas alterada com sucesso')</script>";
            $sql = "UPDATE clientes SET senha = '$novaSenha' WHERE email = '$email'";
            $resultado = mysqli_query($conexao,$sql);
        }
    }

    if(isset($_POST['btnEmail'])){
        $senha = $_POST['iptSenhaLogin'];
        $novoEmail = $_POST['iptNovoEmail'];
        $confEmail = $_POST['iptConfEmail'];
        
        if($confEmail != $novoEmail){
            echo "<script>alert('Senha Diferentes!')</script>";
        }else if($confEmail == '' || $novoEmail = '' || $senha = ''){
            echo "<script>alert('Preencha todos os campos')</script>";
        }else{
            echo "<script>alert('Senhas alterada com sucesso')</script>";
            $sql = "UPDATE clientes SET email = '$novoEmail' WHERE senha = '$senha'";
            $resultado = mysqli_query($conexao,$sql);
        }
    }
?>