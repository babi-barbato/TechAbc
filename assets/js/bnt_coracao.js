var verifica = 0;
function preenchimento(){
    
    if (verifica == 0){
        document.getElementById("coracao").classList.remove("fa-regular");
        document.getElementById("coracao").classList.add("fa-solid");
        verifica = 1;
    } else{
        document.getElementById("coracao").classList.remove("fa-solid");
        document.getElementById("coracao").classList.add("fa-regular");
        verifica = 0;
    }
}