<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nventura
 */

get_header();
?>
<aside class="widget-slide">
	<?php dynamic_sidebar('slide-home'); ?>
</aside>
<div class="tit-principal slide-hr wrapper">
	<h1><?php the_field('titol_principal'); ?></h1>
</div>
<aside class="widget-buscador wrapper-900">
	<?php dynamic_sidebar('busc-home'); ?>
</aside>


<main id="primary" class="site-main">
	<div class="intro-home">
		<h1><?php the_field('novetats') ?></h1>
		<p class="frase mt-1"><?php the_field('text_novetats') ?></p>
	</div>

	<div class="wrapper">
		<!-- Zonas -->
		<?php if (get_field('zones')) : ?>
			<div class="contenido-zones">
				<?php $count = 1; ?>
				<?php while (has_sub_field('zones')) : ?>

					<div class="imagen-zona post<?php echo $count; ?>">
						<a href="<?php the_sub_field('url_zona') ?>"><img src="<?php the_sub_field('imatge_zona') ?>">
							<p><?php the_sub_field('text_zona') ?></p>
						</a>
					</div>
					<?php $count++; ?>
				<?php endwhile; ?>
			</div><!-- end contenido zonas -->
		<?php endif; ?>
	</div>

	<div class="lloguer-home">
		<h1><?php the_field('lloguer') ?></h1>
		<p class="frase mt-1"><?php the_field('text_lloguer') ?></p>
	</div>

	<div class="wrapper">
		<!-- Lloguer -->
		<?php if (get_field('zones_lloguer')) : ?>
			<div class="contenido-zones-lloguer">
				<?php $count = 1; ?>
				<?php while (has_sub_field('zones_lloguer')) : ?>

					<div class="imagen-zona post<?php echo $count; ?>">
						<a href="<?php the_sub_field('url_zona_lloguer') ?>"><img src="<?php the_sub_field('imatge_zona_lloguer') ?>">
							<p><?php the_sub_field('text_zona_lloguer') ?></p>
						</a>
					</div>
					<?php $count++; ?>
				<?php endwhile; ?>
			</div><!-- end contenido zonas -->
		<?php endif; ?>
	</div>

	<?php get_template_part('template-parts/cta', 'ven'); ?>

	<?php get_template_part('template-parts/opinio'); ?>

	<?php get_template_part('template-parts/cta', 'solar'); ?>



</main><!-- #main -->


<?php

get_footer();
