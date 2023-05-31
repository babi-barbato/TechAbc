<!DOCTYPE html>
<html lang="pt-br"><!-- linguagem padrão de pt-br -->

<head>
  <meta charset="UTF-8"><!-- charset utf8 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge"><!-- compativel com outros navegadores -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" /><!-- Link dos icones -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- compativel com outros navegadores -->
  <link rel="shortcut icon" href="../img/icon.ico" type="image/x-icon"><!-- icone que aparece na aba da página -->
  <link rel="stylesheet" href="../assets/css/menu_ofc_style.css"><!-- css do menu -->
  <link rel="stylesheet" href="../assets/css/footer-style.css"><!-- css do footer -->

  <link rel="stylesheet" href="../assets/css/carrinho-style.css"><!--css da página-->
  <title>Carrinho</title><!--titulo da página-->
</head>

<body>
  <script src="../assets/js/menu-ofici.js"></script><!-- menu chamado pelo js-->
  <div class="container"> <!--div que pega tudo-->
    <div class="produtos"> <!-- que armazena a caixinha da esquerda -->
      <table> <!--inicio da tabela-->
        <div class="content"> <!--ega o letreinoem cima da imagem-->
          <thead> <!--adicina uma linha-->
            <tr> <!--tabela-->
              <th>Produto</th> <!--titulo da parte de cima-->
              <th>Preço</th><!--titulo da parte de cima-->
              <th>Quantidade</th><!--titulo da parte de cima-->
              <th>Total</th><!--titulo da parte de cima-->
            </tr>
          </thead>
        </div>
      </table>


      <div class="product"> <!--div que armazena os produtos do carrinho -->
        <div class="titulo"> <!--armazena a imagem e o nome do produto-->
          <label class="name">Nome do produto</label><!--nome do produto-->
          <img src="https://picsum.photos/100/120" alt="" class="foto" /><!--imagem do produto-->
        </div>
        <img src="https://picsum.photos/100/120" alt="" class="imagem" /><!--nome do produto-->
        <label class="nome">Nome do produto</label><!--imagem do produto-->
        <div>
          <label class="preco">R$ 120</label> <!--preço do produto-->
        </div>
        <div>
          <div class="qtd"><!--div que armazena o select-->
            <select class="select"> <!--criação do select-->
              <option value="0">0</option> <!--primeira opção-->
              <option value="1">1</option><!--segunda opção-->
              <option value="2">2</option><!--terceira opção-->
              <option value="3">3</option><!--quarta opção-->
              <option value="4">4</option><!--quinta opção-->
              <option value="1">5</option><!--sexta opção-->
              <option value="2">6</option><!--setima opção-->
              <option value="3">7</option><!--oitava opção-->
              <option value="4">8</option><!--nona opção-->
              <option value="3">9</option><!--decima opção-->
              <option value="4">10</option><!--decima primeira opção-->
            </select>
          </div>
        </div>
        <div class="space">
          <label class="tot">R$ 240</label> <!--div que armazena o preço total de um produto especifico-->
         
        </div>
          <button class="excluir"> <!--botão que excluir prosutos-->
            <i class="fa fa-trash-can"></i><!--emoji de lixeira-->
          </button>
      </div>
    </div>
  

  <div class="total"><!--div que armazena a caixinha da parte direita-->
    <label class="resumo">Resumo da compra</label><!--titulo da caixinha-->
    <hr>
    <div class="info"><!--div que armazena o o preço e o frete-->
      <div><label>Subtotal</label><!--titulo-->
        <label>R$ 418</label><!--preço final-->
      </div>
      <div><label>Frete</label><!--titulo-->
        <label class="grat">Gratuito</span> <!--titulo-->
      </div>
    </div>
    <hr>
    <div class="mini-total"><!--armazena o total da compra-->
      <label> Total</label><!--titulo-->
      <label>R$ 418</label><!--preço final-->
    </div>
    <div class="button"> <!--div que armazena os botões-->
      <button type="button" class="enviar"> <!--botão de finalizar compra-->
        Finalizar compra
      </button>
      <button type="button" class="continuar"><!--botão de continuar comprando-->
        <a href="../pages/cadastro_enderecos.php" style="color:blue; border-color:blue">Cadastrar novo endereço  </a>
      </button>
    </div>
  </div>
  </div>
</body>
</html>
<script src="../assets/js/footer.js"></script><!--link do js do footer-->