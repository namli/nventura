<?php /* Template Name: Contact */
get_header(); ?>
<aside class="widget-slide">
    <?php dynamic_sidebar('slide-contactar'); ?>
</aside>

<div class="wrapper">

    <?php
    while (have_posts()) :
        the_post();

        get_template_part('template-parts/content', 'page');

    endwhile; // End of the loop.
    ?>

    <div class="dire">
        <div class="intro in-adreca"><?php _e('Adreça', 'nventura'); ?></div>
        <div class="post adreca"><?php the_field('adreca', 'option'); ?></div>

        <div class="intro in-tel"><?php _e('Telèfon', 'nventura'); ?></div>
        <div class="post tele"><a href="tel:<?php the_field('telefon', 'option'); ?>"><?php the_field('telefon', 'option'); ?></a></div>

        <div class="intro in-mob"><?php _e('Mòbil lloguer', 'nventura'); ?></div>
        <div class="post mobil"><a href="tel:<?php the_field('mobil_lloguer', 'option'); ?>"><?php the_field('mobil_lloguer', 'option'); ?></a></div>

        <div class="intro in-mob-lloguer"><?php _e('Mòbil venda', 'nventura'); ?></div>
        <div class="post mobil-lloguer"> <a href="tel:<?php the_field('mobil', 'option'); ?>"><?php the_field('mobil', 'option'); ?></a></div>

        <div class="intro in-email"><?php _e('Adreça electrònica', 'nventura'); ?></div>
        <div class="post email"><a href="mailto:<?php the_field('correu_electronic', 'option'); ?>"><?php the_field('correu_electronic', 'option'); ?></a></div>
    </div>

    <div class="google-maps">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d240.3874365165194!2d2.8200007921452186!3d41.9825700377928!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12bae6dfb224439f%3A0x3f0f9a1e41d19d20!2sN%C3%BAria%20Ventura!5e0!3m2!1ses!2ses!4v1601470875507!5m2!1ses!2ses" width="1200" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>

    <div id="formulario-contacte" class="fomulario-contacte">
        <?php
        $value = get_field("formulari");
        echo $value; ?>

    </div>

</div><!-- end wrapper -->

</main><!-- #main -->


<?php

get_footer();
