<?php

/* Template Name: Teca: Thư viện Video */


get_header(); ?>

    <div class="container none-padding padding-mobile">
        <p class="tintuc p-add add2">THƯ VIỆN VIDEO</p>
        <div class="col-sm-12 col-xs-12 none-padding">
            <ul class="ul-gt ul-thuvien-video">
                <li>
                    <a href="#">
                        <p>Giới thiệu TECAPRO</p>
                    </a>
                </li>
                <li>
                    <a href="/thu-vien-video/">
                        <p>Video TECAPRO</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>TECAPRO</p>
                    </a>
                </li>
            </ul>
        </div>
        <div class="content-tintuc col-sm-12 col-xs-12 none-padding tintuc">
            <!--========================-->
            <?php
            $video_posts = new WP_Query(array(
                'posts_per_page' => 6,
                'category_name' => 'tin-video'
            ));

            while ($video_posts->have_posts()):
                $video_posts->the_post();
                ?>

                <div class="col-sm-4 col-xs-12 none-padding ds-thuvien" data-toggle="modal" data-target="#myModal">
                    <div class=" tintuc tt-footer thumbnail lvhd thuvien-video">
                        <img src="<?php echo get_thumbnail_url('tin-video'); ?>">
                        <div class="col-sm-12 col-xs-12 none-padding color">
                            <p class="col-sm-12 col-xs-12 none-padding tieude">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </p>
                            <p class="col-sm-9 col-xs-9 none-padding p-tomtat">
                                Bởi <?php the_author() ?>
                            </p>
<!--                            <p class="col-sm-3 col-xs-3 none-padding p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>1p30</p>-->
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
    <!--end container-->
<?php
get_footer();
