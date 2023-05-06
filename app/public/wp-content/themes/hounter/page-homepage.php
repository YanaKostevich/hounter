<?php
get_header();
?>

<main id="primary" class="site-main">

	<section class="hero-section">
		<section class="left-content">
			<article class="blur"></article>
			<article class="blur1"></article>
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
													<?php if (get_field('image_woodlandside')) : ?>
														<img src="<?php the_field('image_woodlandside'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_for_woodlandside')) : ?>
															<img src="<?php the_field('icons_for_woodlandside'); ?>" />
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
													<?php if (get_field('image_the_old_lighthouse')) : ?>
														<img src="<?php the_field('image_the_old_lighthouse'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_for_the_old_lighthouse')) : ?>
															<img src="<?php the_field('icons_for_the_old_lighthouse'); ?>" />
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
													<?php if (get_field('image_cosmos_house')) : ?>
														<img src="<?php the_field('image_cosmos_house'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_cosmos_house')) : ?>
															<img src="<?php the_field('icons_cosmos_house'); ?>" />
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
														$image = get_field('avatar_cosmos');
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
													<?php if (get_field('image_the_old_lighthouse')) : ?>
														<img src="<?php the_field('image_the_old_lighthouse'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_for_the_old_lighthouse')) : ?>
															<img src="<?php the_field('icons_for_the_old_lighthouse'); ?>" />
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
			<div class="tab-pane fade" id="villa-tab-pane" role="tabpanel" aria-labelledby="villa-tab" tabindex="0">
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
													<?php if (get_field('image_woodlandside')) : ?>
														<img src="<?php the_field('image_woodlandside'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_for_woodlandside')) : ?>
															<img src="<?php the_field('icons_for_woodlandside'); ?>" />
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
													<?php if (get_field('image_the_old_lighthouse')) : ?>
														<img src="<?php the_field('image_the_old_lighthouse'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_for_the_old_lighthouse')) : ?>
															<img src="<?php the_field('icons_for_the_old_lighthouse'); ?>" />
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
													<?php if (get_field('image_cosmos_house')) : ?>
														<img src="<?php the_field('image_cosmos_house'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_cosmos_house')) : ?>
															<img src="<?php the_field('icons_cosmos_house'); ?>" />
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
														$image = get_field('avatar_cosmos');
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
													<?php if (get_field('image_the_old_lighthouse')) : ?>
														<img src="<?php the_field('image_the_old_lighthouse'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_for_the_old_lighthouse')) : ?>
															<img src="<?php the_field('icons_for_the_old_lighthouse'); ?>" />
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
			<div class="tab-pane fade" id="apartment-tab-pane" role="tabpanel" aria-labelledby="apartment-tab" tabindex="0">
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
													<?php if (get_field('image_woodlandside')) : ?>
														<img src="<?php the_field('image_woodlandside'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_for_woodlandside')) : ?>
															<img src="<?php the_field('icons_for_woodlandside'); ?>" />
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
													<?php if (get_field('image_the_old_lighthouse')) : ?>
														<img src="<?php the_field('image_the_old_lighthouse'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_for_the_old_lighthouse')) : ?>
															<img src="<?php the_field('icons_for_the_old_lighthouse'); ?>" />
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
													<?php if (get_field('image_cosmos_house')) : ?>
														<img src="<?php the_field('image_cosmos_house'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_cosmos_house')) : ?>
															<img src="<?php the_field('icons_cosmos_house'); ?>" />
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
														$image = get_field('avatar_cosmos');
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
													<?php if (get_field('image_the_old_lighthouse')) : ?>
														<img src="<?php the_field('image_the_old_lighthouse'); ?>" />
													<?php endif; ?>
												</div>
												<div class="text_absolute">
													<div class="icons">
														<?php if (get_field('icons_for_the_old_lighthouse')) : ?>
															<img src="<?php the_field('icons_for_the_old_lighthouse'); ?>" />
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
		</div>
	</div>

	<div class="ready">
		<article class="small_title">
			<p><?php the_field('small_title_ready'); ?></p>
		</article>
		<article class="blur-right-top"></article>
		<article class="blur-right-bottom"></article>
		<div class="carousel-2 slide" data-bs-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="body_ready_slider">
						<section class="right">
							<section class="text">
								<h2> <?php the_field('title_ready'); ?></h2>
								<h3> <?php the_field('subtitle_ready'); ?></h3>
								<section class="detail">
									<p><?php the_field('house_detail_title'); ?></p>
									<section class="house_detail">
										<section class="icons_text_1">
											<?php if (get_field('house_detail_icons')) : ?>
												<img src="<?php the_field('house_detail_icons'); ?>" />
											<?php endif; ?>
											<p><?php the_field('house_detail_text'); ?></p>
										</section>

										<section class="icons_text_2">
											<?php if (get_field('house_detail_icons_1')) : ?>
												<img src="<?php the_field('house_detail_icons_1'); ?>" />
											<?php endif; ?>
											<p><?php the_field('house_detail_text_1'); ?></p>
										</section>

										<section class="icons_text_3">
											<?php if (get_field('house_detail_icons_2')) : ?>
												<img src="<?php the_field('house_detail_icons_2'); ?>" />
											<?php endif; ?>
											<p><?php the_field('house_detail_text_2'); ?></p>
										</section>

										<section class="icons_text_4">
											<?php if (get_field('house_detail_icons_3')) : ?>
												<img src="<?php the_field('house_detail_icons_3'); ?>" />
											<?php endif; ?>
											<p><?php the_field('house_detail_text_3'); ?></p>
										</section>
									</section>
									<section class="contact">
										<section class="info_employee">
											<?php if (get_field('employee_avatar')) : ?>
												<img src="<?php the_field('employee_avatar'); ?>" />
											<?php endif; ?>
											<article class="name_position">
												<h6><?php the_field('employee_name'); ?></h6>
												<p><?php the_field('employee_position'); ?></p>
											</article>
										</section>
										<button class="btn-contact">
											<?php if (get_field('button_contact_icon')) : ?>
												<img src="<?php the_field('button_contact_icon'); ?>" />
											<?php endif; ?>
											<?php
											$link = get_field('link_contact_me');
											if ($link) : ?>
												<a class="button" href="<?php echo esc_url($link); ?>">Contact Now</a>
											<?php endif; ?>
										</button>
									</section>
								</section>
							</section>
						</section>
						<section class="left">
							<section class="main_img_video">
								<section class="img-modal" data-bs-toggle="modal" href="#exampleModalToggle" role="button">
									<div class="video">
										<?php if (get_field('left_slider_img')) : ?>
											<img src="<?php the_field('left_slider_img'); ?>" />
										<?php endif; ?>
									</div>
								</section>
							</section>
							<section class="main_img">
								<section class="img-modal_1" data-bs-toggle="modal" href="#exampleModalToggle2" role="button">
									<div class="video_img_1">
										<div class="gallery-img">
											<?php if (get_field('photo_for_slider_left')) : ?>
												<img src="<?php the_field('photo_for_slider_left'); ?>" />
											<?php endif; ?>
										</div>
									</div>
								</section>
								<section class="img-modal" data-bs-toggle="modal" href="#exampleModalToggle3" role="button">
									<div class="video_img">
										<div class="gallery-img-1">
											<?php if (get_field('photo_for_slider_left_1')) : ?>
												<img src="<?php the_field('photo_for_slider_left_1'); ?>" />
											<?php endif; ?>
										</div>
									</div>
								</section>
								<section class="img-modal" data-bs-toggle="modal" href="#exampleModalToggle4" role="button">
									<div class="video_img">
										<div class="gallery-img-2">
											<?php if (get_field('photo_for_slider_left_2')) : ?>
												<img src="<?php the_field('photo_for_slider_left_2'); ?>" />
											<?php endif; ?>
										</div>
									</div>
								</section>
							</section>



							<div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content" id="exampleModalToggleLabel">
										<div class="embed-container">
											<?php the_field('video_left'); ?>
										</div>
										<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
									</div>
								</div>
							</div>
							<div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content" id="exampleModalToggleLabel2">
										<?php if (get_field('photo_for_slider_left')) : ?>
											<img src="<?php the_field('photo_for_slider_left'); ?>" />
										<?php endif; ?>
										<div class="button">
											<button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
											<button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
										</div>
									</div>
								</div>
							</div>
							<div class="modal fade" id="exampleModalToggle3" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content" id="exampleModalToggleLabel2">
										<?php if (get_field('photo_for_slider_left_1')) : ?>
											<img src="<?php the_field('photo_for_slider_left_1'); ?>" />
										<?php endif; ?>
										<div class="button">
											<button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
											<button class="btn btn-primary" data-bs-target="#exampleModalToggle4" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
										</div>
									</div>
								</div>
							</div>
							<div class="modal fade" id="exampleModalToggle4" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
								<div class="modal-dialog modal-dialog-centered">
									<div class="modal-content" id="exampleModalToggleLabel2">
										<?php if (get_field('photo_for_slider_left_2')) : ?>
											<img src="<?php the_field('photo_for_slider_left_2'); ?>" />
										<?php endif; ?>
										<button class="btn btn-primary" data-bs-target="#exampleModalToggle3" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
									</div>
								</div>
							</div>

						</section>
					</div>

				</div>
				<div class="carousel-item ">
					<div class="body_ready_slider">
						<section class="right">
							<section class="text">
								<h2> <?php the_field('title_ready'); ?></h2>
								<h3> <?php the_field('subtitle_ready'); ?></h3>
								<section class="detail">
									<p><?php the_field('house_detail_title'); ?></p>
									<section class="house_detail">
										<section class="icons_text_1">
											<?php if (get_field('house_detail_icons')) : ?>
												<img src="<?php the_field('house_detail_icons'); ?>" />
											<?php endif; ?>
											<p><?php the_field('house_detail_text'); ?></p>
										</section>

										<section class="icons_text_2">
											<?php if (get_field('house_detail_icons_1')) : ?>
												<img src="<?php the_field('house_detail_icons_1'); ?>" />
											<?php endif; ?>
											<p><?php the_field('house_detail_text_1'); ?></p>
										</section>

										<section class="icons_text_3">
											<?php if (get_field('house_detail_icons_2')) : ?>
												<img src="<?php the_field('house_detail_icons_2'); ?>" />
											<?php endif; ?>
											<p><?php the_field('house_detail_text_2'); ?></p>
										</section>

										<section class="icons_text_4">
											<?php if (get_field('house_detail_icons_3')) : ?>
												<img src="<?php the_field('house_detail_icons_3'); ?>" />
											<?php endif; ?>
											<p><?php the_field('house_detail_text_3'); ?></p>
										</section>
									</section>
									<section class="contact">
										<section class="info_employee">
											<?php if (get_field('employee_avatar_slide_two')) : ?>
												<img src="<?php the_field('employee_avatar_slide_two'); ?>" />
											<?php endif; ?>
											<article class="name_position">
												<h6><?php the_field('employee_name_slide_two'); ?></h6>
												<p><?php the_field('employee_position_slide_two'); ?></p>
											</article>
										</section>
										<button class="btn-contact">
											<?php if (get_field('button_contact_icon')) : ?>
												<img src="<?php the_field('button_contact_icon'); ?>" />
											<?php endif; ?>
											<?php
											$link = get_field('link_contact_me');
											if ($link) : ?>
												<a class="button" href="<?php echo esc_url($link); ?>">Contact Now</a>
											<?php endif; ?>
										</button>
									</section>
								</section>
							</section>
						</section>
						<section class="left">
							<section class="main_img_video">
								<section class="img-modal" data-bs-toggle="modal" href="#exampleModalToggle5" role="button">
									<div class="video">
										<?php if (get_field('left_slider_img')) : ?>
											<img src="<?php the_field('left_slider_img'); ?>" />
										<?php endif; ?>
									</div>
								</section>
							</section>
							<section class="main_img">
								<section class="img-modal_1" data-bs-toggle="modal" href="#exampleModalToggle6" role="button">
									<div class="video_img_1">
										<div class="gallery-img">
											<?php if (get_field('photo_for_slider_left')) : ?>
												<img src="<?php the_field('photo_for_slider_left'); ?>" />
											<?php endif; ?>
										</div>
									</div>
								</section>
								<section class="img-modal" data-bs-toggle="modal" href="#exampleModalToggle8" role="button">
									<div class="video_img">
										<div class="gallery-img-2">
											<?php if (get_field('photo_for_slider_left_2')) : ?>
												<img src="<?php the_field('photo_for_slider_left_2'); ?>" />
											<?php endif; ?>
										</div>
									</div>
								</section>
								<section class="img-modal" data-bs-toggle="modal" href="#exampleModalToggle7" role="button">
									<div class="video_img">
										<div class="gallery-img-1">
											<?php if (get_field('photo_for_slider_left_1')) : ?>
												<img src="<?php the_field('photo_for_slider_left_1'); ?>" />
											<?php endif; ?>
										</div>
									</div>
								</section>

								<div class="modal fade" id="exampleModalToggle5" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content" id="exampleModalToggleLabel">
											<div class="embed-container">
												<?php the_field('video_left'); ?>
											</div>
											<button class="btn btn-primary" data-bs-target="#exampleModalToggle6" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
										</div>
									</div>
								</div>
								<div class="modal fade" id="exampleModalToggle6" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content" id="exampleModalToggleLabel2">
											<?php if (get_field('photo_for_slider_left')) : ?>
												<img src="<?php the_field('photo_for_slider_left'); ?>" />
											<?php endif; ?>
											<div class="button">
												<button class="btn btn-primary" data-bs-target="#exampleModalToggle5" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
												<button class="btn btn-primary" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="exampleModalToggle7" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content" id="exampleModalToggleLabel2">
											<?php if (get_field('photo_for_slider_left_1')) : ?>
												<img src="<?php the_field('photo_for_slider_left_1'); ?>" />
											<?php endif; ?>
											<div class="button">
												<button class="btn btn-primary" data-bs-target="#exampleModalToggle6" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
												<button class="btn btn-primary" data-bs-target="#exampleModalToggle8" data-bs-toggle="modal" data-bs-dismiss="modal">Next</button>
											</div>
										</div>
									</div>
								</div>
								<div class="modal fade" id="exampleModalToggle8" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
									<div class="modal-dialog modal-dialog-centered">
										<div class="modal-content" id="exampleModalToggleLabel2">
											<?php if (get_field('photo_for_slider_left_2')) : ?>
												<img src="<?php the_field('photo_for_slider_left_2'); ?>" />
											<?php endif; ?>
											<button class="btn btn-primary" data-bs-target="#exampleModalToggle7" data-bs-toggle="modal" data-bs-dismiss="modal">Previous</button>
										</div>
									</div>
								</div>
							</section>
						</section>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div class="see_review">
		<article class="small_title">
			<article class="line"></article>
			<p><?php the_field('small_title_review'); ?></p>
			<h2> <?php the_field('title_review'); ?></h2>
		</article>
		<div class="carousel-3 slide" data-bs-ride="carousel">

			<div class="text-center my-3">
				<div class="row mx-auto my-auto justify-content-center">
					<ol class="carousel-indicators">
						<li data-bs-target=".carousel-3" data-bs-slide-to="0" class="active" onclick="carouselSlide(0)"></li>
						<li data-bs-target=".carousel-3" data-bs-slide-to="1" onclick="carouselSlide(1)"></li>
						<li data-bs-target=".carousel-3" data-bs-slide-to="2" onclick="carouselSlide(2)"></li>
					</ol>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="col-md-3">
								<div class="body_review_slider">
									<section class="content_slider_img">
										<?php if (get_field('main_img_slider_1')) : ?>
											<img src="<?php the_field('main_img_slider_1'); ?>" />
										<?php endif; ?>
									</section>
									<section class="content_slider">
										<section class="text">
											<h4> <?php the_field('title_review_slider_1'); ?></h4>
											<p> <?php the_field('subtitle_review_slider_1'); ?></p>

											<section class="employee">
												<section class="info">
													<article>
														<?php if (get_field('ava_employee_slider_1')) : ?>
															<img src="<?php the_field('ava_employee_slider_1'); ?>" />
														<?php endif; ?>
													</article>
													<article class="name">
														<h5><?php the_field('name_employee_slider_1'); ?></h5>
														<h6><?php the_field('position_employee_slider_1'); ?></h6>
													</article>
												</section>
												<section class="star">
													<article class="icons">
														<?php if (get_field('icons_star_1')) : ?>
															<img src="<?php the_field('icons_star_1'); ?>" />
														<?php endif; ?>
													</article>
													<h3><?php the_field('rate_icons_slider_1'); ?></h3>
												</section>

											</section>
										</section>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-md-3">
								<div class="body_review_slider">
									<section class="content_slider_img">
										<?php if (get_field('main_img_slider_2')) : ?>
											<img src="<?php the_field('main_img_slider_2'); ?>" />
										<?php endif; ?>
									</section>
									<section class="content_slider">
										<section class="text">
											<h4> <?php the_field('title_review_slider_2'); ?></h4>
											<p> <?php the_field('subtitle_review_slider_2'); ?></p>

											<section class="employee">
												<section class="info">
													<article>
														<?php if (get_field('ava_employee_slider_2')) : ?>
															<img src="<?php the_field('ava_employee_slider_2'); ?>" />
														<?php endif; ?>
													</article>
													<article class="name">
														<h5><?php the_field('name_employee_slider_2'); ?></h5>
														<h6><?php the_field('position_employee_slider_2'); ?></h6>
													</article>
												</section>
												<section class="star">
													<article class="icons">
														<?php if (get_field('icons_star_1')) : ?>
															<img src="<?php the_field('icons_star_2'); ?>" />
														<?php endif; ?>
													</article>
													<h3><?php the_field('rate_icons_slider_2'); ?></h3>
												</section>

											</section>
										</section>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="col-md-3">
								<div class="body_review_slider">
									<section class="content_slider_img">
										<?php if (get_field('main_img_slider_1')) : ?>
											<img src="<?php the_field('main_img_slider_3'); ?>" />
										<?php endif; ?>
									</section>
									<section class="content_slider">
										<section class="text">
											<h4> <?php the_field('title_review_slider_3'); ?></h4>
											<p> <?php the_field('subtitle_review_slider_3'); ?></p>

											<section class="employee">
												<section class="info">
													<article>
														<?php if (get_field('ava_employee_slider_3')) : ?>
															<img src="<?php the_field('ava_employee_slider_3'); ?>" />
														<?php endif; ?>
													</article>
													<article class="name">
														<h5><?php the_field('name_employee_slider_3'); ?></h5>
														<h6><?php the_field('position_employee_slider_3'); ?></h6>
													</article>
												</section>
												<section class="star">
													<article class="icons">
														<?php if (get_field('icons_star_3')) : ?>
															<img src="<?php the_field('icons_star_3'); ?>" />
														<?php endif; ?>
													</article>
													<h3><?php the_field('rate_icons_slider_3'); ?></h3>
												</section>

											</section>
										</section>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- Controls -->

		</div>
	</div>

	<section class="buying_home">
		<article class="blur-left-top"></article>
		<article class="blur-left-bottom"></article>
		<article class="small_title">
			<article class="line"></article>
			<p><?php the_field('small_title_partnership'); ?></p>
			<h2> <?php the_field('title_partnership'); ?></h2>
			<button class="btn-more-article">
				<?php
				$link = get_field('more_artikel_button');
				if ($link) : ?>
					<a class="button" href="<?php echo esc_url($link); ?>">More Artikel</a>
				<?php endif; ?>
			</button>
		</article>
		<section class="post-all">
			<?php global $post;
			$args = array('numberposts' => 4, 'category' => 1, 'orderby' => 'date');
			$myposts = get_posts($args);
			foreach ($myposts as $post) {
				setup_postdata($post); ?>
				<section class="post">
					<article class="post-img"><?php the_post_thumbnail('thumbnail'); ?></article>
					<section class="post-txt">
						<article class="author">
							<?php if (get_field('avatar_author_posts')) : ?>
								<img src="<?php the_field('avatar_author_posts'); ?>" />
							<?php endif; ?>
							<h4><?php the_field('name_author'); ?></h4>
						</article>
						<h3><?php the_title(); ?></h3> <!--<a href="<?php the_permalink(); ?>"> </a>-->
						<article class="post-date">
							<?php if (get_field('icons_time')) : ?>
								<img src="<?php the_field('icons_time'); ?>" />
							<?php endif; ?>
							<p>
								<?php echo human_time_diff(get_the_time('U'), current_time('timestamp')) . ' read'; ?>
								|
								<?php echo get_the_date('j F Y'); ?>
							</p>

						</article>
					</section>
				</section> <?php }
						wp_reset_postdata(); ?>
		</section>
	</section>

	<section class="subscribe">

		<article class="background-left"></article>
		<article class="background-right"></article>

		<section class="subscribe-icons-left">
			<figure class="icons-1">
				<?php if (get_field('img_1')) : ?>
					<img src="<?php the_field('img_1'); ?>" />
				<?php endif; ?>
			</figure>
			<figure class="icons-2">
				<?php if (get_field('img_2')) : ?>
					<img src="<?php the_field('img_2'); ?>" />
				<?php endif; ?>
			</figure>
			<figure class="icons-3">
				<?php if (get_field('img_3')) : ?>
					<img src="<?php the_field('img_3'); ?>" />
				<?php endif; ?>
			</figure>
			<figure class="icons-4">
				<?php if (get_field('img_4')) : ?>
					<img src="<?php the_field('img_4'); ?>" />
				<?php endif; ?>
			</figure>
		</section>

		<section class="subscribe-icons-right">
			<figure class="icons-5">
				<?php if (get_field('img_5')) : ?>
					<img src="<?php the_field('img_5'); ?>" />
				<?php endif; ?>
			</figure>
			<figure class="icons-6">
				<?php if (get_field('img_6')) : ?>
					<img src="<?php the_field('img_6'); ?>" />
				<?php endif; ?>
			</figure>
			<figure class="icons-7">
				<?php if (get_field('img_7')) : ?>
					<img src="<?php the_field('img_7'); ?>" />
				<?php endif; ?>
			</figure>
			<figure class="icons-8">
				<?php if (get_field('img_8')) : ?>
					<img src="<?php the_field('img_8'); ?>" />
				<?php endif; ?>
			</figure>
		</section>

		<section class="subscribe_info">
			<h2> <?php the_field('subscribe_info_title'); ?></h2>
			<article class="mail">
				<?php echo do_shortcode('[contact-form-7 id="355" title="Contact form 1"]'); ?>
			</article>

		</section>
	</section>

	<!-- <div id="carousel-example-generic" class="carousel slide"> -->
	<!-- Indicators -->
	<!-- <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
  </ol> -->

	<!-- Wrapper for slides -->
	<!-- <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="https://unsplash.it/1400/600/?random">
    </div>
    <div class="item">
      <img src="https://unsplash.it/1401/600/?random">
    </div>
    <div class="item">
      <img src="https://unsplash.it/1400/601/?random">
    </div>
    <div class="item">
      <img src="https://unsplash.it/1401/601/?random">
    </div>Í
  </div> -->

	<!-- Controls -->

	</div>

</main><!-- #main -->

<?php
get_sidebar();
get_footer();
