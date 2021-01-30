<?php get_header(); ?>

  <div class="container">

    <div class="row">

      <div class="col-12">

      <h1 class="page-title"><?php single_tag_title() ?></h1>

</div>

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

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

<?php get_footer(); ?>

