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

	<div class="idiot">
		<main>
			<div class="sidebar">
				<h1>me</h1>
				<h2>yes it's me</h2>
			</div>
			
			<div class="content">
				<div class="about hunna">
					<p>ME</p>
				</div>
			
			<div class="stuff hunna">			
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
				</div>
				
				<?php else:  ?>
				<?php endif; ?>
				
			</div>
		</main>
	</div><!-- .content -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
