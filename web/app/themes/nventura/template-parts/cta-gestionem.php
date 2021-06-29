<?php
    $gestionamos = get_field('imagen','options');
    if( $gestionamos ) : ?>
        <div class="cta-formulario gestionem" style="background-image:url('<?php the_field('imagen','options') ?>')">
            <div class="contenedor wrapper">

                <p><?php the_field('texto', 'options'); ?></p>
                    
                <a class="bton" href="#"><?php the_field('texte_boto_gestionem', 'options');?></a>

            </div>

            <div class="form-oculto">
                <span class="bton-cerrar">x</span>
                <h2><?php the_field('titul_formulari_gestionem', 'options');?></h2>
                <p class="frase"><?php the_field('text_formulari_gestionem', 'options');?></p>
                <div class="form-solar"><?php the_field('formulari_gestionem','options'); ?>
                </div>
            </div>
        </div>
<?php endif; ?>
