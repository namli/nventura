<?php /* Template Name: To rent */


get_header();
?>
<div id="cta-imatge-principal" style="background-image: url(<?php the_field('imatge_principal'); ?>)">

    <div id="texto-imagen">
        <div class="wrapper">
            <div class="contenedor-texto">
                <p class="cta-titulo"><?php the_field('titul_imatge'); ?></p>
                <div class="cta-texto"><?php the_field('texte_imatge'); ?></div>
            </div>
        </div>
    </div>
</div>
<main id="primary" class="site-main">
    <div class="wrapper">
        <div class="lloguer">
            <h1><?php the_field('titol_habitatges') ?></h1>
            <p class="frase"><?php the_field('frase_habitatges') ?></p>
            <div class="contenedor-bloque-info">
                <div class="contenido-imagen">
                    <img src="<?php the_field('imatge_habitatge'); ?>">
                </div>
                <div class="contenido-texto">
                    <p><?php the_field('texte_habitatges') ?></p>
                    <a class="bton" href="<?php the_field('enllac_habitatges') ?>"><?php _e('Veure', 'nventura'); ?></a>
                </div>
            </div>
        </div><!-- end lloguer -->

        <div class="locals">
            <h1><?php the_field('titol_locals') ?></h1>
            <p class="frase"><?php the_field('frase_locals') ?></p>
            <div class="contenedor-bloque-info">
                <div class="contenido-texto">
                    <p><?php the_field('texte_locals') ?></p>
                    <a class="bton" href="<?php the_field('enllac_locals') ?>"><?php _e('Veure', 'nventura'); ?> </a>
                </div>
                <div class="contenido-imagen">
                    <img src="<?php the_field('imatge_locals'); ?>">
                </div>
            </div>
        </div><!-- end locals -->
    </div><!-- end wrapper -->

</main><!-- #main -->

<?php get_template_part('template-parts/cta', 'gestionem'); ?>


<?php

get_footer();
