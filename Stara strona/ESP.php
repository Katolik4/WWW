<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: glowna.php');
		exit();
	}
	
	require_once "connect.php";

	$polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
	
	if ($polaczenie->connect_errno!=0)
	{
		echo "Error: ".$polaczenie->connect_errno;
	}
	else
	{
			
		if ($rezultat = @$polaczenie->query(
		sprintf("SELECT * FROM uzytkownicy WHERE user='%s'",
		mysqli_real_escape_string($polaczenie,$login))))
		{
			$ilu_userow = $rezultat->num_rows;
			
			if($ilu_userow>0)
			{
				$wiersz = $rezultat->fetch_assoc();
				
				
				$_SESSION['zalogowany'] = true;
				$_SESSION['id'] = $wiersz['id'];
				$_SESSION['user'] = $wiersz['user'];
				$_SESSION['drewno'] = $wiersz['drewno'];
				$_SESSION['kamien'] = $wiersz['kamien'];
				$_SESSION['zboze'] = $wiersz['zboze'];
				$_SESSION['email'] = $wiersz['email'];
				$_SESSION['dnipremium'] = $wiersz['dnipremium'];
				
				
				unset($_SESSION['blad']);
				$rezultat->free_result();
				header('Location: glowna.php');
								
			} else {
				
				$_SESSION['blad'] = '<span style="color:red">Nieprawidłowy login lub hasło!</span>';
				header('Location: index.php');
				
			}
			
		}
		
		$polaczenie->close();
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
				<li><a href="#">Strona główna</a></li>
				<li><a href="#">IoT</a>
					<ul>
						<li><a href="#">ESP</a></li>
						<li><a href="#">Światła</a></li>
						<li><a href="#">Alarmy</a></li>
						<li><a href="#">Mqtt</a></li>
					</ul>
				</li>
				<li><a href="#">Pliki</a>
					<ul>
						<li><a href="#">Home Alone</a></li>
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
		
			<?php

			echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
			echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
			echo " | <b>Kamień</b>: ".$_SESSION['kamien'];
			echo " | <b>Zboże</b>: ".$_SESSION['zboze']."</p>";
	
			echo "<p><b>E-mail</b>: ".$_SESSION['email'];
			echo "<br /><b>Dni premium</b>: ".$_SESSION['dnipremium']."</p>";
	
			?>
			
			
			

		
			
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
		
		<div class="footer">Retrogranie.com &copy; 2015 Thank you for your visit Mario! But our Princess is in another castle ;-)</div>
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


	


<a href="rejestracja.php">Rejestracja</a>

</body>
</html>