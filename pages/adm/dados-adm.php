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
    <link rel="stylesheet" href="../../assets/css/dados.css">
    <link rel="stylesheet" href="../../assets/css/menu_ofc_style.css">
    <link rel="stylesheet" href="../../assets/css/footer-style.css">
    <title>Visão dos Produtos</title>
</head>
<style>
    .divForms{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column;
        background-color: #D75A00;
        width: 30%;
    }
</style>
<body>
    <script src="../../assets/js/menu-do-adm.js"></script>
    <script src="../toggleMenu.js"></script>

    <div id="divGeral">
        <div style="width: 100%;display: flex;align-items: center;justify-content: center;flex-direction: column;">
            <h1>Seja bem vindo <label for="" style="color:blue">usuario</label></h1>
            <h3>Nesta tela você consiguirá alterar algumas informações pessoais da sua conta</h3>
        </div>
        <div class="divFormularios">
            <div class="divForms" style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
                <h1>Mudar Senha</h1>
                <form action="" method="post" name="form">
                    <p>Digite seu Email de Login:</p>
                    <input type="text" name="iptEmailLogin">
                    <p>Digite sua nova Senha:</p>
                    <input type="text" name="iptNovaSenha">
                    <p>Confirme sua nova Senha:</p>
                    <input type="text" name="iptConfNovaSenha">
                    <br>
                    <button name="btnSenha">Mudar Senha</button>
                </form>
            </div>
            <div class="divForms" style="display: flex;align-items: center;justify-content: center;flex-direction: column;">
                <h1>Mudar Email</h1>
                <form action="" method="post" name="form">
                    <p>Digite seu Email de Login:</p>
                    <input type="text" name="iptSenhaLogin">
                    <p>Digite sua nova Senha:</p>
                    <input type="text" name="iptNovoEmail">
                    <p>Confirme sua nova Senha:</p>
                    <input type="text" name="iptEmail">
                    <br>
                    <button name="btnEmail">Mudar Senha</button>
                </form>
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