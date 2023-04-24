<!DOCTYPE html>
<html <?php language_attributes(); ?> class="scroll-smooth">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
	<?php wp_head(); ?>
</head>

<body <?php body_class('bg-gray-50 text-gray-900 antialiased'); ?>>
	<?php if ( is_front_page() ) : ?>
	<header>
		<?php get_template_part('/template-parts/global/global', 'header'); ?>
	</header>
	<?php endif; ?>
	<main>