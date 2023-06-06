const footer = document.createElement('template');

footer.innerHTML = `
<footer>
    <div class="left"> <!--div que pega a parte esquerda-->
        <div class="expo-logo"> <!--amazena  aimg da expo-->
            <h1>LOGO</h1><!--img-->
        </div>
        <span class="copyright">© 2023 TechABC, Inc. Todos os direitos reservados.</span><!--texto abaixo da img-->
    </div>

    <span class="line"></span><!--linha vertical-->

    <div class="cent-left"><!--caixinha que fica do lado da logo-->
        <h3>Navegue</h3><!--texto-->
        <ul><!--menu-->
            <li><a href="">PCs</a></li><!---->
            <li><a href="">Acessórios</a></li><!---->
            <li><a href="">Peças</a></li><!---->
        </ul>
    </div>

    <span class="line"></span>

    <div class="cent-right">
        <h3>Contatos</h3>
    <ul>
        <li>
            <a href="#">WhatsApp</a>
        </li>
        <li>
            <span>(11) 4224-0679</span>
        </li>
    </ul>
    </div>

    <span class="line"></span>

    <div class="righ">
        <h3>Institucional</h3>
        <ul>
            <li>
                <a href="#">Sobre Nós</a>
            </li>
            <li>
                <span>(11) 9876-6789</span>
            </li>
        </ul>
    </div>
</footer>
    `

document.body.appendChild(footer.content);