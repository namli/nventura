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


<main id="primary" class="site-main ">
	<div class="container-fluid">
		<div class="row">
			<div id="front-map" class="col-12 front-map mb-2">

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-4">
				<aside class="filter position-sticky top-0">
					<div class="psa-buscador">
						<?php

						//echo do_shortcode('[searchandfilter fields="action,zona,proptypes" types="select,select,select" headings="You want?,Zone,Type" submit_label="Search"]');
						//echo do_shortcode( '[facetwp facet="precio"]' );
						?>
						<?php
						//  echo do_shortcode( '[facetwp facet="operacion"]' );
						// echo do_shortcode( '[facetwp facet="tipo"]' );
						//  echo do_shortcode( '[facetwp facet="zona"]' );

						// echo '<div class="busc-preu">';
						// echo '<h4>' . __('Price', 'nventura') . '</h4>';
						// echo do_shortcode('[facetwp facet="price"]');
						// echo '</div>';
						?>
						<?php dynamic_sidebar('busc-home'); ?>
					</div>
					
				</aside>
			</div>
			<div class="col-12 col-lg-8">
				<?php
				$query = new WP_Query(
					array(
						'post_type' => 'property',
						'nopaging' => true
					)
				);
				if ($query->have_posts()) :
				?>


					<div class="item-list row">
					<?php

					/* Start the Loop */
					while ($query->have_posts()) :
						$query->the_post();

						/*
		 * Include the Post-Type-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
		 */
						get_template_part('template-parts/content-property-tax');

					endwhile;

				//the_posts_navigation();


				else :

					get_template_part('template-parts/content', 'none');



				endif;
				wp_reset_postdata();
					?>
					</div>
			</div>
		</div>
	</div> <!-- поиск и собственность -->






</main><!-- #main -->


<?php

get_footer();
