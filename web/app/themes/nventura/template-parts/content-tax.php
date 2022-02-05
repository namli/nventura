<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nventura
 */

?>

<div class="contenido-propiedades">

    <a href="<?php the_permalink(); ?>">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

            <?php
            global $post;
            $src = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), array(380, 280), false, '');
            ?>
            <div class="hero-prop" style="background-image: url(<?php echo $src[0]; ?> ) !important;"></div>

            <?php //nventura_post_thumbnail(); 
            ?>

            <div class="datos-propiedad">
                <p class="ref">Ref: <?php the_field('referencia'); ?></p>
                <p class="preu">
                    <?php
                    //setlocale(LC_MONETARY, 'de_DE.utf8');
                    $fmt = numfmt_create('de_DE', NumberFormatter::CURRENCY);
                    $precio = get_field('preu');
                    echo numfmt_format_currency($fmt, $precio, "EGP");
                    // $precio = get_field('preu');
                    // echo money_format( '%.0n', $precio,);
                    ?>

                <header class="entry-header">
                    <?php
                    // if (is_singular()) :
                    //     the_title('<h1 class="entry-title">', '</h1>');
                    // else :
                    //     the_title('<h2 class="entry-title"><a class="titulo" href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                    // endif;

                    the_title('<h2 class="entry-title"><a class="titulo" href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');

                    ?>

                </header><!-- .entry-header -->

                <?php get_template_part('template-parts/iconos'); ?>
            </div>

        </article><!-- #post-<?php the_ID(); ?> -->
    </a>

</div>