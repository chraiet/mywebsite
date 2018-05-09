<?php
require_once 'helpers.php';
$name = $_POST['name'];
$email = $_POST['email'];
$message = "{$_POST['message']}\n" .
 "----------\n" .
 "De: {$name}\nEmail: {$email}";

//  Prevent from SPAM.
if (substr($name, 0, 2) != '59' && strlen($_POST['message']) > 3) {
    mail('chraiet95@gmail.com','Formulaire de contact', $message);
}

http_homepage();

function http_homepage() {
  header('Location: ' . get_domain());
}
