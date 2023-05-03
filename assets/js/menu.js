const header = document.createElement('template');

header.innerHTML = `
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- MOBILE NAV START -->

    <!-- Mobile Menu Start -->
        <nav class="mobile-nav">
            <div class="top flex">
                <div class="left" onclick="openMenu()">
                    <i class="fa fa-bars"></i>
                </div>
                <div class="center">
                    <h2>LOGO</h2>
                </div>
                <div class="right flex">
                    <a href="#" class="cadastro flex">
                        <span>Cadastro</span>
                    </a>
                    <a href="#" class="login flex">
                        <span>Login</span>
                    </a>
                </div>
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
                    <p>Bem-vindo,</p>
                    <span>$nome!</span>
                </div>
                <div class="close" onclick="closeMenu()">
                    <i class="fa fa-close"></i>
                </div>
            </div>
            <hr>

            <div class="middle-box flex">
                <a href="#" class="carrinho flex">
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
            <div class="menu-opt">
                <ul>
                    <li>
                        <div class="item flex special" onclick="toggleCascading(0)">
                            <span>Peças</span>
                            <i class="fa fa-chevron-down" ></i>
                        </div>
                        <ul class="cascading-opt">
                            <li>
                                <a href="#">Fontes de energia</a>
                            </li>
                            <li>
                                <a href="#">Armazenamentos</a>
                            </li>
                            <li>
                                <a href="#">Placa de Vídeo</a>
                            </li>
                            <li>
                                <a href="#">Memória RAM</a>
                            </li>
                            <li>
                                <a href="#">Processador</a>
                            </li>
                            <li>
                                <a href="#">Placa mãe</a>
                            </li>
                            <li>
                                <a href="#">Gabinete</a>
                            </li>
                            <li>
                                <a href="#">Cooler</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <div class="item flex special" onclick="toggleCascading(1)">
                            <span>Acessórios</span>
                            <i class="fa fa-chevron-down" ></i>
                        </div>
                        <ul class="cascading-opt">
                            <li><a href="#">Fones</a></li>
                            <li><a href="#">Teclados</a></li>
                            <li><a href="#">Mouses</a></li>
                            <li><a href="#">Mouse pads</a></li>
                            <li><a href="#">Monitores</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="item">
                            <a href="#">Notebooks</a>
                        </div>
                    </li>
                    <li>
                        <div class="item">
                            <a href="#">Desktops</a>
                        </div>
                    </li>
                    <li>
                        <div class="item flex">
                            <a href="#">Monte o seu PC</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="box-opacity"></div>
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