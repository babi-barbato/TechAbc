const inputsBox = document.querySelector('.radioInputs') 
const items = document.querySelectorAll('.product-box') 
const confirmar = document.querySelector('.confirmar')
let inputs = []

// Este laço serve para "setar" o atributo for para todos os itens (que são label) de forma dinâmica. Através do índice i do laço, cada label recebe um for de "radio0" em diante
for (i = 0; i <= items.length - 1; i++) { 
    items[i].setAttribute('for', `radio${i}`)
}

// Adiciona um eventListener de load que cria, de forma dinâmica através do laço for, os radio inputs baseado na quantidade de produtos dentro da boxOpacity. Cada input criado recebe: type='radio', id='radio0' em diante, name='radio' (precisam ter o atributo name igual para se comportarem como devem), display: none. Ao final do laço cada um dos inputs é inserido no vetor inputs, anteriormente vazio. O laço seguinte insere cada um desses inputs no documento HTML, dentro de boxOpacity.
window.addEventListener('load', () => { 
    for (i = 0; i <= items.length - 1; i++) { 
        let radioInput = document.createElement('input') 
        radioInput.style.display = 'none'
        radioInput.id = `radio${i}` 
        radioInput.type = 'radio' 
        radioInput.name = `radio`
        inputs.push(radioInput) 
    }

    for (i = 0; i <= items.length - 1; i++) {
        inputsBox.appendChild(inputs[i]) 
    }
})



/* O forEach abaixo verifica, através de um eventListener, para cada um de seus objetos, se o botão atual do laço foi clicado, ou seja, para cada (for each) objeto (control) dentro do vetor btnSelect, observe se este foi clicado (addEventListener). Se foi clicado (addEventListener('click', (params) => {bloco})) execute a função que exibe a caixa de produtos (arrow function "() => {bloco}"). */

const btnSelect = document.querySelectorAll('.btn-select-piece')
const productsContainer = document.querySelector('.center')
const boxOpacity = document.querySelector('.box-opacity')
const pecas = document.querySelectorAll('.peças')
const form = document.querySelector('form')
let btnSelectIndex = 0;

btnSelect.forEach((control, i) => {  
    control.addEventListener('click', () => { 
        boxOpacity.style.display = 'flex' 

        for (cont = 0; cont <= pecas.length - 1; cont++) {
            pecas[cont].style.display = 'none'
        }
        pecas[i].style.display = 'grid';
        btnSelectIndex = i;
    })
})

// Ao clicar em um dos itens, este ficará com uma borda outline laranja, e, após o primeiro click, o botão de confirmar passa a estar ativado.

items.forEach((control) => { // para cada label
    control.addEventListener('click', () => { // verifique se ele foi clicado, se sim:
        for (cont = 0; cont <= items.length - 1; cont++) {
            items[cont].classList.remove('outline-3') // remove de todos os labels a classe "outline-3"
        }
        control.classList.add('outline-3') // adiciona apenas no label atual a classe "outline-3"
        confirmar.disabled = false;
    })
})

/* Já esta etapa do código é responsável por verificar (também através de um laço forEach) se algum objeto dentro do vetor closeBtn (ou seja, os botões com a classe "close") foi clicado. Caso o retorno seja verdadeiro, fecha-se a caixa boxOpacity */

const closeBtn = document.querySelectorAll('.close');

closeBtn.forEach(close => {
    close.addEventListener('click', () => { 
        boxOpacity.style.display = 'none'
    })
})

let produtoSelecionado = document.querySelectorAll('.produto-selecionado')
const pieceListItem = document.querySelectorAll('.config-item')
const nomeProduto = document.querySelectorAll('.nome-produto')
let precoTotalPreview = document.querySelector('#preco-total')
let editPiece = document.querySelectorAll('.edit-piece')
const precoProduto = document.querySelectorAll('.price')
let priceList = [0,0,0,0,0,0,0,0];

// Ao clique do botão de confirmar, verifica qual dos inputs foi marcado e fecha a boxOpacity. 
confirmar.addEventListener('click', () => {
    inputs.forEach((radio, i) => {
        if (radio.checked == true) {
            // alert("Índice clicado: " + i + " " + nomeProduto[i].innerHTML + " " + precoProduto[i].innerHTML)
            boxOpacity.style.display = 'none'
            btnSelect[btnSelectIndex].style.display = 'none';
            editPiece[btnSelectIndex].style.display = 'flex'
            produtoSelecionado[btnSelectIndex].innerHTML = nomeProduto[i].innerHTML;

            // reseta a marcação dos inputs, deixando todos desmarcados novamente
            for (cont = 0; cont <= inputs.length - 1; cont++) {
                inputs[cont].checked = false;
            }

            // botão de confirmar volta a estar desativado
            confirmar.disabled = true

            // priceList recebe os valores de preço de cada produto selecionado
            priceList[btnSelectIndex] = parseInt(precoProduto[i].innerHTML)


            let somaTotal = 0;

            // soma todos os índices do array priceList ao valor de somaTotal, que se inicia com 0
            for (cont = 0; cont <= priceList.length - 1; cont++) {
                somaTotal += priceList[cont];
            }
            // adiciona o resultado de somaTotal ao preview do preço
            precoTotalPreview.innerHTML = somaTotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
            
            // Adiciona na lista de produtos selecionados o nome do produto e o preço
            pieceListItem[btnSelectIndex].innerHTML = `<span>${nomeProduto[i].innerHTML}</span><span>${precoProduto[i].innerHTML}</span>`;
        }
        
    })
})

