<?php
/**
*
* Slider Section
*/
if( ! function_exists('zigcy_lite_pro_cat')){
	function zigcy_lite_pro_cat(){
        $slider_enable =  get_theme_mod('zigcy_lite_pro_cat_enable','off');
        if($slider_enable == 'on'){ ?>
          <section id="plx_prod_cat_section" class="plx_prod_cat_section">
          <?php  zigcy_lite_pro_cat_setting(); ?>
        </section>
        <?php }
       
	}
} add_action( 'zigcy_lite_pro_cat_section', 'zigcy_lite_pro_cat');

/**
 * Zigcy Lite Product Category Section
*/ 
if ( ! function_exists( 'zigcy_lite_pro_cat_setting' ) ) { 
    function zigcy_lite_pro_cat_setting() { 
    	if(! class_exists('Woocommerce')) {
    		return;
    	}      
		  	$zigcy_lite_product_categories_one = get_theme_mod( 'zigcy_lite_product_categories_one','0' );
		  	$zigcy_lite_product_categories_two = get_theme_mod( 'zigcy_lite_product_categories_two','0' );
		  	$zigcy_lite_product_categories_three = get_theme_mod( 'zigcy_lite_product_categories_three','0' );


			$term_one = get_term_by( 'id', $zigcy_lite_product_categories_one, 'product_cat' );
			$thumbnail_id_one = get_woocommerce_term_meta( $zigcy_lite_product_categories_one, 'thumbnail_id' );
			$image_one = wp_get_attachment_url( $thumbnail_id_one );
            $category_link_one = get_category_link( $zigcy_lite_product_categories_one );

			$term_two = get_term_by( 'id', $zigcy_lite_product_categories_two, 'product_cat' );
			$thumbnail_id_two = get_woocommerce_term_meta( $zigcy_lite_product_categories_two, 'thumbnail_id');
			$image_two = wp_get_attachment_url( $thumbnail_id_two );
            $category_link_two = get_category_link( $zigcy_lite_product_categories_two );


            $term_three = get_term_by( 'id', $zigcy_lite_product_categories_three, 'product_cat' );
			$thumbnail_id_three = get_woocommerce_term_meta( $zigcy_lite_product_categories_three, 'thumbnail_id' );
			$image_three = wp_get_attachment_url( $thumbnail_id_three );
            $category_link_three = get_category_link( $zigcy_lite_product_categories_three );

			?>
			<div class = "container">
				<div class="store-mart-lite-cat-pro-wrap">
					<div class = "store-mart-lite-prod-cat-wrapper-one">
						<?php if($term_one){ ?>
						<div class="store-mart-lite-cat-prod-content">
							<div class="store-mart-lite-cat-prod-title">
							 	<?php echo esc_html($term_one->name); ?>
							</div>
							<div class="store-mart-lite-cat-prod-description">
								 <?php echo esc_html($term_one->description); ?>
							</div>
							<div class="store-mart-lite-cat-prod-btn">
								<a class="store-mart-cat-prod-btn" href="<?php echo esc_url( $category_link_one ); ?>">
									<?php echo esc_html('See Collection','zigcy-lite'); ?>
								</a>
		                    </div>
						</div>
						<div class="store-mart-lite-cat-prod-image">
		                    <a href="<?php the_permalink() ?>">
		                        <img src="<?php echo esc_url($image_one); ?>" title="<?php the_title_attribute() ?>" alt="<?php the_title_attribute() ?>" />
		                    </a>
		                </div>
						<?php } ?>
					</div>
					<div class = "store-mart-lite-prod-cat-wrapper-two">
						<?php if($term_two){ ?>
						<div class="store-mart-lite-cat-prod-content-down">
							<div class="store-mart-lite-cat-prod-title">
								 <?php echo esc_html($term_two->name); ?>
							</div>
							<div class="store-mart-lite-cat-prod-description">
								 <?php echo esc_html($term_two->description); ?>
							</div>
							<div class="store-mart-lite-cat-prod-btn">
								<a class="store-mart-cat-prod-btn" href="<?php echo esc_url( $category_link_two ); ?>">
									<?php echo esc_html('See Collection','zigcy-lite'); ?>
								</a>
		                    </div>
						</div>
						<div class="store-mart-lite-cat-prod-image">
		                    <a href="<?php the_permalink() ?>">
		                        <img src="<?php echo esc_url($image_two); ?>" title="<?php the_title_attribute() ?>" alt="<?php the_title_attribute() ?>" />
		                    </a>
		                </div>
		                <?php } ?>
					</div>
					<div class = "store-mart-lite-prod-cat-wrapper-three">
						<?php if($term_three){ ?>
						<div class="store-mart-lite-cat-prod-content">
							<div class="store-mart-lite-cat-prod-title">
								 <?php echo esc_html($term_three->name); ?>
							</div>
							<div class="store-mart-lite-cat-prod-description">
								 <?php echo esc_html($term_three->description); ?>
							</div>
							<div class="store-mart-lite-cat-prod-btn">
								<a class="store-mart-cat-prod-btn" href="<?php echo esc_url( $category_link_three ); ?>">
									<?php echo esc_html('See Collection','zigcy-lite'); ?>
								</a>
		                    </div>
						</div>
						<div class="store-mart-lite-cat-prod-image">
		                    <a href="<?php the_permalink() ?>">
		                        <img src="<?php echo esc_url($image_three); ?>" title="<?php the_title_attribute() ?>" alt="<?php the_title_attribute() ?>" />
		                    </a>
		                </div>
		                <?php } ?>
					</div>
				</div>
			</div>
<?php 
			

    }
}
