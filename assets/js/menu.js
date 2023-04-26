const header = document.createElement('template');

header.innerHTML = `
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- MOBILE NAV START -->
    <!-- Mobile Menu Start -->
    <nav class="mobile-nav"> 
        <div class="logo-btns"> <!-- Div que armazena o logo e os botões de Cadastro e Login -->
            <div class="logo"> <!-- Div que armazena o logo -->
                <img src="../img/logoMenor.png"> <!--Imagem do Logo-->
            </div>
            <div class="btns"> <!-- Div que armazena os botões de Cadastro e Login -->
                <a href="../pages/cadastro_cliente.html" class="cadastro"> <!-- Link para a página de cadastro -->
                    <span>Cadastro</span> <!-- Tag que tem o nome "Cadastro" -->
                </a>
                <a href="../pages/login.html" class="login"> <!-- Link para a página de Login -->
                    <span>Login</span> <!-- Nome "Login" -->
                </a>
            </div>
        </div>
        <form action="" method="post" class="search" id="search">
            <div class="text-box">
                <input id="search-text" name="search-value" type="text" placeholder="Digite o que procura...">
                <button type="submit" name="search">
                    <i class="fa fa-magnifying-glass"></i>
                </button>
            </div>
        </form>
        <div class="menu" id="mobile-menu">
            <div id="menu-button" class="icon" onclick="toggleMenu()">
                <i class="fa fa-bars"></i>
            </div>
            <div class="menu-opt" id="menu-opt">
                <span class="menu-title">Departamentos</span>
                <div class="hr"></div>
                <ul>
                    <li>
                        <a href="../pages/produtosGerais.html">Peças</a>
                    </li>
                    <li>
                        <a href="../pages/produtosGerais.html">Acessórios</a>
                    </li>
                    <li>
                        <a href="../pages/monte_pc.html">Monte seu PC</a>
                    </li>
                    <li>
                        <a href="../pages/produtosGerais.html">Desktops</a>
                    </li>
                    <li>
                        <a href="../pages/produtosGerais.html">Notebooks</a>
                    </li>
                    <li>
                        <!-- BOTÃO DO CARRINHO START -->
                        <a class="carrinho-btn" href="#">
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
                        <!-- BOTÃO DO CARRINHO END -->
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- MOBILE MENU END -->

    <!-- DESKTOP MENU START -->
    <nav class="desktop-nav">
        <div class="left">
            <div class="logo">
            <img src="../img/logoMenor.png">
            </div>
        </div>
        <div class="center">
            <div class="menu-opt">
                <ul>
                    <li>
                        <a href="../pages/produtosGerais.html">Peças</a>

                        <ul class="pecas-opt">
                            <li>
                                <a href="../pages/produtosGerais.html">Placa Mãe</a>
                            </li>
                            <li>
                                <a href="../pages/produtosGerais.html">Processador</a>
                            </li>
                            <li>
                                <a href="../pages/produtosGerais.html">Memória RAM</a>
                            </li>
                            <li>
                                <a href="../pages/produtosGerais.html">Placa de Vídeo</a>
                            </li>
                            <li>
                                <a href="../pages/produtosGerais.html">Fonte de Energia</a>
                            </li>
                            <li>
                                <a href="../pages/produtosGerais.html">Cooler</a>
                            </li>
                            <li>
                                <a href="../pages/produtosGerais.html">Armazenamento</a>
                            </li>
                            <li>
                                <a href="../pages/produtosGerais.html">Gabinete</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="../pages/produtosGerais.html">Acessórios</a>
                        <ul class="cascading-opt">
                            <li>
                                <a href="../pages/produtosGerais.html">Mouse Pads</a>
                            </li>
                            <li>
                                <a href="../pages/produtosGerais.html">Monitores</a>
                            </li>
                            <li>
                                <a href="../pages/produtosGerais.html">Teclados</a>
                            </li>
                            <li>
                                <a href="../pages/produtosGerais.html">Mouses</a>
                            </li>
                            <li>
                                <a href="../pages/produtosGerais.html">Fones</a>
                            </li>
                        </ul>
                    </li>
                    </li>
                    <li>
                        <a href="../pages/produtosGerais.html">Notebooks</a>
                    </li>
                    <li>
                        <a href="../pages/produtosGerais.html">Desktops</a>
                    </li>
                    <li>
                        <a href="../pages/monte_pc.html">Monte o seu PC</a>
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
            <div class="cadastro-login">
                <a href="../pages/cadastro_cliente.html" class="cadastro">
                    <span>Cadastro</span>
                </a>
                <a href="../pages/login.html" class="login">
                    <span>Login</span>
                </a>    
                <a href="../pages/login.html" class="login">
                    <span>Login</span>
                </a>    
            </div>
            <div class="cart-container">
                <a class="carrinho-btn" href="../pages/carrinho.html">
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

    `

document.body.appendChild(header.content);