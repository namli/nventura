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
      <?php if (get_sub_field('block_paragrafs_title')) { ?>
        <h2 class="h2"><?php the_sub_field('block_paragrafs_title'); ?></h2>
      <?php } ?>

      <?php if (get_sub_field('block_paragrafs_subtitle')) { ?>
        <h6 class="h5 text-muted"><?php the_sub_field('block_paragrafs_subtitle'); ?></h6>
      <?php } ?>

      <?php if (get_sub_field('block_paragrafs_text')) { ?>
        <div class=""><?php the_sub_field('block_paragrafs_text'); ?></div>
      <?php } ?>
    </div>


    <?php if (have_rows('block_paragrafs_items')) {
      $i = 0; ?>

      <div class="row">
        <?php while (have_rows('block_paragrafs_items')) {
          the_row(); ?>
          <div class="col-12 mb-4">
            <h4 class="title h4">
              <?php the_sub_field('block_paragrafs_item_title'); ?>
            </h4>
            <h5 class="subtitle h5 text-muted">
              <?php the_sub_field('block_paragrafs_item_subtitle'); ?>
            </h5>
            <p class="text"><?php the_sub_field('block_paragrafs_item_text'); ?></p>
          </div>

        <?php
        } ?>
      </div>
  </div>


<?php
    } ?>
</section>