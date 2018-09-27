/* hier wird geprüft ob man was eingegeben hat in der Beschreibung und eine Datei ausgewählt wurde, wenn ja, wird der
Button Abschicken aktiviert, wenn beides nicht gegeben ist,
wird der Button (wieder) disabled */

function check() {
    var submitButton = document.getElementById("Abschicken");
    submitButton.disabled = true;
    console.log(document.getElementById("Beschreibung"));
    if (document.getElementById("Beschreibung").value.length >= 1 && document.getElementById("Bild").value.length >= 1) {
        submitButton.disabled = false;
    }
}

