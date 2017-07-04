<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Tecapro
 */

get_header(); ?>

    <div class=" container none-padding padding-mobile">
        <p class="tintuc p-add add2">TIN TECAPRO</p>
        <div class=" col-sm-12 col-xs-12 none-padding">
            <div class="col-sm-9 col-xs-12 none-padding tin-chitiet">
                <?php while (have_posts()) : the_post(); ?>
                    <p class="tieude">
                        <a href="tin_chi_tiet.html"><?php the_title(); ?></a>
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
                <div class=" tintuc tt-footer thumbnail tt-d">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                    <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-d">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                    <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-d">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                    <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-d">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                    <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-d">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                    <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-d">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                    <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-d" style="border-bottom: 2px solid rgba(0,0,0,0.1);">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                    <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                </div>
                <!--VIDEO-->
                <div class=" tintuc tt-footer thumbnail tt-d" style="margin-top: 30px;">
                    <p class="tip">
                        VIDEO LIÊN QUAN
                    </p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-d">
                    <img src="<?php echo get_template_directory_uri() . '/images/Asset-18.jpg' ?>">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-d">
                    <img src="<?php echo get_template_directory_uri() . '/images/Asset-19.jpg' ?>">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-d">
                    <img src="<?php echo get_template_directory_uri() . '/images/Asset-20.jpg' ?>">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-d" style="border-bottom: 0px solid rgba(0,0,0,0.1);" >
                    <img src="<?php echo get_template_directory_uri() . '/images/Asset-21.jpg' ?>">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                </div>
            </div>
        </div>
        <!---->
        <div class="content-tintuc ct-hidden col-sm-12 col-xs-12 none-padding">
            <div class=" tintuc tt-footer thumbnail tt-d">
                <p class="tip">
                    TIN TECAPRO KHÁC
                </p>
            </div>
        </div>
        <!--=========-->
        <div class="content-tintuc ct-hidden col-sm-12 col-xs-12 none-padding" style="margin: 10px 0 0;">
            <div class="col-sm-4 col-xs-12 none-padding">
                <div class=" tintuc thumbnail thumbnail-top">
                    <div class="col-md-2 col-sm-3 col-xs-2 none-padding">
                        <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-10 tintuc-left">
                        <p>
                            <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                        </p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 none-padding">
                <div class=" tintuc thumbnail thumbnail-top">
                    <div class="col-md-2 col-sm-3 col-xs-2 none-padding">
                        <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-10 tintuc-left">
                        <p>
                            <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                        </p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 none-padding">
                <div class=" tintuc thumbnail thumbnail-top">
                    <div class="col-md-2 col-sm-3 col-xs-2 none-padding">
                        <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-10 tintuc-left">
                        <p>
                            <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                        </p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="content-tintuc ct-hidden col-sm-12 col-xs-12 none-padding">
            <div class="col-sm-4 col-xs-4 none-padding linett">
                <ul class="tt-line"></ul>
            </div>
            <div class="col-sm-4 col-xs-4 none-padding linett">
                <ul class="tt-line"></ul>
            </div>
            <div class="col-sm-4 col-xs-4 none-padding ">
                <ul class="tt-line"></ul>
            </div>
        </div>
        <div class="content-tintuc ct-hidden col-sm-12 col-xs-12 none-padding">
            <div class="col-sm-4 col-xs-12 none-padding">
                <div class=" tintuc thumbnail thumbnail-top">
                    <div class="col-md-2 col-sm-3 col-xs-2 none-padding">
                        <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-10 tintuc-left">
                        <p>
                            <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                        </p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 none-padding">
                <div class=" tintuc thumbnail thumbnail-top">
                    <div class="col-md-2 col-sm-3 col-xs-2 none-padding">
                        <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-10 tintuc-left">
                        <p>
                            <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                        </p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 col-xs-12 none-padding">
                <div class=" tintuc thumbnail thumbnail-top">
                    <div class="col-md-2 col-sm-3 col-xs-2 none-padding">
                        <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                    </div>
                    <div class="col-md-10 col-sm-9 col-xs-10 tintuc-left">
                        <p>
                            <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                        </p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();
