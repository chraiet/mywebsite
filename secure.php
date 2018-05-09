<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Sécurité</title>
    <!--  Ubuntu Font Family  -->

    <title>Mohamed Chraiet</title>
    <!--  jQuery  -->
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/848c77f637.js"></script>
    <!--  Bootstrap  -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <link rel="stylesheet" href="css/default.css" />
    <link rel="stylesheet" href="css/secure.css" />
  </head>
  <body>
    <?php require 'helpers.php' ?>
    <header>
        <ul id="list-nav">
            <li><?= anchor('index.php', 'Accueil', "") ?></li>
            <li><?= anchor('cv.html', 'CV', "Curriculum Vitae", array("_blank")) ?></li>
        </ul>
    </header>
    <form method="post" action="secure.php">
      <i class="fa fa-lock" aria-hidden="true" id="lockIcon"></i><br>
      <label for="password">Mot de passe</label>
      <input type="password" name="password" class="form-control" id="password"/>
      <input type="submit" name="submit" value="Entrer" class="btn btn-primary" id="submitBtn"/>
    </form>
  </body>
</html>
