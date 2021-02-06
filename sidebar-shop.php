<?php

global $product;

 ?>

<?php the_field(''); ?>

<div id="course_student_info">

    <span
        class="student_count"><?php global $product; $units_sold = get_post_meta( $product->id, 'total_sales', true ); echo ''. sprintf( __( '%s', 'woocommerce' ), $units_sold ).''; ?><span
            style="font-size: 40px; margin-right: 7px;">نفر</span></span></span>

    <span class="student_text">

        تعداد دانشجویان این دوره

    </span>

    <span class="rating-content-1">
        <?php woocommerce_template_single_rating() ?>
    </span>
    <div class="sidebar-wwsh-2 ">
        <div class="information-sidbar">

            <?php
							$values = get_field('infos-course-reg');
							if($values)
							{
								echo '<ul>';
								foreach($values as $value)
								{
									echo '<li> <span>' . $value . '</span> </li>';
								}
								echo '</ul>';
							}
							?>

        </div>
    </div>

</div>

<div id="sidebar-buttons">

    <div class="wwsh-cource-buttons-side wwsh-advice">
        <div class="pricearea-wwsh">
            <?php
									if ( is_a( $product, 'WC_Product_Variable' ) ) {
										?>
            <div class="price-variable">
                <?php woocommerce_template_single_price(); ?>
            </div>
            <?php woocommerce_template_single_add_to_cart(); ?>
            <?php
									}else {
										if ($product->get_price() == "0") {
											?>
            <div class="price-area">
                <div class="priceisfree">
                    <?php if ($product->get_regular_price() == "0") {
											}else {?>
                    <del><?php echo $product->get_regular_price() ?> تومان</del>
                    <?php } ?>
                    <span class="freeprice">رایگان!</span>
                </div>
            </div>
            <?php
										woocommerce_template_single_add_to_cart();
									}else {
										?>
            <div class="price-area">
                <?php
								 		woocommerce_template_single_price();
									?>
            </div>
            <?php
								 		woocommerce_template_single_add_to_cart();
									?>
            <?php } }
								 ?>
        </div>
    </div>


</div>