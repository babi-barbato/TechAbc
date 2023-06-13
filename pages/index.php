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
<html lang="pt-br">
<head>
        <meta charset="UTF-8"><!-- charset utf8 -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- compativel com outros navegadores -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /><!-- Link dos icones -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- compativel com outros navegadores -->
        <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon"><!-- icone que aparece na aba da página -->
        <link rel="stylesheet" href="../assets/css/produtos_Gerass-style.css">
        <link rel="stylesheet" href="../assets/css/menu_ofc_style.css"><!-- css do menu -->
        <link rel="stylesheet" href="../assets/css/footer-style.css"><!-- css do footer -->
        <title>Tech ABC</title><!-- titulo que aparece na aba do site -->
    </head>
<body>
    <script src="../assets/js/menu-oficial.js"></script>
    
    <!-- DESKTOP NAV END -->

    <!-- SLIDE SHOW START -->

    <div class="slide-show">
        <div id="fst" class="slide">
            <img src="../img/banner-exemplo.jpg" alt="">
        </div>
    </div>

    <!-- SLIDE SHOW START -->

    <div id="divContainer"><!-- div que contem tudo -->
            <div class="divTitulo"><!-- div que contem o titulo da página -->
                <h1><i class="fa-regular fa-star"></i> Produtos Novos e Lançamentos</h1>
            </div>
            
            <?php
                $sqlProdutos = "SELECT * FROM acessorios order by quantidade desc limit 8"; //seleciona todos os produtos de uma determinada tabela
                $resultado = mysqli_query($conexao,$sqlProdutos); //resultado 
                // $cont = 0;
                $_SESSION['vetor'] = [];
                
                while ($linha = mysqli_fetch_array($resultado)){
                    array_push($_SESSION['vetor'],$linha['id']);
                    // $cont++;
                echo "
                <form action='prod.php' method='post' class='formProd'>
                    <div class='divProduto'>
                    <button type='button' onclick='teste()' class='btnCoracao'>
                    <i class='fa-regular fa-heart'></i>
                    </button>
                    <button class='submit' name='".$linha['id']."' type='submit'>
                    <div class='divImg'>
                    <img src='../img/".$linha['tipo']."/".$linha['foto']."'>
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
                // $_SESSION['produto'] = 'acessorios';
            ?>

            <div class="divTitulo"><!-- div que contem o titulo da página -->
                <h1><i class="fa-regular fa-star"></i> Produtos que agradam a todos</h1>
            </div>
            <?php
                $sqlProdutos = "SELECT * FROM acessorios order by preco asc limit 8"; //seleciona todos os produtos de uma determinada tabela
                $resultado = mysqli_query($conexao,$sqlProdutos); //resultado 
                // $cont = 0;
                $_SESSION['vetor'] = [];
                
                while ($linha = mysqli_fetch_array($resultado)){
                    array_push($_SESSION['vetor'],$linha['id']);
                    // $cont++;
                echo "
                <form action='prod.php' method='post' class='formProd'>
                    <div class='divProduto'>
                    <button type='button' onclick='teste()' class='btnCoracao'>
                    <i class='fa-regular fa-heart'></i>
                    </button>
                    <button class='submit' name='".$linha['id']."' type='submit'>
                    <div class='divImg'>
                    <img src='../img/".$linha['tipo']."/".$linha['foto']."'>
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
            ?>
        </div><!-- fecha divContainer  --> 
    
   
    <script src="toggleMenu.js"></script>
    <script src="../assets/js/footer.js"></script>
</body>
</html>