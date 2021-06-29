<?php /* Template Name: To buy */

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
            <h1><?php the_field('titol_obra_nova') ?></h1>
            <p class="frase"><?php the_field('frase_obra_nova') ?></p>
            <div class="contenedor-bloque-info">
                <div class="contenido-imagen">
                    <img src="<?php the_field('imatge_obra_nova'); ?>">
                </div>
                <div class="contenido-texto">
                    <p><?php the_field('texte_obra_nova') ?></p>
                    <?php if (get_field('enllac_obra_nova')) : ?>
                        <a class="bton" href="<?php the_field('enllac_obra_nova') ?>"><?php the_field('texte_boto_propietats') ?> </a>
                    <?php endif; ?>
                </div>

            </div>
        </div><!-- end locals -->

        <div class="locals">
            <h1><?php the_field('titol_propietats') ?></h1>
            <p class="frase"><?php the_field('frase_propietats') ?></p>
            <div class="contenedor-bloque-info">

                <div class="contenido-texto">
                    <p><?php the_field('texte_propietats') ?></p>
                    <?php if (get_field('enllac_propietats')) : ?>
                        <a class="bton" href="<?php the_field('enllac_propietats') ?>"><?php the_field('texte_boto_obra_nova') ?> </a>
                    <?php endif; ?>
                </div>
                <div class="contenido-imagen">
                    <img src="<?php the_field('imatge_propietats'); ?>">
                </div>
            </div>
        </div><!-- end lloguer -->


    </div><!-- end wrapper -->

</main><!-- #main -->

<?php get_template_part('template-parts/cta', 'ven'); ?>

<?php

get_footer();
