<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package foodnowyes
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'foodnowyes' ); ?></a>

	<header id="masthead" class="site-header" role="banner">

		<?php if ( get_header_image() && ('blank' == get_header_textcolor())) : ?> <!-- image exists while header (title) hidden -->
			<!-- display header image -->
			<div class="header-image">
				<a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
					<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
				</a>
			</div>
		<?php endif; ?>

		<?php
		if ( get_header_image() && !('blank' == get_header_textcolor()) ) /* image exists while header (title) visible */{
			echo '<div class="site-branding header-background-image" style="background-image: url(' . get_header_image() . ')">';
		} else /* default, no image */ {
			echo '<div class="site-branding">';
		}
		?>
			<div class="title-box">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
			</div>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="menu" aria-expanded="false"><?php _e( 'Menu', 'foodnowyes' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>

			<div class="search-toggle"> <!-- toggle for search bar located below-->
				<i class="fa fa-search"></i>
				<a href="#search-container" class="screen-reader-text"><?php _e( 'Search', 'foodnowyes' ); ?></a>
			</div>

			<?php foodnowyes_social_menu(); ?> <!-- social media menu as per Justin Tadlock -->
		</nav><!-- #site-navigation -->

	<div id="search-container" class="search-box-wrapper clear">
		<div class="search-box clear">
			<?php get_search_form(); ?>	<!-- search form-->
		</div>
	</div>

	</body><!-- #masthead -->

	<div id="content" class="site-content">
