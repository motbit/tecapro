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
        <?php
        $args = [
            'numberposts' => 21,
            'category_name' => 'tin-tecapro'
        ];

        $posts = get_posts($args);
        $i = 1;

        foreach ($posts as $post):
            setup_postdata($post);
        if ($i == 1):
        ?>
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
                        <?php endif ?>
                        <?php if ($i >= 1 && $i <= 4) { ?>
                            <div class="item <?php if ($i==1) echo 'active';?>">
                                <img src="<?php echo get_thumbnail_url(); ?>">
                                <div class="carousel-caption cmd">
                                    <p class="add-fnt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                                    <h5 class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo get_date_publish(get_post_time()); ?></h5>
                                </div>
                            </div>
                        <?php } ?>
                        <?php if ($i == 4): ?>
                    </div>
                </div>
            </div>
            <?php endif; ?>

            <?php if ($i == 5){ ?>
            <div class="contert-right col-md-4 col-xs-12 none-padding  none-mobile">
                <?php } ?>
                <?php if ($i >= 5 && $i <= 6): ?>
                    <div class="item item-img <?php if ($i==6) echo 'item-bottom'; ?>">
                        <img src="<?php echo get_thumbnail_url('right-column'); ?>">
                        <div class="caption-tt">
                            <p class="add-fnt"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                            <h5 class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span> <?php echo get_date_publish(get_post_time()); ?></h5>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if ($i == 6){ ?>
            </div>
        </div>
        <!--ènd container-->
        <?php } ?>

            <?php if ($i==7): ?>
        <!--================-->
        <div class="content-tintuc ul-tintuc col-sm-12 col-xs-12 none-padding">
            <!--=======================-->
                <?php endif;?>
            <?php if ($i==7 || $i==10): ?>
            <div class="content-tintuc ct-hidden col-sm-12 col-xs-12 none-padding none-mobile">
                <?php endif;?>
                <?php if ($i >=7 && $i<=12): ?>
                <div class="col-sm-4 col-xs-12 none-padding">
                    <div class=" tintuc thumbnail thumbnail-top">
                        <div class="col-sm-2 col-xs-2 none-padding">
                            <img src="<?php echo get_thumbnail_url('six-small'); ?>">
                        </div>
                        <div class="col-sm-10 col-xs-10 tintuc-left">
                            <p>
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </p>
                            <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span><?php echo get_date_publish(get_post_time()); ?></p>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

            <?php if ($i==9 || $i==12): ?>
            </div>
            <?php endif; ?>

            <?php if ($i==9): ?>
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
            <?php endif; ?>

            <?php if ($i==13): ?>
            <!--====================-->
            <div class="content-tintuc col-sm-12 col-xs-12 none-padding tintuc linh-vuc-hd">
                <?php endif; ?>
                <?php if ($i>=13 && $i<=15): ?>
                <div class="col-sm-4 col-xs-6 none-padding ds-tintuc">
                    <div class=" tintuc tt-footer thumbnail lvhd">
                        <img src="<?php echo get_thumbnail_url('normal'); ?>">
                        <p class="tieude">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </p>
                        <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span><?php echo get_date_publish(get_post_time()); ?></p>
                        <p class="p-tomtat">
                            <?php echo wp_trim_words(substr(get_the_content(), 0, 120)) . '...'; ?>
                        </p>
                    </div>
                </div>
                <?php endif; ?>
            <?php if ($i==15): ?>
            </div>
        </div>
        <?php endif; ?>

            <?php if ($i==16): ?>
        <!--===================-->
        <div class="col-sm-12 col-xs-12 none-padding">
            <div class="col-sm-9 col-xs-12 none-padding">
                <div class="col-sm-12 col-xs-12 none-padding content-lvhd content-tintucsukien">
                    <?php endif; ?>
                    <!--=====================-->
            <?php if ($i==16 || $i==18 || $i==20): ?>
                    <div class="content-tintuc col-sm-12 col-xs-12 none-padding  linh-vuc-hd">
                        <?php endif; ?>
                        <?php if ($i>=16 && $i<=21): ?>
                        <div class="col-sm-6 col-xs-6 none-padding ds-tintuc">
                            <div class=" tintuc tt-footer thumbnail lvhd">
                                <img src="<?php echo get_thumbnail_url('normal'); ?>">
                                <p class="tieude">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </p>
                                <p class="p-time"><span class="glyphicon glyphicon-time" aria-hidden="true"></span><?php echo get_date_publish(get_post_time()); ?></p>
                                <p class="p-tomtat">
                                    <?php echo wp_trim_words(substr(get_the_content(), 0, 120)) . '...'; ?>
                                </p>
                            </div>
                        </div>
                            <?php if ($i==17 || $i==19 || $i==21): ?>
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
                            <?php endif; ?>
                        <?php endif; ?>
            <?php if ($i==17 || $i==19 || $i==21): ?>
                    </div>
                <?php endif; ?>
            <?php if ($i==count($posts)): ?>
                </div>
            </div>
            <?php endif; ?>
            <?php
            $i++;
            endforeach;
            ?>
            <!-- VIDEOS -->
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
