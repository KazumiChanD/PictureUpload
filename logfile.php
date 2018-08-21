<?php
/* die Serverdaten werden in der Datei logfile.txt gespeichert
mit der Funktion fopen wird die Datei geöffnet und in den entsprechenden Modus versetzt (a = append (hinzufügen)) */
$logdatei = fopen("logfile.txt", "a");
/* in der geöffneten Datei wird mit fputs() eine zeichenfolge geschrieben (Inhalt lies untere Kommentare */
fputs($logdatei, /* enthält das Datum und die Uhrzeit */
    date("d.m.Y, H:i:s", time()) . /* mithilfe von "," wird es getrennt und gewährleistet das Programme wie Acces oder Excel es einlesen können
    mit Request Mode wird dei Art der Anfrage angezeigt */
    ", " . $_SERVER['REQUEST_METHOD'] . /* mithilfe von "," wird es getrennt und gewährleistet das Programme wie Acces oder Excel es einlesen können
    mit HTTP User Agent werden Informationen über den Browser und die Seite gesammelt
    mit \n wird ein Absatz hinzugefügt */
    ", " . $_SERVER['HTTP_USER_AGENT'] .
    /*  */
    ", " . $_SERVER["SCRIPT_FILENAME"]. "\n");

/* schließt die Datei wieder */
fclose($logdatei);