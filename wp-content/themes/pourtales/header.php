<!doctype html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>

		<!-- Header -->
		<header id="home">
			<!-- Background Image -->
			<div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/background.jpg');">
				<div class="overlay"></div>
			</div>
			<!-- /Background Image -->

			<!-- Nav -->
			<nav id="nav" class="navbar nav-transparent wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1s">
				<div class="container">

					<div class="navbar-header">
						<!-- Logo -->
						<div class="navbar-brand">
							<a href="<?php echo get_home_url(); ?>">
								<img class="logo" src="<?php echo get_template_directory_uri(); ?>/img/logo_chateau_pourtales.png" alt="logo">
								<img class="logo-alt" src="<?php echo get_template_directory_uri(); ?>/img/logo_chateau_pourtales-alt.png" alt="logo">
							</a>
						</div>
						<!-- /Logo -->

						<!-- Collapse nav button -->
						<div class="nav-collapse">
							<span></span>
						</div>
						<!-- /Collapse nav button -->
					</div>

					<!--  Main navigation  -->
					<ul class="main-nav nav navbar-nav navbar-right">
						<li><a href="<?php echo get_home_url(); ?>">Accueil</a>
						</li>
						<li><a href="<?php echo get_home_url(); ?>/presentation">Présentation</a>
						</li>
						<li class="has-dropdown"><a href="<?php echo get_home_url(); ?>#event">Évenements</a>
							<ul class="dropdown">
								<li><a href="<?php echo get_home_url(); ?>/evenement/g-i-v-e-institute/">G.I.V.E. Institute</a></li>
								<li><a href="<?php echo get_home_url(); ?>/evenement/parc-interactif-du-chateau/">Parc intéractif du château</a></li>
								<li><a href="<?php echo get_home_url(); ?>/evenement/seminaires-et-evenements/">Séminaires et événements</a></li>
							</ul>
						</li>
						<li><a href="<?php echo get_home_url(); ?>/les-forfaits">Forfaits</a></li>
						<li><a href="<?php echo get_home_url(); ?>#actu">Actualités</a></li>
						<li><a href="<?php echo get_home_url(); ?>#contact">Contact</a>
						</li>
					</ul>
					<!-- /Main navigation -->

				</div>
			</nav>
			<!-- /Nav -->
