<?php

/**
 * Template part for displaying Paragraf "Вертикальный список с иконками".
 *
 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>


<section class="fdb-block my-4 px-4 px-md-3 container">
  <div class="row front_list_w_i my-4">
    <div class="col-12">
      <?php if (get_sub_field('block_header_title')) { ?>
        <h1 class="h1"><?php the_sub_field('block_header_title'); ?></h1>
      <?php } ?>

      <?php if (get_sub_field('block_header_subtitle')) { ?>
        <h5 class="h5 text-muted"><?php the_sub_field('block_header_subtitle'); ?></h5>
      <?php } ?>

      <?php if (get_sub_field('block_header_text')) { ?>
        <div class=""><?php the_sub_field('block_header_text'); ?></div>
      <?php } ?>
    </div>
  </div>
</section>