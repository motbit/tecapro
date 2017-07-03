<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tecapro
 */

?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <script type="text/javascript">
        jQuery(document).ready(function ($) {

            var jssor_1_options = {
                $AutoPlay: true,
                $AutoPlaySteps: 6,
                $SlideDuration: 120,
                $SlideWidth: 195,
                $SlideSpacing: 3,
                $Cols: 6,
                $ArrowNavigatorOptions: {
                    $Class: $jssorArrowNavigator$,
                    $Steps: 6
                },
                $BulletNavigatorOptions: {
                    $Class: $jssorBulletNavigator$,
                    $SpacingX: 1,
                    $SpacingY: 1
                }
            };

            var jssor_1_slider = new $jssorSlider$("jssor_1", jssor_1_options);

            /*responsive code begin*/
            /*you can remove responsive code if you don't want the slider scales while window resizing*/
            function ScaleSlider() {
                var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
                if (refSize) {
                    refSize = Math.min(refSize, 1170);
                    jssor_1_slider.$ScaleWidth(refSize);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();
            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            /*responsive code end*/
        });
    </script>
    <script>
        (function ($) {
            $(function () {

                (function ($) {
                    $.fn.slideToPos = function () {

                        var left = $(this).position().left + ($(this).width() / 2) - ($(".menu1 a.knob").width() / 2) - 2;
                        $(".menu1 a.knob").css("left", left);

                        $(".before").css("width", left + 10);
                        return this;
                    };
                })(jQuery);
                var url = window.location;
                $('ul li.category a[href="' + url + '"]').parent().addClass('active');
                $('ul li.category a').filter(function () {
                    return this.href == url;
                }).parent().addClass('active').slideToPos();
                e.preventDefault();
                $(this).slideToPos();

            });
        })(jQuery);
    </script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <header id="masthead" class="site-header">
        <!-- ===== HEADER MENU ===== -->
        <div class="container-fuild none-padding">
            <div class="container-fuild none-padding contaier-head none-mobile">
                <div class=" container header">
                    <div class=" col-sm-12 col-xs-12 none-padding">
                        <div class=" col-sm-8 col-xs-8 none-padding">
                            <p class="addFont"><?php bloginfo('name'); ?></p>
                        </div>
                        <div class="col-sm-1 col-xs-1 none-padding">
                            <!-- <img src="images/search.png" class="img-search"> -->
                            <div class="dropdown">
                                <button class="dropbtn"><img src="<?php echo get_template_directory_uri() . '/images/search.png' ?>" class="img-search flag-show">
                                    <img src="<?php echo get_template_directory_uri() . '/images/en.svg' ?>" class="img-search flag-hidden"></button>
                                <div class="dropdown-content">
                                    <a href="#">Tiếng Việt</a>
                                    <a href="#">English</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-3 col-xs-3 none-padding">
                            <div class="input-group">
                                <input type="text" class="form-control">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Tìm kiếm</button>
                                </span>
                            </div>
                            <!-- /input-group -->
                        </div>
                    </div>
                </div>
                <!--end header-->
            </div>
            <div class="col-xs-12 none-padding none-desktop boder-head">
                <div class="col-xs-12 none-padding none-desktop img-fix">
                    <div class="col-sm-1 col-xs-2 none-padding  main">
                        <section class="buttonset">
                            <div id="nav_list"></div>
                        </section>
                        <!-- End Content -->
                    </div>
                    <a href="#">
                        <img src="images/banner_mobile.svg" class="col-sm-11 col-xs-10 none-padding banner-mobile">
                        <img src="images/banner_ipad.svg" class="col-sm-11 col-xs-10 none-padding banner-ipad">
                    </a>
                </div>
            </div>
            <!--=======================-->
            <div class="container-fuild none-padding">
                <div class=" container menu">
                    <div class="col-sm-2 col-xs-12 none-padding">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $image = wp_get_attachment_image_src($custom_logo_id, 'full');

                        $logo_src = !empty($image[0]) ? $image[0] : get_template_directory_uri() . '/images/logo.png';
                        ?>
                        <img src="<?php echo $logo_src ?>" alt="tecapro" class="img-logo"/>
                    </div>
                    <div class="col-sm-10 col-xs-12 none-padding ">
                        <div class="pushmenu-push">
                            <div class="pushmenu pushmenu-left">
                                <div class="menu1">
                                    <div class="slider">
                                        <nav>
                                            <ul class="gw-nav gw-nav-list">
                                                <li class="category">
                                                    <div class="input-group ">
                                                        <input type="text" class="form-control" placeholder="Nhập từ khóa cần tìm kiếm">
                                                        <span class="input-group-btn">
                                                        <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                                                        </span>
                                                    </div>
                                                </li>
                                                <li class="category "><a href="Home.html">Trang chủ</a></li>
                                                <li class="category">
                                                    <a href="tong_quan.html" class="parent">Giới thiệu</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="tong_quan.html">Tổng quan</a></li>
                                                        <li><a href="so_do_to_chuc.html">Sơ đồ tổ chức</a></li>
                                                        <li><a href="truyen_thong_tecapro.html">Truyền thống Tecapro</a></li>
                                                        <li><a href="#">Profile</a></li>
                                                    </ul>
                                                </li>
                                                <li class="category ">
                                                    <a href="#" class="parent">Đơn vị thành viên</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="don_vi_Tecapro_Telecom.html">Công ty CP Tecapro - Telecom</a></li>
                                                        <li><a href="don_vi_CB_DV_MT_ECO.html">Công ty CP CN-DV Môi trường ECO</a></li>
                                                        <li><a href="don_vi_xi_nghiep_vat_lieu_TB_CN.html">XN Vật liệu và Thiết bị công nghiệp</a></li>
                                                        <li><a href="don_vi_cp_CNTT.html">Công ty CP CNTT &amp; Truyền thông</a></li>
                                                        <li><a href="don_vi_xi_nghiep_dich_vu_thuong_mai.html">XN Dịch vụ Kỹ thuật &amp; Thương mại</a></li>
                                                        <li><a href="don_vi_xi_nghiep_CT.html">XN Xây dựng công trình</a></li>
                                                        <li><a href="don_vi_chi_nhanh_HN.html">Chi nhánh Hà Nội</a></li>
                                                        <li><a href="don_vi_chi_nhanh_Da_Nang.html">Chi nhánh Đà Nẵng</a></li>
                                                        <li><a href="don_vi_chi_nhanh_Vung_Tau.html">Chi nhánh Vũng Tàu </a></li>
                                                        <li><a href="don_vi_CH_LB_Nga.html">VPĐD tại CH Liên Bang Nga</a></li>
                                                        <li><a href="don_vi_MTV_TecaWord.html">Công ty TNHH MTV TECAWORLD</a></li>
                                                    </ul>
                                                </li>
                                                <li class="category ">
                                                    <a href="#" class="parent">Tin tức & Sự kiện</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="tin_tuc_su_kien.html">Tin Tecapro</a></li>
                                                        <li><a href="#">Tin các đơn vị thành viên</a></li>
                                                    </ul>
                                                </li>
                                                <li class="category ">
                                                    <a href="#home1" class="parent">Lĩnh vực hoạt động</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="linh_vuc_hoat_dong.html">Công nghệ thông tin</a></li>
                                                        <li><a href="linh_vuc_hoat_dong_dien_tu_vien_thong.html">Điện tử viễn thông</a></li>
                                                        <li><a href="linh_vuc_hoat_dong_cong_nghe_MT.html">Công nghệ môi trường</a></li>
                                                        <li><a href="linh_vuc_hoat_dong_xay_dung_CT.html">Xây dựng công trình</a></li>
                                                        <li><a href="linh_vuc_hoat_dong_dich_vu.html">Dịch vụ</a></li>
                                                    </ul>
                                                </li>
                                                <li class="category ">
                                                    <a href="#" class="parent">Thư viện</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="thu_vien_video.html">Thư viện video</a></li>
                                                        <li><a href="thu_vien_hinh_anh.html">Thư viện hình ảnh</a></li>
                                                        <li><a href="thu_vien_tai_lieu.html">Thư viện download</a></li>
                                                    </ul>
                                                </li>
                                                <li class="category ">
                                                    <a href="#" class="parent">Liên kết</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="chung_khoan.html">Ngoại tệ & Chứng khoán</a></li>
                                                        <li><a href="thoi_tiet.html">Thời tiết</a></li>
                                                    </ul>
                                                </li>
                                                <li class="category"><a href="tuyen_dung.html">Tuyển dụng</a>
                                                </li>
                                                <li class="category "><a href="lien_he.html">Liên hệ</a>
                                                </li>
                                            </ul>
                                        </nav>
                                        <div class="container-fuild bar">
                                            <div class="before"></div>
                                            <a class="knob"></a>
                                            <div class="after"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-xs-12 none-padding">
                    <div class="col-sm-6 col-xs-6 none-padding">
                        <div class="before2"></div>
                    </div>
                    <div class="col-sm-6 col-xs-6 none-padding">
                        <div class="before1"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ===== END HEADER MENU ===== -->
    </header><!-- #masthead -->

    <div id="content" class="site-content">
