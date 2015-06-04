<?php
/**
 * The template for displaying all single posts.
 *
 * @package kseninja
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

			<h2><?php the_title(); ?></h2>
			<p><?php the_field('client_name'); ?></p>
			<div class="shortDesc">
				<?php the_field('short_desc'); ?>
			</div>
			<p><?php the_content(); ?></p>
			<div class="images">
				<?php  while( has_sub_field('images') ): ?>
					<div class="image">
						<p><?php the_sub_field('caption'); ?></p>
						<?php $image = get_sub_field('image'); ?>
						<img src="<?php echo $image['url']?>" alt="">
					</div>
				<?php endwhile; ?></div>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
