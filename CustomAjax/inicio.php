<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chamadas</title>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

    <script src="CustomAjax.js"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <button class="btn btn-info col-3 m-2" id="btn1">Ajax</button>
                <input type="text" id="txtajax1" value="div.html">
                <button class="btn btn-info col-3 m-2" id="btn2">Ajax TXT</button>
                <button class="btn btn-info col-3 m-2" id="btn3">Ajax Text3</button>

            </div>

        </div>
        <div class="row">
            <div class="col" id="ajax1">

            </div>
            <div class="col-6" id="ajax2">

            </div>
            <div class="col-6" id="ajax3">

            </div>
        </div>
        <div id="temp" style="display: none;"></div>
        <p id="rTemp"></p>
        <div id="loading" style="visibility: hidden;">
            <!--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="104px" height="104px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
<circle cx="50" cy="50" fill="none" stroke="#5be1da" stroke-width="5" r="29" stroke-dasharray="136.659280431156 47.553093477052">
  <animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="1.4492753623188404s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
</circle>
</svg>-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="margin:auto;background:#fff;display:block;" width="100px" height="100px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                <g transform="translate(50 50)">
                    <g transform="translate(-19 -19) scale(0.6)">
                        <g>
                            <animateTransform attributeName="transform" type="rotate" values="0;45" keyTimes="0;1" dur="0.2s" begin="0s" repeatCount="indefinite"></animateTransform>
                            <path d="M31.359972760794346 21.46047782418268 L38.431040572659825 28.531545636048154 L28.531545636048154 38.431040572659825 L21.46047782418268 31.359972760794346 A38 38 0 0 1 7.0000000000000036 37.3496987939662 L7.0000000000000036 37.3496987939662 L7.000000000000004 47.3496987939662 L-6.999999999999999 47.3496987939662 L-7 37.3496987939662 A38 38 0 0 1 -21.460477824182675 31.35997276079435 L-21.460477824182675 31.35997276079435 L-28.53154563604815 38.431040572659825 L-38.43104057265982 28.531545636048158 L-31.359972760794346 21.460477824182682 A38 38 0 0 1 -37.3496987939662 7.000000000000007 L-37.3496987939662 7.000000000000007 L-47.3496987939662 7.000000000000008 L-47.3496987939662 -6.9999999999999964 L-37.3496987939662 -6.999999999999997 A38 38 0 0 1 -31.35997276079435 -21.460477824182675 L-31.35997276079435 -21.460477824182675 L-38.431040572659825 -28.531545636048147 L-28.53154563604818 -38.4310405726598 L-21.4604778241827 -31.35997276079433 A38 38 0 0 1 -6.999999999999992 -37.3496987939662 L-6.999999999999992 -37.3496987939662 L-6.999999999999994 -47.3496987939662 L6.999999999999977 -47.3496987939662 L6.999999999999979 -37.3496987939662 A38 38 0 0 1 21.460477824182686 -31.359972760794342 L21.460477824182686 -31.359972760794342 L28.531545636048158 -38.43104057265982 L38.4310405726598 -28.53154563604818 L31.35997276079433 -21.4604778241827 A38 38 0 0 1 37.3496987939662 -6.999999999999995 L37.3496987939662 -6.999999999999995 L47.3496987939662 -6.999999999999997 L47.349698793966205 6.999999999999973 L37.349698793966205 6.999999999999976 A38 38 0 0 1 31.359972760794346 21.460477824182682 M0 -23A23 23 0 1 0 0 23 A23 23 0 1 0 0 -23" fill="#e2e2e2"></path>
                        </g>
                    </g>
                    <g transform="translate(19 19) scale(0.6)">
                        <g>
                            <animateTransform attributeName="transform" type="rotate" values="45;0" keyTimes="0;1" dur="0.2s" begin="-0.1s" repeatCount="indefinite"></animateTransform>
                            <path d="M-31.35997276079435 -21.460477824182675 L-38.431040572659825 -28.531545636048147 L-28.53154563604818 -38.4310405726598 L-21.4604778241827 -31.35997276079433 A38 38 0 0 1 -6.999999999999992 -37.3496987939662 L-6.999999999999992 -37.3496987939662 L-6.999999999999994 -47.3496987939662 L6.999999999999977 -47.3496987939662 L6.999999999999979 -37.3496987939662 A38 38 0 0 1 21.460477824182686 -31.359972760794342 L21.460477824182686 -31.359972760794342 L28.531545636048158 -38.43104057265982 L38.4310405726598 -28.53154563604818 L31.35997276079433 -21.4604778241827 A38 38 0 0 1 37.3496987939662 -6.999999999999995 L37.3496987939662 -6.999999999999995 L47.3496987939662 -6.999999999999997 L47.349698793966205 6.999999999999973 L37.349698793966205 6.999999999999976 A38 38 0 0 1 31.359972760794346 21.460477824182682 L31.359972760794346 21.460477824182682 L38.431040572659825 28.531545636048154 L28.531545636048183 38.4310405726598 L21.460477824182703 31.35997276079433 A38 38 0 0 1 6.9999999999999964 37.3496987939662 L6.9999999999999964 37.3496987939662 L6.999999999999995 47.3496987939662 L-7.000000000000009 47.3496987939662 L-7.000000000000007 37.3496987939662 A38 38 0 0 1 -21.46047782418263 31.359972760794385 L-21.46047782418263 31.359972760794385 L-28.531545636048097 38.43104057265987 L-38.431040572659796 28.531545636048186 L-31.35997276079433 21.460477824182703 A38 38 0 0 1 -37.34969879396619 7.000000000000032 L-37.34969879396619 7.000000000000032 L-47.34969879396619 7.0000000000000355 L-47.3496987939662 -7.000000000000002 L-37.3496987939662 -7.000000000000005 A38 38 0 0 1 -31.359972760794346 -21.46047782418268 M0 -23A23 23 0 1 0 0 23 A23 23 0 1 0 0 -23" fill="#000000"></path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
        <span id="temp1" style="display: none;"></span>
        <p id="rTemp1"></p>
    </div>
    <div class="row">
        <div class="col-6">
            <div id="tblDiv">
                <table class="table">
                    <th>Nome</th>
                    <th>Idade</th>
                    <tbody id="tabelaObjeto"></tbody>
                </table>
            </div>
        </div>
        <div class="col-6">
            <div id="tblDiv2">
                <table class="table">
                    <th>Carros</th>
                    <th>Modelo</th>
                    <tbody id="tabelaObjeto2"></tbody>
                </table>
            </div>
        </div>
    </div>
</body>
<script>
    $(function() {
        var respostaJson;
        $('#btn1').click(function() {
            //let chamada = new CustomAjax();
            //chamada.AjaxGet($('#txtajax1').val(), 'ajax1');
        });

        //let chamada2 = new CustomAjax();
        //chamada2.AjaxGetSimples('div.json', 'temp', 'rTemp0');

        $('#btn2').click(function() {
            if ($("#temp").text() == '') return;
            else {
                let AjaxR = $("#temp").text();
                $("#temp").text('');
                alert(AjaxR);
            }
        });

        function carregarAjax() {
            $(`#loading`).css('visibility', 'visible');
            let chamada3 = new CustomAjax();
            chamada3.AjaxGetSimples('data.json', 'temp1', 'rTemp1');



            if ($('#temp1').text() == '') return;
            //$("#temp1").css('display','block'); 
            //respostaJson = $("#temp1").text();
            respostaJson = localStorage['string'];
            localStorage.removeItem('string');
            $(`#loading`).css('visibility', 'hidden');
            respostaJson = JSON.parse(respostaJson);
            console.log(typeof(respostaJson));


            $("#temp1").text('');

        }
        carregarAjax();
        //$('#btn3').click(function() {
        //$(`#loading`).css('display','block');


        function desenharTbl() {
            $("#tabelaObjeto").empty();
            $("#tabelaObjeto2").empty();
            for (i = 0; i < respostaJson['pessoa'].length; i++) {
                $("#tabelaObjeto").append(`<tr>`);
                $("#tabelaObjeto").append(`<td>${respostaJson['pessoa'][i]['nome']}</td>`);
                $("#tabelaObjeto").append(`<td>${respostaJson['pessoa'][i]['idade']}</td>`);
                $("#tabelaObjeto").append(`</tr>`);
                //                  console.log(`OBJ [${i}]-`+respostaJson['pessoa'][i]['nome']);
                //                  console.log(`OBJ [${i}]-`+respostaJson['pessoa'][i]['idade']);
            }
            for (i = 0; i < respostaJson['carros'].length; i++) {
                $("#tabelaObjeto2").append(`<tr>`);
                $("#tabelaObjeto2").append(`<td>${respostaJson['carros'][i]['nome']}</td>`);
                $("#tabelaObjeto2").append(`<td>${respostaJson['carros'][i]['modelo']}</td>`);
                $("#tabelaObjeto2").append(`</tr>`);
                //                  console.log(`OBJ [${i}]-`+respostaJson['pessoa'][i]['nome']);
                //                  console.log(`OBJ [${i}]-`+respostaJson['pessoa'][i]['idade']);
            }


        }






    });
</script>

</html>