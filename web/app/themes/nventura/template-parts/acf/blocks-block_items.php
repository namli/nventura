<?php

/**
 * Template part for displaying Paragraf "Список обьектов агенства".
 *
 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>


<section class="fdb-block my-4 px-4 px-md-3 container">
  <div class="row front_list_w_i my-4">
    <div class="col-12">
      <?php if (get_sub_field('block_items_title')) { ?>
        <h2 class="h2"><?php the_sub_field('block_items_title'); ?></h2>
      <?php } ?>

      <?php if (get_sub_field('block_items_subtitle')) { ?>
        <h5 class="h5 text-muted"><?php the_sub_field('block_items_subtitle'); ?></h5>
      <?php } ?>

      <?php if (get_sub_field('block_items_text')) { ?>
        <div class=""><?php the_sub_field('block_items_text'); ?></div>
      <?php } ?>
      <div class="">
        <?php
        $query = new WP_Query(
          array(
            'post_type' => 'property',
            'meta_query' => array(
              array(
                'key' => 'agency', // name of custom field
                'value' => '"' . get_the_ID() . '"', // matches exactly "123", not just 123. This prevents a match for "1234"
                'compare' => 'LIKE'
              )
            )
          )
        );

        if ($query->have_posts()) :
        ?>


          <div class="item-list row">
            <?php
            while ($query->have_posts()) {
              $query->the_post();
              get_template_part('template-parts/content-property-tax');
            }
            wp_reset_postdata();
            ?>
          </div>
        <?php endif; ?>
      </div>




    </div>
  </div>
</section>