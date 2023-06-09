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
    <link rel="stylesheet" href="../assets/css/menu__style.css"><!-- css do menu -->
        <link rel="stylesheet" href="../assets/css/footer-style.css"><!-- css do footer -->
        <title>Produtos Gerais</title><!-- titulo que aparece na aba do site -->
    </head>
    <body>
        <script src="../assets/js/menu-oficiall.js"></script><!-- puxando menu que esta em um script -->
        
        <div id="divContainer"><!-- div que contem tudo -->
            <div class="divTitulo"><!-- div que contem o titulo da página -->
                <img src="https://i.pinimg.com/564x/51/27/39/5127391bfe4834839a9ff382c6a4d546.jpg" alt=""><!-- imagem de um pc que aparece no canto antes do título -->

                <?php
                    if(!isset($_SESSION)){ //se a sessão não estiver iniciada
                        session_start();//inicia a sessão
                    }
                    echo "<h1>".$_SESSION['titulo']."</h1>";//Titulo que fica no topo da página   
                ?>
            </div><!-- fecha divTitulo -->

            <?php
                $sqlProdutos = "SELECT * FROM ".$_SESSION['produto']." WHERE tipo = '".$_SESSION['tipo']."'"; //seleciona todos os produtos de uma determinada tabela
                $resultado = mysqli_query($conexao,$sqlProdutos); //resultado 
                $cont = 0;
                $_SESSION['vetor'] = [];
                
                while ($linha = mysqli_fetch_array($resultado)){
                    array_push($_SESSION['vetor'],$linha['id']);
                    $cont++;
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
                            </div>
                            <p class='pTexto'>Parcele em até 12x sem juros</p>
                        </div>
                    </button>
                    </div>
                </form>";
                }
            ?>
        </div><!-- fecha divContainer  --> 
        <script src="../assets/js/footer_.js"></script><!-- puxa footer que esta no js  -->
        <script src="../assets/js/toggleMenu.js"></script><!-- puxa js que faz menu de celular funcionar  -->
       
    </body>
</html>