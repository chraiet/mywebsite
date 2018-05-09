<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>Mohamed Chraiet</title>
    <link rel="stylesheet" href="css/index.css" />
    <!-- jQuery -->
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
    <!-- Bootstrap  CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
    integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Bootstrap JS -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
    integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <!--  My CSS -->
    <link rel="stylesheet" href="css/default.css" />
    <link href='https://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link rel="shortcut icon" href="img/favicon-tasks.ico" />
    <!--  Ubuntu Font Family  -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <script src="js/index.js"></script>
  </head>
  <body>
    <?php require 'helpers.php'; ?>
    <nav class="navbar navbar-default navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <a class="navbar-brand" href="#">MC</a>
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li class="active"><a href="index.php">Accueil</a></li>
              <li><a href="cv.html" target="_blank">CV</a></li>
            </ul>
          </div>
      </div>
    </nav>
      <div id="contact">
          <br>
            <form action="contact.php" method="POST">
              <div class="form-group">
                <fieldset>
                    <legend id='contactLegend'>Contact</legend>
                    <input type="text" name="name" id="inputname" class="form-control" placeholder="Votre nom"/><br>
                    <input type="text" name="email" id="inputemail" class="form-control" placeholder="Votre email" required><br>
                    <textarea rows="10" cols="60" name="message" id="inputmessage" class="form-control" placeholder="Votre message" required></textarea><br>
                    <button type="submit" id='bEnvoyer' class="btn btn-primary">Envoyer</button>
                </fieldset>
              </div>
            </form>
      </div>
        <footer>
            <p id="date"></p>
            <a href="https://github.com/chraiet" target="_blank" data-toggle="tooltip" title="Mon profil GitHub">
              <img id="gitLogo" src="img/github.png"/>
            </a>
        </footer>
  </body>
</html>
