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
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/menu__style.css">
    <link rel="stylesheet" href="../assets/css/footer-style.css">
    <link rel="stylesheet" href="../assets/css/quem-somos.css">
    <title>Quem Somos</title>
</head>
<body>
    <script src="../assets/js/menu-oficiall.js"></script>

    <section class="quem-somos">
        <div class="container">
            <div class="title">
                <h1>Quem Somos</h1>
            </div>
            <div class="content">

                <div class="items flex">
    
                    <div class="item">
    
                        <div class="top">
    
                            <div class="foto">
                                <img src="../img/andre-busto.svg" alt="">
                            </div>
                            <div class="nome">
                                <span>André Silva dos Reis</span>
                            </div>
    
                        </div>
                        <div class="bottom">
    
                            <div class="text">
                                <p>Fui o responsável pela maior parte do desenvolvimento Frontend do projeto, e por uma parte do Backend com PHP.</p>
                            </div>
    
                            <div class="contact">
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://github.com/andre-reis-dev">
                                            <i class="bi bi-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://www.linkedin.com/in/andré-reis-a76878246">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="wa.me/5511949489591">
                                            <i class="bi bi-whatsapp"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
    
                    </div>

                    <div class="item">
    
                        <div class="top">
    
                            <div class="foto">
                                <img src="https://source.unsplash.com/random/400x200/?women" alt="FOTO DA PESSOA">
                            </div>
                            <div class="nome">
                                <span>Bárbara Barbato de Oliveira</span>
                            </div>
    
                        </div>
                        <div class="bottom">
    
                            <div class="text">
                                <p>Fui a responsável pela maior parte do desenvolvimento Backend do projeto, e por uma parte do Frontend com HTML, CSS e JS.</p>
                            </div>
    
                            <div class="contact">
                                <ul>
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="bi bi-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="bi bi-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
    
                    </div>

                    <div class="item">
    
                        <div class="top">
    
                            <div class="foto">
                                <img src="https://source.unsplash.com/random/400x200/?woman" alt="FOTO DA PESSOA">
                            </div>
                            <div class="nome">
                                <span>Camila Freo Afanasiev</span>
                            </div>
    
                        </div>
                        <div class="bottom">
    
                            <div class="text">
                                <p>Fui a responsável por boa parte do desenvolvimento Frontend do projeto, juntamente com o André, e por uma parte do Backend com PHP.</p>
                            </div>
    
                            <div class="contact">
                                <ul>
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="bi bi-github"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="bi bi-linkedin"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="#">
                                            <i class="bi bi-instagram"></i>
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