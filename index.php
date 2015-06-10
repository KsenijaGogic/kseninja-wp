<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<main class="clearfix">
<!-- SIDEBARS START -->
	<div class="sidebar sidebarFull">
		<aside class="first animated fadeIn">
			<div class="nameTitle">
				<h1 class="name">Ksenija Gogic</h1>
				<h3 class="tagline">Designer & Developer</h3>
			</div>
			<ul class="nav sidebarNav">
				<li><a href="#dev">Development</a></li>
				<!-- <li><a href="#design">Design</a></li> -->
				<li><a href="#contact">Contact</a></li>
				<li><a href="<?php echo get_template_directory_uri(); ?>/assets/Ksenija-Gogic-Resume.pdf" target="_blank"> CV <i class="fa fa-paperclip"></i></a></li>
			</ul>
			<ul class="social socialSidebar">
				<li><a href="https://ca.linkedin.com/in/ksenijagogic"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="mailto:k@kse.ninja?Subject=Hi!" target="_top"><i class="fa fa-envelope"></i></a></li>
				<li><a href="https://github.com/KsenijaGogic"><i class="fa fa-github"></i></a></li>
				<li><a href="https://twitter.com/kseninja"><i class="fa fa-twitter"></i></a></li>
				<li><p>Made by me in 2015.</p></li>
			</ul>
		</aside>
		
		<aside class="second animated fadeIn">
			<a href="#top" class="top">
				<div class="nameTitle">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/helloHeaderNew-01.png" class="header" alt="Header image.">
					<h1 class="name">Ksenija Gogic</h1>
					<h3 class="tagline">Designer & Developer</h3>
				</div>
			</a>
			<ul class="nav sidebarNav">
				<li><a href="#dev">Development</a></li>
				<!-- <li><a href="#design">Design</a></li> -->
				<li><a href="#contact">Contact</a></li>
				<li><a href="<?php echo get_template_directory_uri(); ?>/assets/Ksenija-Gogic-Resume.pdf" target="_blank"> CV <i class="fa fa-paperclip"></i></a></li>
			</ul>
			<ul class="social socialSidebar">
				<li><a href="https://ca.linkedin.com/in/ksenijagogic"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="mailto:k@kse.ninja?Subject=Hi!" target="_top"><i class="fa fa-envelope"></i></a></li>
				<li><a href="https://github.com/KsenijaGogic"><i class="fa fa-github"></i></a></li>
				<li><a href="https://twitter.com/kseninja"><i class="fa fa-twitter"></i></a></li>
				<li><p>Made by me in 2015.</p></li>
			</ul>
		</aside>
	</div>
<!-- SIDEBARS END -->
		
<!-- CONTENT START -->			
	<section class="content contentShrink animated fadeIn">
		<div class="intro hunna" id="top">
			<div class="introCont">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/helloHeader-01.png" class="header" alt="Header image.">
				<h4>... And this is stuff I've done.</h3>
				<p class="aboutMe">I'm a Front-End Web Developer with a background in Industrial & Graphic Design. I really like hands-on needs research & problem solving. I'm best when I work my thoughts out on paper.</p>
			</div>
			<a href="#dev"><img src="<?php echo get_template_directory_uri(); ?>/assets/ArrowDown2.png" class="arrow animated bounce infinite" alt="Arrow down!"></a>
<!-- 			<ul class="nav introNav">
				<li><a href="#dev">Development</a></li>
				<li><a href="#design">Design</a></li>
				<li><a href="">Contact</a></li>
			</ul> -->
<!-- 			<ul class="social socialIntro">
				<li><a href="https://ca.linkedin.com/in/ksenijagogic"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="mailto:k@kse.ninja?Subject=Hi!" target="_top"><i class="fa fa-envelope"></i></a></li>
				<li><a href="https://github.com/KsenijaGogic"><i class="fa fa-github"></i></a></li>
				<li><a href="https://twitter.com/kseninja"><i class="fa fa-twitter"></i></a></li>
			</ul> -->
		</div>
<!-- DEV PROJECTS START -->
		<section class="dev project animated fadeIn" id="dev">
			<div class="projectContainer">
				<h2 class="sectionTitle">Web Development</h2>			
				<div class="projectGallery">
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
					
					<section class="projectEach"id="<?php echo $post->post_name; ?>">
						<?php the_post_thumbnail(); ?>
						<div class="imageCaption">
							<?php while( has_sub_field('images') ): ?>
							<?php endwhile; ?>
							<h2 class="projectTitle"><?php the_title(); ?></h2>
							<p><?php the_field('short_desc') ?></p>
							<div class="tags">
								<?php the_tags('', '', ''); ?>
							</div>
							<a class="projectLink" href="<?php the_field('website_link'); ?>" target="_blank"><p>See it Live</p></a>
						</div>
					</section>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</section><?php endif; ?>
<!-- DEV PROJECTS END -->

<!-- DESIGN PROJECTS START -->
		<!-- <section class="design project animated fadeIn" id="design">
			<div class="projectContainer">
				<h2 class="sectionTitle">Design</h2>			
				<div class="projectGallery"><?php
					$onePageQuery = new WP_Query(
						array(
							'posts_per_page' => -1,
							'post_type' => 'design',
							'order' => 'ASC'
							)
					); ?>
					
					<?php if ( $onePageQuery->have_posts() ) : ?>
					
					<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					
					<section class="projectEach"id="<?php echo $post->post_name; ?>">
						<?php the_post_thumbnail(); ?>
						<div class="imageCaption">
							<?php while( has_sub_field('images') ): ?>
							<?php endwhile; ?>
							<h2 class="projectTitle"><?php the_title(); ?></h2>
							<p><?php the_field('short_desc') ?></p>
							<div class="tags">
								<?php the_tags('', '', ''); ?>
							</div>
							<a class="projectLink" href="<?php //the_field('website_link'); ?>" target="_blank"><p>More Coming Soon!</p></a>
						</div>
					</section>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</section><?php endif; ?> -->
<!-- DESIGN PROJECTS END -->
<!-- 		<section class="contact" id="contact">
			<form action="" class="contact">
				<div class="formFlex">
					<input type="text" id="fullname"placeholder="Your Name">
					<input type="email" id="email "placeholder="Your E-mail">
				</div>
				<textarea name="content" id="formcontent" cols="30" rows="10"></textarea>
				<input type="submit">
			</form>
			<div class="success">
				<div class="success">
					<i class="fa fa-envelope-o"></i>
					<h2>Success</h2>
				</div>
				<div class="error">
					<i class="fa fa-exclamation-triangle"></i>
					<h2>Error</h2>
				</div>
			</div>
		</section> -->
		<section class="contact animated fadeIn" id="contact">
			<div class="contactContainer">
				<h2 class="sectionTitle">Let's Talk!</h2>
				<p class="contact">Thanks for visiting! Check out my CV <a href="<?php echo get_template_directory_uri(); ?>/assets/Ksenija-Gogic-Resume.pdf" target="_blank"> here <i class="fa fa-paperclip"></i></a>. Get in touch with me below or at <a href="mailto:k@kse.ninja?Subject=Hi!" target="_top">k@kse.ninja.</a></p>	
				<div class="contactForm"><?php
					$onePageQuery = new WP_Query(
						array(
							'posts_per_page' => -1,
							'post_type' => 'contact',
							'order' => 'ASC'
							)
					); ?>
					
					<?php if ( $onePageQuery->have_posts() ) : ?>
					
					<?php while ($onePageQuery->have_posts()) : $onePageQuery->the_post(); ?>
					
					<section class="contactForm" id="<?php echo $post->post_name; ?>">
						<?php the_content(); ?>
					</section>
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</section><?php endif; ?>

	</section> <!-- .content  -->

<!-- CONTENT END -->			
</main>


<?php get_footer(); ?>