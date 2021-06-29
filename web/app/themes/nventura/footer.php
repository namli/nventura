<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nventura
 */

?>

<footer id="colophon" class="site-footer">
	<div class="wrapper">
		<div class="contenido-footer">

			<div class="dire-footer">
				<h4><?php _e('Contacts', 'nventura'); ?></h4>
				<?php the_field('adreca', 'option'); ?>
				<p>T. <a href="tel:<?php the_field('telefon', 'option'); ?>"><?php the_field('telefon', 'option'); ?></a></p>
				<p><a href="mailto:<?php the_field('correu_electronic', 'option'); ?>"><?php the_field('correu_electronic', 'option'); ?></a></p>
			</div>

			<div class="enlace-footer">
				<?php dynamic_sidebar('menu-footer'); ?>
			</div>
			<div class="enlace-venta">
				<?php dynamic_sidebar('enlaces'); ?>
			</div>
			<div class="social">
				<div class="contenedor-redes">
					<h4><?php _e('Folow as', 'nventura'); ?></h4>
					<?php get_template_part('template-parts/redes'); ?>
				</div>
				<div class="newsletter">
					<?php dynamic_sidebar('footer4'); ?>
				</div>
			</div>
		</div><!-- end contenido-footer -->

	</div><!-- end wrapper -->


</footer><!-- #colophon -->
<div class="after-footer">
	<div class="wrapper">
		<div class="contenedor-legal">
			<div class="menu-legal">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-legal',
						'menu_id'        => 'legal-menu',
					)
				);
				?>
			</div>
			<div>
				- <?php _e('Dahab Real Estate', 'nventura') ?> &copy; <?php echo date("Y"); ?>. <?php _e('All Rights Reserved.', 'nventura'); ?>
			</div>
		</div>
	</div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>