<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Tecapro
 */

?>

</div><!-- #content -->

<!--	<footer id="colophon" class="site-footer">-->
<!--		<div class="site-info">-->
<!--			<a href="--><?php //echo esc_url( __( 'https://wordpress.org/', 'tecapro' ) ); ?><!--">--><?php
//				/* translators: %s: CMS name, i.e. WordPress. */
//				printf( esc_html__( 'Proudly powered by %s', 'tecapro' ), 'WordPress' );
//			?><!--</a>-->
<!--			<span class="sep"> | </span>-->
<!--			--><?php
//				/* translators: 1: Theme name, 2: Theme author. */
//				printf( esc_html__( 'Theme: %1$s by %2$s.', 'tecapro' ), 'tecapro', '<a href="https://automattic.com/">Underscores.me</a>' );
//			?>
<!--		</div><!-- .site-info -->
<!--	</footer><!-- #colophon -->

<div class="container none-padding padding-mobile">
    <!--======= PARTNERS ==========-->
    <div class="col-sm-12 col-xs-12 none-padding run">
        <script language="JavaScript1.2">
            var leftrightslide = [];
            var finalslide = '';
            var slidesspace = parseInt('5');
            var sliderwidth = "1170px";
            var sliderheight = "70px";
            var slidebgcolor = "";
            var stopslide = "1";
            var imagegap = "&nbsp;";
            var slidespeed = 1;
            leftrightslide[0] = '<a href="dell.com"><img src="<?php echo get_template_directory_uri() . '/images/emerson.png' ?>"  height="33px" hspace="10"  border="0" class="img-img"></a>'
            ;
            leftrightslide[1] = '<a href="http://www.microsoft.com/"><img src="<?php echo get_template_directory_uri() . '/images/microsoft.png' ?>"  height="33px" hspace="10"  border="0" class="img-img"></a>'
            ;
            leftrightslide[2] = '<a href="#"><img src="<?php echo get_template_directory_uri() . '/images/ibm.png' ?>"  height="33px" hspace="10"  border="0" class="img-img"></a>'
            ;
            leftrightslide[3] = '<a href="#"><img src="<?php echo get_template_directory_uri() . '/images/cisco.png' ?>"  height="33px" hspace="10"  border="0" class="img-img"></a>'
            ;
            leftrightslide[4] = '<a href="#"><img src="<?php echo get_template_directory_uri() . '/images/nec.png' ?>"  height="33px" hspace="10"  border="0" class="img-img"></a>'
            ;
            leftrightslide[5] = '<a href="#"><img src="<?php echo get_template_directory_uri() . '/images/nokia.png' ?>"  height="33px" hspace="10"  border="0" class="img-img"></a>'
            ;
            leftrightslide[6] = '<a href="http://www.emerson.com/en-us"><img src="<?php echo get_template_directory_uri() . '/images/dell.png' ?>"  height="33px" hspace="10"  border="0" class="img-img"></a>'


        </script>
        <script src="<?php echo get_template_directory_uri() . '/js/slider_footer.js' ?>"></script>
    </div>
</div>

<?php if (!is_home()) { ?>
    <div class="col-sm-12 col-xs-12 none-padding menu-footer ">
        <div class="container-fuild none-padding content-a ">
            <div class=" container">
                <div class="col-sm-12 col-xs-12 none-padding ">
                    <ul class="ul-home">
                        <li>
                            <a href="<?php echo get_site_url(); ?>">
                                <p>Trang chủ</p>
                            </a>
                        </li>
                        <li>
                            <a href="tong_quan.html">
                                <p>Về chúng tôi</p>
                            </a>
                        </li>
                        <li>
                            <a href="lien_he.html">
                                <p>Liên hệ</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
<?php } ?>

<div class="col-sm-12 col-xs-12 none-padding container-fuild none-padding footer">
    <div class=" container none-padding ">
        <div class="col-sm-8 col-xs-12 none-padding">
            <p class="tbl-p">
                Bản quyền 2016 thuộc về Công ty TNHH MTV Ứng dụng Kỹ thuật và Sản xuất <br>
                Địa chỉ : 18A - Đường Cộng Hoà, Phường 12, Quận Tân Bình, TP.Hồ Chí Minh<br>
                Điện thoại : (84-8)-3811.0181, (84-8)-3811.0718 Fax: (84-8)-3811.0688 <br>
                Email : tecapro@tecapro.com.vn Web : www.tecapro.com.vn
            </p>
        </div>
        <div class="col-sm-4 col-xs-12 none-padding">
            <ul class="ul-footer">
                <li>
                    Lượt truy cập : 78910
                </li>
                <li class="li-center">
                    |
                </li>
                <li>
                    Số người online : 789
                </li>
            </ul>
        </div>
    </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
