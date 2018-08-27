<?php
$uploaddir = './uploads/';
$uploadfile = $uploaddir . basename($_FILES['bild']['name']);
$pathArray = pathinfo($uploadfile);
$extension = $pathArray['extension'];
$allowedExtensions = array('png', 'jpeg', 'jpg', 'gif');

function logMessage()
{
    $problem = "Hier steht eine Fehlermeldung";
    $Logfile = fopen("logfile.txt", "a");
    fputs($Logfile, "\n" . date("d.m.Y, H:i:s", time()) . ", " . fwrite($Logfile, "\r\n" . $problem . "\r\n"));
    fclose($Logfile);
}

if (!file_exists($uploaddir)) {
    function logMessage1()
    {
        $Existsproblem = "Dieser Ordner existiert nicht";
        $Logfile = fopen("logfile.txt", "a");
        fputs($Logfile, "\n" . date("d.m.Y, H:i:s", time()) . ", " . fwrite($Logfile, "\r\n" . $Existsproblem . "\r\n"));
        fclose($Logfile);
    }
}


if (!is_writable($uploaddir)) {
    function logMessage2()
    {
        $Writeproblem = "Dieser Ordner ist nicht beschreibbar";
        $Logfile = fopen("logfile.txt", "a");
        fputs($Logfile, "\n" . date("d.m.Y, H:i:s", time()) . ", " . fwrite($Logfile, "\r\n" . $Writeproblem . "\r\n"));
        fclose($Logfile);
    }
}


if (!is_readable($uploaddir)) {
    function logMessage3()
    {
        $Readproblem = "Dieser Ordner ist nicht lesbar";
        $Logfile = fopen("logfile.txt", "a");
        fputs($Logfile, "\n" . date("d.m.Y, H:i:s", time()) . ", " . fwrite($Logfile, "\r\n" . $Readproblem . "\r\n"));
        fclose($Logfile);
    }
}


if (!move_uploaded_file($_FILES['bild']['tmp_name'], $uploadfile)) {
    function logMessage4()
    {
        $Moveproblem = "Datei konnte nicht verschoben werden";
        $Logfile = fopen("logfile.txt", "a");
        fputs($Logfile, "\n" . date("d.m.Y, H:i:s", time()) . ", " . fwrite($Logfile, "\r\n" . $Moveproblem . "\r\n"));
        fclose($Logfile);
    }
}


if (!in_array($extension, $allowedExtensions)) {
    function logMessage5()
    {
        $Extensionsproblem = "Es wurde eine falsche Dateiendung verwendet ";
        $Logfile = fopen("logfile.txt", "a");
        fputs($Logfile, "\n" . date("d.m.Y, H:i:s", time()) . ", " . fwrite($Logfile, "\r\n" . $Extensionsproblem . "\r\n"));
        fclose($Logfile);
    }
}
