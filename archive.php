<?php get_header();
/* Last Edited: 1.0.0 */

?>
<div class="nothing-in-page">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="broadc">
                    <nav>
                        <?php the_breadcrumb(); ?>
                    </nav>
                </div>
                <h1 class="page-title"><?php the_title() ?></h1>
            </div>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
    ?>
            <div class="col-sm-6 col-md-3 slyder-2">

                <div class="thumbnail courses blog post-blog">
                    <?php the_post_thumbnail( 'wwshthumb' );  ?>
                    <div class="caption">
                        <h4 class="slyder-2-h4"><?php the_title(''); ?></h4>
                        <p class="slyder-2-p"><?php the_excerpt();?></p>
                        <a target="_blank" href="<?php the_permalink(''); ?>" type="submit"
                            class="btn btn-block btn-slyder-2">مشاهده ویدئو</a>
                    </div>
                </div>

            </div>

            <?php
  endwhile; else : ?>
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
<?php get_footer(); ?>