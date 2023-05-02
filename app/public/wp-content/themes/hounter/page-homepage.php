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
						<div class="carousel-1 slide" data-bs-ride="carousel" data-bs-interval="3000"> <!-- carousel -->
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
											<div class="card-img">
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
											<div class="card-img">
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
											<div class="card-img">
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
											<div class="card-img">
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

	<div class="recommendation">
		<div class="small_title">
			<p><?php the_field('small_title_recommendation'); ?></p>
		</div>
		<div class="tabs_recommendation">
			<div class="title_recommendation">
				<h2> <?php the_field('title_recomendation'); ?></h2>
			</div>
			<div class="tabs">
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item" role="presentation">
						<button class="nav-link active" id="house-tab" data-bs-toggle="tab" data-bs-target="#house-tab-pane" type="button" role="tab" aria-controls="house-tab-pane" aria-selected="true">
							<?php
							$image = get_field('houses_icon');
							if (!empty($image)) : ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							<p><?php the_field('house_text'); ?></p>
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="villa-tab" data-bs-toggle="tab" data-bs-target="#villa-tab-pane" type="button" role="tab" aria-controls="villa-tab-pane" aria-selected="false">
							<?php
							$image = get_field('villa_icon');
							if (!empty($image)) : ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							<p><?php the_field('villa_text'); ?></p>
						</button>
					</li>
					<li class="nav-item" role="presentation">
						<button class="nav-link" id="apartment-tab" data-bs-toggle="tab" data-bs-target="#apartment-tab-pane" type="button" role="tab" aria-controls="apartment-tab-pane" aria-selected="false">
							<?php
							$image = get_field('apartment_icon');
							if (!empty($image)) : ?>
								<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
							<?php endif; ?>
							<p><?php the_field('apartment_text'); ?></p>
						</button>
					</li>
				</ul>
			</div>
			<div class="navigation">
				<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				</button>
				<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
				</button>
			</div>
		</div>


		<div class="tab-content" id="myTabContent">
			<div class="tab-pane fade show active" id="house-tab-pane" role="tabpanel" aria-labelledby="house-tab" tabindex="0">
				<div class="text-center my-4">
					<div class="row mx-auto my-auto justify-content-center">
						<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
							<div class="carousel-inner">
								<div class="carousel-item active">
									<div class="col-md-4">
										<div class="body">
											<div class="body-img">
												<div class="img">
													<?php
													$image = get_field('image_house');
													if (!empty($image)) : ?>
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php
														$image = get_field('icons_for_house');
														if (!empty($image)) : ?>
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
													<div class="text_houses"><?php the_field('title_icons'); ?></div>
												</div>

											</div>
											<div class="card-img">
												<div class="title_price">
													<p class="title"><?php echo esc_html(get_field('title_roselands_house')); ?></p>
													<p class="price">$<?php echo esc_html(get_field('price_roselands_house')); ?></p>
												</div>
												<div class="person">
													<div class="avatar">
														<?php
														$image = get_field('avatar');
														if (!empty($image)) : ?>
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
													<div class="name_city">
														<div class="name">
															<?php the_field('name'); ?>
														</div>
														<div class="city">
															<?php the_field('city'); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-md-4">
										<div class="body">
											<div class="body-img">
												<div class="img">
													<?php
													$image = get_field('image_woodlandside');
													if (!empty($image)) : ?>
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php
														$image = get_field('icons_for_woodlandside');
														if (!empty($image)) : ?>
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
													<div class="text_wood"><?php the_field('title_icons_wood'); ?></div>
												</div>

											</div>
											<div class="card-img">
												<div class="title_price">
													<p class="title"><?php echo esc_html(get_field('title_woodlandside')); ?></p>
													<p class="price">$<?php echo esc_html(get_field('price_woodlandside')); ?></p>
												</div>
												<div class="person">
													<div class="avatar">
														<?php
														$image = get_field('avatar_wood');
														if (!empty($image)) : ?>
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
													<div class="name_city">
														<div class="name">
															<?php the_field('name_wood'); ?>
														</div>
														<div class="city">
															<?php the_field('city_wood'); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-md-4">
										<div class="body">
											<div class="body-img">
												<div class="img">
													<?php
													$image = get_field('image_the_old_lighthouse');
													if (!empty($image)) : ?>
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php
														$image = get_field('icons_for_the_old_lighthouse');
														if (!empty($image)) : ?>
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
													<div class="text_light"><?php the_field('title_icons_light'); ?></div>
												</div>
											</div>
											<div class="card-img">
												<div class="title_price">
													<p class="title"><?php echo esc_html(get_field('title_the_old_lighthouse')); ?></p>
													<p class="price">$<?php echo esc_html(get_field('price_the_old_lighthouse')); ?></p>
												</div>
												<div class="person">
													<div class="avatar">
														<?php
														$image = get_field('avatar_light');
														if (!empty($image)) : ?>
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
													<div class="name_city">
														<div class="name_light">
															<?php the_field('name_light'); ?>
														</div>
														<div class="city">
															<?php the_field('city'); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-md-4">
										<div class="body">
											<div class="body-img">
												<div class="img">
													<?php
													$image = get_field('image_cosmos_house');
													if (!empty($image)) : ?>
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php
														$image = get_field('icons_cosmos_house');
														if (!empty($image)) : ?>
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
													<div class="text_cosmos"><?php the_field('title_icons_cosmos'); ?></div>
												</div>
											</div>
											<div class="card-img">
												<div class="title_price">
													<p class="title"><?php echo esc_html(get_field('title_cosmos _house')); ?></p>
													<p class="price">$<?php echo esc_html(get_field('price_cosmos _house')); ?></p>
												</div>
												<div class="person">
													<div class="avatar_cosmos">
														<?php
														$image = get_field('avatar');
														if (!empty($image)) : ?>
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
													<div class="name_city">
														<div class="name">
															<?php the_field('name_cosmos'); ?>
														</div>
														<div class="city">
															<?php the_field('city_cosmos'); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="carousel-item">
									<div class="col-md-4">
										<div class="body">
											<div class="body-img">
												<div class="img">
													<?php
													$image = get_field('image_the_old_lighthouse');
													if (!empty($image)) : ?>
														<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php
														$image = get_field('icons_for_the_old_lighthouse');
														if (!empty($image)) : ?>
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
													<div class="text_light"><?php the_field('title_icons_light'); ?></div>
												</div>
											</div>
											<div class="card-img">
												<div class="title_price">
													<p class="title"><?php echo esc_html(get_field('title_the_old_lighthouse')); ?></p>
													<p class="price">$<?php echo esc_html(get_field('price_the_old_lighthouse')); ?></p>
												</div>
												<div class="person">
													<div class="avatar">
														<?php
														$image = get_field('avatar_light');
														if (!empty($image)) : ?>
															<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
														<?php endif; ?>
													</div>
													<div class="name_city">
														<div class="name">
															<?php the_field('name_light'); ?>
														</div>
														<div class="city">
															<?php the_field('city_light'); ?>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>
			<div class="tab-pane fade" id="villa-tab-pane" role="tabpanel" aria-labelledby="villa-tab" tabindex="0">ФФФФ</div>
			<div class="tab-pane fade" id="apartment-tab-pane" role="tabpanel" aria-labelledby="apartment-tab" tabindex="0">ШШШШ</div>
		</div>
	</div>


</main><!-- #main -->

<?php
get_sidebar();
get_footer();
