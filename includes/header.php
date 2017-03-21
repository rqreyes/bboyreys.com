<!doctype html>
<html class='<?php if (isset($htmlClasses)) { echo $htmlClasses; } ?>' lang='en'>
	<head>
		<?php if (isset($robots)) { echo $robots; } ?>

		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>
		<title><?php echo $pageTitle; ?></title>
		<meta name='description' content='I’m a front-end web developer by day, breaking (breakdance) warrior by night, and this is my dance portfolio. I live in San Diego, enjoy puzzles, and have a weakness for ramen.'>
		<link rel='shortcut icon' href='images/favicon.ico' type='image/x-icon'>
		<link rel='icon' href='images/favicon.ico' type='image/x-icon'>
		<link rel='stylesheet' href='https://necolas.github.io/normalize.css/5.0.0/normalize.css'>

		<!-- Animsition -->
		<link rel='stylesheet' href='scripts/animsition/animsition.min.css'>

		<!-- Font Awesome -->
		<link rel='stylesheet' href='fonts/font-awesome/font-awesome.min.css'>

		<?php if (isset($styleAdd)) { echo $styleAdd; } ?>


		<link rel='stylesheet' href='styles/style.css'>
	</head>
	<body class='animsition'>
		<header class='desktop'>
			<div class='container-header'>
				<div class='align-left'>
					<img class='logo' src='images/logo.png' width='60' height='auto'>
					<h1>B-boy Rey-S</h1>
				</div>
				<div class='align-right'>
					<nav>
						<ul class='row'>
							<li><a class='animsition-link' href='index.php'><i class='fa fa-home'></i>Home</a></li>
							<li><a class='animsition-link' href='videos.php'><i class='fa fa-youtube-play'></i>Videos</a></li>
							<li><a class='animsition-link' href='photos.php'><i class='fa fa-picture-o'></i>Photos</a></li>
							<li><a class='animsition-link' href='contact.php'><i class='fa fa-envelope-o'></i>Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
