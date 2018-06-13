<?php /* Template Name: Presentation */ get_header(); ?>

<!-- home wrapper -->
<div class="home-wrapper">
	<div class="container">
		<div class="row">

			<!-- home content -->
			<div class="col-md-10 col-md-offset-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
				<div class="home-content">
					<h2 class="white-text">PRESENTATION</h2>
					<h3 class="white-text">L'histoire du Château de Pourtalès</h3>
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

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- Présentation -->
		<div id="content-about" class="section md-padding bg-grey wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">

	<!-- Container -->
	<div class="container">

		<!-- Row -->
		<div class="row">

			<div class="col-md-12 txt">
				<?php the_content(); ?>
			</div>

		</div>
		<!-- /Row -->

	</div>
	<!-- /Container -->

</div>
<!-- /Présentation -->

<?php endwhile; ?>

<?php else: ?>

<?php endif; ?>
<?php get_footer(); ?>
