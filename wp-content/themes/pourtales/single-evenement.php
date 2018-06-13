<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="home-content">
							<h2 class="white-text">ÉVÉNEMENT</h2>
							<h3 class="white-text"><?php the_title(); ?></h3>
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


		<!-- Présentation -->
		<div id="content-about" class="section md-padding bg-grey wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.2s">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row">


					<div class="col-md-7 txt wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2 class="title"><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>
					<!-- Présentation slider -->
					<div class="col-md-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">
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

	<?php endwhile; ?>

	<?php else: ?>

	<?php endif; ?>

<?php get_footer(); ?>
