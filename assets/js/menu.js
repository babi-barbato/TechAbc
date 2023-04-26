const header = document.createElement('template');

header.innerHTML = `
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<!-- MOBILE NAV START -->

    <nav class="mobile-nav"> 
        <div class="logo-btns">
            <div class="logo">
                <img src="../img/logoMenor.png">
            </div>
            <div class="btns">
                <a href="#" class="cadastro">
                    <span>Cadastro</span>
                </a>
                <a href="#" class="login">
                    <span>Login</span>
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
                        <a href="#">Peças</a>
                    </li>
                    <li>
                        <a href="#">Acessórios</a>
                    </li>
                    <li>
                        <a href="#">Monte seu PC</a>
                    </li>
                    <li>
                        <a href="#">Desktops</a>
                    </li>
                    <li>
                        <a href="#">Notebooks</a>
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
    <!-- MOBILE NAV END -->

    <!-- DESKTOP NAV START -->
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
                        <a href="#">Peças</a>
                    </li>
                    <li>
                        <a href="#">Acessórios</a>
                    </li>
                    <li>
                        <a href="#">Notebooks</a>
                    </li>
                    <li>
                        <a href="#">Desktops</a>
                    </li>
                    <li>
                        <a href="#">Monte o seu PC</a>
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
                <a href="#" class="cadastro">
                    <span>Cadastro</span>
                </a>
                <a href="#" class="login">
                    <span>Login</span>
                </a>
            </div>
            <div class="cart-container">
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
            </div>
        </div>
    </nav>

    `

document.body.appendChild(header.content);