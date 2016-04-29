var xmlHttp

function showHint(str) {

    if (str.length == 0) {
        return;
    }

    xmlHttp = GetXmlHttpObject()
    if (xmlHttp == null) {
        alert("Browser does not support HTTP Request");
        return;
    }
    var url = "search.php";
    url = url + "?searchVal=" + str;
   
    xmlHttp.onreadystatechange = stateChanged;
    xmlHttp.open("GET", url, true);
    xmlHttp.send();
}

function stateChanged() {
    if (xmlHttp.readyState == 4 || xmlHttp.readyState == "complete") {
    	document.querySelector(".cool-effect-list").innerHTML = xmlHttp.responseText;
        
    }
}

function GetXmlHttpObject() {
    var xmlHttp = null;
    try {
        // Firefox, Opera 8.0+, Safari
        xmlHttp = new XMLHttpRequest();
    } catch (e) {
        // Internet Explorer
        try {
            xmlHttp = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
    }
    return xmlHttp;
}

$("#search").on("keyup", function(e) {
    if (e.keyCode == 13) {
        showHint($(this).val());
    }
 
})
