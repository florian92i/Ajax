// création d'une requête http
function createInstance() {
    var req = null;
    if(window.XMLHttpRequest){ // Mozilla, Safari etc
        req = new XMLHttpRequest();
    }
    else if(window.ActiveXObject){ // IE
        try {
            req = new ActiveXObject("Msxm12.XMLHTTP");
        }
        catch (e){
            try {
                req = new ActiveXObject("Microsoft.XMLHTTP");
            }
            catch (e){
                alert('XHR not created');
            }
        }
    }
    return req;
}

function exempleGET(){
    var req = createInstance();

    req.onreadystatechange = function(){
        if(req.readyState == 4){
            if(req.status == 200){
                document.getElementById('affichage').innerHTML = req.responseText;
            }
            else{
                alert('Erreur ajax : '+req.status+' '+req.statusText);
            }
        }
    };
    req.open('GET', 'exemple1.php', true);
    req.send(null);
}

function exemplePOST(){
    var req = createInstance();
    var url = document.ajax.url.value;
    var data = "url="+url;

    req.onreadystatechange = function(){
        if(req.readyState == 4){
            if(req.status == 200){
                document.getElementById('affichage').innerHTML = req.responseText;
            }
            else{
                alert('Erreur ajax : '+req.status+' '+req.statusText);
            }
        }
    };
    req.open('POST', 'pingurl.php', true);
    req.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    req.send(data);
}