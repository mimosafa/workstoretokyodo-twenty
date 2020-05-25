<?php

?>

            <article <?php post_class( 'cnt_block' ); ?>>
                <h3 class="cnt_ttl"><?php the_title(); ?></h3>
                <?php
/**
 * Featured Image
 */
if ( has_post_thumbnail() ) {
    the_post_thumbnail( 'large' );
} ?>

                <?php the_content(); ?>
            </article>
