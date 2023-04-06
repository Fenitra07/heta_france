<?php
session_start();
if(isset($_SESSION['user']))
{
require_once 'parameters.php';
include('connexion/connexion.php');

// 10 mins in seconds
$inactive = 300;
if( !isset($_SESSION['timeout']) )
$_SESSION['timeout'] = time() + $inactive;

$session_life = time() - $_SESSION['timeout'];

if($session_life > $inactive)
{  session_destroy(); header("location:login.php");     }

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


	<link href="fonts/fontawesome-free/css/all.min.css" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="index.html"><img style="width: 140px;" src="images/logo_heta.png"></a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
					<li class="colorlib-active"><a href="dashboard.php">Gestion des articles</a></li>
					<li class=""><a href="traitement/change_password.php">Modifier mot de passe</a></li>
					<li class=""><a href="traitement/article_creation.php">Ajouter un article</a></li>
					<li class=""><a href="login.php">Se déconnecter</a></li>
				</ul>
			</nav>

			<div class="colorlib-footer">
				<p class="footer_padding">
					<small>
						<i>"Votre projet, <br> votre signature"</i>
					</small>
				</p>
				<ul class="footer_padding">
					<li><a target="_blank" href="https://www.facebook.com/profile.php?id=100089764946920"><i class="icon-facebook2"></i></a></li>
					<li><a target="_blank" href="https://www.instagram.com/heta.france/?fbclid=IwAR1WoUAfW7SSpGzd9AcGE0kJ19YexwOHwyoy1tjvfQXFcVl4_EiqKEDs0FE"><i class="icon-instagram"></i></a></li>
					<li><a href="#"><i class="icon-twitter2"></i></a></li>
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
								<h2 class="colorlib-heading">Gestion des articles</h2>
								
								   <!-- ======= Articles ======= -->
								   
								                <table id="table_id" class="display table-striped table table-bordered dt-responsive">
								                    <thead>
								                      <tr>
								                        <th style="width:20%;">Date de publication</th>
								                        <th style="width:50%;">Titre</th>
								                        <th style="width:20%;">Action</th>
								                      </tr>
								                    </thead>
								                    <tbody>
								                      <?php
								                        $sql = "SELECT id, titre_art, image_art, contenu_art, date_pub_art FROM article ORDER BY date_pub_art ASC";

								                        $resultat = mysqli_query($conn, $sql);

								                        if($resultat){
								                          if(mysqli_num_rows($resultat)>0){
								                            while ($row = mysqli_fetch_assoc($resultat)){

								                      ?>

								                      <tr data-id="<?php echo $row['id']; ?>">
								                        <td><?php echo $row['date_pub_art']; ?></td>
								                        <td><?php echo $row['titre_art']; ?></td>
								                        <td>
								                          <center>
								                            <a href="traitement/article_delete.php?id=<?php echo $row["id"] ?>" class="btn btn-danger" onclick="return confirm('Veuillez confirmer votre action!')"><i class="fa fa-trash"></i></a>
								                            <a href="traitement/article_creation.php" class="btn btn-success"><i class="fa fa-plus"></i></a>
								                          </center>
								                        </td>
								                      </tr>
								                    </tbody>

								                    <?php
								                          }
								                        }
								                      }
								                    ?>

								                </table>
								                <!-- Ajout -->
								                <a href="traitement/article_creation.php" class="btn btn-primary"><i class="fa fa-plus"></i> Ajouter un article</a>
								                <!-- Ajout -->
								       
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Sticky Kit -->
	<script src="js/sticky-kit.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>
	
	
	<!-- MAIN JS -->
	<script src="js/main.js"></script>

	<!-- Fonction Hide/show -->
	<script type="text/javascript">

    function myFunction() {
      var x = document.getElementById("showPassword");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }


  	</script>

	</body>
</html>

<?php  
}
else{
    header("location:login.php");
}

?>

