<?php
/**
 * My Account navigation
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/navigation.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

do_action( 'woocommerce_before_account_navigation' );
?>

<div class="monilewoomenu">
	<div class="hide-in-not-mobile" style="padding:0 10px;">
		<div class="iconwoobox">
			<i class="iconwoo fas fa-bars"></i>
		</div>
	</div>
	<div class="woonavmy">
	<nav class="woocommerce-MyAccount-navigation">
		<a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ) . '/edit-account/'; ?>">
		<div class="imgprofilewoohm">
		<?php
		global $current_user;
		// get_currentuserinfo();
		echo get_avatar( $current_user->ID, 120 );
		?>
		<p class="uresndisplaynamehm">
		<?php
		printf( __( '%s', 'textdomain' ), esc_html( $current_user->display_name ) ) . '<br />';
		?>
		</p>
		</div>
	</a>
	<ul>
		<?php foreach ( wc_get_account_menu_items() as $endpoint => $label ) : ?>
			<li class="<?php echo wc_get_account_menu_item_classes( $endpoint ); ?>">
				<a href="<?php echo esc_url( wc_get_account_endpoint_url( $endpoint ) ); ?>"><?php echo esc_html( $label ); ?></a>
			</li>
		<?php endforeach; ?>
	</ul>
	</nav>
</div>
</div>

<?php do_action( 'woocommerce_after_account_navigation' ); ?>