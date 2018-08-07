<!-- hier wird festgelegt, um was für eine Datei Art es sich handelt in dem Dokument,
bzw wie der Browser es verarbeiten soll. da immer die höchste Datei angebegen wird und php über html steht, wird trotzdem php angegeben -->
<!DOCTYPE html>
<!-- html ist ein Tag mit dem gezeigt wird, das hier eine HTML- codierte Seite vorliegt
lang="de" erklärt den Sprachcode in der die Seite ausgegeben wird (meist landessprache) -->
<html lang="de">
<!-- wird zwischen dem html und dem body tag gesetzt
es wird nicht auf der Webseite angezeigt, außer das title tag
hier werden die Meta Daten gelagert
es sorgt für eine Dokumentstruktur
sie liefern Informationen, steuern die Darstellung und stellen Beziehungen zwischen anderen Datein und Seiten her -->
<head>
    <!-- hier wird der angezeigte Name der Website festgelegt
    er wird außerdem als Titelleiste des Tabs, als Standardname beim Lesezeichen (außer man nennt ihn um),
    im Verlauf des Browsers und als Überschrift von Einträgen in Suchmaschinen
    in " " steht der besagte angezeigte Text
    sollte nicht so lang sein (70 höchstens (bei Anzeige bei Google)) -->
    <title>Bilder hochladen</title>
    <!-- meta enthält zusätzliche Informationen von anderen Daten
    sollen das verwalten des Dateiinhalts erleichtern
    setzt sich zumindest aus Attributen zu Eigenschaft und Inhalt zusammen
    charset legt die Zeichenkodierung für die Dateien fest
    utf-8 ist ein Unicode, der besonders für westliche Sprachen genutzt wird. Enthält deutsche Umlaute (ä, ü, ö ect.) -->
    <meta charset="utf-8">
    <!-- meta enthält zusätzliche Informationen von anderen Daten
    viewport bezeichnet den Anzeigenbereich (für mobile Geräte wichtig)
    content beschreibt Metadaten
    initial-scale gibt den Zoom Wert an, 1.0 werden 1:1 dargestellt
    user-scalable=yes zeigt an ob zoomen möglich ist -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
    <!-- link verweist auf eine Seite oder Datei, bzw verknüpft sich damit
    href gibt die url der Seite an, auf die verwiesen wird
    rel wird nur verwendet wenn href vorhanden ist
    gibt Beziehungen zwischen dem aktuellen und einem anderen Dokument an -->
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
    <!-- link verweist auf eine Seite oder Datei, bzw verknüpft sich damit
    href gibt die url der Seite an, auf die verwiesen wird
    rel wird nur verwendet wenn href vorhanden ist
    gibt Beziehungen zwischen dem aktuellen und einem anderen Dokument an -->
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
    <!-- link verweist auf eine Seite oder Datei, bzw verknüpft sich damit
    rel wird nur verwendet wenn href vorhanden ist
    type bezeichnet den Inhaltstyp
    text wird in einem lesbaren Textzeichenformat angezeigt
    href gibt die url der Seite an, auf die verwiesen wird
    gibt Beziehungen zwischen dem aktuellen und einem anderen Dokument an -->
    <link rel="stylesheet" type="text" href="resources/css/style.css">
<!-- wird zwischen dem html und dem body tag gesetzt
es wird nicht auf der Webseite angezeigt, außer das title tag
hier werden die Meta Daten gelagert
sie liefern Informationen, steuern die Darstellung und stellen Beziehungen zwischen anderen Datein und Seiten her
es sorgt für eine Dokumentenstruktur
das / beschreibt das Ende und ist zwingend erforderlich (Beispiel /head) -->
</head>
<!-- beinhaltet den gesamten anzuzeigenden Inhalt
sorgt für eine Dokumentenstruktur -->
<body>
<!-- schließt mehrere Elemte in einem gemeinsamen Bereich ein
es sorgt dafür das der Inhalt in einer neuen Zeile erscheint
div bedeutet division, Abteilung oder Bereich
id bedeutet identity
gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
bei der ID wird zwischen Groß und Kleinschreibung unterschieden
es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten -->
<form id="scrollbereich">
        <!-- beinhaltet den sichtbaren Kopfteil einer Website oder eines Teils einer Seite
        wird für einleitende Inhalte oder Navigationslink verwendet
        kann mehrmals im Dokument genutzt werden
        enthält meistens mehrere Überschriftelemte (h1- h6), Logo oder Symbol und Autoreniformationen
        kann nicht innerhalb eines footer, adresse oder eines anderen header plaziert werden -->
        <header>
            <!-- h2 definiert eine Überschrift
            es gibt 6 verschiedene die sich durch die Zahl hinter dem h unterscheiden (Beispiel h2)
            h1 definiert die wichtigste Überschrift
            strong formatiert Text in einem Dokument
            es definiert wichtigen Text
            es ist ein Phrasen tag
            phrase bedeutet im deutschen sowas wie Satz oder Ausdruck
            mit / wird der tag geschloßen (Beispiel /strong) -->
            <h2><strong>Speicher hier die Bilder deiner Lieblinge</strong></h2>
        <!-- beinhaltet den sichtbaren Kopfteil einer Website oder eines Teils einer Seite
        wird für einleitende Inhalte oder Navigationslink verwendet
        kann mehrmals im Dokument genutzt werden
        enthält meistens mehrere Überschriftelemte (h1- h6), Logo oder Symbol und Autoreniformationen
        kann nicht innerhalb eines footer, adresse oder eines anderen header plaziert werden
        das / beschreibt das Ende und ist zwingend erforderlich (Beispiel /header) -->
        </header>
        <!-- p dient zur Gliederung des Textes
        sorgt für einen Absatz, da Browser Umbrüche in Dokumente ignorieren
        es umfasst einen Textblock, welcher auf der Seite angezeigt wird
        das / beschreibt das Ende (Beispiel /p) -->
        <p> Lorem ipsum dolor sit amet, aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
            Duis autem vel eum  </p>
    <!-- img verknüfpt ein Bild in einer Html Seite
    es benötigt die Attribute src und alt
    id bedeutet identity
    gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
    in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
    bei der ID wird zwischen Groß und Kleinschreibung unterschieden
    es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten
    src (englisch source für Quelle)
    wird nur durch eine URL identifiziert
    gibt drei verschiedene Möglichkeiten
    alt gibt den alternativen Text an, wenn das Bild nicht angezeigt werden kann -->
    <img id="rechts" src="https://i.imgur.com/X4KPi3Y.png" alt="Hier soll eigentlich eine Katze sein">
        <!-- img verknüfpt ein Bild in einer Html Seite
        es benötigt die Attribute src und alt
        id bedeutet identity
        gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
        in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
        bei der ID wird zwischen Groß und Kleinschreibung unterschieden
        es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten
        src (englisch source für Quelle)
        wird nur durch eine URL identifiziert
        gibt drei verschiedene Möglichkeiten
        alt gibt den alternativen Text an, wenn das Bild nicht angezeigt werden kann -->
        <img id="links" src="https://i.imgur.com/qSrXVbA.png" alt="Hier soll eigentlich ein Hund sein">
        <!-- img verknüfpt ein Bild in einer Html Seite
        es benötigt die Attribute src und alt
        id bedeutet identity
        gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
        in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
        bei der ID wird zwischen Groß und Kleinschreibung unterschieden
        es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten
        src (englisch source für Quelle)
        wird nur durch eine URL identifiziert
        gibt drei verschiedene Möglichkeiten
        alt gibt den alternativen Text an, wenn das Bild nicht angezeigt werden kann -->
        <img id="mitte" src="https://i.imgur.com/n0Qrsmb.jpg" alt="Hier soll eigentlich ein Hamster sein">
        <!-- section bedeutet sowas wie Abschnitt
        sorgt für eine Seitenstruktur
        definiert bestimmte Abschnitte des Dokuemntes
        id bedeutet identity
        gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
        in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
        bei der ID wird zwischen Groß und Kleinschreibung unterschieden
        es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten
        das / beschreibt das Ende (Beispiel /section) -->
        <section id="demo"></section>
    <!-- wird verwendet um Benutzereingaben zu sammeln
    action definiert die Aktion, die beim übermitteln des Formulars ausgeführt werden soll
    get wird benutzt um Daten von einer angegeben Ressource anzufordern
    Anforderungen können zwischengespeichert werden
    Anfragen verbleiben im Browserverlauf
    Anfragen können mit einem Lesezeichen versehen werden
    Anfragen sollten niemals im Umgang mit sensiblen Daten verwendet werden
    Anfragen haben Längenbeschränkungen
    Requests werden nur zum Anfordern von Daten verwendet
    id bedeutet identity
    gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
    in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
    bei der ID wird zwischen Groß und Kleinschreibung unterschieden
    es muss mindestens ein Zeichen und darf keine Leerzeichen, Tabulatoren ect enthalten-->
    <form action="uploads" method="get" id="form1">
            <!-- label definiert eine Bezeichnung für input
            wird für den Benutzer als nichts besonderes dargestellt
            das / beschreibt das Ende (Beispiel /label)-->
            <label>Titel des Bildes:</label>
            <!-- input gibt ein Eingabefeld an, in das der Benutzer Daten eingeben kann
            wird in form verwendet um Eingabesteuerelemte zu erklären, mit denen Benutzer angaben oder eingeben können
            type bezeichnet den Inhaltstyp
            text wird in einem lesbaren Textzeichenformat angezeigt
            name gibt einen Namen für das Element an
            kann verwendet werden um mit Java darauf zu verweisen
            maxlength gibt die maximale Anzahl an Zeichen an, die im input zulässig sind -->
            <label><input type="text" name="titel" maxlength="35"></label></form>
            <!-- label definiert eine Bezeichnung für input
            wird für den Benutzer als nichts besonderes dargestellt
            type gibt den Typ des anzuzeigenden Elements an
            der Standard Typ ist Text
            file bedeutet zu deutsch Datei
            das / beschreibt das Ende (Beispiel /type)
            das / beschreibt das Ende (Beispiel /label)
            type -->
            <label for="file"><input type="file"></type></label>
            <!-- file im Zusammenhang mit input, definiert ein file*select*field und einen Browse Button um Datein hoch zu laden
            type bezeichnet den Inhaltstyp
            file definiert den Typ als eine Datei
            id bedeutet identity
            gibt eine eindeutige ID, mithilfe CSS und JavaScript verwendet werden kann
            in CSS muss damit die ID ausgewählt wird, ein # vor, Beispiel #scrollbereich
            bei der ID wird zwischen Groß und Kleinschreibung unterschieden
            style legt den Stil eines Elements fest
             -->
            <input type="file" id="file" style="">

        <button type="submit" form="form1" value="Submit"><a>Bild abschicken</a></button>
        </form>

        <p>Es sind nur Formate wie .jpg .gif und .png gültig</p>

    <?php
    echo "<pre>";
    $file ="uploads";
    print_r ( $file );
?>
</body>

</html>