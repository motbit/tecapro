<?php

/* Template Name: Teca: Đơn vị thành viên */


get_header(); ?>


    <div class="container none-padding padding-mobile">
        <div class="col-sm-12 col-xs-12 none-padding donvi thanhvien none-mobile">
            <div class="col-sm-4 col-xs-4 none-padding">
                <ul style="padding: 0;" class="ul-thanhvien">
                    <li>
                        <a href="don_vi_Tecapro_Telecom.html"><img src="images/active.svg" class="icon">Công ty CP Tecapro - Telecom</a>
                    </li>
                    <li>
                        <a href="don_vi_xi_nghiep_vat_lieu_TB_CN.html"><img src="images/active.svg" class="icon">Xí nghiệp Vật liệu và thiết bị công nghiệp</a>
                    </li>
                    <li>
                        <a href="don_vi_xi_nghiep_dich_vu_thuong_mai.html"><img src="images/active.svg" class="icon">Xí nghiệp Dịch vụ kỹ thuật & thương mại</a>
                    </li>
                    <li>
                        <a href="don_vi_cp_CNTT.html"><img src="images/active.svg" class="icon">Công ty CP CNTT & Truyền Thông</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-5 col-xs-5 none-padding">
                <ul class="ul-thanhvien">
                    <li>
                        <a href="don_vi_CH_LB_Nga.html"><img src="images/active.svg" class="icon">Văn phòng đại diện tại CH Liên Bang Nga</a>
                    </li>
                    <li>
                        <a href="don_vi_MTV_TecaWord.html"><img src="images/active.svg" class="icon">Công ty TNHH MTV TECAWORLD</a>
                    </li>
                    <li>
                        <a href="don_vi_xi_nghiep_CT.html"><img src="images/active.svg" class="icon">Xí nghiệp Xây dựng công trình</a>
                    </li>
                    <li>
                        <a href="don_vi_CB_DV_MT_ECO.html"><img src="images/active.svg" class="icon">Công ty CP CN-DV Môi trường ECO</a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-3 col-xs-3 none-padding">
                <ul class="ul-thanhvien">
                    <li>
                        <a href="don_vi_chi_nhanh_HN.html"><img src="images/active.svg" class="icon">Chi nhánh Hà Nội</a>
                    </li>
                    <li>
                        <a href="don_vi_chi_nhanh_Da_Nang.html"><img src="images/active.svg" class="icon">Chi nhánh Đà Nẵng</a>
                    </li>
                    <li>
                        <a href="don_vi_chi_nhanh_Vung_Tau.html"><img src="images/active.svg" class="icon">Chi nhánh Vũng Tàu</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- select -->
        <div class="col-xs-12 none-padding none-desktop styled-select slate mar-top-10">
            <select name="forma" onchange="location = this.value;">
                <option>Chọn xem đơn vị thành viên</option>
                <option value="don_vi_Tecapro_Telecom.html" >Công ty CP Tecapro - Telecom</option>
                <option value="don_vi_xi_nghiep_vat_lieu_TB_CN.html">Xí nghiệp Vật liệu và thiết bị công nghiệp</option>
                <option value="don_vi_xi_nghiep_dich_vu_thuong_mai.html">Xí nghiệp Dịch vụ kỹ thuật & thương mại</option>
                <option value="don_vi_cp_CNTT.html">Công ty CP CNTT &amp; Truyền thông</option>
                <option value="don_vi_CH_LB_Nga.html">Văn phòng đại diện tại CH Liên Bang Nga</option>
                <option value="don_vi_MTV_TecaWord.html">Công ty TNHH MTV TECAWORLD</option>
                <option value="don_vi_xi_nghiep_CT.html">Xí nghiệp Xây dựng công trình</option>
                <option value="don_vi_CB_DV_MT_ECO.html" >Công ty CP CN-DV Môi trường ECO</option>
                <option value="don_vi_chi_nhanh_HN.html">Chi nhánh Hà Nội</option>
                <option value="don_vi_chi_nhanh_Da_Nang.html" selected>Chi nhánh Đà Nẵng</option>
                <option value="don_vi_chi_nhanh_Vung_Tau.html">Chi nhánh Vũng Tàu</option>
            </select>
        </div>
        <!-- end select-->
        <div class="col-sm-12 col-xs-12 none-padding truso-a">
            <div class=" small truso-small">
                <div class=" small-c ">
                </div>
            </div>
        </div>

        <?php
        while ( have_posts() ) : the_post(); ?>
            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'tecapro' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div><!-- .entry-content -->
        <?php

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

        endwhile; // End of the loop.
        ?>


    </div>

<?php
get_footer();

