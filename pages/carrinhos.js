// const select = document.querySelectorAll('#slc')[0]
var vet = [9,9,9,9,9,9,9]
let soma = 0
function mostraValor (select, id) {
    // var products = document.querySelectorAll('.product')
    var preco = document.querySelectorAll('.preco')

    // alert(select.value + " " + id)
    
    soma += parseInt(preco[id].innerHTML) * parseInt(select.value) 
    
    subtotall.innerHTML = soma
    // vet[id] = soma
    console.log = vet
    
}


