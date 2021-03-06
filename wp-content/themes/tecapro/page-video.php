<?php

/* Template Name: Teca: Thư viện Video */
remove_filter ('the_content', 'wpautop');

get_header(); ?>

    <div class="container none-padding padding-mobile">
        <p class="tintuc p-add add2">THƯ VIỆN VIDEO</p>
        <div class="col-sm-12 col-xs-12 none-padding">
            <ul class="ul-gt ul-thuvien-video">
                <li>
                    <a href="#">
                        <p>Giới thiệu TECAPRO</p>
                    </a>
                </li>
                <li>
                    <a href="/thu-vien-video/">
                        <p>Video TECAPRO</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <p>TECAPRO</p>
                    </a>
                </li>
            </ul>
        </div>
        <!--========================-->
        <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $video_posts = new WP_Query(array(
            'posts_per_page' => 6,
            'category_name' => 'tin-video',
            'paged' => $paged
        ));

        $i = 1;

        if ($video_posts->have_posts()):
            while ($video_posts->have_posts()):
                $video_posts->the_post();
                $link_embed = get_post_meta(get_the_ID(), 'tecapro_link_video', true);
                if ($i % 3 == 1):
                    ?>
                    <div class="content-tintuc col-sm-12 col-xs-12 none-padding tintuc">
                <?php endif; ?>

                <div class="col-sm-4 col-xs-12 none-padding ds-thuvien">
                    <div class=" tintuc tt-footer thumbnail lvhd thuvien-video">
                        <img src="<?php echo get_youtube_thumbnail($link_embed); ?>">
                        <div class="col-sm-12 col-xs-12 none-padding color">
                            <p class="col-sm-12 col-xs-12 none-padding tieude">
                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </p>
                            <p class="col-sm-9 col-xs-9 none-padding p-tomtat">
                                Bởi <?php the_author() ?>
                            </p>
                            <p class="col-sm-3 col-xs-3 none-padding p-time" data-toggle="modal" data-target="#videoModal" data-link="<?php echo $link_embed ?>">
                                <span class="glyphicon glyphicon-time" aria-hidden="true"></span>Xem ngay
                            </p>
                        </div>
                    </div>
                </div>

                <?php if ($i % 3 == 0 || $i == $video_posts->post_count): ?>
                </div>
            <?php endif; ?>
                <?php $i++; endwhile; ?>

            <?php if ($video_posts->max_num_pages > 1) : ?>
            <div class="nav-previous alignright" style="float: right!important;"><?php next_posts_link('Xem tiếp', $video_posts->max_num_pages); ?></div>
            <div class="nav-next alignleft" style="float: left!important;"><?php previous_posts_link('Quay lại'); ?></div>
        <?php endif; ?>
        <?php endif; ?>
        <div class="container">
            <!-- Trigger the modal with a button -->
            <!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->
            <!-- Modal1 -->
            <div class="modal fade" id="videoModal" role="dialog">
                <div class="modal-dialog modal-lg">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <iframe id="youtube_frame" width="100%" height="500" src="https://www.youtube.com/embed/omUSPKqRVao" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $('#videoModal').on('show.bs.modal', function (event) {
                var element = $(event.relatedTarget);
                var link = element.data('link');
                var modal = $(this);
                $("#youtube_frame").attr('src', link);
            });
        </script>
    </div>
    <!--end container-->
<?php
get_footer();
