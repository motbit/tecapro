<?php

/* Template Name: Teca: Sản Phẩm */


get_header(); ?>

    <!--============================-->
    <div class="col-sm-12 col-xs-12 none-padding banner banner-img">
        <img src="/wp-content/themes/tecapro/images/BG1-1.png">
    </div>
    <!--end banner-->
    <div class="container none-padding padding-mobile">
        <div class="col-sm-12 col-xs-12 none-padding"  id="cnt-center">
            <div class="col-md-3 col-sm-12 col-xs-12 none-padding  detail-left">
                <p class="tieude-sp">
                    Thiết Bị Y Tế
                </p>
                <p class="nd-sp">Thiết bị y tế là sản phẩm tích hợp đo được huyết áp, nhịp tim, nồng độ oxy trong máu, thân nhiệt của người bệnh sử dụng công nghệ đo không xâm thực mới nhất cho kết quả chính xác cao. Các thông số đo sẽ được gửi tự động lên cơ sở dữ liệu của Bệnh án Điện tử hoặc Hệ thống Bác sĩ Gia đình thông qua mạng lưới không dây. Bệnh nhân, người thân và bác sĩ có thể theo dõi qua Website hoặc Smartphone để đưa ra những giải pháp điều trị. Ngoài ra, thiết bị y tế tích hợp cảnh báo thông minh khi các thông số ở ngưỡng bất thường đảm bảo có sự can thiệp kịp thời cho người bệnh.
                </p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 none-padding" id="center">
                <ul class="sp">
                    <li>
                        <p class="li-tieude">Tính năng nổi bật</p>
                        <div class="nd">
                            Thiết bị y tế là sản phẩm tích hợp đo được huyết áp, nhịp tim, nồng độ oxy trong máu, thân nhiệt của người bệnh sử dụng công nghệ đo không xâm thực mới nhất cho kết quả chính xác cao. Các thông số đo sẽ được gửi tự động lên cơ sở dữ liệu của Bệnh án Điện tử hoặc Hệ thống Bác sĩ Gia đình thông qua mạng lưới không dây. Bệnh nhân, người thân và bác sĩ có thể theo dõi qua Website hoặc Smartphone để đưa ra những giải pháp điều trị. Ngoài ra, thiết bị y tế tích hợp cảnh báo thông minh khi các thông số ở ngưỡng bất thường đảm bảo có sự can thiệp kịp thời cho người bệnh.
                        </div>
                    </li>
                </ul>
                <!---->
                <div class="mid">
                    <p class="li-tieude">Thông số kĩ thuật
                    </p>
                    <table class="tbl-sp">
                        <td class="col-sm-6 none-padding">
                            Kích thước
                        </td>
                        <td class="col-sm-6 none-padding">
                            L(72mm) x W(62mm) x H(20mm)
                        </td>
                        <tr>
                            <td>
                                Khối lượng
                            </td>
                            <td>
                                350g
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Điện áp hoạt động
                            </td>
                            <td>
                                3.7-5V DC
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Độ chính xác huyết áp
                            </td>
                            <td>
                                (+-3mmHg), Nhịp tim (+-5%)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Nhiệt độ
                            </td>
                            <td>
                                (+-0.30C)
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Dung lượng Pin
                            </td>
                            <td>
                                4 ngày
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <!---->
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
                        <a href="san_pham.html"><img src="/wp-content/themes/tecapro/images/1.png"></a>
                    </li>
                    <li>
                        <a href="T-Mail.html"><img src="/wp-content/themes/tecapro/images/2.png"></a>
                    </li>
                    <li>
                        <a href="He_thong_cong_thong_tin.html"><img src="/wp-content/themes/tecapro/images/3.png"></a>
                    </li>
                    <li>
                        <a href="giap_phap_QL_benh_vien_dien_tu.html"><img src="/wp-content/themes/tecapro/images/4.png"></a>
                    </li>
                    <li>
                        <a href="thiet_bi_y_te.html"> <img src="/wp-content/themes/tecapro/images/5.png"></a>
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
                                <img src="/wp-content/themes/tecapro/images/Tin_tuc_su_kien1.svg" class="img-hidden tintucsk">
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

