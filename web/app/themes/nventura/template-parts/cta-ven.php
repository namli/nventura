<?php
    $compravamos = get_field('ven_amb_nosaltres','options');
    if( $compravamos ): ?>
        <div class="cta-formulario ven" style="background-image:url('<?php the_field('ven_amb_nosaltres','options') ?>')">
            <div class="contenedor wrapper">

                <p><?php the_field('text_ven_amb_nosaltres', 'options'); ?></p>
                
                <a class="bton" href="#"><?php the_field('texte_boto_nosaltres', 'options');?></a>

            </div>

            <div class="form-oculto fven">
                <span class="bton-cerrar">x</span>
                <h2><?php the_field('titul_formulari_nosaltres', 'options');?></h2>
                <p class="frase"><?php the_field('text_formulari_nosaltres', 'options');?></p>
                <div class="form-solar"><?php the_field('formulari_vina','options'); ?>
                </div>
            </div>
        </div>
<?php endif; ?>
