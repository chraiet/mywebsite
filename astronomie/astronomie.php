<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Astronomie</title>
        <link rel="stylesheet" href="astronomie.css" />
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu:regular,bold&subset=Latin">
    </head>
    <body>
    <h1>Lexique d'astronomie</h1>
    <div id="content">
        <?php
        /**
         *  Référence: http://espacepourlavie.ca/lexique-dastronomie
         */
        $lines = explode("\n", file_get_contents("astronomie.txt"));

        echo "<p><b>Albédo:</b> {$lines[0]}</p>";
        echo "<p><b>Angle d'incidence:</b> {$lines[1]}</p>";
        echo "<img src='../img/astronomie/angle_incidence.png' />";
        echo "<p><b>Anneau:</b> {$lines[2]}</p>";
        echo "<p><b>Année:</b> {$lines[3]}</p>";
        echo "<p><b>Antipode:</b> {$lines[4]}</p>";
        echo "<p><b>Apogée:</b> {$lines[5]}</p>";
        echo "<p><b>Apollo:</b> {$lines[6]}</p>";
        echo "<p><b>Astéroïde:</b> {$lines[7]}</p>";
        echo "<p><b>Astronaute:</b> {$lines[8]}</p>";
        echo "<p><b>Astronomie:</b> {$lines[9]}</p>";
        echo "<p><b>Atmosphère:</b> {$lines[10]}</p>";
        echo "<p><b>Basalte:</b> {$lines[11]}</p>";
        echo "<p><b>Bassin d'impact:</b> {$lines[12]}</p>";
        echo "<p><b>Bolide:</b> {$lines[13]}</p>";
        echo "<p><b>Bord, bordure:</b> {$lines[14]}</p>";
        ?>
    </div>
    </body>
</html>
