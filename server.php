<html>
    <head>
        <meta charset="utf-8" />
        <title>$_SERVER</title>
    </head>
    <style>
        #content {
            padding: 10px;
            border: 1px solid black;
        }
    </style>
    <body>
    <h1>SERVER informations</h1>
    <div id="content">
    <?php
    $php_version = phpversion();
    print "<b>PHP Version:</b> {$php_version}<br>";
    print "<b>PHP_SELF:</b> " . $_SERVER['PHP_SELF'] . "<br>";
    print "<b>SERVER_ADDR:</b> " . $_SERVER['SERVER_ADDR'] . "<br>";
    print "<b>SERVER_NAME:</b> " . $_SERVER['SERVER_NAME'] . "<br>";
    print "<b>SERVER_SOFTWARE:</b> " . $_SERVER['SERVER_SOFTWARE'] . "<br>";
    print "<b>SERVER_PROTOCOL:</b> " . $_SERVER['SERVER_PROTOCOL'] . "<br>";
    print "<b>REQUEST_METHOD:</b> " . $_SERVER['REQUEST_METHOD'] . "<br>";
    print "<b>REQUEST_TIME:</b> " . $_SERVER['REQUEST_TIME'] . "<br>";
    print "<b>REQUEST_TIME_FLOAT:</b> " . $_SERVER['REQUEST_TIME_FLOAT'] . "<br>";
    print "<b>QUERY_STRING:</b> " . $_SERVER['QUERY_STRING'] . "<br>";
    print "<b>DOCUMENT_ROOT:</b> " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
    print "<b>HTTP_ACCEPT:</b> " . $_SERVER['HTTP_ACCEPT'] . "<br>";
    print "<b>HTTP_ACCEPT_CHARSET:</b> " . $_SERVER['HTTP_ACCEPT_CHARSET'] . "<br>";
    print "<b>HTTP_ACCEPT_ENCODING:</b> " . $_SERVER['HTTP_ACCEPT_ENCODING'] . "<br>";
    print "<b>HTTP_ACCEPT_LANGUAGE:</b> " . $_SERVER['HTTP_ACCEPT_LANGUAGE'] . "<br>";
    print "<b>HTTP_CONNECTION:</b> " . $_SERVER['HTTP_CONNECTION'] . "<br>";
    print "<b>HTTP_HOST:</b> " . $_SERVER['HTTP_HOST'] . "<br>";
    print "<b>HTTP_REFERER:</b> " . $_SERVER['HTTP_REFERER'] . "<br>";
    print "<b>HTTP_USER_AGENT:</b> " . $_SERVER['HTTP_USER_AGENT'] . "<br>";
    print "<b>HTTPS:</b> " . $_SERVER['HTTPS'] . "<br>";
    print "<b>REMOTE_ADDR:</b> " . $_SERVER['REMOTE_ADDR'] . "<br>";
    print "<b>REMOTE_HOST:</b> " . $_SERVER['REMOTE_HOST'] . "<br>";
    ?>
    </div>
    </body>
</html>
