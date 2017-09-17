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
	
	echo "Witaj ".$_SESSION['user'].'!';
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
				<a href="index.html" class="logolink">
					<img src="logo.png" style="float: left;"/>			
					Piotr Polakowski
				</a>
			</div>
		</div>
		
		
		<div class="nav">
			<ol>
				<li><a href="glowna.php">Strona główna</a></li>
				<li><a href="#">Projekty</a>
					<ul>
						<li><a href="#">Contra</a></li>
						<li><a href="#">Mario Bros</a></li>
						<li><a href="#">Duck Tales</a></li>
						<li><a href="#">Legend of Zelda</a></li>
					</ul>
				</li>
				<li><a href="#">Dom</a>
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
			
			<?php

			echo "<p>Witaj ".$_SESSION['user'].'! [ <a href="logout.php">Wyloguj się!</a> ]</p>';
			echo "<p><b>Drewno</b>: ".$_SESSION['drewno'];
			echo " | <b>Kamień</b>: ".$_SESSION['kamien'];
			echo " | <b>Zboże</b>: ".$_SESSION['zboze']."</p>";
	
			echo "<p><b>E-mail</b>: ".$_SESSION['email'];
			echo "<br /><b>Dni premium</b>: ".$_SESSION['dnipremium']."</p>";
	
			?>

		
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget rhoncus mi, in vestibulum lorem. Nulla urna mauris, egestas nec erat vel, tempus ullamcorper dolor. Maecenas eu mattis arcu. Aliquam dapibus quis risus eget consequat. Curabitur eu convallis urna, vitae scelerisque est. Nunc eget posuere urna. Nulla facilisi. Phasellus blandit eleifend aliquet. Curabitur porttitor pharetra pretium. Nam ac eros laoreet, consequat felis at, auctor metus.</p>
			
			<p>Etiam condimentum sed lectus at laoreet. Fusce pellentesque porta purus a venenatis. Quisque erat augue, malesuada nec ultrices vitae, consequat sed metus. Donec at ipsum viverra mauris feugiat euismod. Morbi ultrices tellus libero, et gravida tortor laoreet eget. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Morbi auctor interdum ornare. Praesent vel urna volutpat, accumsan erat at, pharetra urna. Pellentesque egestas sodales nibh vitae sodales. Suspendisse laoreet risus neque, viverra dictum leo condimentum vitae. Sed sem diam, blandit eu vestibulum in, tempor nec lacus. Nullam lacinia commodo elit, sed euismod leo. Suspendisse porttitor sem mi, fringilla viverra diam tincidunt ut.</p>
			
			<p>In dui turpis, varius nec neque id, mollis cursus neque. Pellentesque eget laoreet nulla. Nam lectus ex, vehicula ut euismod et, rhoncus in lectus. Donec luctus, sapien a venenatis vulputate, sapien ante condimentum lectus, ut molestie enim velit vitae magna. Suspendisse varius neque pulvinar enim ornare, nec lobortis enim lobortis. Ut eu ex neque. Vestibulum feugiat ligula et arcu rhoncus, quis maximus mauris pellentesque. Vivamus fermentum ultrices lacus vel vulputate. Morbi ultrices dolor nulla, ac lobortis nisl vestibulum sed. Vestibulum iaculis, lectus eget condimentum sodales, lorem nulla fermentum tellus, volutpat congue lacus dolor et quam. Phasellus ac risus blandit nisi rutrum suscipit non eu mauris. Vestibulum fringilla non neque vitae vestibulum.</p>
			
			<p>Fusce quis vehicula purus, ut fermentum quam. Suspendisse cursus dui ac est convallis, sit amet egestas lorem sodales. Praesent nec nunc mattis, hendrerit mauris quis, dignissim nisi. Pellentesque semper faucibus urna vel tempus. Suspendisse egestas lacus ornare ligula mattis, et pulvinar urna sodales. Suspendisse tristique eget lacus sit amet dapibus. Nam quis imperdiet velit. Vestibulum consectetur rutrum tortor, sit amet fringilla nisi rhoncus id. Aenean sit amet odio elit. Nulla orci quam, eleifend quis sapien sed, vestibulum elementum urna. Sed dapibus ligula vitae turpis bibendum, in tempus magna bibendum. Aenean ut purus diam. Praesent porta velit ut dui fringilla egestas. Donec dignissim non sapien at imperdiet. Quisque bibendum massa ligula, vel elementum eros iaculis quis. Maecenas velit nisl, imperdiet vitae dui sed, convallis placerat enim.</p>
			
			<p>Nunc mollis, massa scelerisque elementum condimentum, mauris ipsum accumsan purus, in semper leo erat vel turpis. Etiam varius feugiat diam eu sagittis. Curabitur dapibus sollicitudin dictum. In tincidunt at mauris vel dictum. Vivamus id imperdiet sem. Nam viverra ac massa ac ultricies. Nam condimentum commodo faucibus. Integer eget facilisis massa, sit amet vulputate purus. Duis in eros pulvinar eros porttitor pellentesque non volutpat dui. Nam laoreet scelerisque leo, accumsan porttitor tortor dignissim tempus. Nunc sit amet rutrum lorem. Cras malesuada risus sit amet aliquet vestibulum. Donec tellus nibh, pretium sed diam vitae, aliquet tempus risus.</p>
		</div>
		

		
		<div class="footer">Retrogranie.com &copy; 2015 Thank you for your visit Mario! But our Princess is in another castle ;-)</div>
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


	


<a href="rejestracja.php">Rejestracja</a>

</body>
</html>