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
<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
      <h1 id="colorlib-logo"><a href="../index.html"><img style="width: 140px;" src="../images/logo_heta.png"></a></h1>
      <nav id="colorlib-main-menu" role="navigation">
        <ul>
          <li class=""><a href="../dashboard.php">Gestion des articles</a></li>
          <li class="colorlib-active"><a href="change_password.php">Modifier mot de passe</a></li>
          <li class=""><a href="article_creation.php">Ajouter un article</a></li>
          <li class=""><a href="session_destroy.php">Se déconnecter</a></li>
        </ul>
      </nav>

      <div class="colorlib-footer">
        <p class="footer_padding">
          <small>
            <i>"Votre projet, <br> votre signature"</i>
          </small>
        </p>
        <ul class="footer_padding">
          <li><a href="#"><i class="icon-facebook2"></i></a></li>
          <li><a href="#"><i class="icon-twitter2"></i></a></li>
          <li><a href="#"><i class="icon-instagram"></i></a></li>
          <li><a href="#"><i class="icon-linkedin2"></i></a></li>
        </ul>
        <p class="footer_padding">
          <small>
            Bureau d'études assuré dans le cadre de son activité
          </small>
        </p>
      </div>

    </aside>

    <div id="colorlib-main">

      <div class="colorlib-about">
        <div class="colorlib-narrow-content">
          <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInLeft">
              <div class="about-desc">
                <span class="heading-meta">Tableau de bord</span>
                <h2 class="colorlib-heading">Modifier mot de passe</h2>
                
                   <!-- ======= Articles ======= -->
                   
              <?php 
                require_once '../parameters.php';
                include('../connexion/connexion.php');

                // $id = $_GET['id'];
                $sql = "SELECT * FROM login";
                $result = $conn->query($sql);
                $row = $result->fetch_assoc();
                // var_dump($row);die();

                ?> 

                                  <form method="post" action="change_password_process.php">
                                    <div class="row">
                                      <div class="form-group">
                                        <label class="label_login">Ancien mot de passe</label>
                                        <input value="<?php echo $row["login_password"] ?>" class="form-control" name="motdepasse" readonly>
                                      </div>
                                      <div class="form-group">
                                        <label class="label_login">Nouveau mot de passe</label>
                                        <input class="form-control" name="" required>
                                      </div>
                                      <div class="form-group">
                                        <label class="label_login">Confirmer nouveau mot de passe</label>
                                        <input class="form-control" name="nouveau_motdepasse" required>
                                      </div>
                                     <div class="text-center pt-2">
                                      <input type="submit" class="btn btn-success" value="Enregistrer">
                                      <a href="../dashboard.php" class="btn btn-danger">Annuler</a>
                                    </div>
                                    </div>
                                  </form>

                       
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    




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