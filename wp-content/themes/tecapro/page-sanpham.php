<?php

/* Template Name: Teca: Sản Phẩm */


get_header();
remove_filter ('the_content', 'wpautop');
?>

    <!--============================-->
    <div class="col-sm-12 col-xs-12 none-padding banner banner-img">
        <img src="<?php echo the_post_thumbnail_url( 'full' ); ?>">
    </div>
    <!--end banner-->
    <div class="container none-padding padding-mobile">
        <div class="col-sm-12 col-xs-12 none-padding"  id="cnt-center">
            <?php
            while ( have_posts() ) : the_post(); ?>
                <?php

                the_content();
                ?>
                <?php
            endwhile; // End of the loop.
            ?>

            <div class="col-md-3 col-sm-6 col-xs-12 none-padding center">
                <p class="li-tieude">Các sản phẩm khác
                </p>
                <ul class="bxslider ul-sp2">
                    <li>
                        <a href="/san-pham/motion-base/"><img src="/wp-content/themes/tecapro/images/1.png"></a>
                    </li>
                    <li>
                        <a href="/san-pham/t-mail/"><img src="/wp-content/themes/tecapro/images/2.png"></a>
                    </li>
                    <li>
                        <a href="/san-pham/giai-phap-toan-dien-ve-he-thong-cong-thong-tin-dien-tu/"><img src="/wp-content/themes/tecapro/images/3.png"></a>
                    </li>
                    <li>
                        <a href="/san-pham/giai-phap-quan-ly-benh-vien-dien-tu/"><img src="/wp-content/themes/tecapro/images/4.png"></a>
                    </li>
                    <li>
                        <a href="/san-pham/thiet-bi-y-te/"> <img src="/wp-content/themes/tecapro/images/5.png"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--=========================-->
    <div class="container none-padding">
        <div class="col-sm-12 col-xs-12 none-padding">
            <div class="col-sm-3 col-xs-3 none-padding line" >
                <ul class="ul-line">
                </ul>
            </div>
            <div class="col-sm-6 col-xs-6 none-padding line"id="center">
                <ul class="ul-line">
                </ul>
            </div>
            <div class="col-sm-6 col-xs-6 none-padding line"id="center">
            </div>
        </div>
    </div>
    <!--=============================-->
    <div class="container none-padding none-mobile">
        <div class="main clearfix col-sm-12 col-xs-12 none-padding">
            <nav id="menu" class="nav">
                <ul class="ul-bottom">
                    <li>
                        <a href="/tin-tuc-su-kien/">
                                <span class="icon">
                                <img src="/wp-content/themes/tecapro/images/tin_tuc_su_kien.svg" class="img-show tintucsk">
                                <img src="/wp-content/themes/tecapro/images/tin_tuc_su_kien1.svg" class="img-hidden tintucsk">
                                </span>
                            <div class="div-add">Tin tức & sự kiện</div>
                        </a>
                    </li>
                    <li>
                        <a href="/san-pham/">
                                <span class="icon">
                                <img src="/wp-content/themes/tecapro/images/san_pham.svg" class="img-show">
                                <img src="/wp-content/themes/tecapro/images/san_pham1.svg" class="img-hidden">
                                </span>
                            <div class="div-add">Sản phẩm</div>
                        </a>
                    </li>
                    <li>
                        <a href="/dien-tu-vien-thong/">
                                <span class="icon">
                                <img src="/wp-content/themes/tecapro/images/dien_tu.svg" class="img-show">
                                <img src="/wp-content/themes/tecapro/images/dien_tu1.svg" class="img-hidden">
                                </span>
                            <div class="div-add">Điện tử</div>
                        </a>
                    </li>
                    <li>
                        <a href="/cong-nghe-moi-truong/">
                                <span class="icon">
                                <img src="/wp-content/themes/tecapro/images/cong_nghe_MT.svg" class="img-show">
                                <img src="/wp-content/themes/tecapro/images/cong_nghe_MT1.svg" class="img-hidden">
                                </span>
                            <div class="div-add">Công nghệ môi trường</div>
                        </a>
                    </li>
                    <li>
                        <a href="/cong-nghe-thong-tin/">
                                <span class="icon">
                                <img src="/wp-content/themes/tecapro/images/CNTT.svg" class="img-show">
                                <img src="/wp-content/themes/tecapro/images/CNTT1.svg" class="img-hidden">
                                </span>
                            <div class="div-add">Công nghệ thông tin</div>
                        </a>
                    </li>
                    <li>
                        <a href="/xay-dung-cong-trinh/">
                                <span class="icon">
                                <img src="/wp-content/themes/tecapro/images/xay_dung_cong_trinh.svg" class="img-show">
                                <img src="/wp-content/themes/tecapro/images/xay_dung_cong_trinh1.svg" class="img-hidden">
                                </span>
                            <div class="div-add">Xây dựng công trình</div>
                        </a>
                    </li>
                    <li>
                        <a href="/dich-vu/">
                                <span class="icon">
                                <img src="/wp-content/themes/tecapro/images/dich_vu.svg" class="img-show">
                                <img src="/wp-content/themes/tecapro/images/dich_vu1.svg" class="img-hidden">
                                </span>
                            <div class="div-add">Dịch vụ</div>
                        </a>
                    </li>
                    <li>
                        <a href="/dich-vu/">
                                <span class="icon">
                                <img src="/wp-content/themes/tecapro/images/icon_video.svg" class="img-show">
                                <img src="/wp-content/themes/tecapro/images/video_mobile.svg" class="img-hidden">
                                </span>
                            <div class="div-add">Video</div>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
        <!--=======đối tács============-->
        <div class="col-sm-12 col-xs-12 none-padding run">
            <script language="JavaScript1.2">
                var leftrightslide	=	new Array()
                var finalslide		=	''
                var slidesspace		=	parseInt ('5')
                var sliderwidth		=	"1170px"
                var sliderheight	=	"70px"
                var slidebgcolor	=	""
                var stopslide		=	"1"
                var imagegap		=	"&nbsp;"
                var slidespeed		=	1
                leftrightslide[0]='<a href="dell.com"><img src="/wp-content/themes/tecapro/images/emerson.png"  height="33px" hspace="10"  border="0" class="img-img"></a>'
                ;
                leftrightslide[1]='<a href="http://www.microsoft.com/"><img src="/wp-content/themes/tecapro/images/microsoft.png"  height="33px" hspace="10"  border="0" class="img-img"></a>'
                ;
                leftrightslide[2]='<a href="#"><img src="/wp-content/themes/tecapro/images/ibm.png"  height="33px" hspace="10"  border="0" class="img-img"></a>'
                ;
                leftrightslide[3]='<a href="#"><img src="/wp-content/themes/tecapro/images/cisco.png"  height="33px" hspace="10"  border="0" class="img-img"></a>'
                ;
                leftrightslide[4]='<a href="#"><img src="/wp-content/themes/tecapro/images/nec.png"  height="33px" hspace="10"  border="0" class="img-img"></a>'
                ;
                leftrightslide[5]='<a href="#"><img src="/wp-content/themes/tecapro/images/nokia.png"  height="33px" hspace="10"  border="0" class="img-img"></a>'
                ;
                leftrightslide[6]='<a href="http://www.emerson.com/en-us"><img src="/wp-content/themes/tecapro/images/dell.png"  height="33px" hspace="10"  border="0" class="img-img"></a>'


            </script>
            <script src="/wp-content/themes/tecapro/JS/slider_footer.js"></script>
        </div>
    </div>
    <!--end container-->
<?php
get_footer();

