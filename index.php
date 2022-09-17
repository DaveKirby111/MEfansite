<?php get_header(); ?>

<div class="content">

<div class="main-content">

    <?php 

    the_post_thumbnail();
    
    ?>

    <?php

    if( have_posts() ) {
        while( have_posts() ) {
            the_post();
            the_content();
        }
    }

    ?>

</div>

</div>

<?php get_footer(); ?>