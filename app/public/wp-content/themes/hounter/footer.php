<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hounter
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">

		<article class="blur-right-bottom"></article>
		<article class="blur-center-bottom"></article>
		
		<section class="footer">
			<section class="site-branding">
				<article class="logo_title">
					<?php the_custom_logo() ?>
					<p><?php echo wp_get_document_title(); ?></p>
				</article>

				<section class="description">
					<p><?php the_field('description'); ?></p>
					<article class="social-icons">
						<a href="<?php echo get_field('link_facebook'); ?>" target="_blank"><img src="<?php echo get_field('facebook'); ?>"></a>
						<a href="<?php echo get_field('link_twitter'); ?>" target="_blank"><img src="<?php echo get_field('twitter'); ?>"></a>
						<a href="<?php echo get_field('link_instagram'); ?>" target="_blank"><img src="<?php echo get_field('instagram'); ?>"></a>
					</article>
				</section>
			</section>
			<section class="property">
				<h6> <?php the_field('title_property'); ?></h6>
				<?php wp_nav_menu('menu=Menu Property Footer'); ?>
			</section>
			<section class="article">
				<h6> <?php the_field('title_article'); ?></h6>
				<?php wp_nav_menu('menu=Menu Article Footer'); ?>
			</section>
			<section class="contact">
				<h6> <?php the_field('title_contact'); ?></h6>
				<article>
					<?php
					$link1 = get_field('adress');
					$link3 = get_field('tel');
					$link2 = get_field('email');

					if ($link1) :
						$link_url1 = $link1['url'];
						$link_title1 = $link1['title'];
						$link_target1 = $link1['target'] ? $link1['target'] : '_self';
						if ($link3) :
							$link_url3 = $link3['url'];
							$link_title3 = $link3['title'];
							$link_target3 = $link3['target'] ? $link3['target'] : '_self';
							if ($link2) :
								$link_url2 = $link2['url'];
								$link_title2 = $link2['title'];
								$link_target2 = $link2['target'] ? $link2['target'] : '_self';

					?>
								<ul>
									<li>
										<a class="button" href="<?php echo esc_url($link_url1); ?>" target="<?php echo esc_attr($link_target1); ?>"><?php echo esc_html($link_title1); ?></a><br>

									</li>
									<li>
										<a class="button" href="<?php echo esc_url($link_url3); ?>" target="<?php echo esc_attr($link_target3); ?>"><?php echo esc_html($link_title3); ?></a><br>

									</li>
									<li>
										<a class="button" href="<?php echo esc_url($link_url2); ?>" target="<?php echo esc_attr($link_target2); ?>"><?php echo esc_html($link_title2); ?></a>

									</li>
								</ul>
							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>


				</article>
			</section>
		</section>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>