<!DOCTYPE html>
<html lang="pt-br"> <!-- linguagem padrão de pt-br -->
<head>
    <meta charset="UTF-8"><!-- charset utf8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- compativel com outros navegadores -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- compativel com outros navegadores -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!-- Link dos icones -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
    <link rel="stylesheet" href="../assets/css/cad-endereco.css"> <!--link do css-->
    
    <title> Cadastro de Endereço - Tech ABC</title> <!--titulo da pagina-->
</head>
<body id="body">
    <div class="container"> <!--div que armazena tudo-->
    
    <div style="height: 100vh;display: flex;justify-content: end;align-self: end;"  class="esquerda" id="esquerda"> <!--parte esquerda-->
    <div style="height: auto;display:flex;flex-direction:column; gap:20px; margin-top:10px">
        <?php
        include("../assets/php/conexao.php");//inclui php que realiza a conexão
        include("../assets/php/menu.php");//inclui o php que faz o menu funcionar

        $sql = "select * from enderecos where fkEndereco = ".$_SESSION['idPe'].""; // busco todos os endereços da pessoa que esta logada
        $result = mysqli_query($conexao,$sql);//resultado dessa pesquisa
        while($linha = mysqli_fetch_array($result)){//crio um while que acomuda tds os resultads
            echo "<div style='display:flex;gap:30px'><!-- Crio uma div que vai acomular um endereço -->
            <input type='radio' name='local'><!-- Input para selecionar o endereço -->
            <div>".$linha['rua']."<br>Bairro: ".$linha['bairro']."<br>CEP: ".$linha['cep']."<br>Estado / Cidade: ".$linha['cidade']."</div>
            </div>";//fecha a div que pega (rua, bairro, cep, estado e cidade)
        }
        ?>
        </div>
            <div id="cart" class="cart" style="justify-content: end;"> <!--formulário-->
                <div class="paga"> <!--div que armazena o select e a label-->
                    <label class="salvar">Selecione a forma de pagamento:</label> <!--titulo dos inputs-->
                    <select id="select" class="forma-pagamento" > <!--forma as opções de pagamento-->
                        <option value="selecione">Selecione</option> <!--primeira opção-->
                        <option value="cartao"> Cartão</option><!--segunda opção-->
                        <option value="boleto">Boleto</option><!--terceira opção-->
                        <option value="pix">Pix</option><!--quarta opção-->
                    </select>
                </div>
                
                <!--BOTÃO-->
                <div class="button"> <!--dv que armazena os botões -->
                    <button id="cancelar" style="width:auto; padding:5px">
                        <a href="index.php">
                            Cancelar  <!--o que aparece dentro do botão-->
                        </a>
                    </button>
                    <button onclick="pagar()" id="enviar"><!--botão de enviar --> Enviar
                    </button>
                </div>  
                </div>
            </div>
            <div class="direita" style="height: 100vh;"> <!-- div que armazena tudo que aparece na direita-->
                <div class="image">
                    <!-- <img style="width: 450px;  margin-top: 20px;" src="teste.gif" alt="ícone de cadastro"> -->
            <div class="direita"> <!-- div que armazena tudo que aparece na direita-->
                <div id="fotoIcone" class="image">
                    <img  style="width: 450px;  margin-top: 60px;" src="../img/gif/cadEnd.gif" alt="ícone de cadastro"> <!---->
                </div>
                <form action="../assets/php/pagamento.php" method="post" class="form" onsubmit="return formControl(this)"> <!--chama a função quando é clcado no enviar-->
                    <div id="cartao"> <!--armazena tudo que for do cartão-->
                        <label class="info">Informações do cartão:</label> <!--for - usado para identificar qual input pertence essa label, titulo do campo-->
                <div id="pagamento" ><!--armazena todas as imagens-->
                    <img  src="https://logodownload.org/wp-content/uploads/2019/09/boleto-logo.png" > <!--imagem do boelto-->
                    <img  src="https://devtools.com.br/img/pix/logo-pix-png-930x616.png" ><!--imagem do pix-->
                    <img  src="https://logodownload.org/wp-content/uploads/2016/10/visa-logo-1.png"><!--imagem da visa-->
                    <img  src="https://logodownload.org/wp-content/uploads/2020/11/c6-bank-logo.png" ><!--imagem da c6-->
                    <img  src="https://logospng.org/download/banco-do-brasil/logo-banco-do-brasil-4096.png" > <!--imagem do banco do brasil-->
                    <img  src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Banco_Santander_Logotipo.svg/2560px-Banco_Santander_Logotipo.svg.png" > <!--imagem do santander-->
                    <img  src="https://cdn.jornaldebrasilia.com.br/wp-content/uploads/2020/03/mastercard-1000x600.png" ><!--imagem do mastercard-->
                </div>
                
                <div class="form-branco"> <!--classe do input-->
                    <input id="numero-c" type="text" name="a"  placeholder="Numero do cartão"><!--input do numero do cartao-->
                </div>
                
                <div class="form-branco"><!--classe do input-->
                    <input id="data" type="text" name="a"  placeholder="Data de validade (MM/AA)"><!--input da data de validade-->
                    <input id="cvv" type="text" name="a"  placeholder="CVV"><!--input do cvv-->
                </div>
                <div class="form-branco"><!--classe do input-->
                    <input id="nome-c" type="text" name="a"  placeholder="Nome no cartão"><!--input do nome que esta no cartao-->
                </div>
                
                <label class="cliente">Informações do dono:</label> <!--titulo do input-->
                <div class="form-branco"><!--classe do input-->
                    <input id="c" type="text" name="a"  placeholder="CEP"><!--input do cep-->
                </div>
                
                <div class="form-branco"><!--classe do input-->
                    <input id="est" type="text" name="a"  placeholder="Estado"><!--input dp estado-->
                    <input id="num" type="text" name="a"  placeholder="Número"><!--input do numero da casa-->
                </div>
                <div class="form-branco"><!--classe do input-->
                    <input id="av" type="text" name="a"  placeholder="Rua/Avenida"><!--input da rua-->
                </div>
                <div class="form-branco"><!--classe do input-->
                    <input id="comp" type="text" name="a"  placeholder="Complemento"><!--input do complemento-->
                </div>
                  <!--BOTÃO-->
                  <div class="button"> <!--classe do botão-->
                    <button type="submit" id="cancelar"> <!--botão de cancelar-->
                        <a href="cadastro_endereco.html">
                            Cancelar  <!--o que aparece dentro do botão-->
                        </a>
                    </button>    
                      
                 
                    <button type="submit" id="enviar" name="pagar"><!--botão de cancelar-->
                        Enviar <!--o que aparece dentro do botão-->
                    </button>
                </div>
            </div>


            <div style="display:none;flex-direction: column;" id="boleto"><!--div que armazena todas as informações do boleto-->
                <label class="pag-boleto">Insira seu email para receber o boleto:</label> <!--titulo do input-->
                <div class="form-branco"><!--classe do input-->
                    <input id="bolet" type="text" name="a"  placeholder="Insira um email válido"><!-- input para inserir email-->
                </div>
                <div class="button"> <!--classe do botão-->
                    <button type="submit"  id="cancelar-boleto"><!--botão de cancelar-->
                        <a href="cadastro_endereco.html">
                        Cancelar  <!--o que aparece dentro do botão-->
                    </a>
                    </button> 
                    <button type="submit"  id="enviar-boleto" name="pagar"><!--botão de cancelar-->
                        Enviar <!--o que aparece dentro do botão-->
                    </button>
                </div>
            </div>


            <div id="pix">
                <label class="pag-pix">Pagameno no Pix:</label> <!--titulo do input-->
                <img src="../img/pix.jpg" alt="" class="qr"><!--imagem do qrCODE-->
                <div class="button" style="justify-content: space-between !important;"><!--utilizado o style para definir os mesmo espaços do elemento como importante-->
                    <button type="submit" id="cancel" ><!--botão de cancelar-->
                        <a href="cadastro_endereco.html">
                        Cancelar  <!--o que aparece dentro do botão-->
                    </a>
                    </button>
                    <button type="submit" id="voltar" name="pagar"><!--botão de cancelar-->
                        <a href="index.php" style="color: white;">
                            Voltar  <!--o que aparece dentro do botão-->
                        </a>
                    </button>
            </div>
            </form>
        </div>
    <script src="../assets/js/cadastro_endereco.js"></script> <!--link do script-->
</body>
</html>
<script>
    $(document).ready(function(){//JQUERY para criar mascara
        $('#cep').mask('00000-000')//mascara do cep
        $('#numero').mask('N° 0000')//mascara do número do local
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

















    