<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nventura
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'nventura'); ?></a>

		<header id="masthead" class="site-header">


			<div class="branding">
				<div class="container-fluid">
					<nav class="navbar navbar-expand-lg navbar-light p-0">

						<div class="navbar-brand p-0">
							<?php
							the_custom_logo();
							?>
						</div><!-- .site-branding -->
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<?php
							wp_nav_menu(array(
								'theme_location'    => 'menu-dahab',
								'depth'             => 1, // 1 = no dropdowns, 2 = with dropdowns.
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'dahab-menu',
								'menu_class'        => 'nav navbar-nav ms-0 me-auto text-uppercase',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							));
							?>
							<?php
							wp_nav_menu(array(
								'theme_location'    => 'menu-1',
								'depth'             => 2, // 1 = no dropdowns, 2 = with dropdowns.
								'container'         => 'div',
								'container_class'   => 'collapse navbar-collapse',
								'container_id'      => 'top-dahab-menu',
								'menu_class'        => 'nav navbar-nav ms-auto text-uppercase',
								'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
								'walker'            => new WP_Bootstrap_Navwalker(),
							));
							?>
						</div>
						<div class="fav-list"><?php echo get_user_favorites_count($user_id = null, $site_id = null, $filters = null, $html = false); ?></div>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
					</nav>
				</div><!-- end wrapper -->
			</div><!-- end branding -->

		</header><!-- #masthead -->