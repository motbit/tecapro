<?php

/* Template Name: Teca: Trang Giới Thiệu */

remove_filter ('the_content', 'wpautop');
get_header(); ?>

    <div class="container-fuild none-padding banner none-mobile">
        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/BG.png">
                    <div class="btn-a">
                        <a href="/san-pham/motion-base/">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/bg03.png">
                    <div class="btn-a">
                        <a href="/san-pham/giai-phap-toan-dien-ve-he-thong-cong-thong-tin-dien-tu/">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/bg02.png">
                    <div class="btn-a">
                        <a href="/san-pham/t-mail/">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/bg04.png">
                    <div class="btn-a">
                        <a href="/san-pham/giai-phap-quan-ly-benh-vien-dien-tu/">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/bg05.png">
                    <div class="btn-a">
                        <a href="/san-pham/thiet-bi-y-te/">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/bg06.png">
                    <div class="btn-a">
                        <a href="Tecopter.html">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Left and right controls -->
        </div>
    </div>
    <!--end banner-->
    <div class="container-fuild none-padding none-mobile">
        <div class=" container">
            <div  class="col-sm-6 col-xs-6 none-padding">
                <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                    <span aria-hidden="true"> <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/truoc.png"></span>
                    <span class="sr-only">Previous</span>
                </a>
            </div>
            <div  class="col-sm-6 col-xs-6 none-padding">
                <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                    <span aria-hidden="true"> <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/next.png"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>


<div class="container none-padding padding-mobile">
    <!--======================-->
    <div class="content-gt">
        <p class="p-add">
            Giới thiệu
        </p>
    </div>
    <div>
        <ul class="ul-gt">
            <li>
                <a href="/gioi-thieu/">
                    <p>Tổng quan</p>
                </a>
            </li>
            <li>
                <a href="/gioi-thieu/so-do-to-chuc/">
                    <p>Sơ đồ tổ chức</p>
                </a>
            </li>
            <li>
                <a href="/gioi-thieu/truyen-thong-tecapro/">
                    <p>Truyền thống Tecapro</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <p>Profile</p>
                </a>
            </li>
        </ul>
    </div>



    <?php
    while ( have_posts() ) : the_post();

        the_content();

        wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tecapro' ),
            'after'  => '</div>',
        ) );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    ?>

</div>
<!--end container-->
<?php
get_footer();
