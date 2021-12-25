<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package nventura
 */

get_header();
?>

<main id="primary" class="site-main">

  <?php
  while (have_posts()) :
    the_post();

    //get_template_part('template-parts/content', get_post_type());
    // Check value exists.
    if (have_rows('blocks')) {
      // Loop through rows.
      while (have_rows('blocks')) {
        the_row();
        // Case: Paragraph layout.
        get_template_part('template-parts/acf/blocks', get_row_layout());

        // End loop.
      }
    }
  endwhile; // End of the loop.
  ?>

</main><!-- #main -->

<?php
get_footer();
