<?php

/* Template Name: Teca: Một trang trống */


get_header(); ?>
    <div class="container none-padding padding-mobile">
<?php
while ( have_posts() ) : the_post(); ?>
    <div class="entry-content">
    <?php

        the_content();

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tecapro' ),
            'after'  => '</div>',
        ) );

    // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
?>
    </div>
    <?php
endwhile; // End of the loop.
?>

    </div>
<?php
get_footer();

