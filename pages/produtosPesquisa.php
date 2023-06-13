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
        <link rel="stylesheet" href="../assets/css/produtos_Gerass-style.css">
        <link rel="stylesheet" href="../assets/css/menu_ofc_style.css"><!-- css do menu -->
        <link rel="stylesheet" href="../assets/css/footer-style.css"><!-- css do footer -->
        <title><?php echo "Busca por: ".$_SESSION['nomeProduto']."" ?></title><!-- titulo que aparece na aba do site -->
    </head>
    <body>
        <script src="../assets/js/menu-oficial.js"></script><!-- puxando menu que esta em um script -->
        
        <div id="divContainer"><!-- div que contem tudo -->
            <div class="divTitulo">
                <?php 
                    include('../assets/php/conexao.php');
                    
                    $erro = 0;
                    echo "<h1>Busca por: '".$_SESSION['nomeProduto']."'</h1>";
                ?>
            </div>

            <?php
                
                $sqlPecas = "SELECT * from pecas WHERE nome LIKE '%".$_SESSION['nomeProduto']."%' ";
                $resultPecas = mysqli_query($conexao, $sqlPecas);
                $numPecas = mysqli_num_rows($resultPecas);
                if($numPecas > 0){
                    while($linha = mysqli_fetch_array($resultPecas)){
                        echo "
                        <form action='prod.php' method='post' class='formProd'>
                            <div class='divProduto'>
            
                            <button class='submit' name='".$linha['id']."' type='submit'>
                            <div class='divImg'>
                            <img style='' src='../img/".$linha['tipo']."/".$linha['foto']."'>
                                </div>
                                <div class='divTextos'>
                                    <p class='pTitulo'>".$linha['nome']."</p>
                                    <p class='pverm'>De <label>R$ ".$linha['precoAntigo'].",00</label> por:</p>
                                    <div>
                                        <p class='pPreco'>R$ ".$linha['preco'].",00</p>
                                        <div class='divazul'>
                                            <i class='fa fa-cart-shopping'></i>
                                        </div>
                                    </div>
                                    <p class='pTexto'>Parcele em até 12x sem juros</p>
                                </div>
                            </button>
                            </div>
                        </form>";
                    }
                } else {
                    $erro++;
                }

                $sqlAcessorios = "SELECT * from acessorios WHERE nome LIKE '%".$_SESSION['nomeProduto']."%' ";
                $resultAcessorios = mysqli_query($conexao, $sqlAcessorios);
                $numAcessorios = mysqli_num_rows($resultAcessorios);
                if($numAcessorios > 0){
                    while($linha = mysqli_fetch_array($resultAcessorios)){
                        echo "
                        <form action='prod.php' method='post' class='formProd'>
                            <div class='divProduto'>
            
                            <button class='submit' name='".$linha['id']."' type='submit'>
                            <div class='divImg'>
                            <img style='' src='../img/".$linha['tipo']."/".$linha['foto']."'>
                                </div>
                                <div class='divTextos'>
                                    <p class='pTitulo'>".$linha['nome']."</p>
                                    <p class='pverm'>De <label>R$ ".$linha['precoAntigo'].",00</label> por:</p>
                                    <div>
                                        <p class='pPreco'>R$ ".$linha['preco'].",00</p>
                                        <div class='divazul'>
                                            <i class='fa fa-cart-shopping'></i>
                                        </div>
                                    </div>
                                    <p class='pTexto'>Parcele em até 12x sem juros</p>
                                </div>
                            </button>
                            </div>
                        </form>";
                    }
                } else {
                    $erro++;
                }

                $sqlNotebooks = "SELECT * from notebooks WHERE nome LIKE '%".$_SESSION['nomeProduto']."%' ";
                $resultNotebooks = mysqli_query($conexao, $sqlNotebooks);
                $numNotebooks = mysqli_num_rows($resultNotebooks);
                if($numNotebooks > 0){
                    while($linha = mysqli_fetch_array($resultNotebooks)){
                        echo "
                        <form action='prod.php' method='post' class='formProd'>
                            <div class='divProduto'>
            
                            <button class='submit' name='".$linha['id']."' type='submit'>
                            <div class='divImg'>
                            <img style='' src='../img/".$linha['tipo']."/".$linha['foto']."'>
                                </div>
                                <div class='divTextos'>
                                    <p class='pTitulo'>".$linha['nome']."</p>
                                    <p class='pverm'>De <label>R$ ".$linha['precoAntigo'].",00</label> por:</p>
                                    <div>
                                        <p class='pPreco'>R$ ".$linha['preco'].",00</p>
                                        <div class='divazul'>
                                            <i class='fa fa-cart-shopping'></i>
                                        </div>
                                    </div>
                                    <p class='pTexto'>Parcele em até 12x sem juros</p>
                                </div>
                            </button>
                            </div>
                        </form>";
                    }
                } else {
                    $erro++;
                }

                $sqlDesktops = "SELECT * from desktops WHERE nome LIKE '%".$_SESSION['nomeProduto']."%' ";
                $resultDesktops = mysqli_query($conexao, $sqlDesktops);
                $numDesktops = mysqli_num_rows($resultDesktops);
                if($numDesktops > 0){
                    while($linha = mysqli_fetch_array($resultDesktops)){
                        echo "
                        <form action='prod.php' method='post' class='formProd'>
                            <div class='divProduto'>
            
                            <button class='submit' name='".$linha['id']."' type='submit'>
                            <div class='divImg'>
                            <img style='' src='../img/".$linha['tipo']."/".$linha['foto']."'>
                                </div>
                                <div class='divTextos'>
                                    <p class='pTitulo'>".$linha['nome']."</p>
                                    <p class='pverm'>De <label>R$ ".$linha['precoAntigo'].",00</label> por:</p>
                                    <div>
                                        <p class='pPreco'>R$ ".$linha['preco'].",00</p>
                                        <div class='divazul'>
                                            <i class='fa fa-cart-shopping'></i>
                                        </div>
                                    </div>
                                    <p class='pTexto'>Parcele em até 12x sem juros</p>
                                </div>
                            </button>
                            </div>
                        </form>";
                    }
                } else {
                    $erro++;
                }

                if ($erro == 4) {
                    echo "Não encontramos nenhum resultado para a pesquisa...";
                }
            ?>
        </div><!-- fecha divContainer  --> 
        <script src="../assets/js/footer.js"></script><!-- puxa footer que esta no js  -->
        <script src="../assets/js/toggleMenu.js"></script><!-- puxa js que faz menu de celular funcionar  -->
       
    </body>
</html>