<?php
  $id = $_GET['id'];
  require_once 'parameters.php';
  include('connexion/connexion.php');
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
					<li><a href="index.html">Qui sommes nous ?</a></li>
					<li><a href="domaines.html">Expertise en projets immobiliers</a></li>
					<li><a href="projets.html">Nos projets</a></li>
					<li class="colorlib-active"><a href="blog.php">Docteur maisons et actu</a></li>
					<li><a href="contact.html">Contact</a></li>
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
			
			<div class="colorlib-blog">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Blog</span>
							<h2 class="colorlib-heading">Docteur maisons et actu</h2>
						</div>
					</div>

					<?php
	                  $sql = "SELECT * FROM article WHERE id = $id";
	                  $result = $conn->query($sql);
	                  $row = $result->fetch_assoc();
	                ?>

					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a class="blog-img"><img src="<?php echo 'upload/'.$row['image_art'] ?>" class="img-responsive"></a>
							</div>
						</div>
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="desc">
								<h3 style="margin: 0 0 15px 0;"><a href="blog.html"><?php echo $row['titre_art']; ?></a></h3>
								<span style="font-weight: bold;"><small><?php echo $row['date_pub_art']; ?></small></span>
								<p style="text-align: justify;"><?php echo $row['contenu_art']; ?></p>
							</div>
						</div>
					</div>
					<div class="row">
						<center>
							<a href="blog.php">
			                  <div class="post-btn">
			                     <button class="btn btn-post float-right">Tous les articles</button>
			                   </div>
			                </a>
		                </center>
					</div>
				</div>
			</div>

			<div id="get-in-touch" class="colorlib-bg-color">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Contact</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="colorlib-lead" style="font-size: 13px;">
								<b>Hêta</b> <br>
								32, rue Barbès <br>
								92120 - Montrouge <br>
								contact@heta-france.fr
							</p>
							<p>
								<a href="contact.html" class="btn btn-primary btn-learn">Nous contacter</a>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<center>
								<p class="devinbox_footer">
									<small>
										&copy;Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <br> | Made with passion by <a href="https://www.pricing.dev-inbox.com" target="_blank">Devinbox</a>
									</small>
								</p>
							</center>
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

	</body>
</html>

