

function postfrm(){
    //encapsulamento 00
    let test = new Rquest("Frederick","123456");    
    let aj = new XMLHttpRequest();
    aj.open("POST","auth.asp",true);
    let envio = test.nome+'|'+test.senha;
    console.log("Aqui o envio:"+envio);
    aj.setRequestHeader("Content-type", 'application/x-www-form-urlencoded');
    aj.send(envio);
    //aj.send('user'=test._nome,'password'=test._senha);

    aj.onreadystatechange = function() {
  
        // Caso o state seja 4 e o http.status for 200, é porque a requisiçõe deu certo.
          if (aj.readyState == 4 && aj.status == 200) {
          
              var data = aj.responseText;
              
          // Retorno do Ajax
              console.log("Aqui a resposta: "+data);
          }
      }
}

postfrm();




        