<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
$current_user = wp_get_current_user();
$numorders = wc_get_customer_order_count( $current_user->ID );
// Get CANCELLED orders for customer
$args = array(
    'customer_id' => $current_user->ID,
    'post_status' => 'cancelled',
    'post_type' => 'shop_order',
    'return' => 'ids',
);
$numorders_cancelled = 0;
$numorders_cancelled = count( wc_get_orders( $args ) ); // count the array of orders

// NON-CANCELLED equals TOTAL minus CANCELLED
$num_not_cancelled = $numorders - $numorders_cancelled;
 ?>


 <div class="row boxesallarea">
  <div class="col-12 col-lg-6 boxesareamyaccount">
 	 <a href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ) . '/orders/'; ?>">
 	 <div class="boxmyaccounts number-of-orders-hm">
 		 <span class="numberboxmy"><?php echo $numorders ?></span>
 		 <span class="titleboxmy">سفارش</span>
 	 </div>
  </a>
  </div>

  <div class="col-12 col-lg-6 boxesareamyaccount">
 	 <div class="boxmyaccounts number-of-days-hm">
 <?php
 $today_obj      = new DateTime( date( 'Y-m-d', strtotime( 'today' ) ) );            // Get today's Date Object
 $register_date  = get_the_author_meta( 'user_registered', get_current_user_id() );  // Grab the registration Date
 $registered_obj = new DateTime( date( 'Y-m-d', strtotime( $register_date ) ) );     // Get the registration Date Object
 $interval_obj   = $today_obj->diff( $registered_obj );                              // Retrieve the difference Object

 if( $interval_obj->days > 1 ) {             // The most commonly hit condition at the top
 	 echo __( '<span class="numberboxmy">'."{$interval_obj->days}".'</span><span class="titleboxmy">روز از آشناییمون می‌گذره!!</span>', "kiwi" );
 } elseif( 0 == $interval_obj->days ) {      // IF they registered today
 	 echo __( '<span class="numberboxmy">0.5</span><span class="titleboxmy">روز عضویت شما در سایت ما!!</span>', 'kiwi' );
 } elseif( 1 == $interval_obj->days ) {      // IF they registered yesterday
 	 echo __( '<span class="numberboxmy">1</span><span class="titleboxmy">روز از عضویت تان می‌گذرد!!</span>', 'kiwi' );
 } else {                                    // The off-chance we have less than zero
 	 echo __( '<span class="numberboxmy">چند</span><span class="titleboxmy">روز از عضویت تان می‌گذرد!!</span>', 'kiwi' );
 }

 ?>
 </div>
 </div>
 </div>


<p><?php
	printf(
		/* translators: 1: user display name 2: logout url */
		__( 'سلام %1$s عزیز! برای خارج شدن از حساب کاربری، اینجا را کلیک کن: <a class="go-out-wwsh" href="%2$s">خروج</a>', 'woocommerce' ),
		'<strong>' . esc_html( $current_user->display_name ) . '</strong>',
		esc_url( wc_logout_url() )
	);
?></p>

<p><?php
	printf(
		__( 'از پنل کاربری‌ات می‌تونی <a href="%1$s">آخرین سفارشاتت رو ببینی</a> و <a href="%2$s">اطلاعات حساب کاربری و پسوردت رو تغییر بدهی</a>؛ همچنین فایل‌های دوره‌هایی که خریداری کردی رو دانلود کنی.', 'woocommerce' ),
		esc_url( wc_get_endpoint_url( 'orders' ) ),
		esc_url( wc_get_endpoint_url( 'edit-account' ) )
	);
?></p>

<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
