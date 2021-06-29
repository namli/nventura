<?php
    $validamos = get_field('texte_opinions', 'options');
    if( $validamos ) : ?>


        <div class="opinio">
            <h1><?php the_field('titol_opinions','options') ?></h1>
            <p class="frase"><?php the_field('texte_opinions', 'options') ?></p>

            <div class="wrapper">
                <div class="bxslider">
                <?php if(get_field('opinions', 'options')): ?>


                    <?php while(has_sub_field('opinions', 'options')): ?>
                        <div>
                            <p class="opinion-cliente">"<?php the_sub_field('opinio', 'options') ?>"</p>
                            <p class="nombre"><?php the_sub_field('nom', 'options') ?></p>
                        </div>
                    <?php endwhile; ?>

                </div><!-- end contenido zonas -->
            <?php endif; ?>
            </div>
        </div>
<?php endif; ?>
