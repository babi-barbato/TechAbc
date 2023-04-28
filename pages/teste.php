<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <button onclick="note()">notebooks</button>
    <button onclick="fone()">fone de ouvido</button>
</body>
</html>
<script>

    function note(){
        <?php

            $_SESSION['produto'] = "notebooks";
            header("Location: ../../pages/produtosGerais.html"); //leva para a pag cadastrar produtos
        ?>
    }
    function fone(){
        
    }

</script>