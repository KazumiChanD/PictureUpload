<?php
/* hier wird festgelegt, um was für eine Datei Art es sich handelt in dem Dokument
in diesem Falle ist es PHP */
$uploaddir = './uploads/';
/* $uploaddir ist eine Variable, die beliebig genannt werden kann, sie wird mithilfe von =' ' definiert */
$uploadfile = $uploaddir . basename($_FILES['bilder']['name']);
/* $ist eine Variable die beliebig genannt werden kann, sie wird mithilfe von =' ' definiert
. basename gibt den Dateinamen aus einem Pfad zurück */
echo '<prev>';
/* echo gibt genau an dieser Stelle etwas wieder (Text, Bilder, Fehlermeldungen ect.)
prev bewegt den internen Zeiger auf das vorherige Element im Array und gibt es aus */
if (move_uploaded_file($_FILES['bilder']['tmp_name'], $uploadfile)) {
/* if Anweisung führt einen Code aus, wenn eine Bedignung wahr ist
move_uploaded_file verschiebt eine hochgeladene Datei, an einen anderen Speicherort (muss angegeben werden)
funktioniert nur bei Dateien, die über HTTP POST hochgeladen wurde
wenn die Zieldatei schon existiert wird sie überschrieben */
    echo "Datei wurde erfolgreich hochgeladen\n";
    /* echo gibt genau an dieser Stelle etwas wieder (Text, Bilder, Fehlermeldungen ect.)
    zwischen den " " wird der angezeigte Text gezeigt
    \n ist ein Absatz */
}
print_r($_FILES);
/* zeigt Informationen über eine Variable in lesbarer Form an
$_FILES ist eine Dateiupload Variable und Superglobal, heißt sie funktioniert überall im Dokument*/
print "</pre>";
/* print gibt eine oder mehrere Zeichenfolgen aus
es ist keine Funktion und somit muss man keine Klammern verwenden
ist etwas langsamer als echo
prev bewegt den internen Zeiger auf das vorherige Element im Array und gibt es aus */
