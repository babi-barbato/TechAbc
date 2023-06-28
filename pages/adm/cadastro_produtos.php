<?php
    //explicação no index
    include("../../assets/php/conexao.php");
    include("../../assets/php/menu.php");
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
    <!-- HTML comentado no Index -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/cadastro-produtos.css">
    <link rel="stylesheet" href="../../assets/css/menu__style.css">
    <link rel="stylesheet" href="../../assets/css/footer-style.css">
    <link rel="stylesheet" href="../../assets/css/style-global.css">
    <title>Cadastro de Produtos</title>

    
</head>
<body>
    <script src="../../assets/js/menu-do-adm.js"></script>
    <script src="../toggleMenu.js"></script>

    <div class="container"> <!-- Inicia a div.container -->  
        <div class="title"> <!-- Inicia a div.title -->
            <h2>Cadastrar Produtos</h2>
            <hr>
        </div>
        <div class="form-container"> <!-- Inicia a div.form-container -->
            <form action="" method="post" name='form' class="flex" enctype="multipart/form-data"> <!-- Inicia a form.flex -->
                <div class="left grid"> <!-- Inicia a div.left -->
                    <div class="item"> <!-- Inicia a div.item -->
                        <label  for="nomeProduto">Nome do produto <span required>*</span></label>
                        <input title="Nome do produto"  type="text" name="produtoNome" id="produtoNome" placeholder="Ex.: Placa Mae Gigabyte B450M GAMING DDR4 Socket AM4 Chipset AMD B450"> <!-- Inicia um novo input -->
                    </div>
                    <div class="item"> <!-- Inicia a div.item -->
                        <label  for="categorias">Categoria <span required>*</span></label> <!-- Inicia uma nova label -->
                        <select name="categorias" id="categorias" title="Categorias" onchange="setSubcategory(this)">
                            <option id="pecas" class="categorias_opt" value="pecas">Peças</option> <!-- Inicia e fecha uma nova opção -->
                            <option id="acessorios" class="categorias_opt" value="acessorios">Acessórios</option> <!-- Inicia e fecha uma nova opção -->
                            <option id="notebook" class="categorias_opt" value="notebooks">Notebook</option> <!-- Inicia e fecha uma nova opção -->
                            <option id="desktop" class="categorias_opt" value="desktops">Desktop</option> <!-- Inicia e fecha uma nova opção -->
                        </select>
                    </div>
                    <div class="item"> <!-- Inicia a div.item -->
                        <label for="Subcategorias">Subcategoria <span required>*</span></label> <!-- Inicia uma nova label -->
                        <select class="subcategorias" id="sub_pecas" name="sub_pecas" title="Subcategorias">
                            <option value="">Selecione</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="placaMae">Placa Mãe</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="processador">Processador</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="ram">Memória RAM</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="placaVideo">Placa de Vídeo</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="fonte">Fonte de Energia</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="cooler">Cooler</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="armazenamento">Armazenamento</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="gabinete">Gabinete</option> <!-- Inicia e fecha uma nova opção -->
                        </select>

                        <select class="subcategorias" id="sub_acessorios" name="sub_acessorios" title="Subcategorias">
                            <option value="">Selecione</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="mouse_pad">Mouse Pad</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="monitor">Monitor</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="teclado">Teclado</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="mouse">Mouse</option> <!-- Inicia e fecha uma nova opção -->
                            <option value="fone">Fone</option> <!-- Inicia e fecha uma nova opção -->
                        </select>

                        <select class="subcategorias" id="sub_notebooks" title="Subcategorias">
                            <option value="notebook">Notebook</option> <!-- Inicia e fecha uma nova opção -->
                        </select>

                        <select class="subcategorias"  id="sub_desktops" title="Subcategorias">
                            <option value="desktop">Desktop</option> <!-- Inicia e fecha uma nova opção -->
                        </select>
                    </div>
                    <div class="item"> <!-- Inicia a div.item -->
                        <label for="preco">Preço <span required>*</span></label> <!-- Inicia uma nova label -->
                        <input  type="text" name="preco" id="preco" placeholder="Ex.: 220,00"> <!-- Inicia um novo input -->
                    </div>
                    <div class="item"> <!-- Inicia a div.item -->
                        <label for="peso">Peso <span required>*</span></label> <!-- Inicia uma nova label -->
                        <input  type="text" name="peso" id="peso" placeholder="ex.: 0.3 para 300g"> <!-- Inicia um novo input -->
                    </div>
                    <div class="item"> <!-- Inicia a div.item -->
                        <label for="altura">Altura</label> <!-- Inicia uma nova label -->
                        <input type="text" name="altura" id="altura" placeholder="Em centímetros"> <!-- Inicia um novo input -->
                    </div>
                    <div class="item"> <!-- Inicia a div.item -->
                        <label for="largura">Largura</label> <!-- Inicia uma nova label -->
                        <input type="text" name="largura" id="largura" placeholder="Em centímetros"> <!-- Inicia um novo input -->
                    </div>
                    <div class="item"> <!-- Inicia a div.item -->
                        <label  for="descricao">Descrição <span required>*</span></label> <!-- Inicia uma nova label -->
                        <textarea name="descricao" id="descricao"></textarea> <!-- Inicia um novo textarea -->
                    </div>
                </div>
                <div class="right grid"> <!-- Inicia a div.right -->
                    <div class="item"> <!-- Inicia a div.item -->
                        <strong>Imagem do Produto <span required>*</span></strong>
                        <div class="left"> <!-- Inicia a div.left -->
                            <label class="pick-image" for="picture_input"> <!-- Inicia uma nova label -->
                                <span class="picture_image"></span>
                            </label>
                            <input style="display: none;" type="file" name="fotoProduto" id="picture_input" accept=".jpg, .jpeg, .png, .webp"> <!-- Inicia um novo input -->
                        </div>
                        <div class="image-info"> <!-- Inicia a div.image-info -->
                            <small>.jpg, .png, .webp</small>
                        </div>
                    </div>
                    <div class="item"> <!-- Inicia a div.item -->
                        <label for="produtoQtd">Estoque <span required>*</span></label> <!-- Inicia uma nova label -->
                        <input  type="text" name="produtoQtd" id="produtoQtd"> <!-- Inicia um novo input -->
                    </div>
                    <div class="buttons"> <!-- Inicia a div.buttons -->
                        <button type="submit" name="cadastrar" class="flex">Cadastrar produto</button>
                        <a href="#" class="cancelar flex"> <!-- Inicia um link -->
                            <span>Cancelar</span>
                        </a> <!-- Fecha o link -->
                    </div> <!-- Fecha a div -->
                </div> <!-- Fecha a div -->
                
            </form> <!-- Fecha o form -->
        </div> <!-- Fecha a div -->
    </div> <!-- Fecha a div -->

    <script>
        let selectSubcategorias = document.querySelectorAll("select.subcategorias"); //variavel que armazena as subcaegorias

        function setSubcategory (select) {
            for (i = 0; i <= document.getElementsByClassName('subcategorias').length - 1; i++) {
                document.getElementsByClassName('subcategorias')[i].style.display = 'none'; // Laço que define a visibilidade das subcategorias, alternando-as entre display block e display none
            }
            document.querySelector('#sub_' + select.value).style.display = 'block'; // Define que a subactergoria selecionada ficará em evidência
        }
    </script>
    <script src="toggleMenu.js"></script>
    <script src="../../assets/js/imagePreview.js"></script>
    <script src="../../assets/js/footer.js"></script>
</body>
</html>
<?php
    if (isset($_POST['cadastrar'])) {
        $conexao = mysqli_connect('localhost', 'root', '', 'techabc'); //realiza de fato a conexão com o banco de dados

        $imagem = $_FILES['fotoProduto']['name']; # cria a variável para imagem do produto
        $categoria = $_POST['categorias']; # cria a variável para categoria do produto
        $nome_produto = $_POST['produtoNome']; # cria a variável para nome do produto
        $preco = $_POST['preco']; # cria a variável para o preco do produto
        $peso = $_POST['peso']; # cria a variável para o peso do produto
        $altura = $_POST['altura']; # cria a variável para altura do produto
        $largura = $_POST['largura']; # cria a variável para largura do produto
        $descricao = $_POST['descricao']; # cria a variável para descricao do produto
        $estoque = $_POST['produtoQtd']; # cria a variável para estoque do produto
        $tipo; # cria a variável para o tipo do produto

        if ($categoria == 'pecas') { # Se a categoria for peças

            $tipo = $_POST['sub_pecas']; # define o tipo como sub_pecas

        } else if ($categoria == 'acessorios') { # Se a categoria for acessorios

            $tipo = $_POST['sub_acessorios']; # define o tipo como sub-acessorios

        } elseif ($categoria == 'notebooks') { # Se a categoria for notebooks

            $tipo = 'notebook'; # define o tipo como notebooks

        } elseif ($categoria == 'desktops') { # Se a categoria for desktops

            $tipo = 'desktop'; # define o tipo como desktops

        }


        $sql = "INSERT INTO $categoria (tipo, nome, descricao, preco, foto, quantidade, peso, altura, largura, id) VALUES ('$tipo', '$nome_produto', '$descricao', '$preco', '$imagem','$estoque', '$peso', '$altura', '$largura', NULL)"; # inserção das informações inseridas no banco de dados

        $result = mysqli_query($conexao, $sql); # resultado que irá executar a query acima

        $temp = $_FILES['fotoProduto']['tmp_name']; # origem do arquivo de imagem
        move_uploaded_file($temp, "$imagem"); # define o destino do arquivo de imagem
    }
?>