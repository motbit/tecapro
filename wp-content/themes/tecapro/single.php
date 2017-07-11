<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tecapro
 */

get_header();
$post_id = 0; ?>

    <div class=" container none-padding padding-mobile">
        <p class="tintuc p-add add2">TIN TECAPRO</p>
        <div class=" col-sm-12 col-xs-12 none-padding">
            <div class="col-sm-9 col-xs-12 none-padding tin-chitiet">
                <?php while (have_posts()) : the_post();
                    $post_id = get_the_ID(); ?>
                    <p class="tieude">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </p>
                    <?php the_content(); ?>
                <?php endwhile;
                wp_reset_query(); // end of the loop.
                ?>
            </div>
            <div class="col-sm-3 col-xs-12 none-padding chitiet-right">
                <div class=" tintuc tt-footer thumbnail tt-d">
                    <p class="tip">
                        TIN ĐỌC NHIỀU
                    </p>
                </div>
                <?php
                $popular_posts = new WP_Query(array(
                    'posts_per_page' => 7,
                    'meta_key' => 'tecapro_post_views_count',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC'
                ));

                while ($popular_posts->have_posts()):
                    $popular_posts->the_post();
                    ?>
                    <div class=" tintuc tt-footer thumbnail tt-d">
                        <p>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </p>
                        <p class="p-time">
                            <span class="glyphicon glyphicon-time" aria-hidden="true"></span><?php echo get_date_publish(get_post_time()); ?>
                        </p>
                    </div>

                <?php endwhile;
                wp_reset_query(); // end of the loop.
                ?>
                <!--VIDEO-->
                <div class=" tintuc tt-footer thumbnail tt-d" style="margin-top: 30px;">
                    <p class="tip">
                        VIDEO LIÊN QUAN
                    </p>
                </div>
                <?php
                wp_reset_query();

                $video_posts = new WP_Query(array(
                    'posts_per_page' => 5,
                    'post__not_in' => array($post_id),
                    'category_name' => 'tin-video'
                ));

                while ($video_posts->have_posts()):
                    $video_posts->the_post();
                    ?>
                    <div class=" tintuc tt-footer thumbnail tt-b">
                        <img src="<?php echo get_thumbnail_url('tin-video'); ?>">
                        <p>
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </p>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
        <!---->
        <div class="content-tintuc ct-hidden col-sm-12 col-xs-12 none-padding">
            <div class=" tintuc tt-footer thumbnail tt-d" style="margin-bottom: 10px!important;">
                <p class="tip">
                    TIN TECAPRO KHÁC
                </p>
            </div>
        </div>
        <!--=========-->
        <div class="content-tintuc ct-hidden col-sm-12 col-xs-12 none-padding">
            <?php
            $others_query = new WP_Query(array(
                'posts_per_page' => 6,
                'post__not_in' => array($post_id)
            ));
            $i = 1;

            while ($others_query->have_posts()):
                $others_query->the_post();
                ?>
                <div class="col-sm-4 col-xs-12 none-padding">
                    <div class=" tintuc thumbnail thumbnail-top">
                        <div class="col-md-2 col-sm-3 col-xs-2 none-padding">
                            <img src="<?php echo get_thumbnail_url('six-small'); ?>">
                        </div>
                        <div class="col-md-10 col-sm-9 col-xs-10 tintuc-left">
                            <p>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </p>
                            <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                                <?php echo get_date_publish(get_post_time()); ?>
                            </p>
                        </div>
                    </div>
                </div>

                <?php if ($i == 3): ?>
                <div class="col-sm-4 col-xs-4 none-padding linett">
                    <ul class="tt-line"></ul>
                </div>
                <div class="col-sm-4 col-xs-4 none-padding linett">
                    <ul class="tt-line"></ul>
                </div>
                <div class="col-sm-4 col-xs-4 none-padding ">
                    <ul class="tt-line"></ul>
                </div>
            <?php endif; ?>
                <?php
                $i++;
            endwhile;
            wp_reset_query();
            ?>
        </div>
    </div>

<?php
get_footer();
