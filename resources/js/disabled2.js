/* hier wird geprüft ob man was eingegeben hat in der Beschreibung und eine Datei ausgewählt wurde, wenn ja, wird beim raus klicken der
Button Abschicken aktiviert, wenn beides nicht gegeben ist, (öffnet sich eine meldung / ist optional)
und der Button wird sofort wieder disabled */

function check() {
    var submitButton = document.getElementById("Abschicken");
    submitButton.disabled = true;
    console.log(document.getElementById("Bild"));
    if (document.getElementById("Beschreibung").value.length >= 1 && document.getElementById("Bild").value.length >= 1) {
        submitButton.disabled = false;
    }
}









