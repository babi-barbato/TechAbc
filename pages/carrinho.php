<?php
include("../assets/php/conexao.php");
include("../assets/php/menu.php");
echo "<style>#sair{display:none}</style>";
echo "<style>#saair{display:none}</style>";

if(!isset($_SESSION['user'])){
  header("Location: login.html");
}

if (isset($_SESSION['user'])) {
    echo "<style>#teste{display:none}</style>";
    echo "<style>#cadLogin{display:none}</style>";
    echo "<style>#sair{display:flex;}</style>";
    echo "<style>#saair{display:flex}</style>";
}
?>
<!DOCTYPE html>
<html lang="pt-br"><!-- linguagem padrão de pt-br -->

<head>
    <meta charset="UTF-8"><!-- charset utf8 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- compativel com outros navegadores -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!-- Link dos icones -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- compativel com outros navegadores -->
    <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon"><!-- icone que aparece na aba da página -->
    <link rel="stylesheet" href="../assets/css/menu_ofc_style.css"><!-- css do menu -->
    <link rel="stylesheet" href="../assets/css/footer-style.css"><!-- css do footer -->

    <link rel="stylesheet" href="../assets/css/carrinho-style.css"><!--css da página-->
    <script src="carrinhos.js"></script>
    <title>Carrinho</title><!--titulo da página-->
</head>

<body>
    <script src="../assets/js/menu-oficial.js"></script><!-- menu chamado pelo js-->
    <div class="container"> <!--div que pega tudo-->
        <div class="produtos" style="height:50vh;overflow-y:auto;"> <!-- que armazena a caixinha da esquerda -->
            <table> <!--inicio da tabela-->
                <div class="content"> <!--ega o letreinoem cima da imagem-->
                    <thead> <!--adicina uma linha-->
                        <tr> <!--tabela-->
                            <th>Produto</th> <!--titulo da parte de cima-->
                            <th>Preço</th><!--titulo da parte de cima-->
                            <th>Quantidade</th><!--titulo da parte de cima-->
                            <th>Total</th><!--titulo da parte de cima-->
                        </tr>
                    </thead>
                </div>
            </table>

            <?php
            $vetor = [0,];
            // $resultadoFinal = 0;
            $sqlPesquisa = "SELECT * FROM carrinho WHERE fkCliente = ".$_SESSION['idPe']."";
            $resultado = mysqli_query($conexao,$sqlPesquisa);
            $cont = 1;
            $parametro = 0;
            while($linha = mysqli_fetch_array($resultado)){
                $sql = "SELECT * FROM ".$linha['tabela']." WHERE id = ".$linha['fkProduto']."";
                $result = mysqli_query($conexao,$sql);
                
                while($linha2 = mysqli_fetch_array($result)){
                    array_push($vetor,$linha2['id']);
                    // $resultadoFinal = $linha2['preco'] + $resultadoFinal;
                echo"
                
                <div class='product' '> <!--div que armazena os produtos do carrinho -->
                    <div class='titulo'> <!--armazena a imagem e o nome do produto-->
                        <label class='name'>".$linha2['nome']."</label><!--nome do produto-->
                        <img style='width:100px' src='../img/".$linha2['tipo']."/".$linha2['foto']."' alt=' class='foto' /><!--imagem do produto-->
                    </div>
                    <label class='nome'>".$linha2['nome']."</label><!--imagem do produto-->
                    <div>
                        <label class='preco'>".$linha2['preco']."</label> <!--preço do produto-->
                    </div>
                    <div>
                        <div class='qtd'><!--div que armazena o select-->
                            <select id='slc' class='select' name='select' onchange='mostraValor(this,".$parametro.")'> <!--criação do select-->
                                <option value='1'>1</option><!--segunda opção-->
                                <option value='2'>2</option><!--terceira opção-->
                                <option value='3'>3</option><!--quarta opção-->
                                <option value='4'>4</option><!--quinta opção-->
                                <option value='5'>5</option><!--sexta opção-->
                                <option value='6'>6</option><!--setima opção-->
                                <option value='7'>7</option><!--oitava opção-->
                                <option value='8'>8</option><!--nona opção-->
                                <option value='9'>9</option><!--decima opção-->
                                <option value='10'>10</option><!--decima primeira opção-->
                            </select>
                        </div>
                    </div>";
                    echo "<script>

                    </script>";
                    echo"
                    <form action='' method='post' name='form'>
                    <button name=".$cont." class='excluir'> <!--botão que excluir prosutos-->
                    <i class='fa fa-trash-can'></i><!--emoji de lixeira-->
                    </button>
                    </form>
                </div>";
                    $cont++; 
                    $parametro++;
                }
            } 
            for($i = 0; $i < 200 ; $i++){
                if(isset($_POST[$i])){
                    $sql = "DELETE FROM carrinho WHERE fkCliente = ".$_SESSION['idPe']." AND fkProduto = ".$vetor[$i]."";
                    $resultados = mysqli_query($conexao,$sql);
                    echo "<script>window.location.href = 'carrinho.php'</script>";
                    $i = 201;
                }
            }
            ?>
        </div>
        <div class='total'><!--div que armazena a caixinha da parte direita-->
            <label class='resumo'>Resumo da compra</label><!--titulo da caixinha-->
            <hr>
            <div class='info'><!--div que armazena o o preço e o frete-->
                <div><label>Subtotal</label><!--titulo-->
                    <label id='subtotall'>R$ </label><!--preço final-->
                </div>
                <div><label>Frete</label><!--titulo-->
                    <label class='grat'>Gratuito</span> <!--titulo-->
                </div>
            </div>
            <hr>
            <div class='mini-total'><!--armazena o total da compra-->
                <label> Total</label><!--titulo-->
                <label>R$ </label><!--preço final-->
            </div>
            <div class='button'> <!--div que armazena os botões-->
                <a href='../pages/pagamento.php' class='enviar'> <!--botão de finalizar compra-->
                    Finalizar compra
                </a>
                <button type='button' class='continuar'><!--botão de continuar comprando-->
                    <a href='../pages/cadastro_enderecos.php' style='color:blue; border-color:blue'>Cadastrar novo endereço </a>
                </button>
            </div>
        </div>
    </div>
            <div id="eitaa">
w
            </div>
</body>

</html>
<script src="carrinho.php"></script>
<script src="../assets/js/footer.js"></script><!--link do js do footer-->