function loadContent(url, cFunc) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            cFunc(this);
        }
    };
    xhttp.open("GET", url, true);
    xhttp.send();
}

function replaceById(xhttp, idToReplace) {
    document.getElementById(idToReplace).innerHTML = 
    xhttp.responseText;
}

function loadAndReplaceContent(url, idToReplace) {
    var replaceSpecificContent = function (xhttp) {
        replaceById(xhttp, idToReplace);
    }
    loadContent(url, replaceSpecificContent)
}