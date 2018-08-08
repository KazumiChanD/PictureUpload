<?php
$ordner = "uploads";
$alledateien = scandir('/uploads'); //Ordner "files" auslesen

foreach ($alledateien as $datei) { // Ausgabeschleife
    echo $datei."<br />"; //Ausgabe Einzeldatei
};





$verzeichnis = "uploads";
$uploads_dir = 'uploads';
foreach ($_FILES["pictures"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["pictures"]["tmp_name"][$key];
        $name = basename($_FILES["pictures"]["name"][$key]);
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}

$file ="uploads";
if (is_dir($verzeichnis)) {
    if (filetype($file) == "file"
        AND (substr($file, -4) == ".jpg"
        OR substr($file, -4) == ".png"
        OR substr($file, -4) == ".gif")
    ) {

        $filename ="";
        $destination ="";
        move_uploaded_file($filename , $destination );
    }
    if ($error == UPLOAD_ERR_OK) {
        move_uploaded_file($tmp_name, "$uploads_dir/$name");
    }
}