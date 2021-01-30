<?php get_header();
/* Last Edited: 1.0.0 */
?>
<div class="nothing-in-page">
  <div class="container">
    <div class="row">
      <div class="col-12">
      <h1 class="page-title"><?php single_post_title(); ?></h1>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <div class="article-content">
        <article style="width:100%; display:block;">
          <?php echo the_content(); ?>
        </article>
      </div>
    <?php endwhile; else : ?>
    	<p><?php esc_html_e( 'محتوایی وجود ندارد. لطفا به صفحه‌ی اصلی بروید.' ); ?></p>
    <?php endif; ?>
      </div>
    </div>
  </div></div>
<?php get_footer(); ?>
