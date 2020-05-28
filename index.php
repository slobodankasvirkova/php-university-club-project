
<?php
   include("config.php");
   session_start();
   if(isset($_SESSION['error'])){

   }
   else{
	   $_SESSION['error']='';
   };
   ?>
   <!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>УСК</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />


  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->


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

	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Themify Icons-->
	<link rel="stylesheet" href="css/themify-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Owl Carousel  -->
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
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<div class="page-inner">
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-5 col-xs-12">
					<div id="gtco-logo"><a href="index.html">Универзитетски Студентски Клуб <em>.</em></a></div>
				</div>
				
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover" role="banner" style="background-color:#626973">
		<div class="overlay"></div>
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<span class="intro-text-small"><h4 style="color:white">Добредојдовте!</h4></span>
							<h1><?php echo $_SESSION['error'];?></h1>	
						
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									<ul class="tab-menu">
										<li class="active gtco-first"><a href="#" data-tab="signup">Регистрација</a></li>
										<li class="gtco-second"><a href="#" data-tab="login">Логирање</a></li>
									</ul>
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<form action="register.php" method="POST">
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Корисничко име</label>
														<input type="text" class="form-control" id="username" name="username">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Лозинка</label>
														<input type="password" class="form-control" id="password" name="password">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="god">Години</label>
														<input type="text" class="form-control" id="god" name="god">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="email">E-mail</label>
														<input type="email" class="form-control" id="email" name="email">
													</div>
												</div>


												<div class="row form-group">
													<div class="col-md-12">
														<label for="fax">Факултет</label>
														<select class="form-control" name="fax" id="fax">
															<option value=""></option>
															<option value="Информатика">Информатика</option>
															<option value="Економски">Економски</option>
															<option value="Медицина">Медицина</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="br">Број на картичка</label>
														<input type="text" class="form-control" id="br" name="br">
													</div>
												</div>
												

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary" value="Регистрирај се">
													</div>
												</div>
											</form>	
										</div>

										<div class="tab-content-inner" data-content="login">
											<form action="login.php" method="POST" >
												<div class="row form-group">
													<div class="col-md-12">
														<label for="username">Корисничко име</label>
														<input type="text" class="form-control" id="username" name="username">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="password">Лозинка</label>
														<input type="password" class="form-control" id="password" name="password">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary" value="Логирај се">
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
			</div>
		</div>
	</header>
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>За <span class="footer-logo">УСК<span><span></span></h3>
						<p>Оваа апликација е креирана со цел да се оствари подобра комуникација меѓу сегашните и веќе дипломираните студенти. </p>
					</div>
				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<h3>Линкови</h3>
						<ul class="gtco-footer-links">
							<li><a href="https://www.datalab.com.mk/%D0%B1%D0%B0%D0%B7%D0%B0-%D0%BD%D0%B0-%D0%B7%D0%BD%D0%B0%D0%B5%D1%9A%D0%B5/">База на знаење</a></li>
							<li><a href="https://kariera.mk/">Кариера</a></li>
							<li><a href="https://www.it.mk/">Вести</a></li>
							<li><a href="terms.html">Услуги за користење</a></li>
							<li><a href="privacy.html">Политика за приватност</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>Контактирајте не</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +32 234 567</a></li>
							<li><a href="#"><i class="icon-mail2"></i> infо@usk.com.mk</a></li>
							
						</ul>
					</div>
				</div>

			</div>

			

		</div>
	</footer>
	
	
	
	
	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/main.js"></script>

	</body>
</html>

