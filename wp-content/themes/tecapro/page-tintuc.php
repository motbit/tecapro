<?php

/* Template Name: Teca: Trang Tin tức và Sự kiện */


get_header(); ?>
    <style>
        img, .item-img, .item img.active {
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1);
        }

        img:hover, .item-img:hover, .item.active:hover {
            -webkit-transition: all 200ms ease-in;
            -webkit-transform: scale(1);
            -ms-transition: all 200ms ease-in;
            -ms-transform: scale(1);
            -moz-transition: all 200ms ease-in;
            -moz-transform: scale(1);
            transition: all 200ms ease-in;
            transform: scale(1.05);
        }

        span {
            margin-right: 3px;
        }
    </style>

    <div class="container none-padding padding-mobile">
        <div class="col-sm-12 col-xs-12 none-padding tintuc tintuc-slider">
            <div class="contert-left col-md-8 col-xs-12 none-padding">
                <!--===============-->
                <!--===================================-->
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox" id="tt">
                        <div class="item active">
                            <img src="<?php echo get_template_directory_uri() . '/images/banner.png' ?>">
                            <div class="carousel-caption cmd">
                                <p class="add-fnt"><a href="tin_chi_tiet.html">Kỷ niệm 72 năm ngày thành lập Quân Đội Nhân Dân Việt Nam 22/12/1944 - 22/12/2016</a></p>
                                <h5 class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Thứ Năm,ngày 24/11/2016</h5>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() . '/images/banner.png' ?>">
                            <div class="carousel-caption cmd">
                                <p class="add-fnt"><a href="tin_chi_tiet.html">Kỷ niệm 72 năm ngày thành lập Quân Đội Nhân Dân Việt Nam 22/12/1944 - 22/12/2016</a></p>
                                <h5 class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> Thứ Năm,ngày 24/11/2016</h5>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() . '/images/banner.png' ?>">
                            <div class="carousel-caption cmd">
                                <p class="add-fnt"><a href="tin_chi_tiet.html">Kỷ niệm 72 năm ngày thành lập Quân Đội Nhân Dân Việt Nam 22/12/1944 - 22/12/2016</a></p>
                                <h5 class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</h5>
                            </div>
                        </div>
                        <div class="item">
                            <img src="<?php echo get_template_directory_uri() . '/images/banner.png' ?>">
                            <div class="carousel-caption cmd">
                                <p class="add-fnt"><a href="tin_chi_tiet.html">Kỷ niệm 72 năm ngày thành lập Quân Đội Nhân Dân Việt Nam 22/12/1944 - 22/12/2016</a></p>
                                <h5 class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contert-right col-md-4 col-xs-12 none-padding  none-mobile">
                <div class="item item-img">
                    <img src="<?php echo get_template_directory_uri() . '/images/Asset_11.png' ?>">
                    <div class="caption-tt">
                        <p class="add-fnt"><a href="tin_chi_tiet.html">Công ty TECAPRO tặng máy in chuyên dụng cho bệnh viện Quân y 175</a></p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                    </div>
                </div>
                <div class="item item-bottom item-img">
                    <img src="<?php echo get_template_directory_uri() . '/images/Asset_10.png' ?>">
                    <div class="caption-tt">
                        <p class="add-fnt"><a href="tin_chi_tiet.html">Công ty TECAPRO tặng máy in chuyên dụng cho bệnh viện Quân y 175</a></p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                    </div>
                </div>
            </div>
        </div>
        <!--ènd container-->
        <!--================-->
        <div class="content-tintuc ul-tintuc col-sm-12 col-xs-12 none-padding">
            <!--=======================-->
            <div class="content-tintuc ct-hidden col-sm-12 col-xs-12 none-padding none-mobile">
                <div class="col-sm-4 col-xs-12 none-padding">
                    <div class=" tintuc thumbnail thumbnail-top">
                        <div class="col-sm-2 col-xs-2 none-padding">
                            <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                        </div>
                        <div class="col-sm-10 col-xs-10 tintuc-left">
                            <p>
                                <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                            </p>
                            <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 none-padding">
                    <div class=" tintuc thumbnail thumbnail-top">
                        <div class="col-sm-2 col-xs-2 none-padding">
                            <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                        </div>
                        <div class="col-sm-10 col-xs-10 tintuc-left">
                            <p>
                                <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                            </p>
                            <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 none-padding">
                    <div class=" tintuc thumbnail thumbnail-top">
                        <div class="col-sm-2 col-xs-2 none-padding">
                            <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                        </div>
                        <div class="col-sm-10 col-xs-10 none-padding-right tintuc-left">
                            <p>
                                <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                            </p>
                            <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================-->
            <div class="content-tintuc ct-hidden col-sm-12 col-xs-12 none-padding none-mobile">
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
            <!--================-->
            <div class="content-tintuc ct-hidden col-sm-12 col-xs-12 none-padding none-mobile">
                <div class="col-sm-4 col-xs-12 none-padding">
                    <div class="  thumbnail thumbnail-top">
                        <div class="col-sm-2 col-xs-2 none-padding">
                            <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                        </div>
                        <div class="col-sm-10 col-xs-10 tintuc-left">
                            <p>
                                <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                            </p>
                            <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 none-padding">
                    <div class="  thumbnail thumbnail-top">
                        <div class="col-sm-2 col-xs-2 none-padding">
                            <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                        </div>
                        <div class="col-sm-10 col-xs-10 tintuc-left">
                            <p>
                                <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                            </p>
                            <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-12 none-padding">
                    <div class="  thumbnail thumbnail-top">
                        <div class="col-sm-2 col-xs-2 none-padding">
                            <img src="<?php echo get_template_directory_uri() . '/images/Asset_13.png' ?>">
                        </div>
                        <div class="col-sm-10 col-xs-10 none-padding-right tintuc-left">
                            <p>
                                <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                            </p>
                            <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                        </div>
                    </div>
                </div>
            </div>
            <!--====================-->
            <div class="content-tintuc col-sm-12 col-xs-12 none-padding tintuc linh-vuc-hd">
                <div class="col-sm-4 col-xs-6 none-padding ds-tintuc">
                    <div class=" tintuc tt-footer thumbnail lvhd">
                        <img src="<?php echo get_template_directory_uri() . '/images/Asset_10.png' ?>">
                        <p class="tieude">
                            <a href="tin_chi_tiet.html">Đoàn sĩ quan trẻ Quân đội Hoàng gia Cam-pu-chia giao lưu tại Công ty TECAPRO</a>
                        </p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                        <p class="p-tomtat">
                            Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 none-padding ds-tintuc">
                    <div class=" tintuc tt-footer thumbnail lvhd">
                        <img src="<?php echo get_template_directory_uri() . '/images/Asset_11.png' ?>">
                        <p class="tieude">
                            <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                        </p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                        <p class="p-tomtat">
                            Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                        </p>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6 none-padding ds-tintuc">
                    <div class=" tintuc tt-footer thumbnail lvhd">
                        <img src="<?php echo get_template_directory_uri() . '/images/Asset_10.png' ?>">
                        <p class="tieude">
                            <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                        </p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                        <p class="p-tomtat">
                            Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--===================-->
        <div class="col-sm-12 col-xs-12 none-padding">
            <div class="col-sm-9 col-xs-12 none-padding">
                <div class="col-sm-12 col-xs-12 none-padding content-lvhd content-tintucsukien">
                    <!--=====================-->
                    <div class="content-tintuc col-sm-12 col-xs-12 none-padding  linh-vuc-hd">
                        <div class="col-sm-6 col-xs-6 none-padding ds-tintuc">
                            <div class=" tintuc tt-footer thumbnail lvhd">
                                <img src="<?php echo get_template_directory_uri() . '/images/Asset_10.png' ?>">
                                <p class="tieude">
                                    <a href="tin_chi_tiet.html">Đoàn sĩ quan trẻ Quân đội Hoàng gia Cam-pu-chia giao lưu tại Công ty TECAPRO</a>
                                </p>
                                <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                                <p class="p-tomtat">
                                    Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6 none-padding ds-tintuc">
                            <div class=" tintuc tt-footer thumbnail lvhd">
                                <img src="<?php echo get_template_directory_uri() . '/images/Asset_11.png' ?>">
                                <p class="tieude">
                                    <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                                </p>
                                <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                                <p class="p-tomtat">
                                    Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-6 none-padding ds-tintuc">
                            <div class=" tintuc tt-footer thumbnail lvhd">
                                <img src="<?php echo get_template_directory_uri() . '/images/Asset_10.png' ?>">
                                <p class="tieude">
                                    <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                                </p>
                                <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                                <p class="p-tomtat">
                                    Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                                </p>
                            </div>
                        </div>
                    </div>
                    <!--=====================-->
                    <div class="content-tintuc col-sm-12 col-xs-12 none-padding  linh-vuc-hd">
                        <div class="col-sm-6 col-xs-12 none-padding ds-tintuc">
                            <div class=" tintuc tt-footer thumbnail lvhd">
                                <div class="col-sm-12 col-xs-3 none-padding">
                                    <img src="<?php echo get_template_directory_uri() . '/images/Asset_10.png' ?>">
                                </div>
                                <div class="col-sm-12 col-xs-9 none-padding">
                                    <p class="tieude">
                                        <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                                    </p>
                                    <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                                    <p class="p-tomtat">
                                        Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 none-padding ds-tintuc">
                            <div class=" tintuc tt-footer thumbnail lvhd">
                                <div class="col-sm-12 col-xs-3 none-padding">
                                    <img src="<?php echo get_template_directory_uri() . '/images/Asset_11.png' ?>">
                                </div>
                                <div class="col-sm-12 col-xs-9 none-padding">
                                    <p class="tieude">
                                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                                    </p>
                                    <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                                    <p class="p-tomtat">
                                        Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-12 none-padding ds-tintuc">
                            <div class=" tintuc tt-footer thumbnail lvhd">
                                <div class="col-sm-12 col-xs-3 none-padding">
                                    <img src="<?php echo get_template_directory_uri() . '/images/Asset_10.png' ?>">
                                </div>
                                <div class="col-sm-12 col-xs-9 none-padding">
                                    <p class="tieude">
                                        <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                                    </p>
                                    <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                                    <p class="p-tomtat">
                                        Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=====================-->
                    <div class="content-tintuc col-sm-12 col-xs-12 none-padding  linh-vuc-hd">
                        <div class="col-sm-6 col-xs-4 none-padding ds-tintuc">
                            <div class=" tintuc tt-footer thumbnail first-child lvhd">
                                <img src="<?php echo get_template_directory_uri() . '/images/Asset_10.png' ?>">
                                <p class="tieude">
                                    <a href="tin_chi_tiet.html">Đoàn sĩ quan trẻ Quân đội Hoàng gia Cam-pu-chia giao lưu tại Công ty TECAPRO</a>
                                </p>
                                <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                                <p class="p-tomtat">
                                    Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-4 none-padding ds-tintuc">
                            <div class=" tintuc tt-footer thumbnail lvhd">
                                <img src="<?php echo get_template_directory_uri() . '/images/Asset_11.png' ?>">
                                <p class="tieude">
                                    <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                                </p>
                                <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                                <p class="p-tomtat">
                                    Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                                </p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-xs-4 none-padding ds-tintuc">
                            <div class=" tintuc tt-footer thumbnail lvhd">
                                <img src="<?php echo get_template_directory_uri() . '/images/Asset_10.png' ?>">
                                <p class="tieude">
                                    <a href="tin_chi_tiet.html"> Kỉ niệm 28 năm thành lập công ty Tecapro - Bộ quốc phòng 14/11/1988-14/11/2016</a>
                                </p>
                                <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span>Thứ Năm,ngày 24/11/2016</p>
                                <p class="p-tomtat">
                                    Ngày 8.11.2016, Công ty TECAPRO đã phối hợp cùng UBND xã An Nhơn Tây tổ chức trao tặng nhà tình nghĩa cho gia đình ...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-3 col-xs-12 none-padding">
                <div class=" tintuc tt-footer thumbnail tt-b">
                    <img src="<?php echo get_template_directory_uri() . '/images/Asset-18.jpg' ?>">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-b">
                    <img src="<?php echo get_template_directory_uri() . '/images/Asset-19.jpg' ?>">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-b">
                    <img src="<?php echo get_template_directory_uri() . '/images/Asset-20.jpg' ?>">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-b">
                    <img src="<?php echo get_template_directory_uri() . '/images/Asset-21.jpg' ?>">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                </div>
                <div class=" tintuc tt-footer thumbnail tt-b">
                    <img src="<?php echo get_template_directory_uri() . '/images/Asset-21.jpg' ?>">
                    <p>
                        <a href="tin_chi_tiet.html">Thương hiệu của người lính trên mặt trận khoa học và công nghệ</a>
                    </p>
                </div>
            </div>
        </div>
        <!--==============-->
    </div>
<?php
get_footer();
