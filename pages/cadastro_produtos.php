<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/cadastro-produtos.css">
    <link rel="stylesheet" href="../assets/css/menu_ofc_style.css">
    <link rel="stylesheet" href="../assets/css/footer-style.css">
    <link rel="stylesheet" href="../assets/css/style-global.css">
    <title>Cadastro de Produtos</title>

    
</head>
<body>
    <script src="../assets/js/menu-ofc.js"></script>

    <div class="container">     
        <div class="title">
            <h2>Cadastrar Produtos</h2>
            <hr>
        </div>
        <div class="form-container">
            <form action="" method="post" name='form' class="flex">
                <div class="left grid">
                    <div class="item">
                        <label  for="nomeProduto">Nome do produto <span required>*</span></label>
                        <input title="Nome do produto"  type="text" name="produtoNome" id="produtoNome" placeholder="Ex.: Placa Mae Gigabyte B450M GAMING DDR4 Socket AM4 Chipset AMD B450">
                    </div>
                    <div class="item">
                        <label  for="categorias">Categoria <span required>*</span></label>
                        <select name="categorias" id="categorias" title="Categorias" onchange="setSubcategory(this)">
                            <option id="pecas" class="categorias_opt" value="pecas">Peças</option>
                            <option id="acessorios" class="categorias_opt" value="acessorios">Acessórios</option>
                            <option id="notebook" class="categorias_opt" value="notebooks">Notebook</option>
                            <option id="desktop" class="categorias_opt" value="desktops">Desktop</option>
                        </select>
                    </div>
                    <div class="item">
                        <label for="Subcategorias">Subcategoria <span required>*</span></label>
                        <select class="subcategorias" id="sub_pecas" title="Subcategorias">
                            <option value="">Selecione</option>
                            <option value="placa_mae">Placa Mãe</option>
                            <option value="processador">Processador</option>
                            <option value="memoria_ram">Memória RAM</option>
                            <option value="placa_de_video">Placa de Vídeo</option>
                            <option value="fonte_de_energia">Fonte de Energia</option>
                            <option value="cooler">Cooler</option>
                            <option value="armazenamento">Armazenamento</option>
                            <option value="gabinete">Gabinete</option>
                        </select>

                        <select class="subcategorias" id="sub_acessorios" title="Subcategorias">
                            <option value="">Selecione</option>
                            <option value="mouse_pad">Mouse Pad</option>
                            <option value="monitor">Monitor</option>
                            <option value="teclado">Teclado</option>
                            <option value="mouse">Mouse</option>
                            <option value="fone">Fone</option>
                        </select>

                        <select class="subcategorias" id="sub_notebooks" title="Subcategorias">
                            <option value="">Selecione</option>
                            <option value="notebook">Notebook</option>
                        </select>

                        <select class="subcategorias"  id="sub_desktops" title="Subcategorias">
                            <option value="">Selecione</option>
                            <option value="desktop">Desktop</option>
                        </select>
                    </div>
                    <div class="item">
                        <label for="preco">Preço <span required>*</span></label>
                        <input  type="text" name="preco" id="preco" placeholder="Ex.: 220,00">
                    </div>
                    <div class="item">
                        <label for="peso">Peso <span required>*</span></label>
                        <input  type="text" name="peso" id="peso" placeholder="ex.: 0.3 para 300g">
                    </div>
                    <div class="item">
                        <label for="altura">Altura</label>
                        <input type="text" name="altura" id="altura" placeholder="Em centímetros">
                    </div>
                    <div class="item">
                        <label for="largura">Largura</label>
                        <input type="text" name="largura" id="largura" placeholder="Em centímetros">
                    </div>
                    <div class="item">
                        <label  for="descricao">Descrição <span required>*</span></label>
                        <textarea name="descricao" id="descricao"></textarea>
                    </div>
                </div>
                <div class="right grid">
                    <div class="item">
                        <strong>Imagem do Produto <span required>*</span></strong>
                        <div class="left">
                            <label class="pick-image" for="picture_input">
                                <span class="picture_image"></span>
                            </label>
                            <input style="display: none;" type="file" name="fotoProduto" id="picture_input" accept=".jpg, .jpeg, .png, .webp">
                        </div>
                        <div class="image-info">
                            <small>.jpg, .png, .webp</small>
                        </div>
                    </div>
                    <div class="item">
                        <label for="produtoQtd">Estoque <span required>*</span></label>
                        <input  type="text" name="produtoQtd" id="produtoQtd">
                    </div>
                        <!-- <div class="item">
                            <label for="produtoQtd">Classe <span required>*</span></label>
                            <input  type="text" name="classe" id="produtoQtd">
                        </div> -->
                    <div class="buttons">
                        <button type="submit" name="cadastrar" class="flex">Cadastrar produto</button>
                        <a href="#" class="cancelar flex">
                            <span>Cancelar</span>
                        </a>
                    </div>
                </div>
                
            </form>
        </div>
    </div>

    <script>
        let selectSubcategorias = document.querySelectorAll("select.subcategorias");

        function setSubcategory (select) {
            for (i = 0; i <= document.getElementsByClassName('subcategorias').length - 1; i++) {
                document.getElementsByClassName('subcategorias')[i].style.display = 'none';
            }
            document.querySelector('#sub_' + select.value).style.display = 'block';
            document.querySelector('#sub_' + select.value).setAttribute("name", "subcategorias");
            console.log(document.querySelector('#sub_' + select.value).name)
        }
    </script>
    <script src="toggleMenu.js"></script>
    <script src="../assets/js/imagePreview.js"></script>
    <script src="../assets/js/footer.js"></script>
</body>
</html>
<?php
    if (isset($_POST['cadastrar'])) {
        $conexao = mysqli_connect('localhost', 'andre', '@sR290905', 'techabc'); //realiza de fato a conexão com o banco de dados

        $categoria = $_POST['categorias'];
        $nome_produto = $_POST['produtoNome'];
        $tipo = $_POST['subcategorias'];
        $preco = $_POST['preco'];
        $peso = $_POST['peso'];
        $altura = $_POST['altura'];
        $largura = $_POST['largura'];
        $descricao = $_POST['descricao'];
        $estoque = $_POST['produtoQtd'];

        $sql = "INSERT INTO $categoria (tipo, nome, descricao, preco, foto, quantidade, peso, altura, largura, id) VALUES ('$tipo', '$nome_produto', '$descricao', '$preco', 'a','$estoque', '$peso', '$altura', '$largura', NULL)";

        $result = mysqli_query($conexao, $sql);
    }
?>