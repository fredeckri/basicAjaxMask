<!DOCTYPE html>
<html lang="pr-br">
<?php 
$_SERVER['SERVER_NAME']='www.frederickm.net';

?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Inclusão e tranformação em objeto</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>
    table,
    th,
    td {
        border: 1px solid black;
    }

    span {
        display: none;
    }
</style>

<body>
    <header>
        <div class="container mt-2">

        </div>
    </header>
    <div class="container">
        <div class="row">

            <div class="col-6 form-group">
                <label for="campo1">Nome: </label><input class="form-control" type="text" id="campo1">
                <span id="s1">Preencha o campo Nome</span>
                <label for="campo2">Idade: </label><input class="form-control" type="number" id="campo2">
                <span id="s2">Preencha o campo Idade</span>
                <label for="campo3">Telefone: </label><input class="form-control" type="password" id="campo3">
                <span id="s3">Preencha o campo Telefone</span>
                <label for="campo4">Visto: </label><input class="form-control" type="text" id="campo4">
                <span id="s4">Preencha o campo Visto</span>
                <label for="campo5">Cidade: </label><input class="form-control" type="text" id="campo5">
                <span id="s5">Preencha o campo Cidade</span>
                <div class="row justify-content-center mt-2">
                    <div class="col-12 align-self-center">
                        <button class="btn btn-success col-12 mt-2" id="btn1"> Incluir como Objeto </button>
                        <button class="btn btn-dark col-12 mt-2" id="btn2"> Imprimir Objeto </button>
                        <button class="btn btn-warning mt-2 col-12" onclick="excluirFilhos()" id="btn3">Excluir Filhos </button>
                    </div>

                </div>
                <div id="respobj"></div><br><br>
                <div id="objetoJson"></div><br><br>
            </div>
            <div class="col-6">
                <div id="tblDiv">
                    <table class="table">
                        <th>Nome</th>
                        <th>Idade</th>
                        <th>Telefone</th>
                        <th>Visto</th>
                        <th>Cidade</th>
                        <tbody id="tabelaObjeto"></tbody>
                    </table>
                </div>
            </div>
        </div>
        <p class="col-6 text-info"> for (let d = 1; d <= 5; d++) $(`#campo${d}`).css("border","1px solid black"); <br>

                function validaCampos(b){<br>
                if ($(`#campo${b}`).val().length==0){<br>
                $(`#campo${b}`).css("border","2px solid red");<br>
                $(`#s${b}`).css('display','block');<br>
                }<br>
                else<br>
                {<br>
                $(`#campo${b}`).css("border","1px solid black");<br>
                $(`#s${b}`).css('display','none');<br>
                }<br>
                }<br>
                <br>
                for (let b = 1; b <= 5; b++) {<br>

                    $(`#campo${b}`).keydown(function(e){<br>
                    var keyCode = e.keyCode || e.which;<br>
                    if ((keyCode == 27) || (keyCode == 32) ) { //tecla tab<br>
                    return<br>
                    }
                    if ((keyCode == 9))<br>
                    validaCampos(b);<br>
                    });<br>
                    $(`#campo${b}`).focusout(function(){<br>
                    validaCampos(b);<br>
                    });<br>

                    }<br></p>
</body>
<script>
    //criação de tabelaFilha
    /*
    let tabelaFilha = document.createElement("table");
    let atr = document.createAttribute("id");
    atr.value = "tabelaObjeto"
    tabelaFilha.setAttributeNode(atr);
    document.getElementById("tblDiv").appendChild(tabelaFilha);
    */
    //criação de tabelaFilha
    for (let d = 1; d <= 5; d++)
        $(`#campo${d}`).css("border", "1px solid black");

    function validaCampos(b) {
        if ($(`#campo${b}`).val().length == 0) {
            $(`#campo${b}`).css("border", "2px solid red");
            $(`#s${b}`).css('display', 'block');
        } else {
            $(`#campo${b}`).css("border", "1px solid black");
            $(`#s${b}`).css('display', 'none');
        }
    }

    for (let b = 1; b <= 5; b++) {

        $(`#campo${b}`).keydown(function(e) {
            var keyCode = e.keyCode || e.which;
            if ((keyCode == 27) || (keyCode == 32)) { //tecla tab
                return
            }
            if ((keyCode == 9))
                validaCampos(b);
        });
        $(`#campo${b}`).focusout(function() {
            validaCampos(b);
        });

    }
    let dados = []; // array
    let objeto = {}; //objeto
    document.getElementById("btn1").addEventListener("click", function() {
        //forma manual de incluir objeto em array
        /* objeto.nome=document.getElementById(`campo1`).value;
        objeto.idade=document.getElementById(`campo2`).value;
        objeto.telefone=document.getElementById(`campo3`).value;
        dados.push(objeto); */
        for (let a = 1; a <= 5; a++) {
            if (document.getElementById(`campo${a}`).value == "") {
                alert($(`#s${a}`).text());
                $(`#campo${a}`).focus();
                $(`#campo${a}`).css("border", "2px solid red");
                return;
            }
        }


        objeto = {};
        //meuobjeto.objeto['nome']=
        //Forma automatica de tornar objeto os campos 
        for (let i = 1; i <= 5; i++) {
            objeto[`campo${i}`] = document.getElementById(`campo${i}`).value;
            document.getElementById(`campo${i}`).value = null; //limpeza de input
        }
        dados.push(objeto); // dados é um array que é populado com vários objetos JSON

        //Forma automatica de tornar objeto os campos 

        /*for (let i=1;i<=3;i++){
        dados.push(`campo${i}:`+document.getElementById(`campo${i}`).value);
        document.getElementById(`campo${i}`).value=null;
        }*/
        //console.log("Olá mundo");
    });

    function excluirFilhos() {
        $("#tabelaObjeto").empty();
    }
    document.getElementById("btn2").addEventListener("click", function() {

        //objetoJson=JSON.parse(JSON.stringify(dados)); // bkp
        objetoJson = JSON.parse(JSON.stringify(dados)); // modelo de parse correto JSON
        console.log(objetoJson);
        document.getElementById("respobj").textContent = dados;
        document.getElementById("objetoJson").innerHTML = objetoJson;


        let trFilha = "elemento";
        let tdFilha = "elemento";
        let atr_ = "elemento";
        //remoção de filhos da tabela 

        excluirFilhos();

        objetoJson.forEach(function(value, index, arr) {
            trFilha = document.createElement("tr");
            atr_ = document.createAttribute("id");
            atr_.value = `tr${index}`;
            trFilha.setAttributeNode(atr_);
            document.getElementById("tabelaObjeto").appendChild(trFilha);

            for (j = 1; j <= 5; j++) {
                tdFilha = document.createElement("td");
                atr_td = document.createAttribute("id");
                atr_td.value = `td${j}_${index}`
                tdFilha.setAttributeNode(atr_td);
                document.getElementById(`tr${index}`).appendChild(tdFilha);

                //aqui objeto json
                //document.getElementById(`td${i}`).textContent=`td${i}`;
                document.getElementById(`td${j}_${index}`).textContent = arr[index][`campo${j}`];
            }

            console.log("O Index do array é : " + index);
        });
        //aqui objeto json

        ///falta só configurar tabela





    });



    /*
    var jsonArg1 = new Object();
        jsonArg1.name = 'calc this';
        jsonArg1.value = 3.1415;
    var jsonArg2 = new Object();
        jsonArg2.name = 'calc this again';
        jsonArg2.value = 2.73;
    
    var pluginArrayArg = new Array();
        pluginArrayArg.push(jsonArg1);
        pluginArrayArg.push(jsonArg2);
    */
</script>

</html>