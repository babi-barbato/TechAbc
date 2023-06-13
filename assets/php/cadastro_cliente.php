<?php
include("conexao.php");//chama o php de conexão

if (!isset($_SESSION)) { //se a sessão não tiver iniciada 
    session_start();//inicia a sessão
}


if (isset($_POST['cadastrar'])) {//se a pessoa clicou no botão cadastrar

    include('conexao.php');//chama o php de conexão
    $erro = 0;//crio a variavel que vai verificar se o cpf deu erro

    $nome = $_POST['nome'];//variavel que pega o nome que a pessoa digitou
    $cpf = $_POST['cpf'];//variavel que pega o cpf que a pessoa digitou
    $telefone = $_POST['telefone'];//variavel que pega o telefone que a pessoa digitou
    $email = $_POST['email'];//variavel que pega o email que a pessoa digitou
    $senha = $_POST['senha'];//variavel que pega a senha que a pessoa digitou
    $conf = $_POST['conf'];//variavel que pega a confirmação de senha que a pessoa digitou

    if (strlen($cpf) != 11) {//se o tamanho do cpf for diferente de 11:
        echo "<script>alert('CPF com tamanho incorreto')</script>";//aparece esse alerta
        $erro++;//soma um erro na váriavel erro
    }

    $soma1 = 0;//crio a variavel soma1 e falo que é 0
    $soma2 = 0;//crio a variavel soma2 e falo que é 0
    $cpfSeparado = str_split($cpf);//uso o split, separo o cpf e atribuo isso ao cpf separado

    //verifica o 10 digito do cpf
    for ($cont = 0; $cont < 9; $cont++) {//crio um loop que vai até 8 (menor que 9 é 8)
        $soma1 += $cpfSeparado[$cont] * (10 - $cont); //atribui a variavel soma1 o numero do cpf_list (cpf_list(0))
    }

    if ($soma1 % 11 > 1 || $soma1 % 11 < 0) { // se ele for menor q 1 ou maior q 0 (0,1) o número tem q ser 0 por isso o else 0
        $soma1 = 11 - ($soma1 % 11);//verificação do cpf
    } else {
        $soma1 = 0; //verificação do cpf
    }
    //fim da verificação

    // Verificação do 11 dígito do cpf (é igual ao ultimo for)
    for ($cont = 0; $cont < 10; $cont++) {
        $soma2 += $cpfSeparado[$cont] * (11 - $cont);
    }

    if ($soma2 % 11 > 1 || $soma2 % 11 < 0) {
        $soma2 = 11 - ($soma2 % 11);
    } else {
        $soma2 = 0;
    }
    //fim da verificação

    // Verifica se os dígitos verificadores são iguais aos do número fornecido
    if ($soma1 != $cpfSeparado[9] || $soma2 != $cpfSeparado[10]) {
        $erro++;//se não forem iguais soma na váriavel erro
    }


    $sql_email= "SELECT * FROM clientes WHERE email = '$email'"; //ferifica se o email ja é existente
    $result1 = mysqli_query($conexao,$sql_email);//testa a conexão
        
    if (mysqli_num_rows($result1) != 0){  //se o resultado for diferente de 0 (significa que ja tem um email cadastrado)
        echo "<script>alert ('email ja cadastrado')</script>";//alerta
        echo "<script>  window.location.href=' ../../pages/login.html '</script>";//redireciona para a pagina de login
    } else {       
        $sql_cpf = "SELECT * FROM clientes WHERE cpf = '$cpf'"; //verifica se o cpf ja existe
        $result2 = mysqli_query($conexao,$sql_cpf);//testa a conxão

        if(mysqli_num_rows($result2) != 0){//se for diferente de 0 ja tem um cpf cadastrado
            echo "<script> alert ('cpf ja cadastrado')</script>";//alerta
            echo "<script> window.location='../../pages/cadastro_cliente.html'</script>";//redireciona para a pagina de cadastro
        } else {

            if ($senha != $conf) {//se as senhas forem diferentes
                echo "<script>alert('Senhas diferentes')</script>";//alerta
                echo "<script> window.location='../../pages/cadastro_cliente.html'</script>";//redireciona para a pagina de cadastro
            } else {
            
                if ($erro != 0) {//se o cpf for inválido
                    echo "<script>alert('CPF INVALIDO')</script>";//alerta
                    echo "<script>window.location='../../pages/cadastro_cliente.html'</script>";//redireciona para a pagina de cadastro
                } else {//se td der certo
                    $sql = "INSERT INTO clientes (nome, cpf, email, telefone, senha,idClientes) VALUES ('$nome', '$cpf','$email','$telefone','$senha','')";//sql para inserir os dados no Banco de Dados
                    $result = mysqli_query($conexao, $sql);//resultado
                    header('Location:../../pages/cadastro_enderecos.php');//leva para a página de cadastrar endereco
                }
            }
        }
    }
}
