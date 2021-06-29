<?php

/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nventura
 */
?>
<aside id="secondary" class="widget-area">


    <div class="psa-buscador">
        <?php

        echo do_shortcode('[searchandfilter fields="action,zona,types" types="select,select,select" headings="You want?,Zone,Type" submit_label="Search"]');
        //echo do_shortcode( '[facetwp facet="precio"]' );
        ?>
        <?php
        //  echo do_shortcode( '[facetwp facet="operacion"]' );
        // echo do_shortcode( '[facetwp facet="tipo"]' );
        //  echo do_shortcode( '[facetwp facet="zona"]' );

        echo '<div class="busc-preu">';
        echo '<h4>' . __('Price', 'nventura') . '</h4>';
        echo do_shortcode('[facetwp facet="price"]');
        echo '</div>';
        ?>
    </div>


    <?php
    //if ( ! is_active_sidebar( 'sidebar-1' ) ) {
    //	return;
    //}
    ?>

    <?php dynamic_sidebar('sidebar-1'); ?>
</aside><!-- #secondary -->