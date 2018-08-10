<?php /** @noinspection PhpUnreachableStatementInspection */
/* hier wird festgelegt, um was für eine Datei Art es sich handelt in dem Dokument
in diesem Falle ist es PHP */
$ordner = "uploads";
/* §ordner ist eine Variable, die beliebig genannt werden kann
zwischen dem " " kann alles stehen
es muss nur mindestens ein Symbol enthalten
es muss mit einem Bustaben oder einem unterstrich beginnen
es gehen abgesehen von dem Unterstrich keine Sonderzeichen
es wird zwischen Groß und Kleinschreibung unterschieden  */
class MyClass
/* class ist ein Schlüsselwort
es kommt vor einfachen Klassendefinitionen
kann jede Bezeichnung haben, vorausgesetzt es ist kein "PHP Wort"
ein gültiger Klassenname beginnt mit einem Bustaben oder Unterstrich,
gefolgt von einer beliebigen Anzahl an Bustaben, Ziffern oder Unterstrichen */
{
    public $public = "Public";
    /* public ist eine Datenschutzebene, die bestimmt wo Atrribute geändert werden
    oder welche Funktionen aufgerufen werden
    $public ist eine Variable die beliebig genannt werden
    schen dem " " kann alles stehen
    muss nur mindestens ein Symbol enthalten
    muss mit einem Bustaben oder einem unterstrich begin
    gehen abgesehen von dem Unterstrich keine Sonderzeic
    wird zwischen Groß und Kleinschreibung unterschieden */
}
$file = "/uploads";
/* $file ist eine Variable die beliebig genannt werden kann
zwischen dem " " kann alles stehen
es muss nur mindestens ein Symbol enthalten
es muss mit einem Bustaben oder einem unterstrich beginnen
es gehen abgesehen von dem Unterstrich keine Sonderzeichen
es wird zwischen Groß und Kleinschreibung unterschieden  */
$bilder = array( $file);
/* $bilder ist eine Variable die beliebig genannt werden kann
es muss nur mindestens ein Symbol enthalten
es muss mit einem Bustaben oder einem unterstrich beginnen
es gehen abgesehen von dem Unterstrich keine Sonderzeichen
es wird zwischen Groß und Kleinschreibung unterschieden
array speichert mehrere Werte in einer einzigen Variable
$file ist eine Variable die beliebig genannt werden kann
es muss nur mindestens ein Symbol enthalten
es muss mit einem Bustaben oder einem unterstrich beginnen
es gehen abgesehen von dem Unterstrich keine Sonderzeichen
es wird zwischen Groß und Kleinschreibung unterschieden  */
return $bilder;
/* return gibt einen Wert zurück
$bilder ist eine Variable die beliebig genannt werden kann
es muss nur mindestens ein Symbol enthalten
es muss mit einem Bustaben oder einem unterstrich beginnen
es gehen abgesehen von dem Unterstrich keine Sonderzeichen
es wird zwischen Groß und Kleinschreibung unterschieden */
echo "$bilder";
/* echo gibt zum Beispiel einen oder mehrere String (ein String stellt eine Kette von Zeichen dar) aus
$bilder ist eine Variable die beliebig genannt werden kann
es muss nur mindestens ein Symbol enthalten
es muss mit einem Bustaben oder einem unterstrich beginnen
es gehen abgesehen von dem Unterstrich keine Sonderzeichen
es wird zwischen Groß und Kleinschreibung unterschieden */
    if (is_dir($verzeichnis)) {
    /* if führt etwas aus, wenn eine Bedingung wahr ist
    is_dir diese Funktion überprüft ob die angegebene Datei ein Verzeichnis ist
    $verzeichnis ist eine Variable die beliebig genannt werden kann
    es muss nur mindestens ein Symbol enthalten
    es muss mit einem Bustaben oder einem unterstrich beginnen
    es gehen abgesehen von dem Unterstrich keine Sonderzeichen
    es wird zwischen Groß und Kleinschreibung unterschieden
    { öffnet eine Funktion, um sie zu schließen benötigt man } */
        if (filetype($file) == "images"
        /* if führt etwas aus, wenn eine Bedingung wahr ist
        filetype  gibt den Dateityp einer angegeben Datei oder Verzeichnis wieder
        $file ist eine Variable die beliebig genannt werden kann
        zwischen dem " " kann alles stehen
        es muss nur mindestens ein Symbol enthalten
        es muss mit einem Bustaben oder einem unterstrich beginnen
        es gehen abgesehen von dem Unterstrich keine Sonderzeichen
        es wird zwischen Groß und Kleinschreibung unterschieden
        images ist ein Dateityp */
            AND (substr($file, -4) == ".jpg"
            /* and führt etwas aus, wenn diese und eine andere Bedingung wahr ist
            substr gibt einen Teil einer Zeichenkette (String) zurück
            $file ist eine Variable die beliebig genannt werden kann
            zwischen dem " " kann alles stehen
            es muss nur mindestens ein Symbol enthalten
            es muss mit einem Bustaben oder einem unterstrich beginnen
            es gehen abgesehen von dem Unterstrich keine Sonderzeichen
            es wird zwischen Groß und Kleinschreibung unterschieden
            start ist wichtig enorm wichtig um zu wissen wo es am String beginnt
            die negative Zahl sorgt dafür das es an der angegebenen Position vom der Ende der Zeichenfolge aus gesehen wird
            == gibt den Wert true aus, wenn beides gleich ist
            .jpg ist eine Bilddatei Endung */
                OR substr($file, -4) == ".png"
                /* or führt etwas aus, wenn diese oder eine andere Bedingung wahr ist
                substr gibt einen Teil einer Zeichenkette (String) zurück
                $file ist eine Variable die beliebig genannt werden kann
                zwischen dem " " kann alles stehen
                es muss nur mindestens ein Symbol enthalten
                es muss mit einem Bustaben oder einem unterstrich beginnen
                es gehen abgesehen von dem Unterstrich keine Sonderzeichen
                es wird zwischen Groß und Kleinschreibung unterschieden
                start ist wichtig enorm wichtig um zu wissen wo es am String beginnt
                die negative Zahl sorgt dafür das es an der angegebenen Position vom der Ende der Zeichenfolge aus gesehen wird
                == gibt den Wert true aus, wenn beides gleich ist
                .png ist eine Bilddatei Endung */
                OR substr($file, -4) == ".gif")
                /* or führt etwas aus, wenn diese oder eine andere Bedingung wahr ist
                substr gibt einen Teil einer Zeichenkette (String) zurück
                $file ist eine Variable die beliebig genannt werden kann
                zwischen dem " " kann alles stehen
                es muss nur mindestens ein Symbol enthalten
                es muss mit einem Bustaben oder einem unterstrich beginnen
                es gehen abgesehen von dem Unterstrich keine Sonderzeichen
                es wird zwischen Groß und Kleinschreibung unterschieden
                start ist wichtig enorm wichtig um zu wissen wo es am String beginnt
                die negative Zahl sorgt dafür das es an der angegebenen Position vom der Ende der Zeichenfolge aus gesehen wird
                == gibt den Wert true aus, wenn beides gleich ist
                .gif ist eine Bilddatei Endung */
        ) {
            $filename = "$file";
            /* $filename ist eine Variable die beliebig genannt werden kann
            es muss nur mindestens ein Symbol enthalten
            es muss mit einem Bustaben oder einem unterstrich beginnen
            es gehen abgesehen von dem Unterstrich keine Sonderzeichen
            es wird zwischen Groß und Kleinschreibung unterschieden
            $file ist eine Variable die beliebig genannt werden kann
            zwischen dem " " kann alles stehen
            es muss nur mindestens ein Symbol enthalten
            es muss mit einem Bustaben oder einem unterstrich beginnen
            es gehen abgesehen von dem Unterstrich keine Sonderzeichen
            es wird zwischen Groß und Kleinschreibung unterschieden */
            $destination = "uploads";
            /* $file ist eine Variable die beliebig genannt werden kann
            zwischen dem " " kann alles stehen
            es muss nur mindestens ein Symbol enthalten
            es muss mit einem Bustaben oder einem unterstrich beginnen
            es gehen abgesehen von dem Unterstrich keine Sonderzeichen
            es wird zwischen Groß und Kleinschreibung unterschieden */
            move_uploaded_file($_FILES, "/uploads");
            /* move upload file verschiebt eine hochgeladene Datei an einem anderen Ort
            $filename ist eine Variable die beliebig genannt werden kann
            es muss nur mindestens ein Symbol enthalten
            es muss mit einem Bustaben oder einem unterstrich beginnen
            es gehen abgesehen von dem Unterstrich keine Sonderzeichen
            es wird zwischen Groß und Kleinschreibung unterschieden */
        }
        if ($error == UPLOAD_ERR_OK) {
        /* if führt etwas aus, wenn eine Bedingung wahr ist
        $error ist eine Variable die beliebig genannt werden kann
        es muss nur mindestens ein Symbol enthalten
        es muss mit einem Bustaben oder einem unterstrich beginnen
        es gehen abgesehen von dem Unterstrich keine Sonderzeichen
        es wird zwischen Groß und Kleinschreibung unterschieden
        upload err ok gibt den Wert 0, was bedeutet das die Datei erfolgreich hochgeladen wurde  */
            move_uploaded_file($tmp_name, "$uploads_dir/$name");
            /* move upload file verschiebt eine hochgeladene Datei an einem anderen Ort
            $tmp_name ist eine Variable die beliebig genannt werden kann
            es muss nur mindestens ein Symbol enthalten
            es muss mit einem Bustaben oder einem unterstrich beginnen
            es gehen abgesehen von dem Unterstrich keine Sonderzeichen
            es wird zwischen Groß und Kleinschreibung unterschieden
            $uploads_dir ist eine Variable die beliebig genannt werden kann
            es muss nur mindestens ein Symbol enthalten
            es muss mit einem Bustaben oder einem unterstrich beginnen
            es gehen abgesehen von dem Unterstrich keine Sonderzeichen
            es wird zwischen Groß und Kleinschreibung unterschieden
            $name ist eine Variable die beliebig genannt werden kann
            es muss nur mindestens ein Symbol enthalten
            es muss mit einem Bustaben oder einem unterstrich beginnen
            es gehen abgesehen von dem Unterstrich keine Sonderzeichen
            es wird zwischen Groß und Kleinschreibung unterschieden   */
        }
    }
    return true;
