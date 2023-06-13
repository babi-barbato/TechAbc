<?php
    include("../assets/php/conexao.php");//inclui o php da conexão
    include("../assets/php/menu.php");//inclui o php para o menu funcionar

    echo "<style>#sair{display:none}</style>";//se a pessoa não estiver logada desativa o btn de sair para CELULAR
    echo "<style>#saair{display:none}</style>";//se a pessoa não estiver logada desativa o btn de sair para COMPUTADOR

    if(isset($_SESSION['user'])){//Se a pessoa estiver logada
        echo "<style>#teste{display:none}</style>";//desativa btn de login
        echo "<style>#cadLogin{display:none}</style>";//desativa btn de cadastro
        echo "<style>#sair{display:flex;}</style>";//ativa o btn de sair para CELULAR
        echo "<style>#saair{display:flex}</style>";//ativa o btn de sair para COMPUTADOR
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
        
    <link rel="stylesheet" href="../assets/css/menu__style.css"><!-- css do menu -->
        <link rel="stylesheet" href="../assets/css/footer-style.css"><!-- css do footer -->
        <title>Produtos Gerais</title><!-- titulo que aparece na aba do site -->
    </head>
<body>
    <script src="../assets/js/menu-oficiall.js"></script> <!-- chama o componente que é o menu -->
    
    <div class="slide-show"><!-- DIV QUE PEGA A IMG INICIAL -->
        <div id="fst" class="slide"> <!-- DIV QUE PEGA A IMG INICIAL -->
            <img src="../img/banner-exemplo.jpg" alt=""> <!-- IMAGEM -->
        </div><!--FECHA DIV QUE PEGA A IMG INICIAL -->
    </div><!-- FECHA DIV QUE PEGA A IMG INICIAL -->

    <div id="divContainer"><!-- div que contem tudo -->
            <div class="divTitulo"><!-- div que contem o titulo da página -->
                <h1><i class="fa-regular fa-star"></i> Produtos Novos e Lançamentos</h1><!-- Título e icone de estrela -->
            </div>
            
            <?php
                $sqlProdutos = "SELECT * FROM acessorios order by quantidade desc limit 8"; //seleciona 8 produtos da tabela acessorios
                $resultado = mysqli_query($conexao,$sqlProdutos); //resultado 
                
                while ($linha = mysqli_fetch_array($resultado)){//cria um while que acomula esses resultados

                echo "
                <form action='prodIndex.php' method='post' class='formProd'> <!-- crio um formulário que é um produto -->
                    <div class='divProduto'> <!-- crio uma div que pega todos os produtos -->
                    <button class='submit' name='".$linha['id']."' type='submit'> <!-- botão de submit que pega todo o produto -->
                    <div class='divImg'> <!-- div que tem a imagem -->
                    <img src='../img/".$linha['tipo']."/".$linha['foto']."'> <!-- imagem do produto -->
                        </div><!-- fecha div da imagem -->
                        <div class='divTextos'> <!-- div que tem os textos -->
                            <p class='pTitulo'>".$linha['nome']."</p> <!-- pega o título do porduto -->
                            <p class='pverm'>De <label>R$ ".$linha['precoAntigo'].",00</label> por:</p>
                            <div><!-- div que pega o preco atual -->
                                <p class='pPreco'>R$ ".$linha['preco'].",00</p> <!-- pega o preco atual -->
                            </div><!-- fecha div que pega o preco atual -->
                            <p class='pTexto'>Parcele em até 12x sem juros</p> <!-- tag P que tem mensagem  -->
                        </div> <!-- fecha div que tem os textos -->
                    </button> <!-- fecha botão -->
                    </div> <!-- fecha div geral dos produtos -->
                    </form>";//fecha form e echo
                }
            ?>

            <div class="divTitulo"><!-- div que contem o titulo da página -->
                <h1><i class="fa-regular fa-star"></i> Produtos que agradam a todos</h1>
            </div>
            <?php
                //PHP DEBAIXO FOI EXPLICADO NO PHP A CIMA
                $sqlProdutos = "SELECT * FROM acessorios order by preco asc limit 8";
                $resultado = mysqli_query($conexao,$sqlProdutos); 
                
                while ($linha = mysqli_fetch_array($resultado)){
                echo "
                <form action='prod.php' method='post' class='formProd'>
                    <div class='divProduto'>
                    <button class='submit' name='".$linha['id']."' type='submit'>
                    <div class='divImg'>
                    <img src='../img/".$linha['tipo']."/".$linha['foto']."'>
                        </div>
                        <div class='divTextos'>
                            <p class='pTitulo'>".$linha['nome']."</p>
                            <p class='pverm'>De <label>R$ ".$linha['precoAntigo'].",00</label> por:</p>
                            <div>
                                <p class='pPreco'>R$ ".$linha['preco'].",00</p>
                            </div>
                            <p class='pTexto'>Parcele em até 12x sem juros</p>
                        </div>
                    </button>
                    </div>
                </form>";
                }
            ?>
        </div><!-- fecha divContainer  --> 
    
    <script src="toggleMenu.js"></script><!-- SCRIPT QUE FAZ O MENU FUNCINAR PARA CELULAR -->
    <script src="../assets/js/footer_.js"></script><!-- COMPONENTE QUE CHAMA O FOOTER -->
</body>
</html>