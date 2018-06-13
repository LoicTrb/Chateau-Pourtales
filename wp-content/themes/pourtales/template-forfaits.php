<?php /* Template Name: Forfaits */ get_header(); ?>

<!-- home wrapper -->
<div class="home-wrapper">
	<div class="container">
		<div class="row">

			<!-- home content -->
			<div class="col-md-10 col-md-offset-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="home-content">
					<h1 class="white-text">FORFAITS</h1>
					<a href="#forfaits" class="previous">Page précédente</a>
				</div>
			</div>
			<!-- /home content -->

		</div>
	</div>
</div>
<!-- /home wrapper -->

</header>
<!-- /Header -->


<!-- Forfaits -->
<div id="forfaits" class="section md-padding wow fadeInBottom" data-wow-duration="1s" data-wow-delay="0.2s">

<!-- Container -->
<div class="container">

	<!-- Row -->
	<div class="row">

		<?php
		$args = array(
		'post_type'=> 'forfaits',
		'posts_per_page' => -1,
		'orderby' => 'date',
		'order' => 'DESC',
		);
		$wp_query = new WP_Query( $args );
		while ( $wp_query->have_posts() ) :
		$wp_query->the_post(); ?>
<div class="col-sm-12">
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
</div>
		<?php endwhile;
		wp_reset_query();
		?>

	</div>
	<!-- Row -->

</div>
<!-- /Container -->

</div>
<!-- /Forfaits -->


<?php get_footer(); ?>
