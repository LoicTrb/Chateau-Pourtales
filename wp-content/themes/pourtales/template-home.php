<?php /* Template Name: Home Page */ get_header(); ?>


<div class="home-wrapper">
	<div class="container">
		<div class="row">

			<!-- home content -->
			<div class="col-md-10 col-md-offset-1 wow bounceInUp" data-wow-duration="1s" data-wow-delay="1s">
				<div class="home-content">
					<h1 class="white-text">BIENVENUE</h1>
					<h2 class="white-text">Au château de Pourtalès</h2>
					<p class="white-text">La destination idéale dans la somptueuse et historique ville de Strasbourg. <br />
Que ce soit pour une escapade individuelle ou en groupe, un voyage, un projet universitaire,<br />

une réunion de travail, un séminaire d’entreprise, un mariage, une réception ou d’autres événements.
					</p>
					<a href="<?php echo get_home_url(); ?>/presentation" class="white-btn">Présentation</a>
					<a href="#forfaits" class="main-btn">Reservez</a>
				</div>
			</div>
			<!-- /home content -->

		</div>
	</div>
</div>

</header>
<!-- /Header -->


<!-- Présentation -->
<div id="content-about" class="section md-padding bg-grey wow fadeInBottom" data-wow-duration="1s" data-wow-delay="0.2s">

<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">

		<!-- Présentation contenu -->
		<div class="col-md-6 wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
			<div class="section-header">
				<h2 class="title">L'histoire du Château de Pourtalès</h2>
			</div>
			<p>Le Château de Pourtalès fut construit en 1750, sur les bases d’une maison de campagne, par la famille Bussière, une riche famille industrielle de Strasbourg. <br /><br />

Dans les années 1870 à 1914, la comtesse Mélanie et le comte de Pourtalès ont accueilli dans le Château l’aristocratie européenne mais également des diplomates, philosophes et musiciens parmi les plus célèbres d’Europe...</p>
<p><a href="<?php echo get_home_url(); ?>/presentation">LIRE LA SUITE</a></p>
		</div>
		<!-- /Présentation contenu -->

		<!-- Présentation slider -->
		<div class="col-md-6 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">
			<div id="about-slider" class="owl-carousel owl-theme">
				<img class="img-responsive" src="<?php the_field('image_1'); ?>" />
				<img class="img-responsive" src="<?php the_field('image_2'); ?>" alt="">
				<img class="img-responsive" src="<?php the_field('image_3'); ?>" alt="">
				<img class="img-responsive" src="<?php the_field('image_4'); ?>" alt="">
			</div>
		</div>
		<!-- /Présentation slider -->

	</div>
	<!-- /Row -->

</div>
<!-- /Container -->

</div>
<!-- /Présentation -->


<!-- Evenements -->
<div id="event" class="section md-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">

<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">

		<!-- Section header -->
		<div class="section-header text-center">
			<h2 class="title">événements</h2>
		</div>
		<!-- /Section header -->
		<?php
		$args = array(
		'post_type'=> 'evenement',
		'posts_per_page' => 3,
		'orderby' => 'date',
		'order' => 'DESC',
		);
		$wp_query = new WP_Query( $args );
		while ( $wp_query->have_posts() ) :
		$wp_query->the_post(); ?>

		<div class="col-md-12 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">
		<div class="col-md-6 nth-event">
			<?php
$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'extra');
list($url, $width, $height, $is_intermediate) = $thumbnail;
?>
			<a href="<?php the_permalink(); ?>"><div class="about bg-event" style="background-image: url('<?php echo $url; ?>');">
			</div></a>
		</div>
		<div class="col-md-6 event-content">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				<p><a href="<?php the_permalink(); ?>"><?php echo get_the_excerpt(); ?></a></p>
				<a href="<?php the_permalink(); ?>" class="outline-btn">Voir Plus</a>
		</div>
			</div>

		<?php endwhile;
		wp_reset_query();
		?>

	</div>
	<!-- /Row -->

</div>
<!-- /Container -->

</div>
<!-- /Evenements -->



<!-- FORFAITS -->
<div id="forfaits" class="section md-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">

<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">

		<!-- Section header -->
		<div class="section-header text-center">
			<h2 class="title">FORFAITS</h2>
		</div>
		<!-- /Section header -->


		<?php
		$args = array(
		'post_type'=> 'forfaits',
		'posts_per_page' => 1,
		'orderby' => 'date',
		'order' => 'DESC',
		);
		$wp_query = new WP_Query( $args );
		while ( $wp_query->have_posts() ) :
		$wp_query->the_post(); ?>

			<div class="col-sm-4 bg-forfait wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
				<div class="forfaits">
					<div class="forfait-head">
						<span class="forfait-title"><?php the_title(); ?></span>
						<div class="forfait">
							<h3><?php the_field('prix'); ?>€</h3>
						</div>
					</div>
					<ul class="forfait-content">
						<li>
							<p><?php the_field('caracteristique_1'); ?></p>
						</li>
						<li>
							<p><?php the_field('caracteristique_2'); ?></p>
						</li>
						<li>
							<p><?php the_field('caracteristique_3'); ?></p>
						</li>
						<li>
							<p>...</p>
						</li>
						<li class="forfait-btn">
							<a href="<?php the_permalink(); ?>" class="outline-btn">VOIR PLUS</a>
						</li>
						</li>
					</ul>
				</div>
			</div>

			<div class="col-sm-7 bg-forfait wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">
				<?php
				$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'extra');
				list($url, $width, $height, $is_intermediate) = $thumbnail;
				?>
				<a href="<?php the_permalink(); ?>">
				<div class="forfait-img" style="background-image: url('<?php echo $url; ?>');">
				</div>
				</a>
			</div>

		<?php endwhile;
		wp_reset_query();
		?>

<div class="col-sm-12 a-forfait">
<a href="<?php echo get_home_url(); ?>/les-forfaits" class="outline-btn">VOIR TOUT LES FORFAITS</a>
</div>

	</div>
	<!-- Row -->

</div>
<!-- /Container -->

</div>
<!-- /Forfaits -->


<!-- Parallax -->
<div id="img-parallax" class="section sm-padding">

<!-- Background Image -->
<div class="bg-img" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/Chateau_de_Pourtales_01.jpg');">
</div>
<!-- /Background Image -->
</div>
<!-- /Parallax -->





<!-- Actualités -->
<div id="actu" class="section md-padding bg-grey wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">

<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">

		<!-- Section header -->
		<div class="section-header text-center">
			<h2 class="title">Actualités</h2>
		</div>
		<!-- /Section header -->
		<?php
$args = array( 'numberposts' => 5, 'order'=> 'ASC', 'orderby' => 'title' );
$postslist = get_posts( $args );
foreach ($postslist as $post) :  setup_postdata($post); ?>
		<div class="col-md-4">
			<div class="actu">
				<?php
				$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large');
				list($url, $width, $height, $is_intermediate) = $thumbnail;
				?>
				<a href="<?php the_permalink(); ?>">
				<div class="actu-img" style="background-image: url('<?php echo $url; ?>');">
				</div>
				</a>
					<ul class="actu-meta">
						<?php the_date('d-m-Y', '<li><i class="fa fa-clock-o"></i>', '</li>'); ?>
					</ul>
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<p><?php the_excerpt(); ?></p>
					<a href="<?php the_permalink(); ?>">Lire la suite</a>
			</div>
		</div>
		<?php endforeach; ?>

	</div>
	<!-- /Row -->

</div>
<!-- /Container -->

</div>
<!-- /Actualités -->



<!-- Contact -->
<div id="contact" class="section md-padding wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">

<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">

		<!-- Section-header -->
		<div class="section-header text-center">
			<h2 class="title">Contactez-nous</h2>
		</div>
		<!-- /Section-header -->

		<!-- contact -->
		<div class="col-sm-4">
			<div class="contact">
				<i class="fa fa-phone"></i>
				<h3>Téléphone</h3>
				<p><a href="tel:+3388458464">+33 (0) 3 88 45 84 64</a></p>
			</div>
		</div>
		<!-- /contact -->

		<!-- contact -->
		<div class="col-sm-4">
			<div class="contact">
				<i class="fa fa-envelope"></i>
				<h3>Email</h3>
				<p><a href="mailto:info@chateau-pourtales.eu">info@chateau-pourtales.eu</a></p>
			</div>
		</div>
		<!-- /contact -->

		<!-- contact -->
		<div class="col-sm-4">
			<div class="contact">
				<i class="fa fa-map-marker"></i>
				<h3>Adresse</h3>
				<p><a href="https://goo.gl/maps/wz5C7st2iMU2">161, rue Mélanie
F-67000 Strasbourg</a></p>
			</div>
		</div>
		<!-- /contact -->

		<!-- contact form -->
		<div class="col-md-8 col-md-offset-2">
			<form class="contact-form">
				<?php echo do_shortcode( '[contact-form-7 id="5" title="Formulaire de contact 1"]' ); ?>
			</form>
		</div>
		<!-- /contact form -->

	</div>
	<!-- /Row -->

</div>
<!-- /Container -->

</div>
<!-- /Contact -->


<?php get_footer(); ?>
