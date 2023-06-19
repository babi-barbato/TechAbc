<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans&family=Raleway:wght@500&display=swap');
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link rel="stylesheet" href="../../assets/css/home-adm.css">
    <link rel="stylesheet" href="../../assets/css/menu__style.css">
    <link rel="stylesheet" href="../../assets/css/footer-style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Todos os Produtos</title>
</head>
<style>
    #divGeral{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        gap: 50px;
    }
.divProdutos{
    width: 80%;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
}
.divParteCima{
    color: #0066FF;
    display: flex;
    align-items: start;
    flex-direction: column;
    justify-content: center;
}
.divParteCima > div{
    display: flex;
    align-items: center;
    justify-content: space-between;
}
.divProduto{
    /* width: 250px; */
    border: 2px solid black;
    padding: 15px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-direction: column;
    border-radius: 10px;
}
.divProduto img{
    width: 100%;
    aspect-ratio: 16/14;
}
.divProds{
    padding-top: 20px;
    gap: 30px;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    display: grid;/*display grid (separar por colunas)*/
}
.pPreco{
    font-weight: 600;
    color: green;
}
.botoes{
    font-size: 25px;
}
.divParteCima div{
    position: relative;
}
.divParteCima div::after{
    content: '';
    bottom: -5px;
    border-radius: 15px;
    position: absolute;
    width: 100%;
    height:2px;
    border:none;
    background-color: #0066FF;
}
</style>
<body>
    <script src="../../assets/js/menu-do-adm.js"></script> <!-- componente que é o menu de adm -->
    <script src="../toggleMenu.js"></script><!-- js que faz esse enu funcinar em celular -->

    <div id="divGeral">
        <h1 style="margin-top: 40px;">Todos os Produtos no site</h1>

        <div class="divProdutos">
            <div class="divParteCima">
                <div>
                    <h1>Notebooks</h1>
                    <i class="bi bi-chevron-down botoes"></i>
                </div>
            </div>
            <div class="divProds" id="notebooks" style="display: none;">
                <?php
                include('../../assets/php/conexao.php');
                    $sqlProdutos = "SELECT * FROM desktops"; //seleciona todos os produtos de uma determinada tabela
                    $resultado = mysqli_query($conexao,$sqlProdutos); //resultado 
                    
                    while ($linha = mysqli_fetch_array($resultado)){
                    echo "
                    <div class='divProduto'>    
                        <div class='divImg'>
                            <img style='' src='../../img/".$linha['tipo']."/".$linha['foto']."'>
                        </div>
                        <div class='divTextos'>
                            <p class='pTitulo'>".$linha['nome']."</p>
                            <div>
                                <p class='pPreco'>R$ ".$linha['preco'].",00</p>
                            </div>
                        </div>
                    </div>";
                    }
           
                ?>
            </div>
        </div>
        <div class="divProdutos">
            <div class="divParteCima">
                <div>
                    <h1>Desktops</h1>
                    <i class="bi bi-chevron-down botoes"></i>
                </div>
            </div>
            <div class="divProds" id="notebooks" style="display: none;">
                <?php
                include('../../assets/php/conexao.php');
                    $sqlProdutos = "SELECT * FROM notebooks"; //seleciona todos os produtos de uma determinada tabela
                    $resultado = mysqli_query($conexao,$sqlProdutos); //resultado 
                    
                    while ($linha = mysqli_fetch_array($resultado)){
                    echo "
                    <div class='divProduto'>    
                        <div class='divImg'>
                            <img style='' src='../../img/".$linha['tipo']."/".$linha['foto']."'>
                        </div>
                        <div class='divTextos'>
                            <p class='pTitulo'>".$linha['nome']."</p>
                            <div>
                                <p class='pPreco'>R$ ".$linha['preco'].",00</p>
                            </div>
                        </div>
                    </div>";
                    }
           
                ?>
            </div>
        </div>
        <div class="divProdutos">
            <div class="divParteCima">
                <div>
                    <h1>Acessórios</h1>
                    <i class="bi bi-chevron-down botoes"></i>
                </div>
            </div>
            <div class="divProds" id="notebooks" style="display: none;">
                <?php
                include('../../assets/php/conexao.php');
                    $sqlProdutos = "SELECT * FROM acessorios order by tipo"; //seleciona todos os produtos de uma determinada tabela
                    $resultado = mysqli_query($conexao,$sqlProdutos); //resultado 
                    
                    while ($linha = mysqli_fetch_array($resultado)){
                    echo "
                    <div class='divProduto'>    
                        <div class='divImg'>
                            <img style='' src='../../img/".$linha['tipo']."/".$linha['foto']."'>
                        </div>
                        <div class='divTextos'>
                            <p class='pTitulo'>".$linha['nome']."</p>
                            <div>
                                <p class='pPreco'>R$ ".$linha['preco'].",00</p>
                            </div>
                        </div>
                    </div>";
                    }
           
                ?>
            </div>
        </div>
        <div class="divProdutos">
            <div class="divParteCima">
                <div>
                    <h1>Desktops</h1>
                    <i class="bi bi-chevron-down botoes"></i>
                </div>
            </div>
            <div class="divProds" id="notebooks" style="display: none;">
                <?php
                include('../../assets/php/conexao.php');
                    $sqlProdutos = "SELECT * FROM pecas order by tipo"; //seleciona todos os produtos de uma determinada tabela
                    $resultado = mysqli_query($conexao,$sqlProdutos); //resultado 
                    
                    while ($linha = mysqli_fetch_array($resultado)){
                    echo "
                    <div class='divProduto'>    
                        <div class='divImg'>
                            <img style='' src='../../img/".$linha['tipo']."/".$linha['foto']."'>
                        </div>
                        <div class='divTextos'>
                            <p class='pTitulo'>".$linha['nome']."</p>
                            <div>
                                <p class='pPreco'>R$ ".$linha['preco'].",00</p>
                            </div>
                        </div>
                    </div>";
                    }
                ?>
            </div>
        </div>
        <br><br>
    </div>
    <script>
        
        const btns = document.querySelectorAll('.botoes')
        var prods = document.querySelectorAll('.divProds')
        let situation = false;

        btns.forEach((item, i) => {
            item.addEventListener('click', ()=>{
                if (situation == false) {
                    prods[i].style.display = 'grid';
                    situation = true
                } else {
                    prods[i].style.display = 'none';
                    situation = false;
                }
            })
        })

        
    </script>
</body>
</html>