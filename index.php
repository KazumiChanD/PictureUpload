<?php
session_start();

include_once('logfile.php');
/* damit werden alle Fehler angezeigt */
error_reporting(E_ALL);
ini_set('display_errors', 'on');
/* wenn man neu auf die Seite kommt, ohne das eine Session existiert, wird eine gesetzt */
if (!array_key_exists('Camefrom', $_SESSION)) {
    $_SESSION['Camefrom'] = 'index.php';
}
/* wenn camefrom in der Session und diese auch save.php aufweist, wird in einer Variable true gesetzt */
if (array_key_exists('Camefrom', $_SESSION) && $_SESSION['Camefrom'] == 'save.php') {
    $cameFromSave = true;
} else {
    $cameFromSave = false;
    logMessage('Es wurde nicht über die save.php aufgerufen');
}
/* wenn camefromsave ein false enthält und einen der drei Get parameter beitzt, wird man zu der Seite mit dem parameter dontdoit geschickt */
if (!$cameFromSave) {
    if (array_key_exists('saveOK', $_GET) || array_key_exists('wrongExtension', $_GET) || array_key_exists('saveError', $_GET)) {
        header("Location: index.php?dontDoIt=1");
        exit();
    }
}

?>

    <!DOCTYPE html>
    <html lang="de">
    <head>
        <!-- gibt den Namen der Website an -->
        <title>Bilder hochladen</title>
        <!-- dadurch wird die westliche Sprache angezeigt und enthält deutsche Umlaute -->
        <meta charset="utf-8">
        <!-- es wird auf mobilen Geräten zoomen erlaubt, der Größe des Geräts angepasst und legt die Zoomstufe (beim ersten laden) fest -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
        <!-- gibt die angezeigte Schriftart an -->
        <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
        <!-- gibt die andere angezeigte Schriftart an -->
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <!-- damit wird die css eingebunden und in der Website auch dargestellt -->
        <link rel="stylesheet" type="text/css" href="resources/css/style.css">
        <script src="/resources/js/disabled2.js"></script>
    </head>
    <body>
    <!-- schließt den scollbereich ein, welcher in css definiert wurde -->
    <div id="scrollbereich">
        <header>
            <!-- gibt den sichtbaren Text als Überschrift aus -->
            <h2>Speicher hier die Bilder deiner Lieblinge</h2>
        </header>
        <section>
            <!-- soll nur ein Platzhalter -->
            <p> Hier kannst DU deine Lieblingstiere, oder sogar DEINE Haustiere in DEINER eigenen Galerie einfügen.
                DU kannst DEINE Bilder beliebig umbenennen und mit den Pfeilen wechseln. Bitte verwende nur das Deutsche
                Alphabet und die vorgegebenen Formate wie unten aufgeführt. </p>
            <!-- zeigt auf der rechten Seite der Website, durch der definition in css, das Bild an -->
            <img id="rechts" src="https://i.imgur.com/X4KPi3Y.png" alt="Hier soll eigentlich ein Hund sein"/>
            <!-- zeigt auf der linken Seite der Website, durch der Definition in css, das Bild an -->
            <img id="links" src="http://ekladata.com/-WzPJzH8EGmgAJKt4VJ4mQp7boI.png"
                 alt="Hier soll eigentlich eine Katze sein">
            <!-- zeigt unterhalb des Platzhalters auf der Website in der Mitte, durch der Definition in css, das Bild an -->
            <img id="mitte" src="http://pluspng.com/img-png/hamster-png-hd-mouse-animal-free-png-image-1250.png"
                 alt="Hier soll eigentlich ein Hamster sein">
        </section>
        <!-- ein neuer Abschnitt für das Formular -->
        <section>
            <!-- das Formular und die Daten werden an die save.php datei versendet und dort weiter verarbeitet -->
            <form action="save.php" method="post" name="Formular" enctype="multipart/form-data">

                <!-- dieser Text steht vor dem Eingabefeld -->
                <label>Titel des Bildes:</label>
                <label>
                    <!-- das Eingabefeld was ausgefüllt werden muss und maximal nur 100 Zeichen erlaubt -->
                    <input type="text" name="beschreibung" id="Beschreibung" maxlength="100" value="" onblur="check()" required>
                </label>
                <!-- erstellt ein Button indem der Benutzer eine Datei auswählen muss -->
                <input type="file" accept="image/*" name="bild" id="Bild" value="" onblur="check()" required><br>
                <!-- erstellt einen Button mit dem das Formular abgesendet wird -->
                <button type="submit" id="Abschicken" value="Submit" disabled>Bild abschicken</button>
            </form>

        </section>
        <section>
            <p>Es sind nur Formate wie .jpg, .jpeg .gif und .png gültig</p>
            <!-- das was innerhalb vom p tag steht, wird nur angezeigt, wenn im Array der String gefunden wurde, gleichzeitig wird der $_GET Parameter ausgewertet und geprüft ob die camefrom false ist -->
            <?php if (array_key_exists('dontDoIt', $_GET) and !$cameFromSave) { ?>
                <p>Du hast versucht selbst die Seite zu öffnen. Versuche es lieber hier rüber noch einmal:
                    <button type="submit" value="submit"><a href="index.php">Neuer Versuch</button>
                    </a></p>
            <?php } ?>
            <!-- das was innerhalb vom p tag steht, wird nur angezeigt, wenn im Array der String gefunden wurde, gleichzeitig wird der $_GET Parameter ausgewertet und geprüft ob die camefrom true ist -->
            <?php if (array_key_exists('wrongExtension', $_GET) and $cameFromSave) { ?>
                <p>Datei wurde nicht gespeichert, weil die Endung falsch ist!
                    <button type="submit" value="submit"><a href="index.php">Neuer Versuch</button>
                    </a></p>
            <?php } ?>
            <!-- das was innerhalb vom p tag steht, wird nur angezeigt, wenn im Array der String gefunden wurde, gleichzeitig wird der $_GET Parameter ausgewertet und geprüft ob die camefrom true ist -->
            <?php if (array_key_exists('saveError', $_GET) and $cameFromSave) { ?>
                <p>Datei konnte nicht gespeichert werden! Eventuell ist es ein falsches Format oder enthält besondere
                    Zeichen bzw. Buchstaben.
                    <button type="submit" value="submit"><a href="index.php">Neuer Versuch</button>
                    </a></p>
            <?php } ?>
            <!-- das was innerhalb vom p tag steht, wird nur angezeigt, wenn im Array der String gefunden wurde, gleichzeitig wird der $_GET Parameter ausgewertet und geprüft ob die camefrom true ist -->
            <?php if (array_key_exists('saveOK', $_GET) and $cameFromSave) { ?>
                <p>Datei erfolgreich gespeichert</p>
            <?php } ?>
            <!-- hier werden die Bilder in einer ungeordneten Liste angezeigt -->
            <ul id="galerie">

                <?php
                $ordner = "./uploads/";
                /* liest den Ordner uploads aus und sortiert diesen */
                $allebilder = scandir($ordner);
                /* dürchläuft eine Schleife */
                foreach ($allebilder as $bild) {
                    /* gibt die nötige Information (Name und Dateipfad) über die Dateien im Ordner */
                    $bildinfo = pathinfo($ordner . "/" . $bild);
                    /* gibt die Größe des Bildes */
                    $size = ceil(filesize($ordner . "/" . $bild) / 1024);
                    /* es wird verhindert das ordner und unterordner angezeigt werden */
                    if ($bild != "." && $bild != ".." && $bild && $bildinfo['basename']) {

                        ?>
                        <!-- erzeugt eine geordnetete Liste -->
                        <li id="picture">
                            <!-- beim klicken auf das Bild, öffnet sich ein Link wo das Bild (mit Name und Größe des Bildes in der Taskleiste) angezeigt wird  -->
                            <a href="<?php echo $bildinfo['dirname'] . "/" . $bildinfo['basename']; ?>">
                                <!-- zeigt das Bild in der angegebenen Größe an -->
                                <img src="<?php echo $bildinfo['dirname'] . "/" . $bildinfo['basename']; ?>" width="400"
                                     alt="Vorschau"/></a>
                            <!-- zeigt den Dateinamen und die Größe (zum Beispiel in kb) an -->
                            <span><?php echo $bildinfo['filename']; ?> (<?php echo $size; ?>kb)</span>

                        </li>

                        <?php
                    };
                };
                ?>

            </ul>
        </section>
    </div>
    </body>

    </html>

<?php
$_SESSION['Camefrom'] = 'index.php';