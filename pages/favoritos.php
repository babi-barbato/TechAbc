<?php
include("../assets/php/conexao.php");
include("../assets/php/menu.php");
echo "<style>#sair{display:none}</style>";
echo "<style>#saair{display:none}</style>";

if(!isset($_SESSION['user'])){
  header("Location: login.html");
}

if (isset($_SESSION['user'])) {
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
    <link rel="stylesheet" href="../assets/css/menu__style.css"><!-- css do menu -->
    <link rel="stylesheet" href="../assets/css/footer-style.css"><!-- css do footer -->
    <link rel="stylesheet" href="../assets/css/favoritos-style.css"><!-- css da pagina de favoritos-->
    <title>Favoritos</title><!-- titulo que aparece na aba do site -->
</head>

<body>
    <script src="../assets/js/menu-oficiall.js"></script><!--  menu que esta em um script -->

    <!-- div que contem tudo -->
    <?php
    $vetorId = [0,];
    $vetorTabela = [0,];
    $sqlPesquisa = "SELECT * FROM favoritos WHERE fkCliente = ".$_SESSION['idPe']."";
    $resultado = mysqli_query($conexao,$sqlPesquisa);
    $cont = 1;
    $linhas = mysqli_num_rows($resultado);
    if($linhas < 1){
        echo "<div style='height:60vh; width:100%; text-align:center'><h1>Você não tem nenhum produto favoritado</h1></div>";
    }
    while($linha = mysqli_fetch_array($resultado)){
        $sql = "SELECT * FROM ".$linha['tabela']." WHERE id = ".$linha['fkProduto']."";
        $result = mysqli_query($conexao,$sql);
        
        while($linha2 = mysqli_fetch_array($result)){
            array_push($vetorId,$linha2['id']);
            array_push($vetorTabela,$linha['tabela']);
    echo"<div class='container'>
        <form action='' method='post' class='formProd'> <!--form que puzara o php-->
            <div class='produto'>
                <button type='button' class='btnCoracao'>
                    <i id='preenchido' class='fa-solid fa-heart' onclick=' borda()'></i><!--imagem do coração-->
                </button>
                <button class='submit' type='submit' name='".$cont."'>
                    <div class='foto'>
                        <img src='../img/".$linha2['tipo']."/".$linha2['foto']."'>
                    </div>
                    <div class='textos'>
                        <p class='nome'>".$linha2['nome']."</p>
                        <div>
                            <p class='green'>R$ ".$linha2['preco'].",00</p>
                        </div>
                        <p class='juros'>Parcele em até 12x sem juros</p>
                    </div>
                </button>
            </div>
        </form>";
        $cont++; 
    }
} 
for($i = 0; $i < 200 ; $i++){
    if(isset($_POST[$i])){
        $sql = "DELETE FROM favoritos WHERE fkCliente = ".$_SESSION['idPe']." AND fkProduto = ".$vetorId[$i]." AND tabela = '".$vetorTabela[$i]."'";
        $resultados = mysqli_query($conexao,$sql);
        echo "<script>window.location.href = 'favoritos.php'</script>";
        $i = 201;
    }
}
?>
</div><!-- fecha divContainer  -->

    <script src='../assets/js/footer_.js'></script><!-- puxa footer que esta no js  -->
    <script src="../assets/js/toggleMenu.js"></script><!-- puxa js que faz menu de celular funcionar  -->
    <script src="../assets/js/favoritos.js"></script>
</body>

</html>