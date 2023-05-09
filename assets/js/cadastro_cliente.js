// Variáveis global para ser usada em qualquer função (porem elas ficam mais vulnerável)
const form = document.getElementById("form");
const nome = document.getElementById("nome");
const cpf = document.getElementById("cpf");
const tel = document.getElementById("tel");
const email = document.getElementById("email");
const senha = document.getElementById("senha");
const conf = document.getElementById("conf");

// Evento sera executado quando der um submit do form mais nao carrega a pagina
form.addEventListener("submit", (e) => {
 e.preventDefault();  // para não carregar a página quando envia o formulario (preventDefaut)
  checkInputs();
});

// faz a verificacao dos inputs, chama as funcao e faz alteracao na classe para error o success
         function checkInputs() {
  const nomeValue = nome.value; //pega os valores dos inputs, e guarda o valor deles
  const telValue = tel.value;
  const cpfValue = cpf.value;
  const emailValue = email.value;
  const senhaValue = senha.value;
  const confValue = conf.value;

  // se for vazio exibi erro e msg, se nao success
                //Nome de usuario
  if (nomeValue === "") {     // pega o input e compara, se ficar vazio exibi a msg, se nao success
    setErrorFor(nome, "O nome de usuário é obrigatório.");
  } else {
    setSuccessFor(nome);
  }
              
  if (telValue === "") {     // pega o input e compara, se ficar vazio exibi a msg, se nao success
    setErrorFor(tel, "O telefone é obrigatório.");
  } else {
    setSuccessFor(tel);
  }

                // CPF
   if (cpfValue === "") {          // pega o input e compara, se ficar vazio exibi a msg
    setErrorFor(cpf, "O cpf é obrigatório.");
  } else if (!checkCPF(cpfValue)) {             // se nao for valido exibi msg , se nao success
    setErrorFor(cpf, "Por favor, insira um cpf válido.");
  } else {
    setSuccessFor(cpf);
  }
              // Email
  if (emailValue === "") {             // pega o input e compara, se ficar vazio exibi a msg
    setErrorFor(email, "O email é obrigatório.");
  } else if (!checkEmail(emailValue)) {            // se nao for valido exibi msg , se nao success
    setErrorFor(email, "Por favor, insira um email válido.");
  } else {
    setSuccessFor(email);
  }
              //Senha
  if (senhaValue === "") {             // pega o input e compara, se ficar vazio exibi a msg
    setErrorFor(senha, "A senha é obrigatória.");
  } else if (senhaValue.length < 7) {           // se nao for valido exibi msg , se nao success
    setErrorFor(senha, "A senha precisa ter no mínimo 7 caracteres.");
  } else {
    setSuccessFor(senha);
  }
              // Confirma senha
  if (confValue === "") {         // pega o input e compara, se ficar vazio exibi a msg
    setErrorFor(conf, "A confirmação de senha é obrigatória.");
  } else if (confValue !== senhaValue) {    // se nao for igual a senha exibi msg , se nao success
    setErrorFor(conf, "As senhas não conferem.");
  } else {
    setSuccessFor(conf);
  }

             // validacao do formulario
  const field = form.querySelectorAll(".field"); // seleciona todas as divs 
  const formIsValid = [...field].every((field) => {  // transforma a lista para um array padrão usando o (every)
      return field.className === "field success";
  });
  
  if (formIsValid) {
    alert("O formulário está 100% válido!");
    return;
  }
}
               //funcao de error
         function setErrorFor(input, message) {       // (input) define o erro, (message) sera msg de erro
  const field = input.parentElement;     // input.parentElement: retorna a div formCaixa onde fica o input
  const small = field.querySelector("small");   // small as msg de erro

  small.innerText = message;                  // Adiciona a mensagem de erro
  field.classList.add("error");   // Adiciona a classe de erro, se esta vazia,buscando no css
}
               
             

  //GERA OLHO1
$( "#olho" ).mousedown(function() {
    $("#senha").attr("type", "text");
  });
  
  $( "#olho" ).mouseup(function() {
    $("#senha").attr("type", "password");
  });
      

// VALIDAÇÃO CPF
      function checkCPF(cpf) {	

   cpf = cpf.replace(/[^\d]+/g,'');	
    if(cpf == '') return false;	

  // Elimina CPF invalidos conhecidos, se cpf digitado forem iguais os abaixo (||) compardos retorna falso
    if (cpf.length != 11 ||   // verifica se numero de digitos da string e igual a 11 e checa por valores iguais.
      cpf == "00000000000" || 
      cpf == "11111111111" || 
      cpf == "22222222222" || 
      cpf == "33333333333" || 
      cpf == "44444444444" || 
      cpf == "55555555555" || 
      cpf == "66666666666" || 
      cpf == "77777777777" || 
      cpf == "88888888888" || 
      cpf == "99999999999")
        return false;	
 
 // Validar primeiro digito, verifica se o primeiro digito verificado e valido
       soma = 0;	               // soma recebe 0
    for (i=0; i < 9; i++)		   // percorre os 9 primeiros digitos do cpf
       soma += parseInt(cpf.charAt(i)) * (10 - i);	 // soma dos digitos x (10 - 1) assin fazendo o loop ate os 9 digitos 
       res = soma % 11;	  // soma dos digitos dividido por 11 , resto - 11 
      
    if (res == 0 || res == 1)		//  igual a 0 ou igual a 1
       res = 0;	
       else res = 11 - res;
       
    if (res != parseInt(cpf.charAt(9)))		// se for diferente de segundo digito
        return false;
 
  // Valida segundo digito, verifica se o primeiro digito verificado e valido	
       soma = 0;	                 // soma recebe 0
    for (i = 0; i < 10; i ++)		 // percorre os 10 primeiros digitos do cpf
       soma += parseInt(cpf.charAt(i)) * (11 - i);	  // soma dos digitos x (11 - i) assin fazendo o loop ate os 10 digitos 
       res = soma % 11;	  // soma dos digitos dividido por 11 , resto - 11 
    if (res == 0 || res == 1)	 // igual a 0 ou igual a 1
           res = 0;	
       else res = 11 - res;

    if (res != parseInt(cpf.charAt(10)))   	// se for diferente de primeiro digito
      return false;		
      return true; 
  }
    
  //VALIDAÇÃO EMAIL
        function checkEmail(email) {
  return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
    email
  );
}
