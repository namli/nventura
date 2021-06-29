<?php /* Template Name: Service */


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
        <div class="que-fem">
            <h1><?php the_field('titol_de_que_fem'); ?></h1>
            <div class="contenedor-quefem">
                <div><?php the_field('text_que_fem'); ?></div>
                <div><?php the_field('text_que_fem_2'); ?></div>
                <div><?php the_field('text_que_fem_3'); ?></div>
            </div>
        </div>
    </div>

    <div class="wrapper">

        <div class="lloguer">
            <h1><?php the_field('titol_myhome') ?></h1>
            <p class="frase"><?php the_field('frase_myhome') ?></p>
            <div class="contenedor-bloque-info">
                <div class="contenido-imagen">
                    <img src="<?php the_field('imatge_myhome'); ?>">
                </div>

                <div class="contenido-texto">
                    <p><?php the_field('texte_myhome') ?></p>
                    <a class="bton" href="<?php the_field('enllac_myhome') ?>"><?php the_field('boto_myhome'); ?> </a>
                </div>
            </div>
        </div><!-- end lloguer -->

        <div class="locals">
            <h1><?php the_field('titol_premium') ?></h1>
            <p class="frase"><?php the_field('frase_premium') ?></p>

            <div class="contenedor-bloque-info">
                <div class="contenido-texto">
                    <p><?php the_field('texte_premium') ?></p>
                    <a class="bton" href="<?php the_field('enllac_premium') ?>"><?php the_field('boto_premium'); ?> </a>
                </div>

                <div class="contenido-imagen">
                    <img src="<?php the_field('imatge_premium'); ?>">
                </div>
            </div>

        </div><!-- end locals -->
    </div><!-- end wrapper -->

    <div class="locals">
        <div class="wrapper">
            <h1><?php the_field('titol_promotors') ?></h1>
            <p class="frase"><?php the_field('frase_promotors') ?></p>

            <div class="contenedor-bloque-info">


                <div class="contenido-imagen">
                    <img src="<?php the_field('imatge_promotors'); ?>">
                </div>
                <div class="contenido-texto">
                    <p><?php the_field('texte_promotors') ?></p>
                    <a class="bton" href="<?php the_field('enllac_promotors') ?>"><?php the_field('boto_promotors'); ?> </a>
                </div>


            </div>
        </div>

    </div><!-- end locals -->

    <div class="confianza">
        <h1><?php the_field('titul_confianca'); ?></h1>
        <p><?php the_field('texte_confianca'); ?></p>

        <div class="imagen-confianza">

            <?php if (get_field('imatges_confianza')) : ?>

                <?php while (has_sub_field('imatges_confianza')) : ?>
                    <a href="<?php the_sub_field('enllac_confianca'); ?>">
                        <img src="<?php the_sub_field('imatge_confianca'); ?>">
                    </a>
                <?php endwhile; ?>

            <?php endif; ?>

        </div>

    </div>

    <div class="obres">
        <div class="wrapper">
            <h1><?php the_field('titul_obres'); ?></h1>
            <p><?php the_field('teste_obres'); ?></p>

            <div class="imagen-obras">
                <?php if (get_field('imatges_obres')) : ?>

                    <?php while (has_sub_field('imatges_obres')) : ?>
                        <a href="<?php the_sub_field('enllac_obra'); ?>">
                            <img src="<?php the_sub_field('imatge_obra'); ?>">
                            <p><?php the_sub_field('text_obra'); ?></p>
                        </a>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>

        </div>

    </div>

    <?php get_template_part('template-parts/cta', 'solar'); ?>

</main><!-- #main -->

<?php

get_footer();
