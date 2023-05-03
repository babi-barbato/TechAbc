function pagar(){
    var paga = document.getElementById("select").value;
    if(paga == "cartao"){
        cartao.style.display = "flex";
        pix.style.display = "none";
        boleto.style.display = "none";
    } else if(paga == "pix"){
        cartao.style.display = "none";
        boleto.style.display = "none";
        pix.style.display = "flex";
    }else if(paga == "boleto"){
        cartao.style.display = "none";
        pix.style.display = "none";
        boleto.style.display = "flex";
    }

    var tamanho = window.body.style.width;
    if('800px' <= tamanho){
        esquerda.style.display = "none";
    }

}