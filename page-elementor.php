<?php /* Template Name: قالب المنتور تمام عرض، بدون عنوان صفحه */
get_header();
 ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <article style="width:100%; display:block;">
          <?php echo the_content(); ?>
        </article>
        <div style="padding-bottom:30px;"></div>
    <?php endwhile; else : ?>
    	<p><?php esc_html_e( 'محتوایی وجود ندارد. لطفا به صفحه‌ی اصلی بروید.' ); ?></p>
    <?php endif; ?>
<?php get_footer(); ?>
