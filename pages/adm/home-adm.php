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
    <title>Home Administrador</title>
</head>
<body>
    <?php
    include("../../assets/php/conexao.php");//Incluir conexão com o bd
    
    $qtdDesktop = 0;//declara a variavel para ser usada no while
    $qtdNotebook = 0;//declara a variavel para ser usada no while
    $qtdMouse = 0;//declara a variavel para ser usada no while
    $qtdFone = 0;//declara a variavel para ser usada no while
    $qtdMousePad = 0;//declara a variavel para ser usada no while
    $qtdTeclado = 0;//declara a variavel para ser usada no while
    $qtdMonitor = 0;//declara a variavel para ser usada no while
    $qtdCooler = 0;//declara a variavel para ser usada no while
    $qtdArmazenamento = 0;//declara a variavel para ser usada no while
    $qtdRam = 0;//declara a variavel para ser usada no while
    $qtdPlacaMae = 0;//declara a variavel para ser usada no while
    $qtdPlacaVideo = 0;//declara a variavel para ser usada no while
    $qtdProcessador = 0;//declara a variavel para ser usada no while
    $qtdGabinete = 0;//declara a variavel para ser usada no while

    //Começar os selects de cada produto
    $sqlDesktop = "SELECT quantidade as contar FROM desktops";//SQL que seleciona a qtd
    $resultadoDesktop = mysqli_query($conexao,$sqlDesktop);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoDesktop)){//while para pegar valor
        $qtdDesktop += $linha['contar'];//fala q a variavel qtdMouse é igual a qtd de itens
    }

    $sqlNotebook = "SELECT quantidade as contar FROM notebooks";//SQL que seleciona a qtd
    $resultadoNotebook = mysqli_query($conexao,$sqlNotebook);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoNotebook)){//while para pegar valor
        $qtdNotebook += $linha['contar'];//fala q a variavel qtdMouse é igual a qtd de itens
    }
    
    $sqlPecas = "SELECT quantidade as contar FROM pecas";//SQL que seleciona a qtd
    $resultadoPecas = mysqli_query($conexao,$sqlPecas);//faz a conexão
    $qtdPecas = 0;//declara a variavel para ser usada no while
    while ($linha = mysqli_fetch_array($resultadoPecas)){//while para pegar valor
        $qtdPecas += $linha['contar'];//fala q a variavel qtdMouse é igual a qtd de itens
    }
    
    $sqlAcessorios = "SELECT quantidade as contar FROM acessorios";//SQL que seleciona a qtd
    $resultadoAcessorios = mysqli_query($conexao,$sqlAcessorios);//faz a conexão
    $qtdAcessorios = 0;//declara a variavel para ser usada no while
    while ($linha = mysqli_fetch_array($resultadoAcessorios)){//while para pegar valor
        $qtdAcessorios += $linha['contar'];//fala q a variavel qtdMouse é igual a qtd de itens
    }

    $sqlMouse = "SELECT quantidade as contar FROM acessorios where tipo = 'mouse'";//SQL que seleciona a qtd
    $resultadoMouse = mysqli_query($conexao,$sqlMouse);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoMouse)){//while para pegar valor
        $qtdMouse += $linha['contar'];//fala q a variavel qtdMouse é igual a qtd de itens
    }
    
    $sqlFone = "SELECT quantidade as contar FROM acessorios where tipo = 'fone'";//SQL que seleciona a qtd
    $resultadoFone = mysqli_query($conexao,$sqlFone);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoFone)){//while para pegar valor
        $qtdFone += $linha['contar'];//fala q a variavel qtdMouse é igual a qtd de itens
    }
    
    $sqlMonitor = "SELECT quantidade as contar FROM acessorios where tipo = 'monitor'";//SQL que seleciona a qtd
    $resultadoMonitor = mysqli_query($conexao,$sqlMonitor);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoMonitor)){//while para pegar valor
        $qtdMonitor += $linha['contar'];//fala q a variavel qtdMouse é igual a qtd de itens
    }
    
    $sqlTeclado = "SELECT quantidade as contar FROM acessorios where tipo = 'teclado'";//SQL que seleciona a qtd
    $resultadoTeclado = mysqli_query($conexao,$sqlTeclado);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoTeclado)){//while para pegar valor
        $qtdTeclado += $linha['contar'];//fala q a variavel qtdMouse é igual a qtd de itens
    }
    
    $sqlMousePad = "SELECT quantidade as contar FROM acessorios where tipo = 'mousePad'";//SQL que seleciona a qtd
    $resultadoMousePad = mysqli_query($conexao,$sqlMousePad);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoMousePad)){//while para pegar valor
        $qtdMousePad += $linha['contar'];//fala q a variavel qtdMousePad é igual a qtd de itens
    }

    $sqlGabinete = "SELECT quantidade as contar FROM pecas where tipo = 'gabinete'";//SQL que seleciona a qtd
    $resultadoGabinete = mysqli_query($conexao,$sqlGabinete);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoGabinete)){//while para pegar valor
        $qtdGabinete += $linha['contar'];//fala q a variavel qtdGabinete é igual a qtd de itens
    }
    
    $sqlProcessador = "SELECT quantidade as contar FROM pecas where tipo = 'processador'";//SQL que seleciona a qtd
    $resultadoProcessador = mysqli_query($conexao,$sqlProcessador);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoProcessador)){//while para pegar valor
        $qtdProcessador += $linha['contar'];//fala q a variavel qtdProcessador é igual a qtd de itens
    }
    
    $sqlRam = "SELECT quantidade as contar FROM pecas where tipo = 'ram'";//SQL que seleciona a qtd
    $resultadoRam = mysqli_query($conexao,$sqlRam);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoRam)){//while para pegar valor
        $qtdRam += $linha['contar'];//fala q a variavel qtdRam é igual a qtd de itens
    }

    $sqlPlacaMae = "SELECT quantidade as contar FROM pecas where tipo = 'placaMae'";//SQL que seleciona a qtd
    $resultadoPlacaMae = mysqli_query($conexao,$sqlPlacaMae);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoPlacaMae)){//while para pegar valor
        $qtdPlacaMae += $linha['contar'];//fala q a variavel qtdPlacaMae é igual a qtd de itens
    }
    
    $sqlPlacaVideo = "SELECT quantidade as contar FROM pecas where tipo = 'placaVideo'";//SQL que seleciona a qtd
    $resultadoPlacaVideo = mysqli_query($conexao,$sqlPlacaVideo);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoPlacaVideo)){//while para pegar valor
        $qtdPlacaVideo += $linha['contar'];//fala q a variavel qtdMouse é igual a qtd de itens
    }
    
    $sqlArmazenamento = "SELECT quantidade as contar FROM pecas where tipo = 'armazenamento'";//SQL que seleciona a qtd
    $resultadoArmazenamento = mysqli_query($conexao,$sqlArmazenamento);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoArmazenamento)){//while para pegar valor
        $qtdArmazenamento += $linha['contar'];//fala q a variavel qtdMouse é igual a qtd de itens
    }
    
    $sqlCooler = "SELECT quantidade as contar FROM pecas where tipo = 'cooler'";//SQL que seleciona a qtd
    $resultadoCooler = mysqli_query($conexao,$sqlCooler);//faz a conexão
    while ($linha = mysqli_fetch_array($resultadoCooler)){//while para pegar valor
        $qtdCooler += $linha['contar'];//fala q a variavel qtdCooler é igual a qtd de itens
    }

    ?>
    <script src="../../assets/js/menu-do-adm.js"></script> <!-- componente que é o menu de adm -->
    <script src="../toggleMenu.js"></script><!-- js que faz esse enu funcinar em celular -->

    <div id="divGeral"><!-- divGeral -->

        <div style="width: 100%;display: flex;align-items: center;justify-content: center;flex-direction: column;"><!-- divi que vai pegar um gráfcio -->
            <br><!-- pula linha -->
            <h1>Itens no geral dentro do estoque</h1> <!-- titulo geral do gráfico -->
            <br><!-- pula linha -->
            <div class="divGraficos"> <!-- div que pega o grafico em si (canvas) -->
                <div style="position: relative;">
                    <canvas id="graficoProdutos"></canvas><!-- elemento canvas que permite que criemos um gráfico (usa o canvas pois é o unico elemento que permite que 'desenhamos nele) -->
                </div>
            </div>
        </div>

        <!-- explicação no codigo acima -->
        <div style="width: 100%;display: flex;align-items: center;justify-content: center;flex-direction: column;">
            <br>
            <h1 style="color:'#ff6384'">Acessórios no estoque</h1>
            <br>
            <div class="divGraficos">
                <div style="position: relative;">
                    <canvas id="graficoAcessorios"></canvas>
                </div>
            </div>
        </div>

        <!-- explicação no codigo acima -->
        <div style="width: 100%;display: flex;align-items: center;justify-content: center;flex-direction: column;">
            <br>
            <h1 style="color:'#ff6384'">Peças no estoque</h1>
            <br>
            <div class="divGraficos">
                <div style="position: relative;">
                    <canvas id="graficoPecas"></canvas>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
  //Abaixo vou realizar a configuração desses gráficos
  echo "<script>
    const ctx = document.getElementById('graficoProdutos'); //Pego o elemento CANVAS que ficara meu gráfico
    new Chart(ctx, {//Crio o grafico
      type: 'bar',//é tipo de barras
      data: {
        labels: ['Acessórios','Desktops', 'Notebooks','Pecas'],//nome de cada coluna
        datasets: [{
          label: 'Estoque de cada produto',//titulo do gráfico
          data: [". $qtdAcessorios .",".$qtdDesktop.",".$qtdNotebook.",". $qtdPecas ."],//variavel que acomula a qtd de produtos por meio de um vetor
          borderWidth: 1 //tamanho da borda
        }]
      },
      options: {
        scales: {
          y: {
            beginAtZero: true //condição que começa em 0
          }
        }
      }
    });
    </script>";

    echo "<script>
        const ctx1 = document.getElementById('graficoAcessorios'); //Pego o elemento CANVAS que ficara meu gráfico
        new Chart(ctx1, {//Crio o grafico
          type: 'bar',//é tipo de barras
          data: {
            labels: ['Fones', 'Mouses','MousePads', 'Teclados', 'Monitores'],//nome de cada coluna
            datasets: [{
              label: 'Estoque de cada produto',//titulo do gráfico
              data: [". $qtdFone .",". $qtdMouse .",".$qtdMousePad.",".$qtdTeclado.",". $qtdMonitor ."],//variavel que acomula a qtd de produtos por meio de um vetor
              backgroundColor: '#ff6384', //Mudar cor do gráfico
              borderWidth: 1 //tamanho da borda
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true //condição que começa em 0
              }
            }
          }
        });
    </script>";
    
    echo "<script>
        const ctx2 = document.getElementById('graficoPecas'); //Pego o elemento CANVAS que ficara meu gráfico
        new Chart(ctx2, {//Crio o grafico
          type: 'bar',//é tipo de barras
          data: {
            labels: ['Gabinetes', 'Placa Mãe','Processador', 'Aramazenamento', 'Placa de Vídeo', 'Memoria RAM', 'Cooler'],//nome de cada coluna
            datasets: [{
              label: 'Estoque de cada produto',//titulo do gráfico
              data: [". $qtdGabinete .",". $qtdPlacaMae .",".$qtdProcessador.",".$qtdArmazenamento.",". $qtdPlacaVideo .",".$qtdRam.",". $qtdCooler ."],//variavel que acomula a qtd de produtos por meio de um vetor
              backgroundColor: '#ffce56', //Mudar cor do gráfico
              borderWidth: 1 //tamanho da borda
            }]
          },
          options: {
            scales: {
              y: {
                beginAtZero: true //condição que começa em 0
              }
            }
          }
        });
    </script>";
?>