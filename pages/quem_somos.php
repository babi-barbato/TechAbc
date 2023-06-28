<?php
// Comentado no index
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
<html lang="pt-br">
<head>
    <!-- HTML comentado no index -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/menu__style.css">
    <link rel="stylesheet" href="../assets/css/footer-style.css">
    <link rel="stylesheet" href="../assets/css/quem-somos.css">
    <title>Quem Somos</title>
</head>
<body>
    <script src="../assets/js/menu-oficiall.js"></script>

    <section class="quem-somos"> <!-- Inicia a tag section.quem-somos -->
        <div class="container"> <!-- Inicia a tag div.container -->
            <div class="title"> <!-- Inicia a div.title -->
                <h1>Quem Somos</h1> <!-- Título da página -->
            </div>
            <div class="content"> <!-- Inicia a div.content  -->

                <div class="items flex"> <!-- Inicia a div.items -->
    
                    <div class="item"> <!-- Inicia a div.item -->
    
                        <div class="top"> <!-- Inicia a div.top -->
    
                            <div class="foto"> <!-- Inicia a div.foto -->
                                <img src="../img/andre-busto.svg" alt=""> <!-- Imagem do nosso avatar -->
                            </div>
                            <div class="nome"> <!-- Inicia a div.nome -->
                                <span>André Silva dos Reis</span> <!-- Nome do membro -->
                            </div>
    
                        </div>
                        <div class="bottom"> <!-- Inicia a div.bottom -->
    
                            <div class="text"> <!-- Inicia a div.text -->
                                <p>Fui o responsável pela maior parte do desenvolvimento Frontend do projeto, e por uma parte do Backend com PHP.</p> <!-- Função de cada membro no projeto -->
                            </div>
    
                            <div class="contact"> <!-- Inicia a div.contact -->
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://github.com/andre-reis-dev"> <!-- insere um link externo -->
                                            <i class="bi bi-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.linkedin.com/in/andré-reis-a76878246"> <!-- Insere um link externo -->
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="wa.me/5511949489591"> <!-- Insere um link externo -->
                                            <i class="bi bi-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
    
                    </div>
    
                    <div class="item"> <!-- Inicia a div.item -->
    
                        <div class="top"> <!-- Inicia a div.top -->
    
                            <div class="foto"> <!-- Inicia a div.foto -->
                                <img src="../img/barbara.svg" alt=""> <!-- Imagem do nosso avatar -->
                            </div>
                            <div class="nome"> <!-- Inicia a div.nome -->
                                <span>Bárbara Barbato de Oliveira</span> <!-- Nome do membro -->
                            </div>
    
                        </div>
                        <div class="bottom"> <!-- Inicia a div.bottom -->
    
                            <div class="text"> <!-- Inicia a div.text -->
                                <p>Fui a responsável pela maior parte do desenvolvimento Backend do projeto, e por uma parte do Frontend com HTML/CSS/JavaScript.</p> <!-- Função de cada membro no projeto -->
                            </div>
    
                            <div class="contact"> <!-- Inicia a div.contact -->
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://github.com/andre-reis-dev"> <!-- insere um link externo -->
                                            <i class="bi bi-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.linkedin.com/in/andré-reis-a76878246"> <!-- Insere um link externo -->
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="wa.me/5511949489591"> <!-- Insere um link externo -->
                                            <i class="bi bi-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
    
                    </div>
    
                    <div class="item"> <!-- Inicia a div.item -->
    
                        <div class="top"> <!-- Inicia a div.top -->
    
                            <div class="foto"> <!-- Inicia a div.foto -->
                                <img src="../img/camila.svg" alt=""> <!-- Imagem do nosso avatar -->
                            </div>
                            <div class="nome"> <!-- Inicia a div.nome -->
                                <span>Camila Freo Afanasiev</span> <!-- Nome do membro -->
                            </div>
    
                        </div>
                        <div class="bottom"> <!-- Inicia a div.bottom -->
    
                            <div class="text"> <!-- Inicia a div.text -->
                                <p>Fui a responsável por boa parte do desenvolvimento Frontend do projeto, e por uma parte do Backend com PHP.</p> <!-- Função de cada membro no projeto -->
                            </div>
    
                            <div class="contact"> <!-- Inicia a div.contact -->
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://github.com/andre-reis-dev"> <!-- insere um link externo -->
                                            <i class="bi bi-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.linkedin.com/in/andré-reis-a76878246"> <!-- Insere um link externo -->
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="wa.me/5511949489591"> <!-- Insere um link externo -->
                                            <i class="bi bi-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
    
                    </div>
                </div>


            </div>
        </div>
    </section>

    <script src="../assets/js/footer_.js"></script>
</body>
</html>