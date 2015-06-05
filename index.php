<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main>
	<div class="sidebars">
		<aside class="sidebar first">
			<h1>Ksenija Gogic</h1>
			<h2>Industrial Designer & Web Developer</h2>
		</aside>
		
		<aside class="sidebar second">
			<h1>Ksenija Gogic</h1>
			<h2>Industrial Designer & Web Developer</h2>
		</aside>
	</div>
			
	<section class="content">
		<div class="intro hunna">
			<h2></h2>
		</div>
			
		<div class="dev hunna">			
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
				<?php the_post_thumbnail(); ?>
				<div class="images">
					<?php while( has_sub_field('images') ): ?>
					<div class="image">
						<p><?php the_sub_field('caption'); ?></p>
					</div>
					<?php endwhile; ?>
				</div>
			</section>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</div>
			
		<?php else:  ?>
		<?php endif; ?>
			
	</section>
</main>


<?php get_footer(); ?>