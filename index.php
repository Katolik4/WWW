<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Strona główna</title>
	
	<meta name="description" content="Strona glowna" />
	<meta name="keywords" content="piotr polakowski" />
	
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<link href="css/fontello.css" rel="stylesheet" type="text/css" />
	
</head>

<body>

	<div class="wrapper">
		<div class="header">
		
			<div class="logo">
				<img src="logo.png" style="float: left;"/>
				Piotr Polakowski
				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="nav">
			<ol>
				<li><a href="index.php">Strona główna</a></li>
				<li><a href="#">Projekty</a>
					<ul>
						<li><a href="#">ESP</a></li>
						<li><a href="#">Raspberry Pi</a></li>
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
					</ul>
				</li>
				<li><a href="logowanie.php">Zaloguj</a>

				</li>
				<li><a href="#">O autorach</a></li>
			</ol>
		
		</div>
		
		<div class="content">
			
			lkjansdfhoksdfnghlk'dsfnmhsdfhsdf,fdg nsldkfhbn'sldfkhnsdf'lkhnsdfhknsdf'lknsdfh
			
			
		</div>
		
		<div class="socials">
			<div class="socialdivs">
				<div class="fb">
					<i class="icon-facebook"></i>
				</div>
				<div class="yt">
					<i class="icon-youtube"></i>
				</div>
				<div class="tw">
					<i class="icon-twitter"></i>
				</div>
				<div class="gplus">
					<i class="icon-gplus"></i>
				</div>
				<div style="clear:both"></div>
			</div>
		</div>
		
		<div class="footer"> &copy; 2017)</div>
	</div>
	
	<script src="jquery-1.11.3.min.js"></script>
	
	<script>

	$(document).ready(function() {
	var NavY = $('.nav').offset().top;
	 
	var stickyNav = function(){
	var ScrollY = $(window).scrollTop();
		  
	if (ScrollY > NavY) { 
		$('.nav').addClass('sticky');
	} else {
		$('.nav').removeClass('sticky'); 
	}
	};
	 
	stickyNav();
	 
	$(window).scroll(function() {
		stickyNav();
	});
	});
	
</script>
	
</body>
</html>