<?php
/**
 * Template part for displaying Paragraf "Вертикальный список с иконками".
 *
 * @see https://developer.wordpress.org/themes/basics/template-hierarchy/
 */
?>


  <section class="fdb-block my-4 container">
            <div class="row front_list_w_i my-4">

              <?php if (get_sub_field('block_vert_list_title')) { ?>
                <h2 class="mb-2 display-4 col-12 mt-4"><?php the_sub_field('block_vert_list_title'); ?></h2>
              <?php } ?>

              <?php if (get_sub_field('block_vert_list_subtutle')) { ?>
                <h3 class="my-2 col-12 text-muted"><?php the_sub_field('block_vert_list_subtutle'); ?></h3>
              <?php } ?>

              <?php if (get_sub_field('block_vert_list_text')) { ?>
                <div class="my-2 col-12"><?php the_sub_field('block_vert_list_text'); ?></div>
              <?php } ?>
            </div>


            <?php if (have_rows('block_vert_list_items')) {
    $i = 0; ?>
                
                <div class="row">
                    <?php while (have_rows('block_vert_list_items')) {
        the_row(); ?>
                <div class="col-12 col-sm-1 pb-4">
                    <?php
                    $icon = get_sub_field('block_vert_list_item_icon'); ?>
                    <img class="style-svg" src="<?php echo $icon['sizes']['ay-icon-64']; ?>">       
                </div>

                <div class="col-12 col-sm-11 mb-4 pb-4">
                    <h4 class="title h4">
                      <?php the_sub_field('block_vert_list_item_title'); ?>  
                    </h4>
                    <h5 class="subtitle h5 text-muted">
                      <?php the_sub_field('block_vert_list_item_subtitle'); ?>  
                    </h5>
                    <p class="text"><?php the_sub_field('block_vert_list_item_text'); ?></p>
                </div>
                
                <?php
    } ?>
              </div>



            <?php
} ?>
</section>
