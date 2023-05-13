//OLINHO
alert("01")
var i = 0;
function oiio() {
  alert("02")
  if(i == 0){
    document.getElementById("senha").type = 'text';
    i = 1;
  }else{
    document.getElementById("senha").type = 'password';
    i = 0;
  }
  }; 

  var a = 0;
function oiio2() {
  if(a == 0){
    document.getElementById("conf").type = 'text';
    a = 1;
  }else{
    document.getElementById("conf").type = 'password';
    a = 0;
  }
  }; 
function verifica() {
 
  
  // declaração das váriaveis
  var senha = document.getElementById('senha').value;

  var conf = document.getElementById('conf').value;
  
  var cpf = document.getElementById('cpf').value; //pegar o cpf digitado
  
  var cpfSeparado = cpf.split(''); // O método split está separando cada dígito do CPF em campos separados do vetor "cpf_list"
  
  var soma1 = 0; //variavel q vai acomular o suposto 10° digito
  var soma2 = 0; //variavel q vai acomular o suposto 11° digito
  var numerosIguais = [
    '00000000000',
    '11111111111',
    '22222222222',
    '33333333333',
    '44444444444',
    '55555555555',
    '66666666666',
    '77777777777',
    '88888888888',
    '99999999999',
  ];
  
    //VERIFICAÇÃO DAS SENHAS
    if(senha != conf){ 
      alert('Senhas incorretas');

      return false;
    }
  
    //VERIFICAÇÃO DO CPF
    if (cpf.length != 11) { // Verifica se o CPF tem o tamanho correto de 11 digitos
      alert('Cpf com quantidade errada de digitos!');
     
      return false;
    }
  
    // Verifica se todos os dígitos são iguais
    if (cpf == numerosIguais[0 || 1 || 2 || 3 || 4 || 5 || 6 || 7 || 8 || 9]) {
      alert('Cpf com todos os dígitos iguais');
      
      return false;
    }
  
    // Verificação do primeiro digito verificador
    for (cont = 0; cont < 9; cont++) {
      soma1 += cpfSeparado[cont] * (10 - cont); //atribui a variavel soma1 o numero do cpf_list (cpf_list(0))
    }
    if (soma1 % 11 > 1 || soma1 % 11 < 0) { // se ele for menor q 1 ou maior q 0 (0,1) o número tem q ser 0 por isso o else 0
      soma1 = 11 - (soma1 % 11);
    } else {
      soma1 = 0;
    }
  
    // Verificação do segundo dígito verificador
    for (cont = 0; cont < 10; cont++) {
      soma2 += cpfSeparado[cont] * (11 - cont);
    }
    if (soma2 % 11 > 1 || soma2 % 11 < 0) {
      soma2 = 11 - (soma2 % 11);
    } else {
      soma2 = 0;
    }
  
    // Verifica se os dígitos verificadores são iguais aos do número fornecido
    if (soma1 != cpfSeparado[9] || soma2 != cpfSeparado[10]) {
      alert('Cpf Inválido!');
      return false;
    }
  
    return true;
  };