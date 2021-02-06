<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
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

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked wc_print_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}

?>

<div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>



    <?php if(get_field('remove-course-intro-video')) {
	?>
    <style media="screen">
    #course-intro {
        background: #fff;
        border-radius: 10px;
        padding: 10px 0 10px 10px;
    }

    @media (max-width:767px) {
        #course-intro {
            background: unset;
            border-radius: unset;
            padding: 0;
        }
    }
    </style>
    <?php
}
	else{ ?>
    <div class="course-wp-content">
        <video class="course-video" width="100%" controls>
            <source src="<?php
						the_field('wwsh-video'); ?>" type="video/mp4">
            مروگر شما از HTML5 پشتیبانی نمی‌کند.
        </video>
    </div>
    <?php } ?>


</div>


<div id="course-intro">

    <?php
				if(get_field('remove-course-intro-title')) {
				}else{ ?>
    <h2 class="all-areas-title">
        <?php echo get_option('text_course_intro_2' , '<i class="far fa-file-alt product-icons"></i> معرفی دوره') ?>
    </h2>
    <?php } ?>




    <?php if(get_field('remove-course-intro-detail')) {} else{ ?>
    <div class="course-wp-content">
        <?php echo the_content(); ?>

    </div>
    <?php } ?>


</div>






<div id="course-lessons">
    <h2 class="all-areas-title">
        <?php echo get_option('text_course_lessons_2' , '<i class="fas fa-video product-icons"></i> ویدئو های دوره') ?>
    </h2>

    <?php
    $boxnum_tset=0;
    $videos_2_name = get_field('video-2-name');
    $videos_2_description = get_field('video-2-description');
    $videos_2_download= get_field('video-2-download'); ?>

    <?php if( $videos_2_name): ?><?php foreach( $videos_2_name as $video_2_name): ?>
    <?php if( $videos_2_description): ?><?php foreach( $videos_2_description as $video_2_description): ?>
    <?php if( $videos_2_download): ?><?php foreach( $videos_2_download as $video_2_download): ?>

    <div class="course-lessens-box">
        <div class="row">
            <div class="col-md-12 course-lessens-2">
                <div class="row">
                    <div class="col-md-3">
                        <h4 class="video-name-lessens">
                            <?php $boxnum_tset = $boxnum_tset + 1; echo $boxnum_tset . " - "; echo $video_2_name; ?>
                        </h4>
                    </div>

                    <div class="col-md-7">

                        <p class="p-name-lessens"><?php echo $video_2_description; ?></p>

                    </div>

                    <div class="col-md-2">

                        <a class="download-video" href="<?php echo $video_2_download; ?>"><i
                                class="fas fa-download download-icon-lessens"></i> دانلود</a>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php endforeach; ?><?php endif; ?>
    <?php endforeach; ?><?php endif; ?>
    <?php endforeach; ?><?php endif; ?>


    <h2 class="all-areas-title">
        <i class="fas fa-user product-icons"></i> مدرس
    </h2>
    <div class="row course-teacher-img">

        <?php
$posts = get_field('choose-course-teachers');
if( $posts ): ?>
        <?php foreach( $posts as $post): ?>

        <div class="teacher-author">
            <div class="col-md-3 col-sm-3 colswpsh teacher-author-avatar">
                <?php the_post_thumbnail(); ?>
            </div>
            <div class="col-md-9 col-sm-9 colswpsh teacher-author-desk">
                <div class="teacher-name">
                    <h4><?php the_title() ?></h4>
                    <div class="teacher-about"><?php the_field('teacher-summery-desk') ?></div>
                </div>
                <div class="teacher-info">
                    <p><?php the_field('teacher-all-desk'); ?></p>
                </div>
            </div>
        </div>

        <?php endforeach; ?>
        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>

    </div>


    <?php
$remove_course_faq = get_option( 'remove_course_faq' , false );
if ( $remove_course_faq == 'on' ) {
	if (get_field('remove-course-faq')) {} else {
 ?>
    <div id="course-faq">

        <div class="faqtitle">
            <h2 class="all-areas-title">
                <?php echo get_option('text_course_faq_2' , '<i class="fas fa-question product-icons"></i> سوالات متداول') ?>
            </h2>
        </div>

        <div class="faqcontent">
            <?php
		$elefaq = get_field('elementor-faq-shortcode');
		echo do_shortcode($elefaq);
		?>
        </div>

        <?php
if (get_field('hm-elementor-faq-style')) {} else{
?>
        <style>
        .elementor-accordion .elementor-accordion-item {
            border: none !important;
            border-bottom: 1px solid #E5E5E5 !important;
            border-radius: 0;
        }
        </style>
        <?php } ?>

    </div>
    <?php } } ?>















    <div class="col-12">
        <div id="comments" class="colswpsh cmnts-area cmntpro">

            <h2 class="all-areas-title">
                <?php echo get_option('text_comments_2' , '<i class="fas fa-comments product-icons"></i> نظرات') ?>
            </h2>

            <?php comments_template(); ?>

        </div>
    </div>






</div>


<?php do_action( 'woocommerce_after_single_product' ); ?>