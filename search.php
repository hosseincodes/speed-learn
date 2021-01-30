<?php get_header();
/* Last Edited: 1.0.0 */

?>

<div class="nothing-in-page">
    <div class="row">
        <div class="search-box-1">


            جستجو برای : <h1 class="page-title"><?php the_search_query() ?></h1>

            <div class="col-12">

                <div class="search-form-page">

                    <?php get_search_form(); ?>

                </div>

            </div>

            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div class="col-lg-4 marginposts">

                <div class="everyart searcharea">

                    <a href="<?php echo the_permalink() ?>">

                        <figure>

                            <?php the_post_thumbnail( 'wwshthumb' ); ?>

                        </figure>

                        <div class="blog-posts-inner">

                            <h2><?php echo the_title(); ?></h2>

                        </div>

                    </a>

                </div>

            </div>

            <?php endwhile; else : ?>

            <p><?php esc_html_e( 'هیچ پستی وجود ندارد ):' ); ?></p>

            <?php endif; ?>

            <div class="col-12">

                <div class="pagination-wp">

                    <?php the_posts_pagination( array(

    'mid_size'  => 2,

    'prev_text' => __( '<i class="fas fa-long-arrow-alt-right"></i>', 'hamyarlearn' ),

    'next_text' => __( '<i class="fas fa-long-arrow-alt-left"></i>', 'hamyarlearn' ),

    'screen_reader_text' => __( ' ' )

) ); ?>

                </div>

            </div>
        </div>


    </div>
</div>
</div>
<?php get_footer(); ?>