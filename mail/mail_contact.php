<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta charset="utf-8">

      <!-- SweatAlert -->
  <script src="../js/sweetalert2.all.js"></script>
  <script src="../js/sweetalert2.all.min.js"></script>

</head>
<body>

<?php
    require_once '../parameters.php';
    require_once '../vendor/autoload.php';
    use Swift_SmtpTransport;
    use Swift_Message;
    use Swift_Mailer;
   // $transport = new Swift_SmtpTransport(PARAMS['mailer_host'], PARAMS['mailer_port'], 'ssl');
    if ($_SERVER['REQUEST_METHOD'] == "POST") {



        if (isset($_POST['nom']) 
            && isset($_POST['email']) 
            && isset($_POST['objet_demande']) 
            && isset($_POST['souhait'])
            && isset($_POST['adresse'])
            && isset($_POST['rue'])
            && isset($_POST['commune'])
            && isset($_POST['code_postal'])
            ) 
        {
            $nom = $_POST['nom'];
            $email = $_POST['email'];
            $objet_demande = $_POST['objet_demande'];
            $souhait = $_POST['souhait'];
            $adresse = $_POST['adresse'];
            $rue = $_POST['rue'];
            $commune = $_POST['commune'];
            $code_postal = $_POST['code_postal'];

        // Create the Transport
            try {

                $transport = (new Swift_SmtpTransport(PARAMS['mailer_host'], PARAMS['mailer_port'], 'ssl'))
                        ->setUsername(PARAMS['mailer_user'])
                        ->setPassword(PARAMS['mailer_password'])
                ;
        // Create the Mailer using your created Transport
                $mailer = new Swift_Mailer($transport);

            // Create a message
                $message = (new Swift_Message(("$email ($objet_demande)")))
                    ->setFrom([PARAMS['mailer_user']], PARAMS['sender'])
                    ->setTo([PARAMS['mailer_to']])
                    ->setBody(
                        "<b>Nom : </b>".$nom."<br>".
                        "<b>Email : </b>".$email."<br>".
                        "<b>Adresse : </b>".$adresse."<br>".
                        "<b>Rue : </b>".$rue."<br>".
                        "<b>Commune : </b>".$commune."<br>".
                        "<b>Code postal :</b> ".$code_postal."<br>".
                        "<b>Objet :</b> ".$objet_demande."<br>".
                        "<b>Souhait :</b> ".$souhait."<br>"
                        , 'text/html');

                $mailer->send($message);
                header('Content-type: application/json');
                echo json_encode(['message' => "ok"]);
// Send the message
            try {

                $result = $mailer->send($message);
                echo "<script type='text/javascript'>
                   Swal.fire(
                  'Message envoyé!',
                  'Veuillez cliquer sur le boutton ci-dessous !',
                  'success'
                );
                var btnSwalls = document.getElementsByClassName('swal2-confirm');
                        for(var i = 0; i<btnSwalls.length; i++)
                        {
                          btnSwalls[i].addEventListener('click', function(e){
                            e.preventDefault();
                            window.location = '../contact.html';
                            })
                        }
                </script>";
            } catch (Swift_TransportException $exception) {
                echo "<script type='text/javascript'>
                    Swal.fire({
                      icon: 'error',
                      title: 'Oops...Une erreur s\'est produite',
                      text: 'Veuillez actualiser la page et ressaisir les informations!'
                    });
                    var btnSwalls = document.getElementsByClassName('swal2-confirm');
                    for(var i = 0; i<btnSwalls.length; i++)
                    {
                        btnSwalls[i].addEventListener('click', function(e){
                            e.preventDefault();
                            window.location = '../contact.html';
                            })
                    }
                </script>";
            }

        } catch (Exception $exception) {
            var_dump($exception);die;
        }
    }
  }

 ?>
 
 </body>
</html>