<?php
// löscht die Bilder im Ordner
function LoescheBilder() {
    $uploaddir = "uploads/";
    // öffnet das Verzeichnis wieder
    $verzeichnis = opendir($uploaddir);
    // fängt eine Schleife an
    while ($file = readdir($verzeichnis)) {
        // ignoriert die übergeordneten Ordner
        if ($file != "." && $file != "..") {
            // löscht die Files
            unlink($uploaddir . $file);
            // löscht die Eintrage in der csv und nicht die csv auch (ansonsten würde ein Fehler auf der Seite ausgelöst werden)
            $openData = fopen("resources/dat/Bilddateiinformationen.csv", "w+");
            fclose($openData);
        }
    }
    //schließt das verzeichnis wieder
    closedir($verzeichnis);
}

LoescheBilder();

header('Location: index.php?');
