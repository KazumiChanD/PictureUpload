<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 'on');
include_once('logfile.php');

if ($_SESSION == 'index') {

        $_SESSION['CurrentSite'] = 'save';

}
        else {
            header('Location: index.php?dontDoIt');
        };



/* damit werden alle Fehler angezeigt */


/* gibt dem ordner wo die Bilder ausgelesen werden soll eine Variable */
$uploaddir = './uploads/';
/* es wird überprüft ob das Verzeichnis existiert, ob es lesbar und beschreibbar ist und führt dann eine Anweisung aus */

if (file_exists($uploaddir) && is_readable($uploaddir) && is_writeable($uploaddir)) {
    /* das gibt aus dem Verzeichnis, mit den ids aus der index.php, Dateiart und Dateiname einer Datei raus */
    $uploadfile = $uploaddir . basename($_FILES['bild']['name']);
    /* gibt den Dateipfad wieder */
    $pathArray = pathinfo($uploadfile);
    /* es wird die endung von dem Dateipfad abgetrennt */
    $extension = $pathArray['extension'];
    /* es wird nach der Dateiendung gesucht und wenn eine davon existiert, wird es weiter verarbeitet */
    $allowedExtensions = array('png', 'jpeg', 'jpg', 'gif');
    /* wird keine der Dateiendungen gefunden, wird auf eine andere Seite verwiesen */

    if (!in_array($extension, $allowedExtensions)) {
        /* und es wird auf die andere Seite verwiesen */
        logMessage('Es wurde eine falsche Dateiendung verwendet.');
        $param = 'wrongExtension=1';
    } elseif (!move_uploaded_file($_FILES['bild']['tmp_name'], $uploadfile)) {
        /* wird die hochgeladene Datei nicht verschoben, wird auf eine andere Seite verwiesen */
        // und es wird auf die andere Seite verwiesen */
        logMessage('Die Datei konnte nicht gespeichert werden.');
        $param = 'saveError=1';
    } else {
        /* wird die hochgeladene Datei verschoben, wird auf eine andere seite verwiesen */
        /* und es wird auf die andere Seite verwiesen */
        logMessage('Es wurde erfolgreich gespeichert.', 'successUpload.log');
        $param = 'saveOK=1';
    }
} else {
    //Schreibe Fehlermeldung in die Logdatei
    logMessage('Der Ordner zum speichern ist nicht erreichbar.');
};


header('Location: index.php?' . $param);
