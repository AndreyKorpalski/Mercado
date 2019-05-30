var req;

function consultar(produto) {


    if(window.XMLHttpRequest) {
        req = new XMLHttpRequest();

    }else if(window.ActiveXObject) {
        req = new ActiveXObject("Microsoft.XMLHTTP");

    }

    var url = "func-consulta.php?produto="+produto;
    req.open("Get", url, true);

    req.onreadystatechange = function() {

        if(req.readyState == 1) {
        document.getElementById('resultado').innerHTML = 'Processando informações ...';

        }

        if(req.readyState == 4 && req.status == 200) {
        var resposta = req.responseText;
        document.getElementById('resultado').innerHTML = resposta;

        }

    }

req.send(null);

}