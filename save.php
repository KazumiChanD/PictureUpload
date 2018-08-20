<?php
/* damit werden alle Fehler angezeigt */
error_reporting(-1);
ini_set('display_errors', 1);
/* $uploaddir ist eine Variable, die beliebig genannt werden kann, sie wird mithilfe von =' ' definiert */
$uploaddir = './uploads/';
/* if führt einen Code aus, wenn eine Bedingung wahr ist
file_exists prüft ob das Verzeichnis, Dateipfad oder Datei existiert
$uploaddir ist eine Variable, die beliebig genannt werden kann, sie wird mithilfe von =' ' definiert
is_readable prüft ob eine Datei existiert und lesbar ist
is_writeable prüft ob in eine Datei oder ein Verzeichnis schreibbar ist */
if (file_exists($uploaddir) && is_readable($uploaddir) && is_writeable($uploaddir)) {

    /* $uploadfile ist eine Variable, die beliebig genannt werden kann, sie wird mithilfe von = definiert
    . basename gibt den letzten Namensteil einer Pfadangabe zurück */
    $uploadfile = $uploaddir . basename($_FILES['bild']['name']);
    /* $pathArray ist eine Variable, die beliebig genannt werden kann, sie wird mithilfe von = definiert
    pathinfo gibt die Pfadinformationen der in () stehenden Verzeichnis oder Datei an */
    $pathArray = pathinfo($uploadfile);
    /* $extension ist eine Variable, die beliebig genannt werden kann, sie wird mithilfe von = definiert */
    $extension = $pathArray['extension'];
    /* es wird nach den string gesucht*/
    $allowedExtensions = array('png', 'jpeg', 'jpg', 'gif');
    /* es wird überprüft das der Nagel ($extension) nicht im Heuhaufen ($allowedExtensions) existiert */
    if (!in_array($extension, $allowedExtensions)) {
        /* Es wird auf die andere Seite verweisen */
        header('Location: index.php?wrongExtension=1');
        /* schließt die Funktion */
        exit;
    }
    /* move_uploaded_file verschiebt eine hochgeladene Datei, an einen anderen Speicherort (muss angegeben werden)
    funktioniert nur bei Dateien, die über HTTP POST hochgeladen wurde
    wenn die Zieldatei schon existiert wird sie überschrieben */
    if (!move_uploaded_file($_FILES['bild']['tmp_name'], $uploadfile)) {
        /* verweist auf die andere Seite */
        header('Location: index.php?saveError=1');
        /* beendet die Funktion */
        exit;
    }
}
/* verweist auf die andere Seite */
header('Location: index.php?saveOK=1');




