<?php /* Template Name: About as */


get_header();
?>
<aside class="widget-slide">
	<?php dynamic_sidebar('slide-quisom'); ?>
</aside>
<main id="primary" id="quison">
	<div class="wrapper">
		<div class="intro-quisom">
			<h1><?php the_field('titol') ?></h1>
			<p class="frase"><?php the_field('frase_titol') ?></p>
			<div class="texto"><?php the_field('texte') ?></div>
		</div>

		<div class="equip">
			<h1><?php the_field('titol_equip') ?></h1>
			<p class="frase"><?php the_field('frase_equip') ?></p>
		</div>

		<div class="contenedor-equip">
			<div class="contenido-equipo impar">
				<div class="equip-imatge">
					<img src="<?php the_field('imatge_equip_1'); ?>" alt="<?php the_field(' nom_equip_1'); ?>">
				</div>
				<div class="equip-texte">
					<h2><?php the_field('nom_equip_1') ?></h2>
					<p><?php the_field('carrec_1') ?></p>
					<div class="enlaces">
						<a href="tel:<?php the_field('telefon_equip_1') ?>"><?php the_field('telefon_equip_1') ?></a>
						<a href="mailto:<?php the_field('email_equip_1') ?>"><?php the_field('email_equip_1') ?></a>
					</div>
					<p><?php the_field('texte_equip_1') ?></p>
				</div>
			</div>

			<div class="contenido-equipo par">

				<div class="equip-texte">
					<h2><?php the_field('nom_equip_2') ?></h2>
					<p><?php the_field('carrec_2') ?></p>
					<div class="enlaces">
						<a href="tel:<?php the_field('telefon_equip_2') ?>"><?php the_field('telefon_equip_2') ?></a>
						<a href="mailto:<?php the_field('email_equip_2') ?>"><?php the_field('email_equip_2') ?></a>
					</div>
					<p><?php the_field('texte_equip_2') ?></p>
				</div>

				<div class="equip-imatge">
					<img src="<?php the_field('imatge_equip_2'); ?>" alt="<?php the_field(' nom_equip_2'); ?>">
				</div>
			</div>

			<div class="contenido-equipo impar">
				<div class="equip-imatge">
					<img src="<?php the_field('imatge_equip_3'); ?>" alt="<?php the_field(' nom_equip_3'); ?>">
				</div>
				<div class="equip-texte">
					<h2><?php the_field('nom_equip_3') ?></h2>
					<p><?php the_field('carrec_3') ?></p>
					<div class="enlaces">
						<a href="tel:<?php the_field('telefon_equip_3') ?>"><?php the_field('telefon_equip_3') ?></a>
						<a href="mailto:<?php the_field('email_equip_3') ?>"><?php the_field('email_equip_3') ?></a>
					</div>
					<p><?php the_field('texte_equip_3') ?></p>
				</div>
			</div>
		</div>
		<div class="colaboradors">
			<h2><?php the_field('titol_collaborador') ?></h2>
			<p class="frase"><?php the_field('texte_colaborador') ?></p>
			<div class="contenedor-colaboradors">
				<?php if (get_field('collabora')) : ?>

					<?php while (has_sub_field('collabora')) : ?>
						<div class="contenido-colaborador">
							<div class="hero-logo" style="background-image:url('<?php the_sub_field('logo_collaborador',); ?>')">

							</div>
							<div>
								<p><?php the_sub_field('texte_collaborador',); ?></p>
							</div>
						</div>
					<?php endwhile; ?>

				<?php endif; ?>

			</div>
		</div>



	</div><!-- end wrapper -->

</main><!-- #main -->



<?php

get_footer();
