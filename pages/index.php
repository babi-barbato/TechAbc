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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/menu_ofc_style.css">
    <link rel="stylesheet" href="../assets/css/style-global.css">
    <link rel="stylesheet" href="../assets/css/footer-style.css">
    <title>TechABC</title>
</head>
<body>
    <script src="../assets/js/menu-ofc.js"></script>

    <!-- DESKTOP NAV END -->

    <!-- SLIDE SHOW START -->

    <div class="slide-show">
        <div id="fst" class="slide">
            <img src="../img/banner-exemplo.jpg" alt="">
        </div>
    </div>

    <!-- SLIDE SHOW START -->


    <div class="container mg-60" id="container">
        <div class="announcement"></div>

        <h1><i class="fa-regular fa-star"></i> Recomendados</h1>

        <div class="products-container grid">
            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>
        </div>

        <div class="announcement"></div>

        <h1><i class="fa-regular fa-star"></i> Produtos Novos e Lançamentos</h1>

        <div class="products-container grid">
            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>

            <div class="item">
                <a href="#">
                    <div class="image">
                        <img src="https://leonora.vteximg.com.br/arquivos/ids/163588/mouse-gamer-rgb-7-botoes-7200-dpis-letron-74315--1.png?v=638037739255200000" alt="">
                    </div>
                    <div class="content">
                        <h2>Mouse gamer housenGamer 22Hz | 0.1ms de latência</h2>
                        <small class="last-price">de <span>R$450,50</span> por:</small>
                        <h3 class="current-price">R$420,00</h3>
                        <small class="parcela">Parcele em até 12x sem juros</small>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <script src="toggleMenu.js"></script>
    <script src="../assets/js/footer.js"></script>
</body>
</html>