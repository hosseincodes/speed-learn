<?php
/**
 * The Template for displaying all single products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

$product = wc_get_product(get_the_id());
?>

<div class="page-simple-all">

    <?php get_header( 'shop' ); ?>




    <div class="container">
        <div class="row">

            <div class="backimg indexbackimg probackimg"></div>

        </div>


        <div class="row wwsh-cource-area">
            <div class="cource-title-box">
                <h1 class="cource-title"><?php the_title(); ?></h1>
                <div class="section-address-p">
                    <div class="broadc">
                        <?php echo woocommerce_breadcrumb(); ?>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 col-12">
                <div class="course-content">

                    <?php while ( have_posts() ) : the_post(); ?>

                    <?php wc_get_template_part( 'content', 'single-product' ); ?>

                    <?php endwhile; // end of the loop. ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-0 col-xs-0">
                <aside class="sidebar d-none d-lg-block sidebar-products">
                    <div class="sidebar-products-box">
                        <?php
			/**
			 * woocommerce_sidebar hook.
			 *
			 * @hooked woocommerce_get_sidebar - 10
			 */
			do_action( 'woocommerce_sidebar' );
		?>
                    </div>
                </aside>
                <aside class="sidebar d-none d-lg-block sidebar-products-tags">
                    <div class="sidebar-products-box-1">
                        <span class="sidbar-span"><i class="fas fa-tags tags-sidebar"></i> برچسب ها</span>
                        <p class="ad-slider"><?php woocommerce_product_loop_tags(); ?></p>
                </aside>
                <aside class="sidebar d-none d-lg-block sidebar-products-share">
                    <div class="sidebar-products-box-share">
                        <div class="lefts_shares">
                            <span>اشتراک گذاری</span>
                            <ul>
                                <li><a target="_blank" rel="nofollow" class="linkedin_shares"
                                        href="https://www.linkedin.com/shareArticle?mini=true&title=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><i
                                            class="fab fa-linkedin"></i></a>
                                </li>
                                <li><a target="_blank" rel="nofollow" class="twitter_shares"
                                        href="http://twitter.com/home?status=<?php the_permalink(); ?>"><i
                                            class="fab fa-twitter-square"></i></a></li>
                                <li><a target="_blank" rel="nofollow" class="telegram_shares"
                                        href="https://telegram.me/share/url?url=<?php the_permalink(); ?>"><i
                                            class="fab fa-telegram"></i></a></li>
                            </ul>
                        </div>
                        <div class="clear_iranthemes"></div>
                    </div>
                </aside>
                <aside class="sidebar d-none d-lg-block sidebar-products-ads">
                    <div class="sidebar-products-box-1">
                        <span class="sidbar-span"><i class="fas fa-ad ad-sidebar"></i> تبلیغات</span>
                        <p class="ad-slider">محل قرار گیری تبلیغات شما</p>
                </aside>
            </div>

        </div>

        <div class="col-12">
            <div class="more-courses">
                <h3 class="all-areas-title">دوره های پیشنهادی</h3>

                <div class="row slyder-1">

                    <?php global $product; $crosssell_ids = $product->get_upsell_ids();

$args = array('post_type'=>'product','posts_per_page'=>4,'post__in'=>$crosssell_ids,'orderby'=>'rand');
$loop = new WP_Query($args); if($loop->have_posts()){ ?>

                    <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

                    <div class="col-lg-3 col-sm-3 col-12 course-box">
                        <div class="thumbnail courses blog">
                            <a href=<?php echo the_permalink(); ?>><?php the_post_thumbnail( 'wwshthumb' ); ?></a>
                            <div class="caption">
                                <a class="caption-tittle" href="<?php echo the_permalink(); ?>"><?php the_title() ?></a>
                                <div class="row information-course-box">
                                    <div class="col-md-8 col-xs-6 col-sm-6 teacher">
                                        <a href="<?php echo get_author_posts_url($author_id,$user_nicename); ?>"><i
                                                style="margin-left: 5px;"
                                                class="fas fa-user"></i><?php the_author() ?></a>
                                    </div>
                                    <div class="col-md-4 col-xs-6 col-sm-6 users">
                                        <?php global $product; $units_sold = get_post_meta( $product->id, 'total_sales', true ); echo ''. sprintf( __( '%s', 'woocommerce' ), $units_sold ).''; ?>
                                        مشترک</div>
                                </div>
                                <hr style="color: #e9ebed; margin: 0px;">
                                <div class="price-box">
                                    <div class="price-background">
                                        <?php woocommerce_template_loop_price() ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <?php endwhile; ?>

                    <?php } wp_reset_postdata(); ?>

                </div>
            </div>
        </div>

    </div>

</div>

<?php get_footer( 'shop' );



	/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */