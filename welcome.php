<?php
   include('config.php');
   session_start();
   $error="";
   if($_SERVER["REQUEST_METHOD"] == "POST"){
   $myusername = mysqli_real_escape_string($db,$_POST['search']);
   $sql = "SELECT idkorisnici FROM korisnici WHERE username = '$myusername'";
   $result = mysqli_query($db,$sql);
   $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
   $count = mysqli_num_rows($result);
   if($count == 1) {

  
      $_SESSION["chat"]=$_POST["search"];
      header("location: search2.php");
   }else {
      $error = "Your Login Name or Password is invalid";
   }
}
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
				<div class="col-sm-2 col-xs-12">
					<div id="gtco-logo"><a href="welcome.php">Дома <em>.</em></a></div>
				</div>
				<div class="col-sm-2 col-xs-12">
					<div id="gtco-logo"><a href="welcome.php"><?php echo $_SESSION["login_user"]; ?> </a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="informatika.php">Информатика</a></li>
						<li><a href="ekonomski.php">Економски</a></li>
						<li><a href="medicina.php">Медицина</a></li>
					
						<li><a href="profil2.php">Профил</a></li>
						<?php if($_SESSION["moderator"]==1){

						echo "<li><a href='report2.php'>Пријави</a></li>";}
					?>
					
						<li class="btn-cta"><a href="logout.php"><span>Одјава</span></a></li>
						<li><form class="form-inline md-form form-sm active-cyan-2 mt-2" action="" method="POST">
							<input  class="form-control form-control-sm mr-3 w-75" type="text" placeholder="Пребарај корисник" aria-label="Search" name="search">
							<i class="fas fa-search" aria-hidden="true"></i>
						  </form></li>
					</ul>
				</div>
			</div>
			
		</div>
	</nav>
	
	
	
	<div class="gtco-section border-bottom"
	style="background-color: #626973">
		<div class="gtco-container" style="background-color: #626973">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
				<form action="post2.php" method="post">
				<div class="md-form mb-4 pink-textarea active-pink-textarea">
					<i class="fas fa-angle-double-right prefix"></i>
					<h3><label for="sodrzina" style="color:red">Напиши пост:</label></h3>
					<textarea type="text" id="sodrzina" name="sodrzina" class="md-textarea form-control" rows="3" style="color: whitesmoke"></textarea>
				
				  </div>
				  <div class="form-group col-md-4">
						<label for="fax" style="color:red">Факултет</label>
						<select id="fax" name="fax" class="form-control"style="color: red">
						  <option selected></option>
						  <option value="1">Информатика</option>
						  <option value="2">Економски</option>
						  <option value="3">Медицина</option>
						</select> <br><div class="form-group row">
                                <div class="offset-4 col-8">
                                  <button name="submit" type="submit" class="btn btn-primary">Постирај</button>
                                </div>
                              </div>
					  </div>
 
  </form>
  <br><br><br><br><br><br><br><br><br>
					<p style="color: whitesmoke">Сите постови</p>
				</div>
			</div>
			
		
			

				<?php

   $pom="SELECT * FROM postovi ORDER BY idpostovi desc";
  

   $rezultat=mysqli_query($db,$pom);
  
   while($row =mysqli_fetch_row($rezultat))
   {
      
      $id=$row[0];
$link ="upvote.php?id=$id";
$link2="report.php?id=$id";
 echo "	<div class='row'>
 <div class='span8'>
   <div class='row'>
 
   </div>
   
	 <div class='span6'>      
	   <p style='color: whitesmoke'>
		 $row[2]
	   </p>
	   
	 </div>
   </div>
   <div class='row' style='color: whitesmoke'>
	 <div class='span8'>
	   
	   <p>
		 <i class='icon-user'></i> Постирано од  <a href=''>$row[1]</a> 
		 | <i class='icon-calendar'></i> $row[3]
		 | <i class='icon-comment'></i> $row[4]<a href='$link'> Ми се допаѓа</a>
		 |  <i class='icon-comment'></i> <a href='$link2'> Репорт</a>
	 
	   </p>
	 </div>
   </div>
 </div>
 <br><br>";
   }

   
   
   
   ?>

			  
			  
			
			
				
				

			</div>
		</div>
	</div>
	


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
	</div>

	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
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

