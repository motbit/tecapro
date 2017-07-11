<?php

/* Template Name: Teca: Trang Liên hệ */

remove_filter ('the_content', 'wpautop');
get_header();
$category = '';
?>
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

            }); // end of document ready
        })(jQuery); // end of jQuery name space
    </script>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&key=AIzaSyCawnGFMDl5vLzLn-EH1Bxii-6YS0pjY0Q "></script>
    <script type="text/javascript">
        var gmap = new google.maps.LatLng(21.030448, 105.783817);
        var marker;
        function initialize() {
            var mapProp = {
                center: new google.maps.LatLng(21.030448, 105.783817),
                zoom: 16,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            var map = new google.maps.Map(document.getElementById("googleMap")
                , mapProp);

            var styles = [
                {
                    featureType: 'road.arterial',
                    elementType: 'all',
                    stylers: [
                        {hue: '#fff'},
                        {saturation: 100},
                        {lightness: -48},
                        {visibility: 'on'}
                    ]
                }, {
                    featureType: 'road',
                    elementType: 'all',
                    stylers: []
                },
                {
                    featureType: 'water',
                    elementType: 'geometry.fill',
                    stylers: [
                        {color: '#adc9b8'}
                    ]
                }, {
                    featureType: 'landscape.natural',
                    elementType: 'all',
                    stylers: [
                        {hue: '#809f80'},
                        {lightness: -35}
                    ]
                }
            ];

            var styledMapType = new google.maps.StyledMapType(styles);
            map.mapTypes.set('Styled', styledMapType);

            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: gmap
            });
            google.maps.event.addListener(marker, 'click', toggleBounce);
        }

        function toggleBounce() {

            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>

    <div class="container-fuild none-padding banner">
        <div class="col-sm-12 col-xs-12 none-padding banner-lienhe">
            <!--  <img src="images/BG1-1.png" class="banner-sp"> -->
            <div id="googleMap" style="width: 100%; height: 500px;">Google Map</div>
        </div>
    </div>
    <!--end banner-->
    <!--=============================-->
    <div class="container none-padding padding-lienhe padding-mobile">
        <div class="col-sm-12 col-xs-12 none-padding ">
            <p class="tintuc p-add add2">LIÊN HỆ</p>
        </div>
        <div class="col-sm-12 col-xs-12 none-padding ">
            <div class="col-sm-5 col-xs-12 none-padding lienhe-right">
                <div class="tbl-gt row none-margin ">
                    <ul style="text-align: center;padding: 0;">
                        <img src="<?php echo get_template_directory_uri() . '/images/logo.png'?>" class="img-logo img-bottom">
                    </ul>
                    <ul style="padding: 10px 0;text-align: center;margin: 0;">
                        <p class="addFont" style="margin-left: 0;">CÔNG TY TNHH MỘT THÀNH VIÊN - ỨNG DỤNG KỸ THUẬT VÀ SẢN XUẤT</p>
                    </ul>
                    <div>
                        <ul class="col-sm-3 col-xs-3 none-padding">
                            <li>
                                <p>Địa chỉ</p>
                            </li>
                            <li>
                                <p>Điện thoại</p>
                            </li>
                            <li>
                                <p>Fax</p>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <ul>
                            <li>
                                <p> 18A Cộng Hòa – phường 12 – quận Tân Bình – Tp. Hồ Chí Minh.</p>
                            </li>
                            <li>
                                <p>(84-8) 3811 0718 – 3811 0181</p>
                            </li>
                            <li>
                                <p>(84-8) 3811 0688</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-sm-5 col-xs-12 none-padding ">
                <ul class="ul-lienhe">
                    <li>
                        <p>
                            Họ tên
                        </p>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                </ul>
                <!---->
                <ul class="ul-lienhe">
                    <li>
                        <p>
                            Địa chỉ
                        </p>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                </ul>
                <!---->
                <ul class="ul-lienhe">
                    <li>
                        <p>
                            Điện thoại
                        </p>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                </ul>
                <!---->
                <ul class="ul-lienhe">
                    <li>
                        <p>
                            Email
                        </p>
                    </li>
                    <li>
                        <input type="text">
                    </li>
                </ul>
                <!---->
                <ul class="ul-lienhe">
                    <li>
                        <p>
                            Nội dung
                        </p>
                    </li>
                    <li>
                            <textarea>
                            </textarea>
                    </li>
                </ul>
                <!---->
                <ul class="ul-lienhe">
                    <li>
                        <p>
                            Mã kiểm tra
                        </p>
                    </li>
                    <li>
                        <ul class="ul-kt">
                            <li class="col-xs-5 none-padding">
                                <input type="text">
                            </li>
                            <li class="col-xs-2 none-padding">
                            </li>
                            <li class="col-xs-5 none-padding">
                                <img src="<?php echo get_template_directory_uri() . '/images/capcha.png'?>">
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="ul-lienhe lh-bottom">
                    <li>
                        <button class="delete">Xóa</button>
                    </li>
                    <li>
                        <button class="sent">Gửi</button>
                    </li>
                </ul>
            </div>
            <div class="col-sm-2 col-xs-12 none-padding ">
            </div>
        </div>
    </div>

<?php
get_footer();

