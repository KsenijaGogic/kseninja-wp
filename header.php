<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<?php // Load Meta ?>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php  wp_title('|', true, 'right'); ?></title>
  <!-- <link rel="pingback" href="<?php //bloginfo( 'pingback_url' ); ?>" /> -->
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon.ico">

  <?php // Load our CSS ?>
  <link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Lekton:400,400italic|Amatic+SC:700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

  <?php wp_head(); ?>
</head>


<body <?php body_class(); ?>>

<header>

</header><!--/.header-->

