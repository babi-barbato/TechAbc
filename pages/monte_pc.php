<!DOCTYPE html>
<?php
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

    <!-- <script src="../assets/js/menu-oficial.js"></script>puxando menu que esta em um script -->
<!-- <script src="../assets/js/menu-oficial.js"></script> -->
    <main>
        <section>
            <div class="container">
                <div class="back-to-menu" >
                    <a href="index.php" style="color: black;"><span class="fa fa-chevron-left" style="margin-right: 10px;"></span> Voltar ao menu</a>
                </div>
                <div class="title">
                    <h1>Monte seu PC</h1>
                </div>
                <form action="pagamento.php" name="form" method="post" class="build-box flex">
                    <div class="box1 grid">
                        <div class="item item1">
                            <h2>Processador</h2>
                            <div class="select-piece">
                                <button name="processador" type="button" class="btn-select-piece" id="btnproc">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button>
                            </div>
                            <div class="edit-piece flex">
                                <span class="produto-selecionado"></span>
                                <label for="btnproc"><i class="fa fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="item">
                            <h2>Placa Mãe</h2>
                            <div class="select-piece">
                                <button type="button" class="btn-select-piece" id="btn-placa-mae">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button>
                            </div>
                            <div class="edit-piece flex">
                                <span class="produto-selecionado"></span>
                                <label for="btn-placa-mae"><i class="fa fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="item">
                            <h2>Memória RAM</h2>
                            <div class="select-piece">
                                <button type="button" class="btn-select-piece" id="btn-memoria-ram">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button>
                            </div>
                            <div class="edit-piece flex">
                                <div class="produto-selecionado"></div>
                                <label for="btn-memoria-ram"><i class="fa fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="item">
                            <h2>Placa de Vídeo</h2>
                            <div class="select-piece">
                                <button type="button" class="btn-select-piece" id="btn-placa-video">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button>
                            </div>
                            <div class="edit-piece flex">
                                <span class="produto-selecionado"></span>
                                <label for="btn-placa-video"><i class="fa fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="item">
                            <h2>Gabinete</h2>
                            <div class="select-piece">
                                <button type="button" class="btn-select-piece" id="btn-gabinete">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button>
                            </div>
                            <div class="edit-piece flex">
                                <span class="produto-selecionado"></span>
                                <label for="btn-gabinete"><i class="fa fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="item">
                            <h2>Armazenamento</h2>
                            <div class="select-piece">
                                <button type="button" class="btn-select-piece" id="btn-armazenamento">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button>
                            </div>
                            <div class="edit-piece flex">
                                <span class="produto-selecionado"></span>
                                <label for="btn-armazenamento"><i class="fa fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="item">
                            <h2>Fonte de Energia</h2>
                            <div class="select-piece">
                                <button type="button" class="btn-select-piece" id="btn-fonte">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button>
                            </div>
                            <div class="edit-piece flex">
                                <span class="produto-selecionado"></span>
                                <label for="btn-fonte"><i class="fa fa-edit"></i></label>
                            </div>
                        </div>
                        <div class="item">
                            <h2>Cooler</h2>
                            <div class="select-piece">
                                <button type="button" class="btn-select-piece" id="btn-cooler">
                                    <span>Selecionar</span>
                                    <i class="fa fa-arrow-up-right-from-square"></i>
                                </button>
                            </div>
                            <div class="edit-piece flex">
                                <span class="produto-selecionado"></span>
                                <label for="btn-cooler"><i class="fa fa-edit"></i></label>
                            </div>
                        </div>
                    </div>
                    <div class="box2">
                        <form action="" method="post">
                            <div class="top flex">
                                <h2>Preço Total</h2>
                                <span id="preco-total">R$ 0,00</span>
                            </div>
                            <div class="middle">
                                <div class="config-info">
                                    <div class='config-item flex'></div>
                                    <div class='config-item flex'></div>
                                    <div class='config-item flex'></div>
                                    <div class='config-item flex'></div>
                                    <div class='config-item flex'></div>
                                    <div class='config-item flex'></div>
                                    <div class='config-item flex'></div>
                                    <div class='config-item flex'></div>
                                </div>
                            </div>
                            <div class="bottom">
                                <button type="submit" name="concluir">Concluir compra</button>
                            </div>
                        </form>
                    </div>

                    <div class="box-opacity">
                        <div class="float-box">
                            <div class="top flex">
                                <h1>Escolha o modelo que deseja</h1>
                                <i class="fa fa-close close"></i>
                            </div>
                            <div class="center">
                                <?php
                                $sql_proc = "SELECT * FROM pecas WHERE tipo = 'processador'";
                                $resultado_proc = mysqli_query($conexao, $sql_proc);
                                echo "<div class='peças grid'>";
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
                                        ";
                                }
                                echo "</div>";

                                $sql_placa_mae = "SELECT * FROM pecas WHERE tipo = 'placaMae'";
                                $resultado_placa_mae = mysqli_query($conexao, $sql_placa_mae);
                                echo "<div class='peças grid'>";
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
                                        ";
                                }
                                echo "</div>";

                                $sql_memoria_ram = "SELECT * FROM pecas WHERE tipo = 'ram'";
                                $resultado_memoria_ram = mysqli_query($conexao, $sql_memoria_ram);
                                echo "<div class='peças grid'>";
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
                                        ";
                                }
                                echo "</div>";

                                $sql_placa_de_video = "SELECT * FROM pecas WHERE tipo = 'placaVideo'";
                                $resultado_placa_de_video = mysqli_query($conexao, $sql_placa_de_video);
                                echo "<div class='peças grid'>";
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
                                        ";
                                }
                                echo "</div>";

                                $sql_gabinete = "SELECT * FROM pecas WHERE tipo = 'gabinete'";
                                $resultado_gabinete = mysqli_query($conexao, $sql_gabinete);
                                echo "<div class='peças grid'>";
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
                                        ";
                                }
                                echo "</div>";

                                $sql_armazenamento = "SELECT * FROM pecas WHERE tipo = 'armazenamento'";
                                $resultado_armazenamento = mysqli_query($conexao, $sql_armazenamento);
                                echo "<div class='peças grid'>";
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
                                        ";
                                }
                                echo "</div>";

                                $sql_fonte_de_energia = "SELECT * FROM pecas WHERE tipo = 'fonte'";
                                $resultado_fonte_de_energia = mysqli_query($conexao, $sql_fonte_de_energia);
                                echo "<div class='peças grid'>";
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
                                        ";
                                }
                                echo "</div>";

                                $sql_cooler = "SELECT * FROM pecas WHERE tipo = 'cooler'";
                                $resultado_cooler = mysqli_query($conexao, $sql_cooler);
                                echo "<div class='peças grid'>";
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
                                        ";
                                }
                                echo "</div>";
                                ?>
                                <div class="radioInputs"></div>
                            </div>
                            <div class="bottom flex">
                                <button class="cancel close">
                                    Cancelar
                                </button>
                                <button disabled class="confirmar">
                                    Confirmar
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </section>
    </main>
    <script src="../assets/js/monte_pc.js"></script>
    <script src="../assets/js/footer_.js"></script>
</body>

</html>