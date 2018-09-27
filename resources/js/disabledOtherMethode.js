var check = function() {
    var Beschreibungvalue = document.getElementById("Beschreibung").value.length;
    var Bildvalue = document.getElementById("Bild").value.length;
    var submitButton = document.getElementById("Abschicken");
    submitButton.disabled = true;
    if (Beschreibungvalue >= 1 && Bildvalue >= 1) {
        console.log(document.getElementById("Bild").value);
        submitButton.disabled = false;
    }
};

check();
