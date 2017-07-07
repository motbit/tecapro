<?php

/* Template Name: Teca: Trang Lĩnh vực hoạt động */


get_header();
$category = '';
?>
    <div class="container-fuild none-padding banner none-mobile">
        <div id="myCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="<?php echo get_template_directory_uri() . '/images/BG.png' ?>">
                    <div class="btn-a">
                        <a href="/san-pham/motion-base/">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg03.png' ?>">
                    <div class="btn-a">
                        <a href="/san-pham/giai-phap-toan-dien-ve-he-thong-cong-thong-tin-dien-tu/">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg02.png' ?>">
                    <div class="btn-a">
                        <a href="/san-pham/t-mail/">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg04.png' ?>">
                    <div class="btn-a">
                        <a href="/san-pham/giai-phap-quan-ly-benh-vien-dien-tu/">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg05.png' ?>">
                    <div class="btn-a">
                        <a href="/san-pham/thiet-bi-y-te/">
                            <button>Xem chi tiết</button>
                        </a>
                    </div>
                </div>
                <div class="item">
                    <img src="<?php echo get_template_directory_uri() . '/images/bg06.png' ?>">
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
    <!--=============================-->
    <div class="container none-padding padding-mobile">
        <p class="tintuc p-add add2">LĨNH VỰC HOẠT ĐỘNG</p>
        <div class="col-sm-12 col-xs-12 none-padding">
            <ul class="ul-max">
                <li>
                    <a href="<?php echo get_home_url() . '/cong-nghe-thong-tin/' ?>">
                        <img src="<?php echo get_template_directory_uri() . '/images/CNTT3.png' ?>" class="img-show">
                        <img src="<?php echo get_template_directory_uri() . '/images/CNTT2.png' ?>" class="img-hidden">
                        <p>Công nghệ thông tin</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_home_url() . '/dien-tu-vien-thong/' ?>">
                        <img src="<?php echo get_template_directory_uri() . '/images/dien_tu3.png' ?>" class="img-show">
                        <img src="<?php echo get_template_directory_uri() . '/images/dien_tu2.png' ?>" class="img-hidden">
                        <p>Điện tử viễn thông</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_home_url() . '/cong-nghe-moi-truong/' ?>">
                        <img src="<?php echo get_template_directory_uri() . '/images/cong_nghe_MT3.png' ?>" class="img-show">
                        <img src="<?php echo get_template_directory_uri() . '/images/cong_nghe_MT2.png' ?>" class="img-hidden">
                        <p>Công nghệ môi trường</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_home_url() . '/xay-dung-cong-trinh/' ?>">
                        <img src="<?php echo get_template_directory_uri() . '/images/xay_dung_cong_trinh3.png' ?>" class="img-show">
                        <img src="<?php echo get_template_directory_uri() . '/images/xay_dung_cong_trinh2.png' ?>" class="img-hidden">
                        <p>Xây dựng công trình</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo get_home_url() . '/dich-vu/' ?>">
                        <img src="<?php echo get_template_directory_uri() . '/images/dich_vu3.png' ?>" class="img-show">
                        <img src="<?php echo get_template_directory_uri() . '/images/dich_vu2.png' ?>" class="img-hidden">
                        <p>Dịch vụ</p>
                    </a>
                </li>
            </ul>
        </div>
        <!--==========-->
        <div class="col-sm-12 col-xs-12 none-padding truso">
            <div class=" small truso-small">
                <div class=" small-c ">
                </div>
            </div>
            <?php while (have_posts()):
                the_post();
                $meta_data = get_post_meta(get_the_ID(), 'tecapro_linh_vuc');
                if (!empty($meta_data)) {
                    $category = $meta_data[0];
                }

                the_content();
            endwhile;
            wp_reset_query();
            ?>
        </div>
        <div class="col-sm-12 col-xs-12 none-padding content-lvhd">
            <?php
            $news_query = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 9,
                'category_name' => $category
            ));

            $i = 1;

            while ($news_query->have_posts()) :
                $news_query->the_post();
                ?>
                <?php if ($i % 3 == 1): ?>
                <div class="content-tintuc col-sm-12 col-xs-12 none-padding tintuc linh-vuc-hd">
            <?php endif; ?>
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
                <?php if ($i % 3 == 0): ?>
                </div>
            <?php endif; ?>
                <?php
                $i++;
            endwhile; ?>
        </div>
    </div>

<?php
get_footer();

