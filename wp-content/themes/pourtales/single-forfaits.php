<?php get_header(); ?>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
						<div class="home-content">
							<h2 class="white-text">FORFAITS</h2>
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
		<div id="content-about" class="section md-padding bg-grey wow fadeInBottom" data-wow-duration="1s" data-wow-delay="0.2s">

			<!-- Container -->
			<div class="container">

				<!-- Row -->
				<div class="row">

					<div class="col-md-7 txt wow fadeInLeft" data-wow-duration="1s" data-wow-delay="0.2s">
						<h2 class="title"><?php the_title(); ?></h2>
						<?php the_content(); ?>
					</div>

					<div class="col-md-5 wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.7s">
						<?php
						$thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'extra');
						list($url, $width, $height, $is_intermediate) = $thumbnail;
						?>
						<div class="forfait-img" style="background-image: url('<?php echo $url; ?>');">
						</div>
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
