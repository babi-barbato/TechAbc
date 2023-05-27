function pagar(){//função do select
    var paga = document.getElementById("select").value;//variavel que armazena as opções do select
    var tela = window.screen.height;//verifca o tamanho da tela 
    if(tela > 1000){//se o tamanho da tela for = 1000
        cart.style.display = "none";//toda a parte de formulario some
    }
    if(paga == "cartao"){// quando a pessoa selecionar a opção cartão
        cartao.style.display = "flex";//  aparece o formulario do cartão
        pix.style.display = "none";//não aparece o pix
        boleto.style.display = "none";//não aparece o boleto
        fotoIcone.style.display = "none";//não aparece a imagem
    } else if(paga == "pix"){//
        cartao.style.display = "none";//não aparece o cartão
        boleto.style.display = "none";//não aparece o boleto
        pix.style.display = "flex";//aparece o qr code do pix
        fotoIcone.style.display = "none";//não aparece a imagem
    }else if(paga == "boleto"){//
        cartao.style.display = "none";//não aparece o cartao
        pix.style.display = "none";//não aparece o pix
        boleto.style.display = "flex";//aparece o boleto
        fotoIcone.style.display = "none";////não aparece a imagem
    }
}

var verifica = 0;//variavel que armazena o não clicavel
function cas(){//funcão do botão da casa
    if(verifica == 0){//quando for clicado
        casa.style.color = "white";//muda a cor da letra
        casa.style.backgroundColor = "#D75A00";//muda a cor de fundo
        verifica = 1;//se foi clicado, muda o valor da variavel
        trabalho.disabled = true;// o botão do trabalho fica inativo

    } else{//se for clicado novamente
        casa.style.color = "#D75A00";//muda a cor da letra
        casa.style.backgroundColor = "white";// muda a cor de fundo
        verifica = 0;//muda o valor da variavel
        trabalho.disabled = false;// hablita o botão do trabalho
    }

}
var veri = 0;//variavel que armazena o não clicavel
function trampo(){//função do botão trabalho
    if(veri == 0){//verifica se foi clicado
        trabalho.style.color = "white";//troca a cor da letra
        trabalho.style.backgroundColor = "#D75A00";//troca a cor de fundo
        veri = 1;//se for clicado, muda o valor da  variavel
        casa.disabled = true;//o botão da casa fica inativo
      
    } else{//se for cicado novamente
        trabalho.style.color = "#D75A00";//troca a cor da letra
        trabalho.style.backgroundColor = "white";//troca a cor de fundo
        veri = 0;//muda o valor da variavel para não clicavel
        casa.disabled = false;//habilita o botão da casa
    }
}