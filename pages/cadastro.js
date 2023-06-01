//OLINHO
var i = 0;
function oiio1() {
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