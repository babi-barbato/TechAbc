//OLINHO
/*olinho 1*/
  var i = 0;/*variavel que verifica se o botão esta sendo clicado*/
  function ioi(){/*função do olinho 1*/
    if(i == 0){/*se a varial for um = 0*/
        document.getElementById("senha").type = "text";/* muda o tipo do campo da senha de password para text*/
        i =1;/*e o valor da variavel vira 1*/
    }
    else{/*se a pessoa clicar de novo*/
        document.getElementById("senha").type = 'password';/*muda o tipo do campo da sennha de password para text*/
        i = 0;/*muda o valor da variavel para zero, que não esta clicado*/
      }
      }; 
/*olinho 2*/
  var a = 0;/*variavel que verifica se o botão esta sendo clicado*/
function oiio2() {/*função do olinho 2*/
  if(a == 0){/*se a varial for um = 0*/
    document.getElementById("conf").type = 'text';/* muda o tipo do campo da senha de password para text*/
    a = 1;/*e o valor da variavel vira 1*/
  }else{/*se a pessoa clicar de novo*/
    document.getElementById("conf").type = 'password';/*muda o tipo do campo da sennha de password para text*/
    a = 0;/*muda o valor da variavel para zero, que não esta clicado*/
  }
  }; 
