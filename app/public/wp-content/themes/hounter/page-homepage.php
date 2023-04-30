<?php
get_header();
?>

<main id="primary" class="site-main">
	<section class="hero-section">
		<section class="left-content">
			<h1> <?php the_field('title'); ?></h1>
			<h3> <?php the_field('subtitle'); ?></h3>
			<section class="search-box">
				<button class="btn-location"></button>
				<button class="btn-search">Search</button>
				<input type="text" class="input-search" placeholder="Search for the location you want!">
			</section>
			<section class="partnership">
				<h4><?php the_field('partnership'); ?></h4>
				<figure>
					<?php
					$images = get_field('img_our_partnership');
					if ($images) : ?>
						<?php foreach ($images as $image) : ?>
							<img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />

							<p><?php echo esc_html($image['caption']); ?></p>
						<?php endforeach; ?>
					<?php endif; ?>

				</figure>
			</section>
		</section>
		<section class="right-content">

			<?php
			$image = get_field('image_for_right_section');
			if (!empty($image)) : ?>
				<img class="img-right-content" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
			<div class="slider-right-content">
				<div class="text-center my-3">
					<div class="row mx-auto my-auto justify-content-center">
						<div id="recipeCarousel" class="carousel slide" data-bs-ride="" data-bs-interval="3000"> <!-- carousel -->
							<div class="carousel-inner" role="listbox">
								<div class="carousel-item active">
									<div class="col-md-3">
										<div class="card">
											<div class="card-img">
												<?php
												$image = get_field('people_image_for_info_slider');
												if (!empty($image)) : ?>
													<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>
											</div>
											<div class="card-img-overlay">
												<h5>
													<?php the_field('people_title_for_info_slider'); ?>
												</h5>
												<h6>
													<?php the_field('people_subtitle_for_info_slider'); ?>
												</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-md-3">
										<div class="card">
											<div class="card-img">
												<?php
												$image = get_field('house_image_for_info_slider');
												if (!empty($image)) : ?>
													<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>
											</div>
											<div class="card-img-overlay">
												<h5>
													<?php the_field('house_title_for_info_slider'); ?>
												</h5>
												<h6>
													<?php the_field('house_subtitle_for_info_slider'); ?>
												</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-md-3">
										<div class="card">
											<div class="card-img">
												<?php
												$image = get_field('clients_image_for_info_slider');
												if (!empty($image)) : ?>
													<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>
											</div>
											<div class="card-img-overlay">
												<h5>
													<?php the_field('clients_title_for_info_slider'); ?>
												</h5>
												<h6>
													<?php the_field('clients_subtitle_for_info_slider'); ?>
												</h6>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-md-3">
										<div class="card">
											<div class="card-img">
												<?php
												$image = get_field('house_image_for_info_slider');
												if (!empty($image)) : ?>
													<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
												<?php endif; ?>
											</div>
											<div class="card-img-overlay">
												<h5>
													<?php the_field('house_title_for_info_slider'); ?>
												</h5>
												<h6>
													<?php the_field('house_subtitle_for_info_slider'); ?>
												</h6>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>
	</section>



</main><!-- #main -->

<?php
get_sidebar();
get_footer();
