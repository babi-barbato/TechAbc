const btnSelect = document.querySelectorAll('.btn-select-piece')
const boxOpacity = document.querySelector('.box-opacity')
const productsContainer = document.querySelector('.center')
const form = document.querySelector('form')
const pecas = document.querySelectorAll('.peças')



// form.addEventListener('submit', (e) => {
//     e.preventDefault();
// })

let btnSelectIndex = 0;

btnSelect.forEach((control, i) => { // Laço que verifica botão por botão
    control.addEventListener('click', () => { // Adiciona um "escutador de eventos" para click, ou seja, verifica se aquele determinado botão foi clicado
        boxOpacity.style.display = 'flex' // Se o botão foi clicado, abre a boxOpacity (caixa que armazena os produtos para escolha)

        for (cont = 0; cont <= pecas.length - 1; cont++) {
            pecas[cont].style.display = 'none'
        }
        pecas[i].style.display = 'grid';
        btnSelectIndex = i;
    })
})

const closeBtn = document.querySelectorAll('.close');
closeBtn.forEach(close => { // Laço que verifica botão por botão
    close.addEventListener('click', () => { // Adiciona um "escutador de eventos" para click, ou seja, verifica se aquele determinado botão foi clicado
        boxOpacity.style.display = 'none' // Se o botão foi clicado, fecha a boxOpacity (caixa que armazena os produtos para escolha)
    })
})

// CRIA OS INPUTS DE RADIO DENTRO DA CAIXA COM OS PRODUTOS DE ACORDO COM A QUANTIDADE DE PRODUTOS

const items = document.querySelectorAll('.product-box') // array que armazena os produtos exibidos na "boxOpacity"
const inputsBox = document.querySelector('.radioInputs') // objeto que recebe o valor do elemento que abrange os inputs de rádio
const confirmar = document.querySelector('.confirmar')
let inputs = [] // array que receberá cada input de rádio

for (i = 0; i <= items.length - 1; i++) { // laço de repetição começando em 0 e terminando na quantidade total de produtos - 1 (por conta da ordem padrão dos índices de array)
    items[i].setAttribute('for', `radio${i}`) // define como radio[i] (em que i = índice atual do laço) o atributo "for" dos produtos (que são labels atrelados aos inputs de radio) 
}

window.addEventListener('load', () => { // adiciona um "escutador de evento de load (carregar)"
    for (i = 0; i <= items.length - 1; i++) { 
        let radioInput = document.createElement('input') // variável que recebe a criação de um radio input
        radioInput.type = 'radio' // define como "radio" o atributo "type" do input
        radioInput.id = `radio${i}` //define como radio[i] (em que i = índice atual do laço) o atributo "id" do respectivo input radio
        radioInput.name = `radio`
        radioInput.style.display = 'none'; // define com "radio" o atributo "name" do input
        inputs.push(radioInput) // insere esse input no último índice do array "inputs"
    }

    for (i = 0; i <= items.length - 1; i++) {
        inputsBox.appendChild(inputs[i]) // insere cada um dos inputs criados dentro da sua caixa
    }

    // console.log(inputs, e)
})

let produtoSelecionado = document.querySelectorAll('.produto-selecionado')
const nomeProduto = document.querySelectorAll('.nome-produto')
let editPiece = document.querySelectorAll('.edit-piece')


items.forEach((control, index) => { // para cada label
    control.addEventListener('click', (e) => { // verifique se ele foi clicado, se sim:
        for (cont = 0; cont <= items.length - 1; cont++) {
            items[cont].classList.remove('outline-3') // remove de todos os labels a classe "outline-3"
        }
        control.classList.add('outline-3') // adiciona apenas no label atual a classe "outline-3"
        confirmar.disabled = false;
    })
})

let precoTotalPreview = document.querySelector('#preco-total')
const precoProduto = document.querySelectorAll('.price')
let priceList = [0,0,0,0,0,0,0,0];

const pieceListItem = document.querySelectorAll('.config-item')

confirmar.addEventListener('click', () => {
    inputs.forEach((radio, i) => {
        if (radio.checked == true) {
            alert("Índice clicado: " + i + " " + nomeProduto[i].innerHTML + " " + precoProduto[i].innerHTML)
            boxOpacity.style.display = 'none'
            btnSelect[btnSelectIndex].style.display = 'none';
            editPiece[btnSelectIndex].style.display = 'flex'
            produtoSelecionado[btnSelectIndex].innerHTML = nomeProduto[i].innerHTML;

            for (cont = 0; cont <= inputs.length - 1; cont++) {
                inputs[cont].checked = false;
            }
            confirmar.disabled = true

            priceList[btnSelectIndex] = parseInt(precoProduto[i].innerHTML)

            let somaTotal = 0;
            for (cont = 0; cont <= priceList.length - 1; cont++) {
                somaTotal += priceList[cont];
            }

            precoTotalPreview.innerHTML = somaTotal.toLocaleString('pt-BR', { style: 'currency', currency: 'BRL' });
            
            pieceListItem[btnSelectIndex].innerHTML = `<span>${nomeProduto[i].innerHTML}</span><span>${precoProduto[i].innerHTML}</span>`;
        }
        
    })
})

