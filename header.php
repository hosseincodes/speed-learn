<?php
/* Last Edited: 1.0.0 */

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <?php
if ( is_plugin_active( 'wordpress-seo/wp-seo.php' ) ) {
  ?>
    <title><?php wp_title(); ?></title>
    <?php
}else{
?>
    <?php if ( is_home()){ ?>
    <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <?php } elseif (is_404()) {
    ?>
    <title>خطای 404 | چیزی یافت نشد | <?php bloginfo('name'); ?></title>
    <?php
  } elseif (is_shop()) {
    ?>
    <title>دوره‌های آموزشی | <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <?php
  }
     else{ ?>
    <title><?php the_title(); ?> | <?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
    <?php }
} ?>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

</head>

<body <?php body_class(); ?>>
    <div style="margin-bottom: 0px !important; box-shadow: 0 0 9px 1px rgba(0, 0, 0, .06);"
        class="navbar navbar-default">
        <div id="header-1"></div>
        <div id="header-2">
            <div class="container">
                <div class="row">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <a class="navbar-brand" href="http://speed-learn.ir"><img
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/speedlearn-logo.png" type="image"
                            media="all" style="max-width: 160px !important;" alt="Image"></a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div id="panel-login">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a class="panel-resposive-2 panel-login-box" href="<?php echo get_permalink( get_option('woocommerce_myaccount_page_id') ); ?>"><i style="font-size: 20px; margin-left: 10px;" class="fas fa-user-friends"></i><?php if ( is_user_logged_in() ) { echo 'حساب کاربری'; } else { echo 'ورود و ثبت نام'; } ?></a></li>
                        </ul>
                    </div>
                    <div id="shopping-cart">
                        <ul class="nav navbar-nav navbar-left">
                            <li><a class="panel-resposive-2 shopping-cart-box" href="<?php echo get_permalink( get_option('woocommerce_cart_page_id') ); ?>"><i style="font-size: 20px; margin-left: 10px;" class="fas fa-shopping-cart"></i>سبد خرید</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-3">
            <div class="container">
                <div class="menuarea">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </div>

    <?php wp_head(); ?>