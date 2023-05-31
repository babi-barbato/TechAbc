const header = document.createElement('template');

header.innerHTML = `

<!-- MOBILE NAV START -->
    
    <!-- Mobile Menu Start -->
        <nav class="mobile-nav">
            <div class="top flex">
                <div class="left" onclick="openMenu()">
                <i class="fa fa-bars"></i>
                </div>
                <div class="center">
                    <img style='width:130px' src="../../img/log.png">
                </div>

            <a style="" href="../../assets/php/logout.php">
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

            <form action="" name="form" method="post">
            <div class="menu-opt">
            <ul>
                <li>
                    <a href='home-adm.php'><button class="btnPhp" type="button" name="notebook">Home</button></a>
                </li>
                <li>
                    <a href='cadastro_produtos.php'><button class="btnPhp" type="button" name="desktop">Cadastrar Produtos</button></a>
                </li>
                <li>
                    <a href='dados-adm.php'><button class="btnPhp" type="button" name="desktop">Meus Dados</button></a>
                </li>
                <li>
                    <a href='visao-produtos.php'><button class="btnPhp" type="button" name="monte">Visão geral dos Produtos</button></a>
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
            <div class="logo">
            <img style='width:150px' src="../../img/log.png">
            </div>
        </div>
        <div class="center">
            <div class="menu-opt">
                <ul>
                    <li>
                        <a href='home-adm.php'><button class="btnPhp" type="button" name="notebook">Home</button></a>
                    </li>
                    <li>
                        <a href='cadastro_produtos.php'><button class="btnPhp" type="button" name="desktop">Cadastrar Produtos</button></a>
                    </li>
                    <li>
                        <a href='dados-adm.php'><button class="btnPhp" type="button" name="desktop">Meus Dados</button></a>
                    </li>
                    <li>
                        <a href='visao-produtos.php'><button class="btnPhp" type="button" name="monte">Visão geral dos Produtos</button></a>
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
            <a href="../assets/php/logout.php">
                <span id="saair" style="align-items:center;justify-content:center;margin:5px 0px;border-radius:10px;background-color:#0066FF;color:white;width:25vh;height:35px;font-size:17px;border:none" class="login">Sair</span>
            </a>
        </div>
    </nav>
    <!-- DESKTOP MENU END -->
</form>
`
document.body.appendChild(header.content);