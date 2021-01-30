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

<div class="col-lg-4 col-sm-6 col-12 colswpsh prosarchivestyle">
	<div class="everypro colswpsh">
		<a href="<?php echo the_permalink(); ?>">
			<div class="proheader">
				<?php the_post_thumbnail( 'wwshthumb' ); ?>
			</div>
		</a>
		<div class="prodetail">
			<div class="atitlepro">
				<a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></div>
			<p><?php echo $product->get_short_description(); ?></p>
		</div>
	</div>
</div>
