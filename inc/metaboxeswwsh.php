<?php
if( function_exists('acf_add_local_field_group') ):
acf_add_local_field_group(array(
	'key' => 'group_5dd0fad56ca4e',
	'title' => 'تنظیمات سایدبار',
	'fields' => array(
		array(
			'key' => 'field_5dd0fcd1b6a50',
			'label' => 'متن "ظرفیت تکمیل شد"',
			'name' => 'course-register-content-not-stock',
			'type' => 'text',
			'instructions' => 'به جای "ظرفیت تکمیل شد" چیزی بنویسید.
<br> <b>این دکمه زمانی نمایش داده می‌شود که تعداد موجودی انبار، 0 باشد یا موجودی نداشته باشد.</b>',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => 'به جای ظرفیت تکمیل شد',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5dd00f33e8534',
	'title' => 'عدم نمایش',
	'fields' => array(
		array(
			'key' => 'field_5dd00f3fa16a0',
			'label' => 'عدم نمایش بخش‌های "معرفی دوره"',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '<h3 style="color:red;">
با انتخاب گزینه‌ی "عدم نمایش"، آن مورد نمایش داده نمی‌شود.
</h3>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5dd0e00b5d871',
			'label' => 'اعمال تنظیمات برای "عدم نمایش بخش‌های معرفی دوره"',
			'name' => 'show-set-settings1',
			'type' => 'true_false',
			'instructions' => 'برای اعمال تنظیمات روی این بخش، این گزینه را تیک بزنید.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 0,
			'ui_on_text' => '',
			'ui_off_text' => '',
		),
		array(
			'key' => 'field_5dd00fd1a16a2',
			'label' => 'عدم نمایش کلی باکس "معرفی دوره"',
			'name' => 'remove-course-intro',
			'type' => 'true_false',
			'instructions' => 'با انتخاب این گزینه، عنوان و تمامی محتویات این باکس، نمایش داده نمی‌شود.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dd0e00b5d871',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش کلی این باکس',
			'ui_off_text' => 'نمایش داده شود',
		),
		array(
			'key' => 'field_5dd00f5aa16a1',
			'label' => 'عدم نمایش عنوان "معرفی دوره"',
			'name' => 'remove-course-intro-title',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dd00fd1a16a2',
						'operator' => '!=',
						'value' => '1',
					),
					array(
						'field' => 'field_5dd0e00b5d871',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش',
			'ui_off_text' => 'نمایش داده شود',
		),
		array(
			'key' => 'field_5dd0103ba16a3',
			'label' => 'عدم نمایش ویدیو در "معرفی دوره"',
			'name' => 'remove-course-intro-video',
			'type' => 'true_false',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dd00fd1a16a2',
						'operator' => '!=',
						'value' => '1',
					),
					array(
						'field' => 'field_5dd0e00b5d871',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش',
			'ui_off_text' => 'نمایش داده شود',
		),
		array(
			'key' => 'field_5dd01082a16a4',
			'label' => 'عدم نمایش توضیحات در "معرفی دوره"',
			'name' => 'remove-course-intro-detail',
			'type' => 'true_false',
			'instructions' => 'با حذف این بخش، توضیحات و متن محصول، نمایش داده نمی‌شود.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5dd00fd1a16a2',
						'operator' => '!=',
						'value' => '1',
					),
					array(
						'field' => 'field_5dd0e00b5d871',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش',
			'ui_off_text' => 'نمایش داده شود',
		),

		
		array(
			'key' => 'field_5dd1966631b69',
			'label' => 'عدم نمایش بخش‌های "مدرس دوره"',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '<h3 style="color:red;">
با انتخاب گزینه‌ی "عدم نمایش"، آن مورد نمایش داده نمی‌شود.
</h3>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5dd196b431b6b',
			'label' => 'عدم نمایش کلی باکس "مدرس دوره"',
			'name' => 'remove-course-teachers',
			'type' => 'true_false',
			'instructions' => 'با انتخاب این گزینه، عنوان و تمامی محتویات این باکس، نمایش داده نمی‌شود.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش کلی این باکس',
			'ui_off_text' => 'نمایش داده شود',
		),
		array(
			'key' => 'field_5e6123f2cb133',
			'label' => 'عدم نمایش بخش‌های "سوالات متداول"',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '<h3 style="color:red;">
با انتخاب گزینه‌ی "عدم نمایش"، آن مورد نمایش داده نمی‌شود.
</h3>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5e6123a8cb132',
			'label' => 'عدم نمایش کلی باکس "سوالات متداول"',
			'name' => 'remove-course-faq',
			'type' => 'true_false',
			'instructions' => 'با انتخاب این گزینه، عنوان و تمامی محتویات این باکس، نمایش داده نمی‌شود.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش',
			'ui_off_text' => 'نمایش داده شود',
		),
		array(
			'key' => 'field_5dd2c4ebc2e69',
			'label' => 'عدم نمایش بخش‌های "ثبت نام در دوره"',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '<h3 style="color:red;">
با انتخاب گزینه‌ی "عدم نمایش"، آن مورد نمایش داده نمی‌شود.
</h3>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5dd2c4fbc2e6a',
			'label' => 'عدم نمایش کلی باکس "ثبت نام در دوره"',
			'name' => 'remove-course-register',
			'type' => 'true_false',
			'instructions' => 'با انتخاب این گزینه، عنوان و تمامی محتویات این باکس، نمایش داده نمی‌شود.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش کلی این باکس',
			'ui_off_text' => 'نمایش داده شود',
		),
		array(
			'key' => 'field_5dd2c51fc2e6b',
			'label' => 'عدم نمایش بخش‌های "نظرات/دیدگاه‌ها"',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '<h3 style="color:red;">
با انتخاب گزینه‌ی "عدم نمایش"، آن مورد نمایش داده نمی‌شود.
</h3>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5dd2c529c2e6c',
			'label' => 'عدم نمایش کلی باکس "نظرات/دیدگاه‌ها"',
			'name' => 'remove-comments',
			'type' => 'true_false',
			'instructions' => 'با انتخاب این گزینه، عنوان و تمامی محتویات این باکس، نمایش داده نمی‌شود.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'عدم نمایش کلی این باکس',
			'ui_off_text' => 'نمایش داده شود',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));






acf_add_local_field_group(array(
	'key' => 'group_5e1059f92a19a2fdfscdcd',
	'title' => 'ویدئو های رایگان',
	'fields' => array(
		array(
			'key' => 'field_5e105f8f8afefedfdbdsdw',
			'label' => 'نام ویدئو رو وارد کنید',
			'name' => 'video-2-name',
			'type' => 'checkbox',
			'instructions' => 'روی افزودن کلیک کنید و نام ویدئو را اضافه کنید.<br>.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'نام ویدئو اول' => 'نام ویدئو اول',
				'نام ویدئو دوم' => 'نام ویدئو دوم',
			),
			'allow_custom' => 1,
			'save_custom' => 1,
			'default_value' => array(
				0 => 'نام ویدئو اول',
				1 => 'نام ویدئو دوم',
			),
			'layout' => 'vertical',
			'toggle' => 1,
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5e105f8f8afefefdfdefefe',
			'label' => 'توضیحات ویدئو رو وارد کنید',
			'name' => 'video-2-description',
			'type' => 'checkbox',
			'instructions' => 'روی افزودن کلیک کنید و توضیحات ویدئو را اضافه کنید.<br>.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'توضیحات اول' => 'آموزش عملیات crud در php',
				'توضیحات دوم' => 'آموزش اتصال به دیتابیس در php',
			),
			'allow_custom' => 1,
			'save_custom' => 1,
			'default_value' => array(
				0 => 'آموزش عملیات crud در php',
				1 => 'آموزش اتصال به دیتابیس در php',
			),
			'layout' => 'vertical',
			'toggle' => 1,
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5e105f8f8afefe-dfdfdvdvfb',
			'label' => 'لینک دانلود ویدئو',
			'name' => 'video-2-download',
			'type' => 'checkbox',
			'instructions' => 'روی افزودن کلیک کنید و لینک دانلود را اضافه کنید.<br>.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '50',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'لینک دانلود اول' => 'http://google.com',
				'لینک دانلود دوم' => 'http://facebook.com',
			),
			'allow_custom' => 1,
			'save_custom' => 1,
			'default_value' => array(
				0 => 'http://google.com',
				1 => 'http://facebook.com',
			),
			'layout' => 'vertical',
			'toggle' => 1,
			'return_format' => 'value',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));



acf_add_local_field_group(array(
	'key' => 'group_5e64eeb857741',
	'title' => 'مدرسین دوره',
	'fields' => array(
		array(
			'key' => 'field_5e64eec6b5c53',
			'label' => 'انتخاب مدرسین دوره (جدید!!!)',
			'name' => 'choose-course-teachers',
			'type' => 'relationship',
			'instructions' => 'از مسیر "مدرسین (اختصاصی قالب اسپید لرن) > افزودن جدید"، مدرسین را اضافه کنید و در زیر آن‌ها را انتخاب کنید تا در بخش "مدرسین دوره" نمایش داده شوند.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'teachers',
			),
			'taxonomy' => '',
			'filters' => array(
				0 => 'search',
			),
			'elements' => array(
				0 => 'featured_image',
			),
			'min' => '',
			'max' => '',
			'return_format' => 'object',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));



acf_add_local_field_group(array(
	'key' => 'group_5e64e68a36408',
	'title' => 'تنظیمات مدرس',
	'fields' => array(
		array(
			'key' => 'field_5e64e6b6a1e58',
			'label' => 'توضیحات کوتاه مدرس',
			'name' => 'teacher-summery-desk',
			'type' => 'text',
			'instructions' => 'توضیحات کوتاه برای مدرس (مثلا بنیانگذار ....، مدیر سایت .... ، --سال سابقه و...)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e64e72ca1e59',
			'label' => 'توضیحات طولانی مدرس',
			'name' => 'teacher-all-desk',
			'type' => 'textarea',
			'instructions' => 'توضیحاتی درباره‌ی مدرس بنویسید.
<br>
نکته: می‌توانید از تگ‌های html ای که در پرانتز هستند، استفاده کنید ( b , strong , u , ul , li , a , br ) و فراموش نکنید این تگ ها را ببندید!
<br>
ولی <b style="color:red;">به هیچ عنوان</b> از تگ html و head و body و script و style و <strong>مخصوصا</strong> p و div استفاده نکنید!!',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'maxlength' => 380,
			'rows' => 6,
			'new_lines' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'teachers',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'acf_after_title',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));





acf_add_local_field_group(array(
	'key' => 'group_5e63bb2c23483',
	'title' => 'تنظیمات باکس سوالات متداول (جدید!!)',
	'fields' => array(
		array(
			'key' => 'field_5e63bb7331f79',
			'label' => '"چند نکته‌ی مهم قبل از استفاده کردن"',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'نکته‌ی اول: حتما از بخش "نمایش>تنظیمات قالب>تنظیمات صفحه‌ی دوره/محصول"، گزینه‌ی "حذف باکس "سوالات متداول" از تمام صفحات (جدید!!!)" را یکبار off و مجدد on کنید تا این گزینه کار کند.
<br>
نکته‌ی دوم: این بخش، نیاز به المنتور پرو دارد. حتما قبل از استفاده از این بخش، مطمئن شوید که المنتور پرو را نصب و فعال کرده اید.
<br>
نکته‌ی سوم: برای استفاده، باید از بخش "قالب‌ها>افزودن قالب جدید" یک قالب المنتوری بسازید و با المان آکاردئون، بخش سوالات متداول را بسازید. سپس شورتکد آن را در فیلد زیر، قرار دهید. با این کار، بخش سوالات متداول نمایش داده می‌شود.
<br><br>همچنین، ما برای راحتی شما، قالب المنتور سوالات متداول را آماده کردیم که می‌توانید آن را دانلود کنید و بعنوان یک قالب المنتوری در المنتور درون ریزی کنید و آن را ویرایش کنید. سپس شورتکد آن را وارد بخش زیر کنید. این یعنی ما بخش زیادی از کار را برایتان انجام دادیم و شما تنها نیاز است این قالب المنتوری را وارد کنید و استفاده کنید (:
<a href="http://s7.picofile.com/file/8390444434/elementor_49_2020_03_08.json.html" target="_blank">فایل قالب المنتوری برای بخش سوالات متداول</a>',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5e63bc3831f7a',
			'label' => 'شورتکد قالب المنتوری برای سوالات متداول',
			'name' => 'elementor-faq-shortcode',
			'type' => 'text',
			'instructions' => 'شورتکد قالب المنتوری سوالات متداول را انتخاب کنید. (برای راهنمایی بیشتر، نکات بالا را بخوانید)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e6512f6ae948',
			'label' => 'فعالسازی استایل اختصاصی اسپید لرن؟',
			'name' => 'hm-elementor-faq-style',
			'type' => 'true_false',
			'instructions' => 'ما یکسری استایل‌هایی برای زیباتر کردن المان آکاردئون المنتور به قالب اضافه کردیم.<br>
آیا می‌خواهید این استایل‌ها فراخوانی شوند یا خیر؟<br>
(همچنین می‌توانید یکبار فعال کنید و اگر زیباتر شد و دوست داشتید، این المان را همچنان فعال قرار دهید.<br>
در صورتی که خودتان خواستید با المنتور شکل و ظاهر این بخش را تغییر دهید، خودتان این کار را بکنید و این بخش را غیر فعال کنید.)',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'غیر فعال کردن این استایل',
			'ui_off_text' => 'فعال کردن استایل اسپید لرن',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));






acf_add_local_field_group(array(
	'key' => 'group_5e10553474580',
	'title' => 'تنظیمات باکس ثبت نام',
	'fields' => array(
		array(
			'key' => 'field_5e10554080e52',
			'label' => 'اطلاعات دوره',
			'name' => 'infos-course-reg',
			'type' => 'checkbox',
			'instructions' => 'این موارد را می‌توانید به این صورت وارد کنید:<br>
 شروع دوره: 16 مهر 1398<br>
 زمان دوره: ۸۷ ساعت<br>
 نحوه پرداخت: نقدی و اقساطی<br>
و...<br>
<br>',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'شروع دوره: 16 مهر 1398' => 'شروع دوره: 16 مهر 1398',
				'زمان دوره: ۸۷ ساعت' => 'زمان دوره: ۸۷ ساعت',
				'نحوه پرداخت: نقدی و اقساطی' => 'نحوه پرداخت: نقدی و اقساطی',
			),
			'allow_custom' => 1,
			'save_custom' => 1,
			'default_value' => array(
			),
			'layout' => 'vertical',
			'toggle' => 1,
			'return_format' => 'value',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));




acf_add_local_field_group(array(
	'key' => 'group_5dced01796f13',
	'title' => 'ویدیو محصول',
	'fields' => array(
		array(
			'key' => 'field_5dd0080dbce43',
			'label' => 'عدم نمایش ویدیو (در بخش معرفی محصول)',
			'name' => '',
			'type' => 'message',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => 'لطفا در تنظیمات بخش "عدم نمایش" در سمت راست این صفحه، انتخاب کنید.',
			'new_lines' => 'wpautop',
			'esc_html' => 0,
		),
		array(
			'key' => 'field_5dced0256da09',
			'label' => 'ویدیو با فرمت .mp4',
			'name' => 'wwsh-video',
			'type' => 'url',
			'instructions' => 'ویدیو، پس از عنوان محصول نمایش داده می‌شود.<br>
در این بخش باید لینک ویدیو را وارد کنید.<br>
برای دریافت لینک ویدیو، باید ویدیوی معرفی محصول تان را در هاست تان، هاست دانلودتان، سرویس های آپلود فایل که به شما لینک دانلود مستقیم بدهند یا... ، آپلود کنید و لینک مستقیم را در این بخش، قرار دهید.<br>
ویدیو، حتما باید با فرمت .mp4 باشد.',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'https://hw17.cdn.asset.aparat.com/aparat-video/42cb097504ccdfc23c9df85f311d8a2b19919828-720p__37473.mp4',
			'placeholder' => 'مثلا: https://wpwithsh.com/example-video.mp4',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'product',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'side',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5ecbcce3192b0',
	'title' => 'باکس دانلود مقاله',
	'fields' => array(
		array(
			'key' => 'field_5ecbcf8eea79e',
			'label' => 'فعال بودن باکس دانلود',
			'name' => 'dl_box_onoff',
			'type' => 'true_false',
			'instructions' => 'فعال یا غیرفعال بودن باکس دانلود مقاله را مشخص کنید.',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'فعال است',
			'ui_off_text' => 'غیرفعال است',
		),
		array(
			'key' => 'field_5ecbcd09ea79b',
			'label' => 'دانلود مقاله تنها برای کاربرانی که وارد شده‌اند',
			'name' => 'just_for_loggedin',
			'type' => 'true_false',
			'instructions' => 'تنها کسانی که وارد حساب کاربری‌شان شده‌اند بتوانند دانلود کنند. در صورتی که غیرفعال باشد، همه‌ی کاربران (هم کسانی که وارد شده‌اند و هم کسانی که وارد نشده‌اند) می‌توانند دانلود کنند.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ecbcf8eea79e',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'message' => '',
			'default_value' => 0,
			'ui' => 1,
			'ui_on_text' => 'فعال بودن',
			'ui_off_text' => 'غیرفعال بودن',
		),
		array(
			'key' => 'field_5ecbcdf0ea79c',
			'label' => 'توضیحات باکس دانلود مقاله',
			'name' => 'downloadbox_desc',
			'type' => 'textarea',
			'instructions' => 'توضیحاتی را درباره‌ی لینک دانلود، نحوه‌ی استفاده، رمز فایل (اگر رمز دارد!)، برای چه چیزی هست و... بنویسید.',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ecbcf8eea79e',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '100',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'دانلود رایگان این فایل صرفا برای کاربرانی است که وارد شده‌اند. چرا <a target="_blank" href="https://shayanweb.com/panel">عضو سایت</a> نمی‌شوید تا دیگر این پنجره را نبینید و مستقیم دانلود کنید؟! - <a target="_blank" href="https://shayanweb.com/panel">ورود به سایت</a>',
			'placeholder' => '',
			'maxlength' => '',
			'rows' => 4,
			'new_lines' => '',
		),
		array(
			'key' => 'field_5ecbcf03ea79d',
			'label' => 'لینک دانلود',
			'name' => 'post_dl_url_link',
			'type' => 'url',
			'instructions' => 'در ابتدای این لینک دانلود، باید https:// یا http:// وجود داشته باشد. برای آپلود فایل، از یک هاست دانلود و یا (اگر کم حجم است) از بخش رسانه‌ها در وبسایت تان می‌توانید استفاده کنید؛ سپس لینک آن را در اینجا وارد کنید. <strong></strong>',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ecbcf8eea79e',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
		),
		array(
			'key' => 'field_5ecbd743a8fbd',
			'label' => 'متن دانلود',
			'name' => 'post_dl_txt',
			'type' => 'text',
			'instructions' => 'متن دکمه‌ی دانلود را وارد کنید. (حتما باید وارد شود!)',
			'required' => 0,
			'conditional_logic' => array(
				array(
					array(
						'field' => 'field_5ecbcf8eea79e',
						'operator' => '==',
						'value' => '1',
					),
				),
			),
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'دانلود فایل',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'post',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));
endif;
