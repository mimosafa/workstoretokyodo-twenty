<?php

get_header(); ?>

<div id="contents">

    <section id="content">

<?php

if ( have_posts() ) :
    while ( have_posts() ) :
        the_post();

        get_template_part( 'template-parts/content', 'single' );

    endwhile;
endif; ?>

    </section>

</div><!-- /#contents -->

<?php

get_footer();
