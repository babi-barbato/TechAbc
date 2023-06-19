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
    <link rel="stylesheet" href="../../assets/css/produtos_Gerasss.css">
    <link rel="stylesheet" href="../../assets/css/footer-style.css">
    <title>Todos os Produtos</title>
</head>
<style>
    #divGeral{
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
    }
.divProdutos{
    width: 80%;
    display: flex;
    align-items: flex-start;
    justify-content: center;
    flex-direction: column;
}
.divParteCima{
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
    width: 300px;
}
.divProduto img{
    width: 100%;
    aspect-ratio: 16/14;
}
.divProds{
    display: grid;/*display grid (separar por colunas)*/
    grid-template-columns: repeat(4,1fr);/*vai repitir as colunas quatro vez de forma fracionada*/
}
</style>
<body>
    <script src="../../assets/js/menu-do-adm.js"></script> <!-- componente que é o menu de adm -->
    <script src="../toggleMenu.js"></script><!-- js que faz esse enu funcinar em celular -->

    <div id="divGeral">
        <h1>Todos os Produtos no site</h1>

        <div class="divProdutos">
            <div class="divParteCima">
                <div>
                    <h1>Titulo</h1>
                    <button onclick="aparece('notebooks')">a</button>
                </div>
                <hr style="width: 100%;">
            </div>
            <div class="divProds" id="notebooks" style="display: none;">
                <?php
                include('../../assets/php/conexao.php');
                    $sqlProdutos = "SELECT * FROM notebooks"; //seleciona todos os produtos de uma determinada tabela
                    $resultado = mysqli_query($conexao,$sqlProdutos); //resultado 
                    $cont = 0;
                    
                    while ($linha = mysqli_fetch_array($resultado)){
                    echo "
                    <div class='divProduto'>    
                        <div class='divImg'>
                            <img style='' src='../../img/".$linha['tipo']."/".$linha['foto']."'>
                        </div>
                        <div class='divTextos'>
                            <p class='pTitulo'>".$linha['nome']."</p>
                            <p class='pverm'>De <label>R$ ".$linha['precoAntigo'].",00</label> por:</p>
                            <div>
                                <p class='pPreco'>R$ ".$linha['preco'].",00</p>
                            </div>
                            <p class='pTexto'>Parcele em até 12x sem juros</p>
                        </div>
                    </div>";
                    }
           
                ?>
            </div>
        </div>
    </div>
    <script>
        var notebook = 1;
        var desktop = 1;
        var acessorio = 1;
        var peca = 1;
        function aparece(x){
            var div = document.getElementById(x);
            
            if(notebook == 1){
                div.style.display = 'grid';
                notebook = 0;
            }else{
                notebook = 1;
                div.style.display = 'none';
            }
            
            if(desktop == 1){
                div.style.display = 'block';
                desktop = 0;
            }else{
                desktop = 1;
                div.style.display = 'none';
            }
            
            if(acessorio == 1){
                div.style.display = 'block';
                acessorio = 0;
            }else{
                acessorio = 1;
                div.style.display = 'none';
            }

            if(peca == 1){
                div.style.display = 'block';
                peca = 0;
            }else{
                peca = 1;
                div.style.display = 'none';
            }
        }
    </script>
</body>
</html>