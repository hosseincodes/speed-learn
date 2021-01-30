<?php
function cptui_register_my_cpts_teachers() {
	
	/**
	 * Post Type: مدرسین.
	 */
	
	$labels = [
		"name" => __( "مدرسین", "hamyarlearn" ),
		"singular_name" => __( "مدرس", "hamyarlearn" ),
		"menu_name" => __( "مدرسین", "hamyarlearn" ),
		"all_items" => __( "همه‌ی مدرسین", "hamyarlearn" ),
		"add_new" => __( "اضافه کردن جدید", "hamyarlearn" ),
		"add_new_item" => __( "اضافه کردن مدرس جدید", "hamyarlearn" ),
		"edit_item" => __( "ویرایش مدرس", "hamyarlearn" ),
		"new_item" => __( "مدرس جدید", "hamyarlearn" ),
		"view_item" => __( "مشاهده‌ی مدرس", "hamyarlearn" ),
		"view_items" => __( "مشاهده‌ی مدرسین", "hamyarlearn" ),
		"search_items" => __( "جستجوی مدرسین", "hamyarlearn" ),
		"not_found" => __( "هیچ مدرسی یافت نشد!", "hamyarlearn" ),
		"not_found_in_trash" => __( "هیچ مدرسی در زباله دان وجود ندارد!", "hamyarlearn" ),
		"featured_image" => __( "تصویر مدرس", "hamyarlearn" ),
		"set_featured_image" => __( "انتخاب تصویر مدرس", "hamyarlearn" ),
		"remove_featured_image" => __( "حذف تصویر مدرس", "hamyarlearn" ),
		"use_featured_image" => __( "انتخاب بعنوان تصویر مدرس", "hamyarlearn" ),
		"archives" => __( "آرشیو مدرسین", "hamyarlearn" ),
		"item_updated" => __( "تغییرات در این مدرس، با موفقیت انجام شد (:", "hamyarlearn" ),
	];

	$args = [
		"label" => __( "مدرسین", "hamyarlearn" ),
		"labels" => $labels,
		"description" => "مدرسین دوره‌های ووکامرس",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "teachers", "with_front" => false ],
		"query_var" => true,
		"supports" => [ "title", "thumbnail", "custom-fields" ],
	];

	register_post_type( "teachers", $args );
}

add_action( 'init', 'cptui_register_my_cpts_teachers' );
