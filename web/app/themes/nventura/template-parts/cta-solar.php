<?php
    $solar = get_field('imatge_solar','options');
    if( $solar ) : ?>
        <div class="cta-formulario solar" style="background-image:url('<?php the_field('imatge_solar','options') ?>')">
            <div class="contenedor wrapper">

                <p><?php the_field('text_solar', 'options'); ?></p>
                    
                <a class="bton" href="#"><?php the_field('texte_boto_solar', 'options');?></a>

            </div>

            <div class="form-oculto">
                <span class="bton-cerrar">x</span>
                <h2><?php the_field('titul_formulari_solar', 'options');?></h2>
                <p class="frase"><?php the_field('text_formulari_solar', 'options');?></p>
                <div class="form-solar"><?php the_field('formulari_solar','options'); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
