<?php get_header();
/* Last Edited: 1.2.0 */

?>

<div class="nothing-in-page">
    <div class="section-address-p">
        <div class="container">
            <?php the_breadcrumb(); ?>
        </div>
    </div>
    <div class="section-courses">
        <div class="container">
            <div class="col-md-12">
                <div class="thumbnail">
                    <div class="courses-class-information">
                        <h4 class="posts-title-1"><?php single_post_title(); ?></h4>
                        <div class="courses-class-information-p">
                            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                            <div class="posts-p-1">
                                <?php echo the_content(); ?>
                            </div>
                            <div class="share-content-blog">
                                <div class="lefts_shares">
                                    <span>اشتراک گذاری</span>
                                    <ul>
                                    <li><a target="_blank" rel="nofollow" class="linkedin_shares"
                                    href="https://www.linkedin.com/shareArticle?mini=true&title=<?php the_title(); ?>&url=<?php the_permalink(); ?>"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <li><a target="_blank" rel="nofollow" class="twitter_shares"
                                    href="http://twitter.com/home?status=<?php the_permalink(); ?>"><i class="fab fa-twitter-square"></i></a></li>
                            <li><a target="_blank" rel="nofollow" class="telegram_shares"
                                    href="https://telegram.me/share/url?url=<?php the_permalink(); ?>"><i class="fab fa-telegram"></i></a></li>
                                    </ul>
                                </div>
                                <div class="clear_iranthemes"></div>
                            </div>

                            <?php endwhile; else : ?>
                            <p><?php esc_html_e( 'متاسفانه مشکلی در دریافت محتوای مطلب بوجود آمد. لطفا به صفحه‌ی اصلی سایت بروید. سپاس از شما.' ); ?>
                            </p>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>

                <ul class="nav nav-tabs courses-tabs-li">
                    <li role="presentation" class="active"><span>مترجم</span></li>
                </ul>
                <div class="tab-content">
                    <div id="author" class="tab-pane fade active in">
                        <div class="thumbnail author-courses-li">
                            <?php the_post();
                                $author_id=get_the_author_meta('ID'); $curauth=get_user_by('ID',$author_id);
                                $user_nicename=$curauth->user_nicename; $display_name=$curauth->display_name;
                                $user_description=$curauth->user_description; $user_email=$curauth->user_email;
                                $user_url=$curauth->user_url; $user_website=$curauth->website_name;
                                $user_twitter=$curauth->twitter; rewind_posts(); ?>
                            <div class="media">
                                <div class="media-left">
                                    <a href="<?php echo get_author_posts_url($author_id,$user_nicename); ?>">
                                        <?php if($user_email) echo get_avatar($user_email,'100'); ?>
                                    </a>
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading"><?php echo $display_name; ?></a></h4>
                                    <?php if($user_description) echo '<p>'.$user_description.'</p>'; ?>
                                    <?php if($user_url || $user_twitter) : ?><?php endif; ?>
                                </div>

                            </div>

                        </div>
                    </div>
                    <ul class="nav nav-tabs courses-tabs-li">
                        <li role="presentation" class="active"><span>نظرات کاربران</span></li>
                    </ul>
                    <div class="tab-content">
                        <div id="comments" class="tab-pane fade active in">
                            <div class="thumbnail comment-courses-li">
                                <?php comments_template(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>