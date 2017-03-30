<!DOCTYPE html>

<html lang="<?php bloginfo('language') ?>">
	<head>

		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title><?php echo get_bloginfo('name') ?></title>

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">	

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">

		<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.2/css/swiper.min.css">

		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/img/favicon.png">

		<!--[if IE 7]>
		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/font-awesome-ie7.min.css">
		<![endif]-->

		<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/dist/style.min.css">
		<!--<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/main.css">-->

		<?php wp_head(); ?> 

	</head>

<body <?php body_class(); ?>>
<header id="site" role="header">
	<div class="container">
		<h1 class="logo">
			<a href="#">
				<img src="<?php bloginfo('template_url') ?>/img/logo.png" title="Reserva Aruan" alt="Reserva Aruan">
			</a>
		</h1>
		<nav class="menu">
			<ul>
				<li><a href="#slider-home">O Empreendimento</a></li>
				<li><a href="#plantas">Plantas</a></li>
				<li><a href="#localizacao">Localização</a></li>
				<li><a href="#personalize">Personalize</a></li>
				<li><a href="#contato">Contato</a></li>
			</ul>
		</nav>

		<span class="menu-mobile">
			<i class="fa fa-bars" aria-hidden="true"></i>
		</span>
	</div>
</header>

<div id="content-site">

