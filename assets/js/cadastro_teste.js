const nome = document.querySelector("#nome");
const cpf = document.querySelector("#cpf");
const email = document.querySelector("#email");
const senha = document.querySelector("#senha");
const pwd_confirm = document.querySelector("#conf");
let smalls = document.querySelectorAll('small');

function formControl(form) {
    if (!checkInputs(form)) {
      return false  
    } 

    if (!checkCPF(form.cpf.value)) {
        return false
    }
}


function checkInputs(form) {
    if (form.nome.value === "") {
        form.nome.style.border = "1px solid red";
        return false
    } else {
        form.nome.style.border = "none";
    }

    if (form.cpf.value === "") {
        form.cpf.style.border = "1px solid red";
        return false
    } else {
        form.cpf.style.border = "none";
    }

    if (form.email.value === "") {
        form.email.style.border = "1px solid red";
        return false
    } else {
        form.email.style.border = "none";
    }

    if (form.senha.value === "") {
        form.senha.style.border = "1px solid red";
        return false
    } else {
        form.senha.style.border = "none";
    }

    if (form.conf.value === "") {
        form.conf.style.border = "1px solid red";
        return false
    } else {
        form.conf.style.border = "none";
    }
    return true
}

function checkCPF(cpf) {	

    cpf = cpf.replace(/[^\d]+/g,'');	

    let numerosIguais = [
        "00000000000",
        "11111111111", 
        "22222222222", 
        "33333333333", 
        "44444444444", 
        "55555555555", 
        "66666666666", 
        "77777777777", 
        "88888888888", 
        "99999999999"
    ]
 
   // Elimina CPFs inválidos conhecidos, se CPFs digitados forem iguais os abaixo comparados retorna falso
    if (cpf.length != 11 || cpf == numerosIguais[0 || 1 || 2 || 3 || 4 || 5 || 6 || 7 || 8 || 9]) {     // verifica se numero de digitos da string e igual a 11 e checa por valores iguais.
        return false;
    }
        	
  
  // Validar primeiro digito, verifica se o primeiro digito verificado e valido
    soma = 0;  // soma recebe 0
    for (i=0; i < 9; i++) {	   // percorre os 9 primeiros dígitos do cpf
        soma += parseInt(cpf.charAt(i)) * (10 - i);	// soma dos dígitos x (10 - 1) assim fazendo o loop ate os 9 dígitos 
    }                                       
    res = soma % 11;	  // soma dos digitos dividido por 11 , resto - 11 
    
    if (res == 0 || res == 1) {		//  igual a 0 ou igual a 1
        res = 0;	
    } else {
        res = 11 - res;
    }
    if (res != parseInt(cpf.charAt(9)))	{	// se for diferente de segundo digito
        return false;
    }
  
   // Valida segundo digito, verifica se o primeiro digito verificado e valido	
    soma = 0;	                 // soma recebe 0
    for (i = 0; i < 10; i ++) {	 // percorre os 10 primeiros digitos do cpf
        soma += parseInt(cpf.charAt(i)) * (11 - i);	 
    } // soma dos digitos x (11 - i) assin fazendo o loop ate os 10 digitos 
    res = soma % 11;	  // soma dos digitos dividido por 11 , resto - 11 
    if (res == 0 || res == 1) {    // igual a 0 ou igual a 1
        res = 0;	
    } else {
        res = 11 - res;
    }
    if (res != parseInt(cpf.charAt(10))) {
        return false;
    }  	// se for diferente de primeiro digito
    		
    return true; 
}
