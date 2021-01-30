<?php
require_once get_template_directory() . '/inc/tgm/class-tgm-plugin-activation.php';
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {
	$plugins = array(
		array(
			'name'        => 'ووکامرس',
			'slug'        => 'woocommerce',
			'required'    => true,
		),
		array(
			'name'        => 'المنتور',
			'slug'        => 'elementor',
			'required'    => true,
		),
		array(
			'name'        => 'لرن پرس',
			'slug'        => 'learnpress',
			'required'    => true,
		),
		array(
			'name'        => 'درگاه پرداخت زرین پال لرن پرس',
			'slug'        => 'learnpress',
			'source'       => 'https://zhaket.com/web/gravity-forms-farsi', // The plugin source.
			'required'     => false, // If false, the plugin is only 'recommended' instead of required.
			'external_url' => 'https://zhaket.com/web/gravity-forms-farsi', // If set, overrides default API URL and points to an external URL.
		),
		array(
			'name'        => 'پلاگین متاپست های محصولات ووکامرس (ضروری)',
			'slug'        => 'advanced-custom-fields',
			'required'    => true,
		),
		array(
			'name'        => 'فارسی ساز وردپرس و تاریخ شمسی',
			'slug'        => 'wp-parsidate',
			'required'    => true,
		),
		array(
			'name'        => 'یاست سئو',
			'slug'        => 'wordpress-seo',
			'required'    => false,
		),
			array(
				'name'        => 'فرم تماس7',
				'slug'        => 'contact-form-7',
				'required'    => false,
			),
			array(
				'name'         => 'گرویتی فرمز (در ژاکت)',
				'slug'         => 'gravityforms', // The plugin slug (typically the folder name).
				'source'       => 'https://zhaket.com/web/gravity-forms-farsi', // The plugin source.
				'required'     => false, // If false, the plugin is only 'recommended' instead of required.
				'external_url' => 'https://zhaket.com/web/gravity-forms-farsi', // If set, overrides default API URL and points to an external URL.
			),
			array(
				'name'        => 'گرویتی فرمز فارسی (اددان فارسی ساز)',
				'slug'        => 'persian-gravity-forms',
				'required'    => false,
			),
			array(
				'name'        => 'ویرایش فیلدهای ووکامرس (حذف فیلدهای آدرس، شرکت و...)',
				'slug'        => 'woo-checkout-field-editor-pro',
				'required'    => false,
			),
			array(
				'name'        => 'هماهنگ ساز ACF و یاست سئو',
				'slug'        => 'acf-content-analysis-for-yoast-seo',
				'required'    => false,
			),
	);
	$config = array(
		'id'           => 'tgmpa',                 // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);
	tgmpa( $plugins, $config );
}
