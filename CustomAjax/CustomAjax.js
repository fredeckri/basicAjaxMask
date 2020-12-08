class CustomAjax {

    constructor(){
        this._idResp;
        this._async=true; //default
        this._cache;
        this._contentType;
        this._context;
        
        this.export;

        this._dados=[];
        this._objetos={};

        this._dataType;
        this._global;
        this._ifModified;
        this._jsonp;
        this._jsonpCallback;
        this._password;
        this._processData;
        this._scriptCharset;
        this._timeout;
        this._traditional;
        this._type; //get || post
        this._url;
        this._username;
        this._xhr;
        this._method; //get || post - requisicoes simples
        //Object.freeze(this); //congelamento da instância
    }

get IdResp() {return `${this._idResp}`}
set IdResp(value) {
    this._idResp=`#${value}`;
}

get Url() {return `${this._url}`}
set Url(value) {
    this._url=`${value}`;
}

get Type() {return `${this._type}`}
set Type(value){
    this._type=`${value}`;
}

get Cache() {return `${this._cache}`}
set Cache(value) {
    this._cache=`${value}`;
}

get Type() {return `${this._type}`}
set Type(value) {
    this._type=`${value}`;
}


/* method: "POST",
 url: "cadastrar.php",
 data: { nome: "Pedro", email: "pedro@email.com" } */

Dados(chave,value){
    this._propriedade=chave;
    this._data=value;
}

NovoDado(a,b) {
    this._data.push(Dado(a,b)); 
}


AjaxPost(dados) {
    $.ajax({
        url : this.Url,
        type : this.Type,
        data : {data:JSON.stringify(dados)} //passar o objeto como string para requisição pode ser um array de objetos
        ,
        beforeSend : function(){
             $(this.IdResp).html("ENVIANDO...");
        }
   })
   .done(function(msg){
        $(this.IdResp).html(msg);
   })
   .fail(function(jqXHR, textStatus, msg){
        alert(msg);
   });
}

AjaxGet (url,resp) {
            $.ajax({
            url: url,
            type: 'get',
            dataType:'html',
            timeout:200,
            async: this._async
            })
            .done(function (data) {
                $(`#${resp}`).html(data);
            })
            .fail(function (jqXHR, textStatus, msg) {
                alert('erro ajax');
            
            });
    
}

AjaxGetSimples (url,resp,rstatus) {
    $.ajax({
    url: url,
    async: this._async,
    type: 'get',
    dataType:'html', 
    timeout:1000,
    cache:false,       //false
      
      error: function() {
        return "Erro!";
     },
     success: function(result){
        window.localStorage.setItem('string',result);

      },
     complete(xhr, status){
        console.log(status);
        
     }
     
    })
    .done(function(data){
        $(`#${resp}`).text(data);
    });

}
//this._beforeSend(xhr);
//this._complete(xhr,status);
//this._dataFilter(data,type);
//this._error(xhr,status,error);
//this._success(result,status,xhr);

}



/*
//Dicionário//
async: Um valor booleano que indica se a solicitação deve ser tratada de forma assíncrona ou não. Padrão é verdadeiro
beforeSend(xhr): Uma função a ser executada antes que a solicitação seja enviada
cache: Um valor booleano que indica se o navegador deve armazenar em cache as páginas solicitadas. Padrão é verdadeiro
complete(xhr, status): Uma função a ser executada quando a solicitação for concluída (após as funções de sucesso e erro)
contentType: O tipo de conteúdo usado ao enviar dados para o servidor. O padrão é: "application / x-www-form-urlencoded"
context: Especifica o valor "este" para todas as funções de retorno de chamada relacionadas a AJAX
data: Especifica os dados a serem enviados para o servidor
dataFilter(data, type): Uma função usada para lidar com os dados de resposta brutos do XMLHttpRequest
dataType: O tipo de dados esperado da resposta do servidor.
error(xhr, status, erro): Uma função a ser executada se a solicitação falhar.
global: Um valor booleano que especifica se deve ou não acionar identificadores de evento AJAX globais para a solicitação. Padrão é verdadeiro
ifModified: Um valor booleano que especifica se uma solicitação só é bem-sucedida se a resposta foi alterada desde a última solicitação. O padrão é: falso.
jsonp: Uma string substituindo a função de retorno de chamada em uma solicitação jsonp
jsonpCallback: Especifica um nome para a função de retorno de chamada em uma solicitação jsonp
password: Especifica uma senha a ser usada em uma solicitação de autenticação de acesso HTTP.
processData: Um valor booleano que especifica se os dados enviados com a solicitação devem ou não ser transformados em uma string de consulta.
Padrão é verdadeiro
scriptCharset: Especifica o conjunto de caracteres para a solicitação
sucess(resultado, status, xhr): Uma função a ser executada quando a solicitação for bem-sucedida
timeout: O tempo limite local (em milissegundos) para a solicitação
traditional: Um valor booleano que especifica se deve ou não usar o estilo tradicional de serialização de parâmetros
type: Especifica o tipo de solicitação. (GET ou POST)
url Especifica o URL para enviar a solicitação. O padrão é a página atual
username: Especifica um nome de usuário a ser usado em uma solicitação de autenticação de acesso HTTP
xhr: Uma função usada para criar o objeto XMLHttpRequest
 */
