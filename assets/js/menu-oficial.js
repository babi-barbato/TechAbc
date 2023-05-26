const header = document.createElement('template');

header.innerHTML = `
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- MOBILE NAV START -->
    
    <!-- Mobile Menu Start -->
        <nav class="mobile-nav">
            <div class="top flex">
                <div class="left" onclick="openMenu()">
                <i class="fa fa-bars"></i>
                </div>
                <div class="center">
                    <img style='width:130px' src="../img/log.png">
                </div>
                <div id="cadLogin" class="right flex">
                    <a href="cadastro_cliente.html" class="cadastro flex">
                        <span>Cadastro</span>
                    </a>
                    <a href="login.html" class="login flex">
                        <span>Login</span>
                    </a>
                </div>
            <a style="" href="../assets/php/logout.php">
                <span id="sair" style="align-items:center;justify-content:center;margin:5px 0px;border-radius:10px;background-color:#0066FF;color:white;width:25vh;height:35px;font-size:17px;border:none" class="login">Sair</span>
            </a>
            </div>

            <div class="search-box">
                <form action="" method="post">
                    <div class="text-box flex">
                        <input type="text" name="search-text" id="search" placeholder="Digite o que procura">
                    
                        <div class="button-container">
                            <button type="submit" name="buscar">
                            <i class="fa fa-magnifying-glass"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </nav>

        <div class="menu-container">
            <div class="top flex">
                <div class="welcome">
                    <p>Bem-vindo!</p>
                </div>
                <div class="close" onclick="closeMenu()">
                    <i class="fa fa-close"></i>
                </div>
            </div>
            <hr>

            <div class="middle-box flex">
                <a href="../pages/carrinho.php" class="carrinho flex">
                    <div class="left flex">
                        <i class="fa fa-cart-shopping"></i>
                    </div>
                    <div class="right flex">
                        <strong>Carrinho</strong>
                    </div>
                </a>
                <a href="#" class="favoritos flex">
                    <div class="left flex">
                        <strong>Favoritos</strong>
                    </div>
                    <div class="right flex">
                        <i class="fa fa-heart"></i>
                    </div>
                </a>
            </div>
            <form action="" name="form" method="post">
            <div class="menu-opt">
                <ul>
                    <li>
                        <div class="item flex special" onclick="toggleCascading(0)">
                            <span>Peças</span>
                            <i class="fa fa-chevron-down" ></i>
                        </div>
                        <ul class="cascading-opt">
                            <li>
                            <button class="btnPhp" type="submit" name="fonte">Fontes de energia</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="armazenamento">Armazenamentos</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="placaVideo">Placa de Vídeo</button>
                            </li>
                            <li>
                            <button class="btnPhp" type="submit" name="ram">Memória RAM</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="processador">Processador</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="placaMae">Placa mãe</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="gabinete">Gabinete</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="cooler">Cooler</button>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="item flex special" onclick="toggleCascading(1)">
                            <span>Acessórios</span>
                            <i class="fa fa-chevron-down" ></i>
                        </div>
                        <ul class="cascading-opt">
                            <li><button class="btnPhp" type="submit" name="fone">Fones</button></li>
                            <li><button class="btnPhp" type="submit" name="teclado">Teclados</button></li>
                            <li><button class="btnPhp" type="submit" name="mouse">Mouses</button></li>
                            <li><button class="btnPhp" type="submit" name="mousePad">Mouse pads</button></li>
                            <li><button class="btnPhp" type="submit" name="monitor">Monitores</button></li>
                        </ul>
                    </li>
                    <li>
                        <div class="item">
                            <button class="btnPhp" type="submit" name="notebook">Notebooks</button>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <button class="btnPhp" type="submit" name="desktop">Desktops</button>
                        </div>
                    </li>
                    <li>
                        <div class="item flex">
                            <button class="btnPhp" type="submit" name="monte">Monte o seu PC</button>
                        </div>
                    </li>
                </ul>
            </div>
            </form>
        </div>
        <div class="box-opacity"></div>
    <!-- MOBILE MENU END -->

    <!-- DESKTOP MENU START -->
    <form action="" name="form" method="post">

        <nav class="desktop-nav">
            <div class="left">
            <a href='../pages/index.php'>
            <div class="logo">
            <img style='width:150px' src="../img/log.png">
            </div>
            </a>
        </div>
        <div class="center">
            <div class="menu-opt">
                <ul>
                    <li>
                        Peças
                        <ul class="pecas-opt">
                        <li>
                                <button class="btnPhp" type="submit" name="placaMae">Placa Mãe</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="processador">Processador</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="ram">Memoria RAM</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="placaVideo">Placa de Vídeo</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="fonte">Fonte de Energia</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="cooler">Cooler</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="armazenamento">Armazenamento</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="gabinete">Gabinete</button>
                            </li>
                        </ul>
                    </li>
                    <li>
                        Acessórios
                        <ul class="cascading-opt">
                            <li>
                                <button class="btnPhp" type="submit" name="mousePad"> Mouse Pads</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="monitor"> Monitores</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="teclado"> Teclados</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="mouse"> Mouses</button>
                            </li>
                            <li>
                                <button class="btnPhp" type="submit" name="fone">Fones</button>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li>
                        <button class="btnPhp" type="submit" name="notebook">Notebooks</button>
                    </li>
                    <li>
                        <button class="btnPhp" type="submit" name="desktop">Desktops</button>
                    </li>
                    <li>
                        <button class="btnPhp" type="submit" name="monte">Monte seu PC</button>
                    </li>
                </ul>
            </div>
            <form action="" method="post">
                <div class="text-box">
                    <input id="search-text" name="search-value" type="text" placeholder="Digite o que procura...">
                    <button type="submit" name="search">
                        <i class="fa fa-magnifying-glass"></i>
                    </button>
                </div>
            </form>
        </div>
        <div class="right">
            <div id="teste" class="cadastro-login">
                <a href="../pages/cadastro_cliente.html" class="cadastro">
                    <span>Cadastro</span>
                </a>
                <a href="../pages/login.html" class="login">
                    <span>Login</span>
                </a>  
            </div>
            <a href="../assets/php/logout.php">
                <span id="saair" style="align-items:center;justify-content:center;margin:5px 0px;border-radius:10px;background-color:#0066FF;color:white;width:25vh;height:35px;font-size:17px;border:none" class="login">Sair</span>
            </a>
            <div></div>
            <div class="cart-container">
                <a class="carrinho-btn" href="../pages/carrinho.php">
                    <div class="left">
                        <i class="fa fa-cart-shopping"></i>
                    </div>
                    <div class="center">
                        <span>
                            <strong>Carrinho</strong>
                        </span>
                        <small>0 Produtos</small>
                    </div>
                    <div class="right">
                        <i class="fa fa-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </nav>
    <!-- DESKTOP MENU END -->
</form>
</body>
</html>
`
document.body.appendChild(header.content);