<?php /* Template Name: صفحه‌ی وبلاگ */

get_header();

 ?>
<div class="nothing-in-page">

    <div class="container">

        <div class="row">

            <div class="col-12">

                <h1 class="page-title"><?php single_post_title(); ?></h1>

                <article style="width:100%; display:block;">

                    <div class="row">

                        <?php

  $the_query = new WP_Query( array( 'post_type' => 'post') );

  $wwsh_category = get_the_category();

   ?>

                        <?php if ( $the_query->have_posts() ) : ?>

                        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

                        <div class="col-lg-4">

                            <div class="everyart">

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

                        <?php endwhile; ?>

                        <?php wp_reset_postdata(); ?>

                        <?php else : ?>

                        <p><?php _e( 'محتوایی در سایت وجود ندارد ):' ); ?></p>

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

                </article>

            </div>

        </div>

    </div>
</div>
<?php get_footer(); ?>