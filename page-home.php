<?php
/* Last Edited: 1.2.0 */

get_header(); ?>

<div>
    <div id="section-1">
        <div class="container">
            <div class="col-md-6 section-1-texts">
                <h3 class="section-1-texts-h3">پیش به سوی موفقیت ...</h3>
                <h1 class="section-1-texts-h1">لذت آموزش آنلاین با اسپید لرن</h1>
                <div class="search-form search-style">
                    <form>
                        <input type="text" name="search" placeholder="دنبال چی میگردی؟">
                        <button><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 section-1-image">
                <img id="image-slyder" src="<?php echo get_template_directory_uri(); ?>/assets/images/learing.png" type="image"
                    media="all" alt="Image">
            </div>
        </div>
    </div>
    <div id="section-2">
        <div class="container">
            <div class="row title">
                <h3>آخرین دوره ها</h3>
                <a class="title-a" href="<?php echo get_option('shop_link','shop') ?>">مشاهده همه دوره ها</a>
            </div>

            <?php $count_products_in_home = get_option('count_products_in_home' , '6'); $the_query = new WP_Query( array( 'post_type' => 'product' , 'posts_per_page' => $count_products_in_home , 'meta_key' => 'total_sales', 'orderby' => 'meta_value_num', ) ); $wwsh_category = get_the_category(); ?>
            <?php if ( $the_query->have_posts() ) : ?>
            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

            <div class="col-lg-3 col-sm-3 col-12 course-box">
                <div class="thumbnail courses blog">
                    <a href=<?php echo the_permalink(); ?>><?php the_post_thumbnail( 'wwshthumb' ); ?></a>
                    <div class="caption">
                        <a class="caption-tittle" href="<?php echo the_permalink(); ?>"><?php the_title() ?></a>
                        <div class="row information-course-box">
                            <div class="col-md-8 col-xs-6 col-sm-6 teacher">
                                <a href="<?php echo get_author_posts_url($author_id,$user_nicename); ?>"><i style="margin-left: 5px;"
                                        class="fas fa-user"></i><?php the_author() ?></a>
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

            <?php endwhile; ?><?php wp_reset_postdata(); ?><?php else : ?><p>
                <?php _e( 'دوره‌ای در سایت وجود ندارد ):' ); ?></p><?php endif; ?>

        </div>
    </div>
</div>
<div id="section-3">
    <div class="container">
        <div class="row title">
            <h3>آخرین ویدئو های ولاگ</h3>
            <a class="title-a" href="<?php echo get_option('vlog_link','vlog') ?>">مشاهده همه ویدئو ها</a>
        </div>

        <div class="col-xs-12 col-lg-3 col-sm-6 col-md-3 vlog-box">

            <?php $the_query = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => '1' , 'offset' => '0' ) ); $wwsh_category = get_the_category(); ?>

            <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="thumbnail courses blog post-blog">
                <?php the_post_thumbnail('single-post-thumbnail'); ?>
                <div class="caption">
                    <h4 class="slyder-2-h4"><?php the_title(''); ?></h4>
                    <p class="slyder-2-p"><?php the_excerpt();?></p>
                    <a target="_blank" href="<?php the_permalink(''); ?>" type="submit"
                        class="btn btn-block btn-slyder-2">مشاهده ویدئو</a>
                </div>
            </div>
            <?php endwhile; ?>

            <?php else : ?> <p class="not-have-content"><?php _e( 'ویدئو ای در سایت وجود ندارد ):' ); ?></p>

            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-lg-3 col-sm-6 col-md-3 slyder-2">

            <?php $the_query = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => '1' , 'offset' => '1' ) ); $wwsh_category = get_the_category(); ?>

            <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="thumbnail courses blog post-blog">
                <?php the_post_thumbnail('single-post-thumbnail'); ?>
                <div class="caption">
                    <h4 class="slyder-2-h4"><?php the_title(''); ?></h4>
                    <p class="slyder-2-p"><?php the_excerpt();?></p>
                    <a target="_blank" href="<?php the_permalink(''); ?>" type="submit"
                        class="btn btn-block btn-slyder-2">مشاهده ویدئو</a>
                </div>
            </div>
            <?php endwhile; ?>

            <?php else : ?> <div></div>

            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-lg-3 col-sm-6 col-md-3 slyder-2">

            <?php $the_query = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => '1' , 'offset' => '2' ) ); $wwsh_category = get_the_category(); ?>

            <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="thumbnail courses blog post-blog">
                <?php the_post_thumbnail('single-post-thumbnail'); ?>
                <div class="caption">
                    <h4 class="slyder-2-h4"><?php the_title(''); ?></h4>
                    <p class="slyder-2-p"><?php the_excerpt();?></p>
                    <a target="_blank" href="<?php the_permalink(''); ?>" type="submit"
                        class="btn btn-block btn-slyder-2">مشاهده ویدئو</a>
                </div>
            </div>
            <?php endwhile; ?>

            <?php else : ?> <div></div>

            <?php endif; ?>
        </div>
        <div class="col-xs-12 col-lg-3 col-sm-6 col-md-3 slyder-2">

            <?php $the_query = new WP_Query( array( 'post_type' => 'post' , 'posts_per_page' => '1' , 'offset' => '3' ) ); $wwsh_category = get_the_category(); ?>

            <?php if ( $the_query->have_posts() ) : ?>

            <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <div class="thumbnail courses blog post-blog">
                <?php the_post_thumbnail('single-post-thumbnail'); ?>
                <div class="caption">
                    <h4 class="slyder-2-h4"><?php the_title(''); ?></h4>
                    <p class="slyder-2-p"><?php the_excerpt();?></p>
                    <a target="_blank" href="<?php the_permalink(''); ?>" type="submit"
                        class="btn btn-block btn-slyder-2">مشاهده ویدئو</a>
                </div>
            </div>
            <?php endwhile; ?>

            <?php else : ?> <div></div>

            <?php endif; ?>
        </div>
    </div>
</div>
<div id="section-4">
    <div class="container">
        <div class="section-4-box">
            سیاست اصلی اسپید لرن یادگیری سریع و مفید در کمترین زمان است
        </div>
    </div>
</div>
</div>

<?php get_footer(); ?>