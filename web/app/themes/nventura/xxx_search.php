<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nventura
 */

get_header();
?>


<div class="wrapper">
	<header class="page-header">

		<?php
		echo '<h1 class="page-title">' . single_cat_title( '', false ) . '</h1>';

		//the_archive_title( '<h1 class="page-title">', '</h1>' );
		the_archive_description( '<div class="archive-description">', '</div>' );
		?>
	</header><!-- .page-header -->
	<div class="propiedades">

		<main id="primary" class="site-main">


		<?php if ( have_posts() ) : ?>


			<div class="contenedor-propiedades">
				<?php
				/* Start the Loop */
				//while ( have_posts() ) : the_post();

				$args = array(
					'post_type' => 'propietat',
					'posts_per_page' => -1
				);

				$mostrar_propiedades = new WP_Query($args);
				while($mostrar_propiedades->have_posts()): $mostrar_propiedades->the_post();

					/*
					 * Include the Post-Type-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-tax', get_post_type() );

				endwhile;wp_reset_postdata();

					//the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>


		</main><!-- #main -->

		<?php get_sidebar();?>


	</div>
</div>

	<?php get_template_part( 'template-parts/cta', 'ven' );?>

				 <?php
					echo '<br><br>';


 					// echo do_shortcode( '[facetwp facet="operacion"]' );
 					// echo do_shortcode( '[facetwp facet="tipo"]' );
 					// echo do_shortcode( '[facetwp facet="zona"]' );
 					echo do_shortcode( '[facetwp facet="precio"]' );
 					//echo do_shortcode( '[facetwp template="buscador_new"]' );
				?>
		</div>
<?php
get_footer();
