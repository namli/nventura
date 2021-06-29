<div class="iconos">
    <div class="contenedor-iconos">
        <div class="contenido-icono">
            <img src="<?php echo get_template_directory_uri();?>/images/hab.svg"><span><?php the_field('habitacions');?></span>
        </div>
        <div class="contenido-icono">
            <img src="<?php echo get_template_directory_uri();?>/images/lav.svg"><span><?php the_field('lavabos');?></span>
        </div>
        <div class="contenido-icono">
            <img src="<?php echo get_template_directory_uri();?>/images/met.svg"><span><?php
                    $number = get_field('metres_cuadrats');
                    echo number_format($number, 2, ",", "");
                ?>
                m<sup>2</sup></span>
        </div>
    </div>
</div>
