<?php

$to = $_POST['myemail'];

$subject = "Nuevo mail de forma de contacto";

$name = $_POST['name'];
$email = $_POST['email'];
$website = $_POST['website'];
$message = $_POST['message'];
 
$body = "Nombre: $name\nMail: $email\nWebsite: $website\nMessage: $message";

mail($to, $subject, $body);

?> 