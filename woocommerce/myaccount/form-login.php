<?php
/**
 * Login Form
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/form-login.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 4.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

do_action( 'woocommerce_before_customer_login_form' ); ?>

<div class="tab-pane fade active in">
    <div class="login-big-box">
        <div class="col-md-3"></div>
        <div class="u-column1 col-md-6 colswpsh">

            <div class="all-login-form">

                <ul class="tab-group">
                    <li class="tab"><a href="#signup">ثبت نام (غیرفعال)</a></li>
                    <li class="tab active"><a href="#login">ورود</a></li>
                </ul>

                <div class="tab-content">

                    <div id="login">

                        <form class="woocommerce-form woocommerce-form-login login" method="post">

                            <h4 class="login-form-h4" style="margin-bottom: 10px;">خوش آمدید</h4>
                            <p style="text-align: center;">ورود به سایت به طور موقت محدود شده است</p>

                            <?php do_action( 'woocommerce_login_form_start' ); ?>

                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="username"><i class="fas fa-user"></i>
                                    <?php esc_html_e( 'Username or email address', 'woocommerce' ); ?>&nbsp;<span
                                        class="required">*</span></label>
                                <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                    name="username" id="username" autocomplete="username"
                                    value="<?php echo ( ! empty( $_POST['username'] ) ) ? esc_attr( wp_unslash( $_POST['username'] ) ) : ''; ?>" /><?php // @codingStandardsIgnoreLine ?>
                            </p>

                            <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                <label for="password"><i class="fas fa-lock"></i>
                                    <?php esc_html_e( 'Password', 'woocommerce' ); ?>&nbsp;<span
                                        class="required">*</span></label>
                                <input class="woocommerce-Input woocommerce-Input--text input-text" type="password"
                                    name="password" id="password" autocomplete="current-password" />
                            </p>

                            <?php do_action( 'woocommerce_login_form' ); ?>

                            <p class="form-row">
                                <label
                                    class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                    <input class="woocommerce-form__input woocommerce-form__input-checkbox"
                                        name="rememberme" type="checkbox" id="rememberme" value="forever" /> &nbsp;
                                    <span><?php esc_html_e( 'Remember me', 'woocommerce' ); ?></span>
                                </label>
                                <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
                            <div class="row">
                                <div class="col-md-3"></div>
                                <div class="col-md-6">
                                    <button type="submit"
                                        class="woocommerce-button button woocommerce-form-login__submit" name="login"
                                        value="<?php esc_attr_e( 'Log in', 'woocommerce' ); ?>"><?php esc_html_e( 'Log in', 'woocommerce' ); ?></button>
                                </div>
                                <div class="col-md-3"></div>
                            </div>
                            </p>

                            <p class="woocommerce-LostPassword lost_password">
                                <a
                                    href="<?php echo esc_url( wp_lostpassword_url() ); ?>"><?php esc_html_e( 'Lost your password?', 'woocommerce' ); ?></a>
                            </p>

                            <?php do_action( 'woocommerce_login_form_end' ); ?>

                        </form>

                    </div>

                    <div id="signup">

                        <!-- This section is temporarily disabled -->

                    </div>

                </div>
            </div>
        </div>

        <div class="col-md-3"></div>

    </div>

</div>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>