<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ZuxTheme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'zuxtheme' ); ?></a>

	<header id="masthead" class="site-header">
		<!-- <div class="site-branding"> -->
			<!-- Social Menu : Primary Menu-->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'topbar_menu',
					'menu_id' => 'topbar-menu-',
					'menu_class' => 'topbar-menu',
				)
			);
			?>
		
		<!-- </div>.site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'zuxtheme' ); ?></button> -->
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'main_menu',
					'menu_id'        => 'main_menu',
					'menu_class'        => 'main_menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
<!-- 

	<?php
			the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			$zuxtheme_description = get_bloginfo( 'description', 'display' );
			if ( $zuxtheme_description || is_customize_preview() ) :
				?>
				<p class="site-description"><?php echo $zuxtheme_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?></p>
			<?php endif; ?>
 -->