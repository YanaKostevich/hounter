<?php
get_header();
?>

<main id="primary" class="site-main">
	<section class="hero-section">
		<article class="left-content">
			<h1> <?php the_field('title'); ?></h1>
			<h3> <?php the_field('subtitle'); ?></h5>
		</article>
	</section>
	<div class="container">
  <input type="text" placeholder="Search...">
  <div class="search"></div>
</div>
	<section class="hero-section">
		<article class="left-content">
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
		</article>
	</section>
	<section class="hero-section">
		<article class="right-content">
			<?php
			$image = get_field('image_for_right_section');
			if (!empty($image)) : ?>
				<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			<?php endif; ?>
		</article>

	</section>


</main><!-- #main -->


<?php
get_sidebar();
get_footer();
