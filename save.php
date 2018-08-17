<?php
error_reporting(-1);
ini_set('display_errors', 1);
/* damit werden alle Fehler angezeigt */
$uploaddir = './uploads/';
/* $uploaddir ist eine Variable, die beliebig genannt werden kann, sie wird mithilfe von =' ' definiert */
is_readable ($uploaddir);
/* is_readable prüft ob eine Datei existiert und lesbar ist */
is_writeable ($uploaddir);
/* is_writeable prüft ob in eine Datei oder ein Verzeichnis schreibbar ist */
if (file_exists($uploaddir)) {
    /* if führt einen Code aus, wenn eine Bedingung wahr ist
    file_exists prüft ob das Verzeichnis, Dateipfad oder Datei existiert */
    $uploadfile = $uploaddir . basename($_FILES['bild']['name']);
    /* $ist eine Variable die beliebig genannt werden kann, sie wird mithilfe von =' ' definiert
    . basename gibt den Dateinamen aus einem Pfad zurück */
    move_uploaded_file($_FILES['bild']['tmp_name'], $uploadfile);
    /* move_uploaded_file verschiebt eine hochgeladene Datei, an einen anderen Speicherort (muss angegeben werden)
    funktioniert nur bei Dateien, die über HTTP POST hochgeladen wurde
    wenn die Zieldatei schon existiert wird sie überschrieben */
}
header('Location: index.php');
/* es soll hier zur index.php weitergeletitet werden */



