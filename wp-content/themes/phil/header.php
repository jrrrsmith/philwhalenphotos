<!DOCTYPE html>
<html lang="en">
	<head>
    <?php wp_head(); ?>
    <meta charset="utf-8">
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
   	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title><?php bloginfo('title'); ?></title>
		<link href='http://fonts.googleapis.com/css?family=Source+Code+Pro:300,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/normalize.css">
		<link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/style.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	<body>
		<svg display="none" width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<defs>
				<symbol id="icon-facebook2" viewBox="0 0 1024 1024">
					<title>facebook2</title>
					<path class="path1" d="M853.35 0h-682.702c-94.25 0-170.648 76.42-170.648 170.686v682.63c0 94.266 76.398 170.684 170.648 170.684h341.352v-448h-128v-128h128v-96c0-88.366 71.634-160 160-160h160v128h-160c-17.674 0-32 14.328-32 32v96h176l-32 128h-144v448h213.35c94.25 0 170.65-76.418 170.65-170.684v-682.63c0-94.266-76.4-170.686-170.65-170.686z"></path>
				</symbol>
				<symbol id="icon-instagram" viewBox="0 0 1024 1024">
					<title>instagram</title>
					<path class="path1" d="M854 0h-684c-93.5 0-170 76.5-170 170v684c0 93.5 76.5 170 170 170h684c93.5 0 170-76.5 170-170v-684c0-93.5-76.5-170-170-170zM327.8 448h368.4c6.988 20.058 10.8 41.59 10.8 64 0 107.524-87.476 195-195 195s-195-87.476-195-195c0-22.41 3.812-43.942 10.8-64zM896 448.050v383.95c0 35.2-28.8 64-64 64h-640c-35.2 0-64-28.8-64-64v-384h100.108c-4.642 20.602-7.108 42.016-7.108 64 0 160.458 130.542 291 291 291s291-130.542 291-291c0-21.984-2.464-43.398-7.108-64l100.108 0.050zM896 224c0 17.6-14.4 32-32 32h-64c-17.6 0-32-14.4-32-32v-64c0-17.6 14.4-32 32-32h64c17.6 0 32 14.4 32 32v64z"></path>
				</symbol>
				<symbol id="icon-mail" viewBox="0 0 1024 1024">
					<title>mail</title>
					<path class="path1" d="M896 160h-768c-70.688 0-128 57.344-128 128v416c0 70.688 57.312 128 128 128h768c70.688 0 128-57.312 128-128v-416c0-70.656-57.312-128-128-128zM64 328l223.968 168-223.968 168v-336zM960 704c0 35.328-28.736 64-64 64h-768c-35.296 0-64-28.672-64-64l250.624-188 139.776 104.864c17.056 12.736 37.312 19.2 57.6 19.2 20.256 0 40.512-6.432 57.568-19.2l139.808-104.864 250.624 188zM960 664l-224-168 224-168v336zM550.368 595.264c-11.168 8.384-24.416 12.8-38.368 12.8s-27.232-4.448-38.4-12.8l-409.6-307.264c0-35.296 28.704-64 64-64h768c35.264 0 64 28.704 64 64l-409.632 307.264z"></path>
				</symbol>
				<symbol id="icon-mail" viewBox="0 0 1024 1024">
					<title>mail</title>
					<path class="path1" d="M896 160h-768c-70.688 0-128 57.344-128 128v416c0 70.688 57.312 128 128 128h768c70.688 0 128-57.312 128-128v-416c0-70.656-57.312-128-128-128zM64 328l223.968 168-223.968 168v-336zM960 704c0 35.328-28.736 64-64 64h-768c-35.296 0-64-28.672-64-64l250.624-188 139.776 104.864c17.056 12.736 37.312 19.2 57.6 19.2 20.256 0 40.512-6.432 57.568-19.2l139.808-104.864 250.624 188zM960 664l-224-168 224-168v336zM550.368 595.264c-11.168 8.384-24.416 12.8-38.368 12.8s-27.232-4.448-38.4-12.8l-409.6-307.264c0-35.296 28.704-64 64-64h768c35.264 0 64 28.704 64 64l-409.632 307.264z"></path>
				</symbol>
			</defs>
		</svg>
		<header>
			<a class="home" href="http://www.philwhalenphotos.com">
				<img src="<?php bloginfo('template_url');?>/images/phil-logo.png" />
			</a>
			<ul class="social">
				<li><a href="https://instagram.com/_filtho_/" target="_blank">
					<!-- <img src="images/instagram.svg" /> -->
		  		<svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg>
		  	</a></li>
				<li><a href="mailto:philawhalen@gmail.com" target="_blank">
		  		<svg class="icon icon-mail"><use xlink:href="#icon-mail"></use></svg>
		  	</a></li>
		  	<li><a href="https://www.facebook.com/profile.php?id=100007151266055&sk=about" target="_blank">
		  		<svg class="icon icon-facebook2"><use xlink:href="#icon-facebook2"></use></svg>
		  	</a></li>
	  	</ul>
	  	<?php echo do_shortcode("[mse-search-form]"); ?>
	  	<!-- <input placeholder="Search"></input> -->
	  	<h2 class="bio">>>><a href="http://www.philwhalenphotos.com">Bi<span class="last">o</span></a><<<</h2>
	  	<h2 class="bio">>>><a href="http://www.philwhalenphotos.com/gallery">Galler<span class="last">y</span></a><<<</h2>
	  	<section class="mobile-only">
				<nav>
					<a class="navicon-button x js-menu-trigger sliding-panel-button">
						<div class="navicon"></div>
					</a>
				</nav>
			</section>
			<nav class="js-menu sliding-panel-content">
				<ul class="social">
					<li><a href="https://instagram.com/_filtho_/" target="_blank">
						<!-- <img src="images/instagram.svg" /> -->
			  		<svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg>
			  	</a></li>
					<li><a href="mailto:philawhalen@gmail.com" target="_blank">
			  		<svg class="icon icon-mail"><use xlink:href="#icon-mail"></use></svg>
			  	</a></li>
			  	<li><a href="https://www.facebook.com/profile.php?id=100007151266055&sk=about" target="_blank">
			  		<svg class="icon icon-facebook2"><use xlink:href="#icon-facebook2"></use></svg>
			  	</a></li>
		  	</ul>
			  <ul class="mobile-menu">
			  	<?php echo do_shortcode("[mse-search-form]"); ?>
			  	<li><h2 class="bio">>>><a href="http://www.philwhalenphotos.com">Bi<span class="last">o</span></a><<<</h2></li>
			  	<li><h2 class="bio">>>><a href="http://www.philwhalenphotos.com/gallery">Galler<span class="last">y</span></a><<<</h2></li>
			  </ul>
			  <div class="nav-buffer"></div>
			</nav>
			<div class="js-menu-screen sliding-panel-fade-screen"></div>
		</header>
		<section id="body">