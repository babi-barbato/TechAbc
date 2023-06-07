<?php
include('../assets/php/conexao.php');
include('../assets/php/bloqueio.php');
if(!isset($_SESSION)){ //inicia a sessão
    session_start();
}
?>
<html lang="pt-br"> <!-- linguagem padrão de pt-br -->
<head>
    <meta charset="UTF-8"><!-- charset utf8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- compativel com outros navegadores -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- compativel com outros navegadores -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!-- Link dos icones -->
    <link rel="stylesheet" href="../assets/css/cad-endereco.css"> <!--link do css-->
    <title>Cadastro de Endereço - Tech ABC</title> <!--titulo da pagina-->
</head>
<body id="body">
    <div class="container"> <!--div que armazena tudo-->
        <div style="height: 100vh;" class="esquerda" id="esquerda"> <!--parte esquerda-->
            <form action="" method="post" name="form">

                <div id="cart" style="text-align: center;" class="cart"> <!--formulário-->
                
                <h1 style="color:#0066FF">Cadastrar Endereço</h1>
                <br>
                <!--INPUTS-->            
                <div class="field">
                    <input name="email" type="email" placeholder="Email Cadastrado" required><!--input do telefone-->
                </div>

                <div class="field">
                    <input id="cep" name="cep" type="text" placeholder="CEP" oninput="consultaCep()"  minlength="9" required pattern=".{9,}"><!--input do telefone-->
                </div>
                    
                <div class="field">
                    <input id="cidade" name="cidade" type="text" placeholder="Estado - Cidade" required><!--input do telefone-->
                </div>

                <div class="field">
                    <input id="rua" name="rua" type="text" placeholder="Rua/Avenida" required><!--input do telefone-->
                </div>

                <div class="field"><!--estão na mesma div pois precisam ficar uma do lado da outra-->
                    <input id="bairro" name="bairro" type="text"  placeholder=" Bairro" required><!--input do telefone-->
                    <input id="numero" type="text" name="numero"  placeholder="Número da Local" required pattern=".{1,7}" ><!--input do telefone-->
                </div>

                <div class="field">
                    <input id="complemento" name="complemento" type="text" placeholder="Complemento"><!--input do telefone-->
                </div>
                
                <!--BOTÃO-->
                <div class="button"> <!--dv que armazena os botões -->
                    <button type="submit" name='envior' id="enviar">Enviar</button><!--botão de enviar --> 
                </div>
            </div>
            </form>
        </div>
        <div class="direita" style="height: 100vh;"> <!-- div que armazena tudo que aparece na direita-->
            <div id="fotoIcone" class="image">
                <img  style="width: 500px;" src="../img/gif/cadEnd.gif" alt="ícone de cadastro">
            </div>
        </div>
    </div>
</body>
</html>
<script src="../assets/js/cadastro_endereco.js"></script>
<script>
$(document).ready(function(){ 
    $('#cep').mask('00000-000')
    $('#numero').mask('N° 0000')
});

function consultaCep(){
    var ax_cep = document.getElementById("cep").value; //Variacel para acomular valor do cep digitado
    var url = `https://viacep.com.br/ws/${ax_cep}/json`; //variavel que junta o caminho da api
    var request = new XMLHttpRequest(); //crio uma variavel XML

    request.open('GET', url); //variavel 'request' abre usando GET com a variavel url que acomula a ur
    
    request.onload = () => { //se o caminho carregar
        var response = JSON.parse(request.responseText); //crio uma variavel "response" que acomula o json do endereço
        
        if (response.erro === true){ //se o cep der erro
            alert("Cep não encontrado")//alerta msg de erro
            cep.value = "";
        }else{//se der certo
            rua.value = response.logradouro//adiciona o valor da rua no campo rua
            bairro.value = response.bairro//adiciona o valor do bairro no campo bairro
            cidade.value = `${response.localidade} - ${response.uf}` //adiciona a cidade e o estado no campo cidade
        }
    }
    request.send();//faz a conexão
}
</script>
<?php
include("../assets/php/conexao.php");

if (isset($_POST['envior'])){
    $email = $_POST['email'];
    $select = "SELECT idClientes FROM clientes WHERE email LIKE '$email'";
    $resultado = mysqli_query($conexao,$select);
    $qtdLinhas = mysqli_num_rows($resultado);
    if($qtdLinhas!= 0){

        while ($linha1 = mysqli_fetch_array($resultado)){
            
            $cep = $_POST['cep'];
            $num = $_POST['numero'];
            $cidade = $_POST['cidade'];
            $rua = $_POST['rua'];
            $bairro = $_POST['bairro'];
            $complemento = $_POST['complemento'];
            
            $sqla = "INSERT INTO `enderecos`(`rua`, `bairro`, `movel`, `numero`, `cidade`, `cep`, `fkEndereco`) VALUES ('$rua','$bairro','$complemento','$num','$cidade','$cep',".$linha1['idClientes'].")";
            $result = mysqli_query($conexao,$sqla);
            echo "<script>window.location.href = 'index.php'</script>";
        }
    }else{
        echo "<script>alert('Insira seu email que abacou de ser cadastrado')</script>";
    }
}
?>    