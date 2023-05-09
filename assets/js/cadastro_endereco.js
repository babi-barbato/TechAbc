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
   

   
}

var verifica = 0;
function cas(){
    if(verifica == 0){
        casa.style.color = "white";
        casa.style.backgroundColor = "#D75A00";
        verifica = 1;
        trabalho.disabled = true;

    } else{
        casa.style.color = "#D75A00";
        casa.style.backgroundColor = "white";
        verifica = 0;
        trabalho.disabled = false;
    }

}
var veri = 0;
function trampo(){
    if(veri == 0){
        trabalho.style.color = "white";
        trabalho.style.backgroundColor = "#D75A00";
        veri = 1;
        casa.disabled = true;
      
    } else{
        trabalho.style.color = "#D75A00";
        trabalho.style.backgroundColor = "white";
        veri = 0;
        casa.disabled = false;
    }
}