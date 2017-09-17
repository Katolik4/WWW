<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: glowna.php');
		exit();
	}
	
?>


<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>
	<?php
	
	echo "<p>Witaj ".$_SESSION['user'].'!</p>';
		?>
	</title>
	
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	
	<link href="style.css" rel="stylesheet" type="text/css" />
	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	
	<link href="css/fontello.css" rel="stylesheet" type="text/css" />
	
</head>

<body>

	<div class="wrapper">
		<div class="header">
		
			<div class="logo">
				<img src="pad.png" style="float: left;"/>
				<span style="color: #c34f4f">retro</span>granie.com
				<div style="clear:both;"></div>
			</div>
		</div>
		<div class="nav">
			<ol>
				<li><a href="glowna.php">Strona główna</a></li>
				<li><a href="#">IoT</a>
					<ul>
						<li><a href="#">ESP</a></li>
						<li><a href="#">Światła</a></li>
						<li><a href="#">Alarmy</a></li>
						<li><a href="#">Mqtt</a></li>
					</ul>
				</li>
				<li><a href="#">DOM</a>
					<ul>
						<li><a href="ESP.php">ESP</a></li>
						<li><a href="#">Dick Tracy</a></li>
						<li><a href="#">The Simpsons</a></li>
						<li><a href="#">Top Gun</a></li>
					</ul>
				</li>
				<li><a href="#">Użytkownik</a>
					<ul>
						<li><a href="#">Zaloguj</a></li>
						<li><a href="#">Opcje</a></li>
						<li><a href="#">Pliki</a></li>
						<li><a href="#">Wyloguj</a></li>
					</ul>
				</li>
				<li><a href="#">O autorach</a></li>
			</ol>
		
		</div>
		
		
		<div class="content">
		
			<form action="polaczSQL.php" method="post">
			
				<i class="icon-rocket"></i>
			
				<input type="submit" value="refresh">
				
				<?php
				if(isset($_SESSION['blad']))	echo $_SESSION['blad'];
				?>
		
			</form>
						
			
		</div>
				
		<div class="footer">&copy; 2017</div>
	</div>
	
	<script src="jquery-3.2.1.min.js"></script>

	
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