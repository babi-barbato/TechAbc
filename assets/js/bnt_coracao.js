var verifica = 0;
function preenchimento(){
    
    if (verifica == 0){
        document.getElementById("preenchido").classList.remove("fa-regular");
        document.getElementById("preenchido").classList.add("fa-solid");
        verifica = 1;
    } else{
        document.getElementById("preenchido").classList.remove("fa-solid");
        document.getElementById("preenchido").classList.add("fa-regular");
        verifica = 0;
    }
}