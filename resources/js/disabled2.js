/* hier wird geprüft ob man was eingegeben hat in der Beschreibung, wenn ja, wird beim raus klicken der
Button Abschicken aktiviert, wenn nichts eingegeben wurde, (öffnet sich eine meldung / ist optional)
und der Button wird sofort wieder disabled */
function check() {
    if (!document.getElementById("Beschreibung").value.length >= 1) {
        var button2 = document.getElementById("Abschicken");
        button2.disabled = true;
        alert("Bitte gebe eine Beschreibung ein, damit du das Bild versenden kannst");
    }
     else {
        var button = document.getElementById("Abschicken");
        button.disabled = false;
            }
}
// hier wird das dann ausgeführt und jedesmal beim rein und raus klicken überprüft und dementsprechend verhindert
check();
