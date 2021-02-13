<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

<div class="col-lg-3 col-sm-3 col-12 course-box">
    <div class="thumbnail courses blog">
        <a href=<?php echo the_permalink(); ?>><?php the_post_thumbnail( 'wwshthumb' ); ?></a>
        <div class="caption">
            <a class="caption-tittle" href="<?php echo the_permalink(); ?>"><?php the_title() ?></a>
            <div class="row information-course-box">
                <div class="col-md-8 col-xs-6 col-sm-6 teacher">
                    <a href="<?php echo get_author_posts_url($author_id,$user_nicename); ?>"><i
                            style="margin-left: 5px;" class="fas fa-user"></i><?php the_author() ?></a>
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