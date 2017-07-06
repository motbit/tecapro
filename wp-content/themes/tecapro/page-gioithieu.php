<?php

/* Template Name: Teca: Trang Giới Thiệu */


get_header(); ?>

    <div class="container-fuild none-padding banner none-mobile">
        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/BG.png">
                    <div class="btn-a">
                        <a href="san_pham.html">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/bg03.png">
                    <div class="btn-a">
                        <a href="He_thong_cong_thong_tin.html">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/bg02.png">
                    <div class="btn-a">
                        <a href="T-Mail.html">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/bg04.png">
                    <div class="btn-a">
                        <a href="giap_phap_QL_benh_vien_dien_tu.html">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo home_url("/") ?>/wp-content/themes/tecapro/images/bg05.png">
                    <div class="btn-a">
                        <a href="thiet_bi_y_te.html">
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
                <a href="tong_quan.html">
                    <p>Tổng quan</p>
                </a>
            </li>
            <li>
                <a href="so_do_to_chuc.html">
                    <p>Sơ đồ tổ chức</p>
                </a>
            </li>
            <li>
                <a href="truyen_thong_tecapro.html">
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
