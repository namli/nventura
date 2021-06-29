<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nventura
 */

?>
<div style="background-color: #f1f1f1;">
	<div class="wrapper">
		<?php nventura_post_thumbnail(); ?>
	</div>
</div>
<div class="wrapper">
	<div class="contenenedor-info">

		<div class="contenido uno">
			<p class="fuente1">Ref: <?php the_field('referencia'); ?></p>
			<p class="precio">
				<?php
				$fmt = numfmt_create('de_DE', NumberFormatter::CURRENCY);
				$precio = get_field('preu');
				echo numfmt_format_currency($fmt, $precio, "EUR");
				// setlocale(LC_MONETARY, 'de_DE.utf8');
				// $precio = get_field('preu');
				// echo money_format('%.0n', $precio,);
				?>
			</p>
		</div>

		<div class="contenido dos">
			<!-- Tax -->
			<div class="taxonomia">
				<!-- taxonomia sin enlace -->
				<?php
				$b = get_the_term_list($post->ID, 'types');
				$b = strip_tags($b);
				echo "<p class='fuente1'>" . $b . "</p>";
				?>
			</div>


			<div class="titulo">
				<?php
				if (is_singular()) :
					the_title('<h1 class="entry-title">', '</h1>');
				else :
					the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
				endif; ?>
			</div>
			<?php get_template_part('template-parts/iconos'); ?>

		</div>

		<div class="contenido tres">
			<div class="informacio">
				<div class="contenedor-informacio">
					<?php
					//echo the_terms($post->ID, 'accio', '',',');
					$terms = get_the_term_list($post->ID, 'action');
					$terms = strip_tags($terms);
					//  //echo $terms;
					// if($terms =='Alquilar' || $terms =='Lloguer' || $terms =='For rent') {
					// 	//the_field('mobil_lloguer','options');
					// } else {
					// 	//the_field('mobil','options');
					// }
					?>

					<div class="contenido-informacio">
						<?php if ($terms == 'Alquilar' || $terms == 'Lloguer' || $terms == 'For rent') { ?>
							<img class="ico-mobil" src="<?php echo get_template_directory_uri(); ?>/images/movil.svg"><span><a target="_blank" href="tel:<?php the_field('mobil_lloguer', 'options'); ?>"><?php the_field('mobil_lloguer', 'options'); ?></a></span>
						<?php } else { ?>
							<img class="ico-mobil" src="<?php echo get_template_directory_uri(); ?>/images/movil.svg"><span><a target="_blank" href="tel:<?php the_field('mobil', 'options'); ?>"><?php the_field('mobil', 'options'); ?></a></span>
						<?php } ?>

					</div>
					<div class="contenido-informacio">
						<?php if ($terms == 'Alquilar' || $terms == 'Lloguer' || $terms == 'For rent') { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/wasap.svg"><span><a target="_blank" href="https://api.whatsapp.com/send?phone=34<?php the_field('mobil_lloguer', 'options'); ?>"><?php _e('WhatsApp Chat') ?></a></span>
						<?php } else { ?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/wasap.svg"><span><a target="_blank" href="https://api.whatsapp.com/send?phone=34<?php the_field('mobil', 'options'); ?>"><?php _e('WhatsApp Chat') ?></a></span>
						<?php } ?>
					</div>
					<div class="solicita-info">
						<?php if (isset($ICL_LANGUAGE_CODE)) : ?>
							<?php if ($ICL_LANGUAGE_CODE == 'en') : ?>
								<a class="bton" href="/en/contact#formulario-contacte">Request information</a>
							<?php endif; ?>
						<?php else : ?>
							<a class="bton" href="/en/contact#formulario-contacte">Request information</a>
						<?php endif; ?>

					</div>
				</div>

			</div>

		</div>
	</div>




	<div class="descripcio">
		<div class="contenedor-descripcio">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<div class="row">
					<div class="entry-content col-12 col-md-7">
						<h2><?php _e('Property description', 'nventura'); ?></h2>
						<?php
						the_content(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__('Continue reading<span class="screen-reader-text"> "%s"</span>', 'nventura'),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								wp_kses_post(get_the_title())
							)
						);

						wp_link_pages(
							array(
								'before' => '<div class="page-links">' . esc_html__('Pages:', 'nventura'),
								'after'  => '</div>',
							)
						);
						?>
					</div><!-- .entry-content -->
					<?php if (get_field('other_images')) : ?>
						<div class="col-12 col-md-5 mt-5">
							<?php
							$images = get_field('other_images');
							$size = 'nv-340x340'; // (thumbnail, medium, large, full or custom size)
							$count = 0;
							if ($images) : ?>
								<div class="row g-2 other-images">
									<?php foreach ($images as $image_id) : ?>
										<?php if ($count != 5) : ?>
											<div class="col-6 col-md-4 thumb">
												<a href="<?php echo wp_get_attachment_image_src($image_id, 'original')[0]; ?>" data-fancybox="gallery" data-animation-effect="false">
													<?php echo wp_get_attachment_image($image_id, $size); ?>
												</a>
											</div>
										<?php endif; ?>
										<?php if ($count == 5) : ?>
											<div class="col-6 col-md-4 thumb">
												<a href="<?php echo wp_get_attachment_image_src($image_id, 'original')[0]; ?>" data-fancybox="gallery" data-animation-effect="false">
													<?php echo wp_get_attachment_image($image_id, $size); ?>
													<div class="caption">
														<?php echo "+" . (count($images) - 6); ?>
												</a>
											</div>
								</div>
							<?php endif; ?>
							<?php $count++; ?>
						<?php endforeach; ?>
						</div>
					<?php endif; ?>
				</div>
			<?php endif; ?>
		</div><!-- .row -->
		</article><!-- #post-<?php the_ID(); ?> -->

		<div id="maps" class="container mt-4 pt-4 px-0 map">
			<div class="row-12">
				<?php the_field('geo'); ?>
			</div>
		</div> <!-- Map -->
	</div><!-- contenedor descripcio -->
</div><!-- descripcio -->

<div class="caracteristiques">
	<h2><?php _e('Characteristics', 'nventura'); ?></h2>

	<?php
	//the_terms($post->ID, 'caracteristica', '<li>','','</li>');

	$caracteristicas = get_the_terms($post->ID, 'characteristic');
	?>
	<ul>
		<?php
		foreach ($caracteristicas as $value) {
			echo '<li>' . $value->name . '</li>';
		}
		?>
	</ul>

</div>

</div><!-- end wrapper -->