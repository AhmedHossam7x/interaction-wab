<?php	session_start();	?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>AsthmaCare++</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="icon" type="" href="img/Offer.png" style="width: 100%;">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
</head>
<body>
		<!-- ====================================================header section ====================================================-->
		<header class="top-header">
			<div class="container">
				<div class="row">
					<div class="col-xs-5 header-logo">	<br><br><p class="logo">AsthmaCare++</p>	</div>
					<div class="col-md-7">
						<nav class="navbar navbar-default">
							<div class="container-fluid nav-bar">
								<div class="navbar-header">
									<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
								</div>
								<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
									<ul class="nav navbar-nav navbar-right">
										<li><a class="menu active" href="#home">Home</a></li>
										<li><a class="menu" href="#about">about</a></li>
										<li><a class="menu" id="btn" onclick="Check()" href="#">Articles</a></li>
										<li><a class="menu" href="#contact">Contact-Us</a></li>
										<?php
											if(!isset($_SESSION['username'])){
												?>
												<li><a class="menu" href="login.php">Login</a></li>
												<?php
											}else{
												if($_SESSION['admin_name'] == 'admin'){
													echo "<li><a href='admin.php'> ".$_SESSION['username']."</a></li>";
													echo "<li><a href='logout.php' class='menu'>Logout</a></li>";
												}else{
													echo "<li><a href='#'> ".$_SESSION['username']."</a></li>";
													echo "<li><a href='logout.php' class='menu'>Logout</a></li>";
												}
											}	
										?>
										
									</ul>
								</div>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header> 
		<?php 
			
		?>
	<!--==================================================== end of header area ====================================================-->
	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/3.jpg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/2.jpeg" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/1.webp" alt="">
			                <div class="carousel-caption">
		               			<h1>providing</h1>
		               			<p>highquality service for men &amp; women</p>	
			                </div>
			            </div>
			        </div>
			        <a class="left carousel-control" href="#carouselHacked" role="button" data-slide="prev">
			        	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			            <span class="sr-only">Previous</span>
			        </a>
			        <a class="right carousel-control" href="#carouselHacked" role="button" data-slide="next">
			            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			            <span class="sr-only">Next</span>
			        </a>
			    </div>
			</div>
		</div>
	</section>
	<!-- end of slider section -->

	<!-- about section -->
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>About Asthma</h2>
				<h4>" Asthma is a chronic respiratory condition affecting millions of people worldwide. The prevalence of asthma is increasing, and its management poses a significant challenge to healthcare systems. Moreover, 
					there is a growing recognition of the interplay between asthma and environmental pollution. 
					The aim is to address these challenges through the development of a comprehensive healthcare system that not only focuses on treating asthma patients but also actively contributes to the reduction of environmental pollution."</h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="img/types 2.png" style="width: 80%; margin-left:45px;"  alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>A</h1>
							</div>
							<h3>Types Of Asthma</h3>
							<p>Allergic asthma , Seasonal asthma , Occupational asthma , Non-allergic asthma , Exercise induced asthma , Difficult asthma , Severe asthma , Brittle asthma , Childhood asthma , Adult onset asthma</p>
							<a href="https://www.asthmaandlung.org.uk/conditions/asthma/types-asthma#adult-onset-asthma" target="_blank" class="Read">Read More</a>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/symptoms 2.png" style="width: 80%; margin-left:40px; margin-bottom:30px;" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>B</h1>
							</div>
							<h3>Asthma Symptoms</h3>
							<p>Wheezing , Cough , Tachycardia , Shortness of breath , Difficulty breathing , Pale and wet skin , Dyspnea , Chest Tightness</p>
							
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/Home.png" style="width: 85%; margin-left:25px" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>C</h1>
							</div>
							<h3>Asthma Treatment: 3 Steps For Better Asthma Control:</h3>
							<p>Follow your asthma action plan , Use at-home lung tests , Keep an asthma diary</p>
							<a href="https://www.mayoclinic.org/diseases-conditions/asthma/in-depth/asthma-treatment/art-20044284" target="_blank" class="Read">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- end of about section -->
	<section class="contact_us" id="contact">
		<div class="block" id="block">
			<p class="block_p">Cant take any action, Please login...</p>
		</div>
		<div class="par">	<p>Leave your message 👋</p>	</div>
		<footer>
			<div class="content" id="Contact Us">
				<div class="left box">
					<div class="upper">
						<div class="topic">About us</div>
						<p>AsthmaCare++ team exemplifies compassion, expertise, and collaboration in delivering comprehensive support to patients, prioritizing their well-being through innovative and holistic approaches.</p>
					</div>
					<div class="lower">
						<div class="topic">Contact us</div>
						<div class="email">	<a><i class="fa fa-envelope"></i>AsthmaCareTeam@Gmail.com</a>	</div>
					</div>
				</div>
				<div class="right box">
					<div class="topic">Email us</div>
					<form id="contactForm" action="https://api.web3forms.com/submit" method="post">
						<input type="hidden" name="access_key" value="aa7b8493-cbf4-459f-956e-90bdf64e6583">
						<input type="text" placeholder="Enter Your Name" name="name" required >
						<input type="email" placeholder="Enter Your Email" name="email" required >
						<textarea rows="6" placeholder="Your Describe" name="message" required></textarea>
						<input type="submit" name="" value="Send">
					</form>
				</div>
			</div>
		</footer>
	</section>
	<!-- ChatBot Section -->
	<div class="Bot">
        <a href="ChatBot.html" class="ball-link">    <div class="ball">    <img src="img\robot_image.png" alt="Robot Image" class="robot-image">    </div>    </a>
    </div>
	<!-- End Of ChatBot Section -->
	<footer class="lastFooter">    <span>Create by <a href="#">AsthmaCare++</a> | <span class="fa fa-copyright">2024 All rights reserved.</span></span>    </footer>
	<!-- script tags -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script>
		var btn = document.getElementById("btn");
		var block = document.getElementById("block");
		<?php	if(!isset($_SESSION['username'])){	?>block.style.display = "block";<?php	}	?>
		function Check(){
			<?php
				if(!isset($_SESSION['username'])){
			?>
			alert('Please login in website');
			<?php
			}else{
				?>
				btn.setAttribute('href', "articles/indexArtihal.php");
				<?php
			}
			?>
		}
	</script>
</body>
</html>


