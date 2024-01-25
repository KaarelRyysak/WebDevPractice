function loadContent(url, cFunc) {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            cFunc(this);
        }
    };
    xhttp.open("GET", url, true); // ajax GET request
    xhttp.send();
}

function replaceContentById(xhttp, idToReplace) {
    document.getElementById(idToReplace).innerHTML = 
    xhttp.responseText;
}

function loadAndReplaceContent(url, idToReplace) {
    var replaceSpecificContent = function (xhttp) {
        replaceContentById(xhttp, idToReplace);
    }
    loadContent(url, replaceSpecificContent);
    return false;
}

// function postFormAndReplaceContent(url, idToReplace, event) {
//     event.preventDefault();
//     var formData = "test";
//     $.post(url, formData,
//         function(responseData, status)
//         {
//             if (status == "success")
//             { replaceContentById(responseData, idToReplace); }
//             else
//             { alert("Status: " + status + "\nResponse: " + responseData)}
//         });
//     return false
// }

function postFormAndReplaceContent(url, idToReplace, formId, errorId) {
    var formData = new FormData( document.getElementById(formId) );
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            replaceContentById(this, idToReplace);
        }
        else if (this.readyState == 4 && this.status == 403)
        {
            replaceIdWithAlert(errorId, this.responseText);
        }
    };
    xhttp.open("POST", url, true); // ajax POST request
    xhttp.send(formData);
    return false
}

function replaceIdWithAlert(idToReplace, alert)
{
    var alertHTML = '<p style="color:red;">' + alert + '</p>'
    document.getElementById(idToReplace).innerHTML = alertHTML
}