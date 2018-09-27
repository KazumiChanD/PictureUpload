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
            unlink("resources/dat/Bilddateiinformationen.csv");
        }
    }
    //schließt das verzeichnis wieder
    closedir($verzeichnis);
}

LoescheBilder();

header('Location: index.php?');
