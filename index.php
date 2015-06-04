<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package kseninja
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php

		$onePageQuery = new WP_Query(
			array(
				'posts_per_page' => -1,
				'post_type' => 'portfolio',
				'order' => 'ASC'
				)
		); ?>

		<?php if ( $onePageQuery->have_posts() ) : ?>

			<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>

				<section id="<?php echo $post->post_name; ?>">
					<h2><?php the_title(); ?></h2>
					<?php the_content(); ?>
					<div class="images">
						<?php while( has_sub_field('images') ): ?>
							<div class="image">
								<p><?php the_sub_field('caption'); ?></p>
								<?php $image = get_sub_field('image'); ?>
								<img src="<?php echo $image['url'] ?>">
							</div>
						<?php endwhile; ?>
					</div>
				</section>
			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

		<?php else:  ?>
		<?php endif; ?>

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
