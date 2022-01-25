<?php

/**
 * Template part for displaying Paragraf "Текст справа картинка слева".
 *
 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>
<?php
$image = get_sub_field('block_text_image_image');
?>
<section class="fdb-block my-4 container">
  <div class="row">
    <?php if (get_sub_field('block_text_image_titile')) { ?>
      <h2 class="h2"><?php the_sub_field('block_text_image_titile'); ?></h2>
    <?php } ?>

    <?php if (get_sub_field('block_text_image_subtitle')) { ?>
      <h3 class="h5 text-muted"><?php the_sub_field('block_text_image_subtitle'); ?></h3>
    <?php } ?>
  </div>
  <div class="row">
    <div class="col-12 col-md-4">
      <img src="<?php echo $image['sizes']['nv-thrid-screen-3x4']; ?>">
    </div>
    <div class="col-12 col-md-8 pt-0 px-4">
      <?php the_sub_field('block_text_image_text'); ?>
    </div>
  </div>
</section>