<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main>
	<div class="sidebar sidebarFull">
		<aside class="first animated fadeIn">
			<h1 class="name">Ksenija Gogic</h1>
			<h3 class="tagline">Designer & Developer</h3>
		</aside>
		
		<aside class="second animated fadeIn">
			<h1 class="name">Ksenija Gogic</h1>
			<h3 class="tagline">Designer & Developer</h3>
			<ul class="nav sidebarNav">
				<li><a href="#dev">Development</a></li>
				<li><a href="#design">Design</a></li>
				<li><a href="#contact">Contact</a></li>
				<li><a href="#top">Top</a></li>
			</ul>
		</aside>
	</div>
			
	<section class="content contentShrink">
		<div class="intro hunna" id="top">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/helloHeader-01.png" class="header" alt="Header image.">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium libero necessitatibus odio fuga distinctio reiciendis, mollitia maiores omnis odit, labore neque quasi at. Maxime, autem velit quae nostrum earum nemo.</p>
			<ul class="nav introNav">
				<li><a href="#dev">Development</a></li>
				<li><a href="#design">Design</a></li>
				<li><a href="">Contact</a></li>
			</ul>
		</div>
			
		<section class="dev" id="dev">
			<h2>Web Development</h2>			
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
				<?php the_post_thumbnail(); ?>
				<div class="images">
					<?php while( has_sub_field('images') ): ?>
					<?php endwhile; ?>
					<p><?php the_field('short_desc') ?></p>
				</div>
			</section>
			<?php endwhile; ?>
			<?php wp_reset_postdata(); ?>
		</section><?php endif; ?>

		<section class="design" id="design">
			<h2>Design</h2>			
			<?php
			$onePageQuery = new WP_Query(
				array(
					'posts_per_page' => -1,
					'post_type' => 'design',
					'order' => 'ASC'
					)
			); ?>
			
			<?php if ( $onePageQuery->have_posts() ) : ?>
			
			<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
			
			<section id="<?php echo $post->post_name; ?>">
				<h2><?php the_title(); ?></h2>
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
		</section><?php endif; ?>
			
	</section> <!-- .content  -->
</main>


<?php get_footer(); ?>