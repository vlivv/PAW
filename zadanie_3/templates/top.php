<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title><?php out($page_title); if (!isset($page_title)) {  ?> tytuł <?php } ?></title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
                <link rel="stylesheet" href="<?php print(_APP_URL); ?>/css/main.css" />
	</head>
	<body class="landing is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header" class="alt">
					<h1><a href="index.php">Kalkulator</a> kredytowy</h1>
					<nav id="nav">
						<ul>
							<li><a href="<?php print(_APP_URL); ?>/index.php">Home</a></li>
						
							<li><a href="<?php print(_APP_URL); ?>/app/security/login.php" class="button">Zaloguj się</a></li>
						</ul>
					</nav>
				</header>

			<!-- Banner -->
				<section id="banner">
					<h2>Kalkulator</h2>
					<p>niezawodne urządzenie, służące do wyliczenia miesięcznej raty kredytu</p>
					<ul class="actions special">
						<li><a href="<?php print(_APP_URL); ?>/app/security/login.php" class="button primary">Zaloguj się</a></li>
						<li><a href="https://pl.wikipedia.org/wiki/Kalkulator" class="button">Dowiedz się więcej</a></li>
					</ul>
				</section>

			<!-- Main -->
			


			<!-- CTA -->
				<section id="cta">