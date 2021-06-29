<?php /* Template Name: Want sell? */


get_header();
?>
<div id="cta-imatge-principal" style="background-image: url(<?php the_field('imatge_principal'); ?>)">

    <div id="texto-imagen">
        <div class="wrapper">
            <div class="contenedor-texto">
                <p class="cta-titulo"><?php the_field('titol_imatge'); ?></p>
                <div class="cta-texto"><?php the_field('text_imatge'); ?></div>
            </div>
        </div>
    </div>
</div>
<main id="primary" class="site-main">
    <div class="wrapper">
        <div class="lloguer">
            <h1><?php the_field('titol_intro') ?></h1>
            <p class="frase"><?php the_field('frase_intro') ?></p>
            <div class="contenedor-bloque-info">
                <div class="contenido-imagen">
                    <img src="<?php the_field('imatge_intro'); ?>">
                </div>
                <div class="contenido-texto">
                    <h2><?php the_field('segon_titol_intro') ?></h2>
                    <p><?php the_field('text_intro') ?></p>
                </div>
            </div>
        </div><!-- end lloguer -->

    </div><!-- end wrapper -->

</main><!-- #main -->
<?php if (get_field('formulari')) : ?>
    <div class="formulario-valorem">
        <div class="wrapper">
            <?php the_field('formulari'); ?>
        </div>
    </div>
<?php endif; ?>

<?php get_template_part('template-parts/opinio'); ?>



<?php

get_footer();
