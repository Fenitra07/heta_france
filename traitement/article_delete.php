<?php
session_start();
if(isset($_SESSION['user']))
{
require_once '../parameters.php';
include('../connexion/connexion.php');

// 10 mins in seconds
$inactive = 300;
if( !isset($_SESSION['timeout']) )
$_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("location:../login.php");     }

$_SESSION['timeout']=time();

?>

<!DOCTYPE HTML>
<html>
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HETA</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <meta name="author" content="" />

  <!-- Facebook and Twitter integration -->
  <meta property="og:title" content=""/>
  <meta property="og:image" content=""/>
  <meta property="og:url" content=""/>
  <meta property="og:site_name" content=""/>
  <meta property="og:description" content=""/>
  <meta name="twitter:title" content="" />
  <meta name="twitter:image" content="" />
  <meta name="twitter:url" content="" />
  <meta name="twitter:card" content="" />

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="favicon.ico">

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
  
  <!-- Animate.css -->
  <link rel="stylesheet" href="../css/animate.css">
  <!-- Icomoon Icon Fonts-->
  <link rel="stylesheet" href="../css/icomoon.css">
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="../css/bootstrap.css">
  <!-- Flexslider  -->
  <link rel="stylesheet" href="../css/flexslider.css">
  <!-- Flaticons  -->
  <link rel="stylesheet" href="../fonts/flaticon/font/flaticon.css">
  <!-- Owl Carousel -->
  <link rel="stylesheet" href="../css/owl.carousel.min.css">
  <link rel="stylesheet" href="../css/owl.theme.default.min.css">
  <!-- Theme style  -->
  <link rel="stylesheet" href="../css/style.css">

  <!-- Modernizr JS -->
  <script src="../js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->

  <!-- SweatAlert -->
  <script src="../js/sweetalert2.all.js"></script>
  <script src="../js/sweetalert2.all.min.js"></script>

  </head>
  <body>

</head>
<body>

<?php
  $id = $_GET['id'];
  require_once '../parameters.php';
  include('../connexion/connexion.php');

  // sql to delete a record
  $sql = "DELETE FROM article WHERE id=$id";

  if ($conn->query($sql) === TRUE) {
      echo "<script type='text/javascript'>
       Swal.fire(
      'Suppression réussie!',
      'Veuillez cliquer sur le boutton ci-dessous !',
      'success'
    );
    var btnSwalls = document.getElementsByClassName('swal2-confirm');
            for(var i = 0; i<btnSwalls.length; i++)
            {
              btnSwalls[i].addEventListener('click', function(e){
                e.preventDefault();
                window.location = '../dashboard.php';
                })
            }
    </script>";

  } else {
      echo "Error deleting record: " . $conn->error;
  }

  $conn->close();

?>



 <!-- jQuery -->
  <script src="../js/jquery.min.js"></script>
  <!-- jQuery Easing -->
  <script src="../js/jquery.easing.1.3.js"></script>
  <!-- Bootstrap -->
  <script src="../js/bootstrap.min.js"></script>
  <!-- Waypoints -->
  <script src="../js/jquery.waypoints.min.js"></script>
  <!-- Flexslider -->
  <script src="../js/jquery.flexslider-min.js"></script>
  <!-- Sticky Kit -->
  <script src="../js/sticky-kit.min.js"></script>
  <!-- Owl carousel -->
  <script src="../js/owl.carousel.min.js"></script>
  <!-- Counters -->
  <script src="../js/jquery.countTo.js"></script>
  
  
  <!-- MAIN JS -->
  <script src="../js/main.js"></script>

  </body>
</html>

<?php
}
else{
    header("location:../login.php");
}

?>