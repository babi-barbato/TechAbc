<?php
    include("../assets/php/conexao.php");
    include("../assets/php/menu.php");
    echo "<style>#sair{display:none}</style>";
    echo "<style>#saair{display:none}</style>";

    if(isset($_SESSION['user'])){
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
        <link rel="stylesheet" href="../assets/css/produto-nico-style.css"><!-- css dessa página -->
        <link rel="stylesheet" href="../assets/css/menu_ofc_style.css"><!-- css do menu -->
        <link rel="stylesheet" href="../assets/css/footer-style.css"><!-- css do footer -->
        <title>Produto</title>
    </head>
    <body>
        <script src="../assets/js/menu-oficial.js"></script><!-- menu que chamamos por meio de um js-->
        <div id="divContainer"><!-- div que pega todos os elementos da tela-->
            <div id="divEsquerda"><!-- div que pega os elementos da esquerda -->
                <div id="divProduto"><!-- Div que vai ter o produto na esquerda -->
                <?php
                    $sqlProduto = "SELECT * FROM ".$_SESSION['produto']." WHERE id = ".$_SESSION['testea'].""; //seleciona todos os produtos de uma determinada tabela
                    
                    $result = mysqli_query($conexao,$sqlProduto); //resultado

                    while ($linha1 = mysqli_fetch_array($result)){
                        echo " <img class='imgProduto' src='../img/".$linha1['tipo']."/".$linha1['foto']."'>";
                    }
                ?>
                    <i id="coracao" onclick="preenchimento()" class="fa-regular fa-heart"></i><!-- icone de coração -->
                </div><!-- fecha div produto-->
                <br>
                <div id="divPagamento">
                    <img src="https://logodownload.org/wp-content/uploads/2019/09/boleto-logo.png" alt="">
                    <img src="https://devtools.com.br/img/pix/logo-pix-png-930x616.png" alt="">
                    <img src="https://logodownload.org/wp-content/uploads/2016/10/visa-logo-1.png" alt="">
                    <img src="https://logodownload.org/wp-content/uploads/2020/11/c6-bank-logo.png" alt="">
                    <img src="https://logospng.org/download/banco-do-brasil/logo-banco-do-brasil-4096.png" alt="">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Banco_Santander_Logotipo.svg/2560px-Banco_Santander_Logotipo.svg.png" alt="">
                    <img src="https://cdn.jornaldebrasilia.com.br/wp-content/uploads/2020/03/mastercard-1000x600.png" alt="">
                </div>
                <br>
            </div><!-- fecha div esquerda-->
            <div id="divDireita"><!-- div que pega os elementos da direita -->
                <div class="divTudo">
                
                    <?php
                    $sqlProdutos = "SELECT * FROM ".$_SESSION['produto']." WHERE id = ".$_SESSION['testea'].""; //seleciona todos os produtos de uma determinada tabela
                    $resultado = mysqli_query($conexao,$sqlProdutos); //resultado

                    while ($linha = mysqli_fetch_array($resultado)){
                    echo " 
                        <div class='divTextos'>
                            <p class='pTitulo'>".$linha['nome']."</p>
                            <p class='pPreco'><label>R$ ".$linha['preco'].",00</label> à vista</p>
                            <div class='divSelect'>
                                <p><strong>Quantidade:</strong></p>
                                <select id='selectQtd'>
                                    <option value='1'>1</option>
                                    <option value='2'>2</option>
                                    <option value='3'>3</option>
                                    <option value='4'>4</option>
                                    <option value='5'>5</option>
                                    <option value='6'>6</option>
                                    <option value='7'>7</option>
                                    <option value='8'>8</option>
                                    <option value='9'>9</option>
                                    <option value='10'>10</option>
                                </select>
                            </div>
                            <div class='divTeste'>
                                <p class='pDescr'><strong>Descrição:</strong></p>
                                <div>
                                <textarea disabled>".$linha['descricao']."</textarea>

                                </div>
                            </div>
                            <form  style='display:flex;justify-content:center;width:100%' method='post' name='form' action='../assets/php/carrinho.php'>
                            <div style='width:100%;display:flex;gap:10px;flex-direction:column;align-items:center'>
                            <button type='submit' class='btnAzul' name='carrinho'>Mover para carrinho</button>
                            <button type='submit' name='compra' class='btnBranco'>Comprar Agora</button>
                            </div>
                            </form>
                        </div>
                    ";}
                    ?>
                </div>
            </div><!-- fecha div direita-->
        </div>  <!-- fecha div container -->  
        <script src="../assets/js/footer.js"></script><!-- footer que chamamos por meio de um js-->
        <script src="../assets/js/toggleMenu.js"></script><!-- js que faz o menu mobille funcionar-->
        <script src="../assets/js/bnt_coracao.js"></script>
    </body>
</html>