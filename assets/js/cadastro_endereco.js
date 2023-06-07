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