<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package nventura
 */

?>
<div>
  <div class="container">
    <?php nventura_post_thumbnail(); ?>
  </div>
</div>
<div class="container">
  <div class="contenenedor-info">

    <div class="contenido uno">
      <p class="fuente1">Ref: <?php the_field('referencia'); ?></p>
      <p class="precio">
        <?php
        $fmt = numfmt_create('de_DE', NumberFormatter::CURRENCY);
        $precio = get_field('preu');
        echo numfmt_format_currency($fmt, $precio, "EGP");
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
        $b = get_the_term_list($post->ID, 'proptypes');
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
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cfModal"><?php echo __("Request information"); ?></button>
          </div>
        </div>

      </div>

    </div>
  </div>



  <hr class="bg-secondary">
  <div class="descripcio">
    <div class="contenedor-descripcio">

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="row">
          <div class="entry-content col-12 col-md-7">
            <div class="d-flex justify-content-between">
              <h2><?php _e('Property description', 'nventura'); ?></h2>
              <div class="add-to-favorite">
                <?php the_favorites_button(); ?>
              </div>
            </div>

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


    <hr class="bg-secondary">
    <!-- video -->
    <?php if (get_field('video')) : ?>
      <div class="section">
        <div class="row">
          <div class="col-12">
            <?php the_field('video'); ?>
          </div>
        </div>
      </div>
      <hr class="bg-secondary">
    <?php endif; ?>
    <!-- video -->


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
    </article><!-- #post-<?php the_ID(); ?> -->
    <hr class="bg-secondary">
    <div id="maps" class="container mt-4 pt-4 px-0 map">
      <div class="row">
        <div class="col-12">
          <div id="map-box" class="col-12 front-map mb-2"></div>
        </div>
      </div>
    </div> <!-- Map -->
    <hr class="bg-secondary">
  </div><!-- contenedor descripcio -->
</div><!-- descripcio -->

<!-- agency -->
<?php if (get_field('agency')) : ?>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <?php
        $agency = get_field('agency');
        if ($agency) : ?>
          <?php
          $permalink = get_permalink($agency[0]);
          $title = get_the_title($agency[0]);
          ?>
          <h6><?php echo esc_html('Agency'); ?>:</h6>
          <h2 class="h2">
            <a href="<?php echo esc_url($permalink); ?>"><?php echo esc_html($title); ?></a>
          </h2>
        <?php endif; ?>


      </div>
    </div>
  </div>
  <hr class="bg-secondary">
<?php endif; ?>

<!-- agency -->



</div><!-- end wrapper -->

<!-- Modal -->
<div class="modal fade" id="cfModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><?php echo __('Contact form'); ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form"]') ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><?php echo esc_html('Close'); ?></button>
      </div>
    </div>
  </div>
</div>