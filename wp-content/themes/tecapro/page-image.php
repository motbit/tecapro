<?php

/* Template Name: Teca: Thư viện Hình ảnh */
remove_filter ('the_content', 'wpautop');

get_header(); ?>

    <div class="container none-padding padding-mobile">
        <p class="tintuc p-add add2">THƯ VIỆN ẢNH</p>
        <!--======================-->

        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $image_posts = new WP_Query(array(
            'posts_per_page' => 9,
            'category_name' => 'tin-hinh-anh',
            'paged' => $paged
        ));

        $i = 1;

        while ($image_posts->have_posts()):
            $image_posts->the_post();
            if ($i % 3 == 1):
                ?>
                <div class="content-tintuc col-sm-12 col-xs-12 none-padding tintuc">
            <?php endif; ?>
            <div class="col-sm-4 col-xs-12 none-padding ds-thuvien">
                <div class=" tintuc tt-footer thumbnail lvhd thuvien-video" data-animate="bounceIn" data-duration="1.0s" data-delay="0.2s" data-offset="100">
                    <img src="<?php echo get_thumbnail_url('tin-hinh-anh'); ?>">
                    <div class="col-sm-12 col-xs-12 none-padding color thu-vien-img">
                        <p class="col-sm-10 col-xs-10 none-padding tieude ">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </p>
                        <p class="col-sm-12 col-xs-12 none-padding ">
                        <p class="col-sm-9 col-xs-9 none-padding p-tomtat">
                            Bởi <?php the_author() ?>
                        </p>
                        <!--                        <div class="col-sm-3 col-xs-3 none-padding tv-time">-->
                        <!--                            <img src="images/tv_img.png">-->
                        <!--                            <p class="p-time">50 ảnh</p>-->
                        <!--                        </div>-->
                        </p>
                    </div>
                </div>
            </div>
            <?php if ($i % 3 == 0 || $i == $image_posts->post_count): ?>
            </div>
        <?php endif; ?>
            <?php
            $i++;
        endwhile; ?>

        <?php if ($image_posts->max_num_pages > 1) : ?>
            <div class="nav-previous alignright" style="float: right!important;"><?php next_posts_link('Xem tiếp', $image_posts->max_num_pages); ?></div>
            <div class="nav-next alignleft" style="float: left!important;"><?php previous_posts_link('Quay lại'); ?></div>
        <?php endif; ?>
        <!--========================-->
    </div>
    <!--end container-->
<?php
get_footer();
