function saveFormular() {
    var jxhttp = new XMLHttpRequest();
    // Überwacht die Statusänderung und kann leer gelassen werden, wenn keine Antwort vom Server erwartet wird
    jxhttp.onreadystatechange = function () {
        if (jxhttp.readyState === 4 && jxhttp.status === 200) {
            document.getElementById("Formular").innerHTML = jxhttp.responseText;
            alert("Der Request war erfolgreich");
        }
    };
    jxhttp.open("POST", "save.php", true);
    jxhttp.send();
    // verhindert das neu laden der seite, außer man lädt die Seite neu
    event.preventDefault();
}


