<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Tecapro
 */

get_header(); ?>

    <!-- ===== BANNER ===== -->
    <div class="container-fuild none-padding banner">
        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel1" data-slide-to="1"></li>
                <li data-target="#myCarousel1" data-slide-to="2"></li>
                <li data-target="#myCarousel1" data-slide-to="3"></li>
                <li data-target="#myCarousel1" data-slide-to="4"></li>
                <li data-target="#myCarousel1" data-slide-to="5"></li>

            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri() . '/images/BG.png' ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/Tecapro_banner-06.png' ?>">
                    <div class="btn-a">
                        <a href="san_pham.html">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg03.png' ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/Tecapro_banner-01.png' ?>">
                    <div class="btn-a">
                        <a href="He_thong_cong_thong_tin.html">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg02.png' ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/Tecapro_banner-02.png' ?>">
                    <div class="btn-a">
                        <a href="T-Mail.html">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg04.png' ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/Tecapro_banner-03.png' ?>">
                    <div class="btn-a">
                        <a href="giap_phap_QL_benh_vien_dien_tu.html">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg05.png' ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/Tecapro_banner-04.png' ?>">
                    <div class="btn-a">
                        <a href="thiet_bi_y_te.html">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg06.png' ?>">
                    <img src="<?php echo get_template_directory_uri() . '/images/Tecapro_banner-05.png' ?>">
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
    <!-- ===== END BANNER ===== -->

    <div class="container-fuild none-padding">
        <div class=" container">
            <div class="col-sm-6 col-xs-6 none-padding">
                <a class="left carousel-control" href="#myCarousel1" role="button" data-slide="prev">
                    <span aria-hidden="true"> <img src="<?php echo get_template_directory_uri() . '/images/truoc.png' ?>"></span>
                    <span class="sr-only">Previous</span>
                </a>
            </div>
            <div class="col-sm-6 col-xs-6 none-padding">
                <a class="right carousel-control" href="#myCarousel1" role="button" data-slide="next">
                    <span aria-hidden="true"> <img src="<?php echo get_template_directory_uri() . '/images/next.png' ?>"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>

    <!-- ===== SERVICES ===== -->
    <div class="container none-padding">
        <div class="main clearfix col-sm-12 col-xs-12 none-padding">
            <nav id="menu" class="nav">
                <ul class="ul-bottom">
                    <li>
                        <a href="/tin-tuc-su-kien/">
                                <span class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/images/tin_tuc_su_kien.svg' ?>" class="img-show tintucsk">
                                <img src="<?php echo get_template_directory_uri() . '/images/Tin_tuc_su_kien1.svg' ?>" class="img-hidden tintucsk">
                                </span>
                            <div class="div-add">Tin tức & sự kiện</div>
                        </a>
                    </li>
                    <li>
                        <a href="/san-pham/">
                                <span class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/images/san_pham.svg' ?>" class="img-show">
                                <img src="<?php echo get_template_directory_uri() . '/images/san_pham1.svg' ?>" class="img-hidden">
                                </span>
                            <div class="div-add">Sản phẩm</div>
                        </a>
                    </li>
                    <li>
                        <a href="/dien-tu-vien-thong/">
                                <span class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/images/dien_tu.svg' ?>" class="img-show">
                                <img src="<?php echo get_template_directory_uri() . '/images/dien_tu1.svg' ?>" class="img-hidden">
                                </span>
                            <div class="div-add">Điện tử</div>
                        </a>
                    </li>
                    <li>
                        <a href="/cong-nghe-moi-truong/">
                                <span class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/images/cong_nghe_MT.svg' ?>" class="img-show">
                                <img src="<?php echo get_template_directory_uri() . '/images/cong_nghe_MT1.svg' ?>" class="img-hidden">
                                </span>
                            <div class="div-add">Công nghệ môi trường</div>
                        </a>
                    </li>
                    <li>
                        <a href="/cong-nghe-thong-tin/">
                                <span class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/images/CNTT.svg' ?>" class="img-show">
                                <img src="<?php echo get_template_directory_uri() . '/images/CNTT1.svg' ?>" class="img-hidden">
                                </span>
                            <div class="div-add">Công nghệ thông tin</div>
                        </a>
                    </li>
                    <li>
                        <a href="/xay-dung-cong-trinh/">
                                <span class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/images/xay_dung_cong_trinh.svg' ?>" class="img-show">
                                <img src="<?php echo get_template_directory_uri() . '/images/xay_dung_cong_trinh1.svg' ?>" class="img-hidden">
                                </span>
                            <div class="div-add">Xây dựng công trình</div>
                        </a>
                    </li>
                    <li>
                        <a href="/dich-vu/">
                                <span class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/images/dich_vu.svg' ?>" class="img-show">
                                <img src="<?php echo get_template_directory_uri() . '/images/dich_vu1.svg' ?>" class="img-hidden">
                                </span>
                            <div class="div-add">Dịch vụ</div>
                        </a>
                    </li>
                    <li>
                        <a href="/dich-vu/">
                                <span class="icon">
                                <img src="<?php echo get_template_directory_uri() . '/images/icon_video.svg' ?>" class="img-show">
                                <img src="<?php echo get_template_directory_uri() . '/images/video_mobile.svg' ?>" class="img-hidden">
                                </span>
                            <div class="div-add">Video</div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        <!--=========== NEWS =================-->
        <div class="col-sm-12 col-xs-12 none-padding content">
            <div class="col-sm-5 col-xs-12 none-padding content-home">
                <ul class="col-xs-12 none-padding ul-tin">
                    <li class="col-xs-12 none-padding">
                        <p class="name">Tin Teca</p>
                        <img src="<?php echo get_template_directory_uri() . '/images/next.png' ?>" class="img-tieude">
                    </li>
                    <li class="col-xs-12 none-padding li-tin">
                        <div class="col-xs-12 none-padding list-new">
                            <div class="col-sm-12 col-xs-2 none-padding">
                                <a href="tin_chi_tiet.html"><img src="<?php echo get_template_directory_uri() . '/images/Asset-23.jpg' ?>"></a>
                            </div>
                            <div class="col-sm-12 col-xs-10 none-padding ">
                                <a href="tin_chi_tiet.html">Công ty TECAPRO tặng máy in chuyên dụng cho bệnh viện Quân y 175</a>
                                <p class="mui-ten"></p>
                            </div>
                        </div>
                    </li>
                    <li class="col-xs-12 none-padding li-tin">
                        <div class="col-xs-12 none-padding list-new">
                            <div class="col-sm-12 col-xs-2 none-padding">
                                <a href="tin_chi_tiet.html"><img src="<?php echo get_template_directory_uri() . '/images/Asset-23.jpg' ?>"></a>
                            </div>
                            <div class="col-sm-12 col-xs-10 none-padding">
                                <a href="tin_chi_tiet.html">Công ty TECAPRO tặng máy in chuyên dụng cho bệnh viện Quân y 175</a>
                                <p class="mui-ten"></p>
                            </div>
                        </div>
                    </li>
                    <li class="col-xs-12 none-padding li-tin">
                        <div class="col-xs-12 none-padding list-new">
                            <div class="col-sm-12 col-xs-2 none-padding">
                                <a href="tin_chi_tiet.html"><img src="<?php echo get_template_directory_uri() . '/images/Asset-23.jpg' ?>"></a>
                            </div>
                            <div class="col-sm-12 col-xs-10 none-padding">
                                <a href="tin_chi_tiet.html">Công ty TECAPRO tặng máy in chuyên dụng cho bệnh viện Quân y 175</a>
                                <p class="mui-ten"></p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="col-sm-1 col-xs-12 none-padding"></div>
            <div class="col-sm-6 col-xs-12 none-padding content-home">
                <ul class="ul-tin">
                    <li>
                        <p class="name video">Video & Ảnh</p>
                        <img src="<?php echo get_template_directory_uri() . '/images/next.png' ?>" class="img-tieude">
                    </li>
                    <li class="li-img">
                        <img src="<?php echo get_template_directory_uri() . '/images/Asset 2.png' ?>">
                    </li>
                    <li class="li-img">
                        <img src="<?php echo get_template_directory_uri() . '/images/Asset 1.png' ?>">
                    </li>
                </ul>
            </div>
        </div>
        <!--=====================-->

        <!--======= VIDEOS ===========-->
        <div class=" col-sm-12 col-xs-12 content-video none-padding content-show" id="slider">
            <div id="jssor_1" style="position: relative; margin: 0 auto; top: 0px; left: 0px; width: 1170px; height: 195px; overflow: hidden; visibility: hidden;">
                <!-- Loading Screen -->
                <div data-u="loading" style="position: absolute; top: 0px; left: 0px;">
                    <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block; top: 0px; left: 0px; width: 100%; height: 100%;"></div>
                    <div style="position:absolute;display:block;background:url('img/loading.gif') no-repeat center center;top:0px;left:0px;width:100%;height:100%;"></div>
                </div>
                <div data-u="slides" style="cursor: default; position: relative; top: 0px; left: 0px; width: 1170px; height: 195px; overflow: hidden;">
                    <div>
                        <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/ax.png' ?>" class="img-data"/>
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/ax1.png' ?>" class="img-data"/>
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/ax2.png' ?>" class="img-data"/>
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/ax3.png' ?>" class="img-data"/>
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/ax4.png' ?>" class="img-data"/>
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/ax5.png' ?>" class="img-data"/>
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/ax6.png' ?>" class="img-data"/>
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/ax7.png' ?>" class="img-data"/>
                    </div>
                    <div style="display: none;">
                        <img data-u="image" src="<?php echo get_template_directory_uri() . '/images/ax8.png' ?>" class="img-data"/>
                    </div>
                </div>
                <!-- Bullet Navigator -->
                <div data-u="navigator" class="jssorb03" style="bottom:10px;right:10px;">
                    <!-- bullet navigator item prototype -->
                    <div data-u="prototype" style="width:21px;height:21px;">
                        <div data-u="numbertemplate"></div>
                    </div>
                </div>
                <!-- Arrow Navigator -->
                <span data-u="arrowleft" class="jssora03l" style="top:0px;left:8px;width:55px;height:55px;" data-autocenter="2"></span>
                <span data-u="arrowright" class="jssora03r" style="top:0px;right:8px;width:55px;height:55px;" data-autocenter="2"></span>
            </div>
        </div>
    </div>

<?php
get_footer();
