<!DOCTYPE html>
<?php
 // PHP comentado no index
include("../assets/php/conexao.php");
include("../assets/php/menu.php");
include("../assets/php/bloqueio.php");
echo "<style>#sair{display:none}</style>";
echo "<style>#saair{display:none}</style>";

if (isset($_SESSION['user'])) {
    echo "<style>#teste{display:none}</style>";
    echo "<style>#cadLogin{display:none}</style>";
    echo "<style>#sair{display:flex;}</style>";
    echo "<style>#saair{display:flex}</style>";
}
?>

<html lang="pt-br">

<head>
    <!-- HTML padrão comentado no Index -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/menu_ofc_style.css">
    <link rel="stylesheet" href="../assets/css/monte_seu_pc-style.css">
    <link rel="stylesheet" href="../assets/css/footer-style.css">
    <title>Monte seu PC</title>
</head>

<body>

    <main> <!-- Inicia a tag main -->
        <section> <!-- Inicia a tag section -->
            <div class="container"> <!-- Inicia a a div.container -->
                <div class="back-to-menu" > <!-- Inicia a tag div.back-to-menu -->
                    <a href="index.php" style="color: black;"><span class="fa fa-chevron-left" style="margin-right: 10px;"></span> Voltar ao menu</a> <!-- Inicia a tag a. O link para voltar ao menu -->
                </div> 
                <div class="title"><!-- Inicia a tag div.title -->
                    <h1>Monte seu PC</h1> <!-- Inicia e fecha a tag h1 -->
                </div> <!-- fecha a tag div -->
                <form action="pagamento.php" name="form" method="post" class="build-box flex">
                    <div class="box1 grid"> <!-- Inicia a div.box1 -->
                        <div class="item item1"> <!-- Inicia a div. -->
                            <h2>Processador</h2> <!-- Inicia a h2 -->
                            <div class="select-piece"> <!-- Inicia a div.select-piece -->
                                <button name="processador" type="button" class="btn-select-piece" id="btnproc"> <!-- Inicia a button.processador -->
                                    <span>Selecionar</span> <!-- Inicia e fecha a tag span -->
                                    <i class="fa fa-arrow-up-right-from-square"></i> <!-- Inicia e fecha a tag i -->
                                </button> <!-- fecha a tag button -->
                            </div> <!-- fecha a tag div -->
                            <div class="edit-piece flex"> <!-- Inicia a div.edit-piece -->
                                <span class="produto-selecionado"></span>
                                <label for="btnproc"><i class="fa fa-edit"></i></label>
                            </div> <!-- fecha a tag div -->
                        </div> <!-- fecha a tag div -->
                        <div class="item"> <!-- Inicia a div.item -->
                            <h2>Placa Mãe</h2>
                            <div class="select-piece"> <!-- Inicia a div.select-piece -->
                                <button type="button" class="btn-select-piece" id="btn-placa-mae">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button> <!-- fecha a tag div -->
                            </div> <!-- fecha a tag div -->
                            <div class="edit-piece flex"> <!-- Inicia a div.edit-piece -->
                                <span class="produto-selecionado"></span>
                                <label for="btn-placa-mae"><i class="fa fa-edit"></i></label>
                            </div> <!-- fecha a tag div -->
                        </div> <!-- fecha a tag div -->
                        <div class="item"> <!-- Inicia a div.item -->
                            <h2>Memória RAM</h2>
                            <div class="select-piece"> <!-- Inicia a div.select-piece -->
                                <button type="button" class="btn-select-piece" id="btn-memoria-ram">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button> <!-- fecha a tag button -->
                            </div> <!-- fecha a tag div -->
                            <div class="edit-piece flex"> <!-- Inicia a div.edit-piece -->
                                <div class="produto-selecionado"></div>
                                <label for="btn-memoria-ram"><i class="fa fa-edit"></i></label>
                            </div> <!-- fecha a tag div -->
                        </div> <!-- fecha a tag div -->
                        <div class="item"> <!-- Inicia a div.item -->
                            <h2>Placa de Vídeo</h2>
                            <div class="select-piece"> <!-- Inicia a div.select-piece -->
                                <button type="button" class="btn-select-piece" id="btn-placa-video">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button> <!-- fecha a tag button -->
                            </div> <!-- fecha a tag div -->
                            <div class="edit-piece flex"> <!-- Inicia a div.edit-piece -->
                                <span class="produto-selecionado"></span>
                                <label for="btn-placa-video"><i class="fa fa-edit"></i></label>
                            </div> <!-- fecha a tag div -->
                        </div> <!-- fecha a tag div -->
                        <div class="item"> <!-- Inicia a div.item -->
                            <h2>Gabinete</h2>
                            <div class="select-piece"> <!-- Inicia a div.select-piece -->
                                <button type="button" class="btn-select-piece" id="btn-gabinete">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button> <!-- fecha a tag button -->
                            </div> <!-- fecha a tag div -->
                            <div class="edit-piece flex"> <!-- Inicia a div.edit-piece -->
                                <span class="produto-selecionado"></span>
                                <label for="btn-gabinete"><i class="fa fa-edit"></i></label>
                            </div> <!-- fecha a tag div -->
                        </div> <!-- fecha a tag div -->
                        <div class="item"> <!-- Inicia a div.item -->
                            <h2>Armazenamento</h2>
                            <div class="select-piece"> <!-- Inicia a div.select-piece -->
                                <button type="button" class="btn-select-piece" id="btn-armazenamento">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button> <!-- fecha a tag button -->
                            </div> <!-- fecha a tag div -->
                            <div class="edit-piece flex"> <!-- Inicia a div.edit-piece -->
                                <span class="produto-selecionado"></span>
                                <label for="btn-armazenamento"><i class="fa fa-edit"></i></label>
                            </div> <!-- fecha a tag div -->
                        </div> <!-- fecha a tag div -->
                        <div class="item"> <!-- Inicia a div.item -->
                            <h2>Fonte de Energia</h2>
                            <div class="select-piece">
                                <button type="button" class="btn-select-piece" id="btn-fonte">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button> <!-- fecha a tag button -->
                            </div> <!-- fecha a tag div -->
                            <div class="edit-piece flex"> <!-- Inicia a div.edit-piece -->
                                <span class="produto-selecionado"></span>
                                <label for="btn-fonte"><i class="fa fa-edit"></i></label>
                            </div> <!-- fecha a tag div -->
                        </div> <!-- fecha a tag div -->
                        <div class="item"> <!-- Inicia a div.item -->
                            <h2>Cooler</h2>
                            <div class="select-piece"> <!-- Inicia a div.select-piece -->
                                <button type="button" class="btn-select-piece" id="btn-cooler">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button> <!-- fecha a tag button -->
                            </div> <!-- fecha a tag div -->
                            <div class="edit-piece flex"> <!-- Inicia a div.edit-piece -->
                                <span class="produto-selecionado"></span>
                                <label for="btn-cooler"><i class="fa fa-edit"></i></label>
                            </div> <!-- fecha a tag div -->
                        </div> <!-- fecha a tag div -->
                    </div> <!-- fecha a tag div -->
                    <div class="box2"> <!-- Inicia a div.box2 -->
                        <form action="" method="post">
                            <div class="top flex"> <!-- Inicia a div.top -->
                                <h2>Preço Total</h2>
                                <span id="preco-total">R$ 0,00</span>
                            </div> <!-- fecha a tag div -->
                            <div class="middle"> <!-- Inicia a div.middle -->
                                <div class="config-info"> <!-- Inicia a div.config-info -->
                                    <div class='config-item flex'></div> <!-- Inicia e fecha a div.config-item -->
                                    <div class='config-item flex'></div> <!-- Inicia e fecha a div.config-item -->
                                    <div class='config-item flex'></div> <!-- Inicia e fecha a div.config-item -->
                                    <div class='config-item flex'></div> <!-- Inicia e fecha a div.config-item -->
                                    <div class='config-item flex'></div> <!-- Inicia e fecha a div.config-item -->
                                    <div class='config-item flex'></div> <!-- Inicia e fecha a div.config-item -->
                                    <div class='config-item flex'></div> <!-- Inicia e fecha a div.config-item -->
                                    <div class='config-item flex'></div> <!-- Inicia e fecha a div.config-item -->
                                </div> <!-- fecha a tag div -->
                            </div> <!-- fecha a tag div -->
                            <div class="bottom"> <!-- Inicia a div.bottom -->
                                <button type="submit" name="concluir">Concluir compra</button>
                            </div> <!-- fecha a tag div -->
                        </form> <!-- fecha a tag form -->
                    </div> <!-- fecha a tag div -->

                    <div class="box-opacity"> <!-- Inicia a div.box-opacity -->
                        <div class="float-box"> <!-- Inicia a div.float-box -->
                            <div class="top flex"> <!-- Inicia a div.top -->
                                <h1>Escolha o modelo que deseja</h1>
                                <i class="fa fa-close close"></i>
                            </div> <!-- fecha a tag div -->
                            <div class="center"> <!-- Inicia a div.center -->
                                <?php
                                $sql_proc = "SELECT * FROM pecas WHERE tipo = 'processador'"; #select dos processadores
                                $resultado_proc = mysqli_query($conexao, $sql_proc); # resultado dos processadores
                                echo "<div class='peças grid'>"; # inicia a div.peças
                                while ($linha = mysqli_fetch_array($resultado_proc)) {
                                    echo "
                                            <label class='item product-box'>
                                                <div class='image'>
                                                    <img src='../img/" . $linha['tipo'] . "/" . $linha['foto'] . "' alt='Foto Produto'>
                                                </div>
                                                <div class='name'>
                                                    <strong class='nome-produto'>" . $linha['nome'] . "</strong>
                                                    
                                                </div>
                                                <div class='price'>" . $linha['preco'] . "</div>
                                            </label>
                                        "; # cria o item em que o usuário irá clicar, contendo foto, nome e preço do produto
                                }
                                echo "</div>"; # Fecha a div.peças

                                $sql_placa_mae = "SELECT * FROM pecas WHERE tipo = 'placaMae'"; # select das placas mãe 
                                $resultado_placa_mae = mysqli_query($conexao, $sql_placa_mae); # resultado das placas mae
                                echo "<div class='peças grid'>"; # inicia a div.peças
                                while ($linha = mysqli_fetch_array($resultado_placa_mae)) {
                                    echo "
                                        
                                            <label class='item product-box'>
                                                <div class='image'>
                                                    <img src='../img/" . $linha['tipo'] . "/" . $linha['foto'] . "' alt='Foto Produto'>
                                                </div>
                                                <div class='name'>
                                                    <strong class='nome-produto'>" . $linha['nome'] . "</strong>
                                                </div>
                                                <div class='price'>" . $linha['preco'] . "</div>
                                            </label>
                                        "; # cria o item em que o usuário irá clicar, contendo foto, nome e preço do produto
                                }
                                echo "</div>"; # Fecha a div.peças

                                $sql_memoria_ram = "SELECT * FROM pecas WHERE tipo = 'ram'"; #select das memorias ram
                                $resultado_memoria_ram = mysqli_query($conexao, $sql_memoria_ram); # resultado das memorias ram
                                echo "<div class='peças grid'>"; # inicia a div.peças
                                while ($linha = mysqli_fetch_array($resultado_memoria_ram)) {
                                    echo "
                                        
                                            <label class='item product-box'>
                                                <div class='image'>
                                                    <img src='../img/" . $linha['tipo'] . "/" . $linha['foto'] . "' alt='Foto Produto'>
                                                </div>
                                                <div class='name'>
                                                    <strong class='nome-produto'>" . $linha['nome'] . "</strong>
                                                </div>
                                                <div class='price'>" . $linha['preco'] . "</div>
                                            </label>
                                        "; # cria o item em que o usuário irá clicar, contendo foto, nome e preço do produto
                                }
                                echo "</div>"; # Fecha a div.peças 

                                $sql_placa_de_video = "SELECT * FROM pecas WHERE tipo = 'placaVideo'"; #select das placas de video
                                $resultado_placa_de_video = mysqli_query($conexao, $sql_placa_de_video); # resultado das placas de vídeo
                                echo "<div class='peças grid'>"; # inicia a div.peças
                                while ($linha = mysqli_fetch_array($resultado_placa_de_video)) {
                                    echo "
                                        
                                            <label class='item product-box'>
                                                <div class='image'>
                                                    <img src='../img/" . $linha['tipo'] . "/" . $linha['foto'] . "' alt='Foto Produto'>
                                                </div>
                                                <div class='name'>
                                                    <strong class='nome-produto'>" . $linha['nome'] . "</strong>
                                                </div>
                                                <div class='price'>" . $linha['preco'] . "</div>
                                            </label>
                                        "; # cria o item em que o usuário irá clicar, contendo foto, nome e preço do produto
                                }
                                echo "</div>"; # Fecha a div.peças

                                $sql_gabinete = "SELECT * FROM pecas WHERE tipo = 'gabinete'"; #select dos gabinetes
                                $resultado_gabinete = mysqli_query($conexao, $sql_gabinete); # resultado dos gabinetes
                                echo "<div class='peças grid'>"; # inicia a div.peças
                                while ($linha = mysqli_fetch_array($resultado_gabinete)) {
                                    echo "
                                        
                                            <label class='item product-box'>
                                                <div class='image'>
                                                    <img src='../img/" . $linha['tipo'] . "/" . $linha['foto'] . "' alt='Foto Produto'>
                                                </div>
                                                <div class='name'>
                                                    <strong class='nome-produto'>" . $linha['nome'] . "</strong>
                                                </div>
                                                <div class='price'>" . $linha['preco'] . "</div>
                                            </label>
                                        "; # cria o item em que o usuário irá clicar, contendo foto, nome e preço do produto
                                }
                                echo "</div>"; # Fecha a div.peças

                                $sql_armazenamento = "SELECT * FROM pecas WHERE tipo = 'armazenamento'"; #select dos armazenamentos
                                $resultado_armazenamento = mysqli_query($conexao, $sql_armazenamento); # resultado dos armazenamentos
                                echo "<div class='peças grid'>"; # inicia a div.peças
                                while ($linha = mysqli_fetch_array($resultado_armazenamento)) {
                                    echo "
                                            <label class='item product-box'>
                                                <div class='image'>
                                                    <img src='../img/" . $linha['tipo'] . "/" . $linha['foto'] . "' alt='Foto Produto'>
                                                </div>
                                                <div class='name'>
                                                    <strong class='nome-produto'>" . $linha['nome'] . "</strong>
                                                </div>
                                                <div class='price'>" . $linha['preco'] . "</div>
                                            </label>
                                        "; # cria o item em que o usuário irá clicar, contendo foto, nome e preço do produto
                                }
                                echo "</div>"; # Fecha a div.peças 

                                $sql_fonte_de_energia = "SELECT * FROM pecas WHERE tipo = 'fonte'"; #select das fontes de energia
                                $resultado_fonte_de_energia = mysqli_query($conexao, $sql_fonte_de_energia); # resultado das fontes de energia
                                echo "<div class='peças grid'>"; # inicia a div.peças
                                while ($linha = mysqli_fetch_array($resultado_fonte_de_energia)) {
                                    echo "
                                        
                                            <label class='item product-box'>
                                                <div class='image'>
                                                    <img src='../img/" . $linha['tipo'] . "/" . $linha['foto'] . "' alt='Foto Produto'>
                                                </div>
                                                <div class='name'>
                                                    <strong class='nome-produto'>" . $linha['nome'] . "</strong>
                                                </div>
                                                <div class='price'>" . $linha['preco'] . "</div>
                                            </label>
                                        "; # cria o item em que o usuário irá clicar, contendo foto, nome e preço do produto
                                }
                                echo "</div>"; # Fecha a div.peças

                                $sql_cooler = "SELECT * FROM pecas WHERE tipo = 'cooler'"; #select dos coolers
                                $resultado_cooler = mysqli_query($conexao, $sql_cooler); # resultado dos coolers
                                echo "<div class='peças grid'>"; # inicia a div.peças
                                while ($linha = mysqli_fetch_array($resultado_cooler)) {
                                    echo "
                                        
                                            <label class='item product-box'>
                                                <div class='image'>
                                                    <img src='../img/" . $linha['tipo'] . "/" . $linha['foto'] . "' alt='Foto Produto'>
                                                </div>
                                                <div class='name'>
                                                    <strong class='nome-produto'>" . $linha['nome'] . "</strong>
                                                </div>
                                                <div class='price'>" . $linha['preco'] . "</div>
                                            </label>
                                        "; # cria o item em que o usuário irá clicar, contendo foto, nome e preço do produto
                                }
                                echo "</div>"; # Fecha a div.peças 
                                ?>
                                <div class="radioInputs"></div> <!-- Inicia e fecha a div.radioInputs -->
                            </div> <!-- fecha a tag div -->
                            <div class="bottom flex"> <!-- Inicia a div.bottom -->
                                <button class="cancel close">
                                    Cancelar
                                </button> <!-- fecha a tag button -->
                                <button disabled class="confirmar">
                                    Confirmar
                                </button> <!-- fecha a tag button -->
                            </div> <!-- fecha a tag div -->
                        </div> <!-- fecha a tag div -->
                    </div> <!-- fecha a tag div --> 
                </form> <!-- fecha a tag form -->
            </div> <!-- fecha a tag div -->


        </section> <!-- fecha a tag section -->
    </main> <!-- fecha a tag main -->
    <script src="../assets/js/monte_pc.js"></script> 
    <script src="../assets/js/footer_.js"></script>
</body>

</html>