<?php
$uploaddir = './uploads/';
/* $uploaddir ist eine Variable, die beliebig genannt werden kann, sie wird mithilfe von =' ' definiert */
$uploadfile = $uploaddir . basename($_FILES['bilder']['name']);
/* $ist eine Variable die beliebig genannt werden kann, sie wird mithilfe von =' ' definiert
. basename gibt den Dateinamen aus einem Pfad zurück */
(move_uploaded_file($_FILES['bilder']['tmp_name'], $uploadfile));
/* move_uploaded_file verschiebt eine hochgeladene Datei, an einen anderen Speicherort (muss angegeben werden)
funktioniert nur bei Dateien, die über HTTP POST hochgeladen wurde
wenn die Zieldatei schon existiert wird sie überschrieben */
header('Location: index.php');
/* es soll hier zur index.php weitergeletitet werden */