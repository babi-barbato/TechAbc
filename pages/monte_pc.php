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
    <link rel="stylesheet" href="../assets/css/footer-style.css">
    <link rel="stylesheet" href="../assets/css/monte_pc-style.css">
    <title>Monte seu PC - Tech ABC</title>
</head>
<body>
    <script src="../assets/js/menu-ofc.js"></script>
    
    <div id="divContainer">
        <div class="divTitulo"><h1>Monte seu PC</h1></div>
        <div class="divEsquerda">
            <div>
                <h1 class="h1Texto">Processador:</h1>
                <button class="btnProdutos"><a href="">Clique Aqui</a></button>
            </div>
            <div>
                <h1 class="h1Texto">Placa Mãe:</h1>
                <button class="btnProdutos"><a href="">Clique Aqui</a></button>
            </div>
            <div>
                <h1 class="h1Texto">Memória Ram:</h1>
                <button class="btnProdutos"><a href="">Clique Aqui</a></button>
            </div>
            <div>
                <h1 class="h1Texto">Placa de Video:</h1>
                <button class="btnProdutos"><a href="">Clique Aqui</a></button>
            </div>
        </div>
        <div class="divMeio">
            <div>
                <h1 class="h1Texto">Gabinete:</h1>
                <button class="btnProdutos"><a href="">Clique Aqui</a></button>
            </div>
            <div>
                <h1 class="h1Texto">Armazenamento:</h1>
                <button class="btnProdutos"><a href="">Clique Aqui</a></button>
            </div>
            <div>
                <h1 class="h1Texto">Fonte de Energia:</h1>
                <button class="btnProdutos"><a href="">Clique Aqui</a></button>
            </div>
            <div>
                <h1 class="h1Texto">Cooler:</h1>
                <button class="btnProdutos"><a href="">Clique Aqui</a></button>
            </div>
        </div>
        <div class="divDireita">
            <div>
                <h1 class="h1Texto">Preço Final</h1>
                <button class="btnProdutos">sasa</button>
            </div>
            <div class="divDescr">

            </div>
            <div>
                <button class="btnLaranja"><a href="">Concluir Compra</a></button>
            </div>
        </div>
        <br>
    </div>
    <script src="../assets/js/footer.js"></script>
    <script src="toggleMenu.js"></script>
</body>
</html>