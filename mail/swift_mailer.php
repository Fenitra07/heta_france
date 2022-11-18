<?php
const HOST = "localhost";
const PORT = 1025;
const SENDER = "contacthetafrance@gmail.com";
const FROM = "contact@heta-france.fr";
const PASSWORD = "petit-Hadri17";
try {

    require_once '../vendor/autoload.php';
} catch (Exception $exception) {
    require_once '../vendor/autoload.php';
}
// Create the Transport
try {

    $transport = (new Swift_SmtpTransport(HOST, PORT))
//    ->setUsername(SENDER)
//    ->setPassword(PASSWORD)
    ;

// Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

} catch (Exception $exception) {
    echo "An error occured";die;
}
