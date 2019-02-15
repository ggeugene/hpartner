<?php

get_header();

$show_default_title = get_post_meta( get_the_ID(), '_et_pb_show_title', true );

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

$term = get_queried_object();

?>

<div id="main-content">
	<?php
		// if ( et_builder_is_product_tour_enabled() ):
			// load fullwidth page in Product Tour mode
			 ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
					<div class="entry-content">
						<div class="et_pb_section et_section_regular head_section-post">
							<div class="et_pb_row et_pb_equal_columns et_pb_gutters1">
								<div class="et_pb_column et_pb_column_1_2 et_pb_css_mix_blend_mode_passthrough">
                                    <?php if(function_exists('custom_breadcrumbs')): custom_breadcrumbs();
											endif;?>
									<div class="et_pb_module et_pb_promo et_pb_bg_layout_light  et_pb_text_align_left et_pb_no_bg">
										<div class="et_pb_promo_description">
											<h2 class="et_pb_module_header"><?php single_cat_title(); ?></h2>
											<?php echo category_description() ?>
										</div>
										<div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_promo_button fancybox" href="#contact_form_pop">Записаться на прием</a></div>
									</div>
								</div> <!-- .et_pb_column -->
								<div class="et_pb_column et_pb_column_1_2 et_pb_css_mix_blend_mode_passthrough et_pb_column_empty" style="background-image:url(<?php echo get_field('category_image', $term)?>)">
								</div> <!-- .et_pb_column -->
							</div> <!-- .et_pb_row -->
							<div class="et_pb_row">
								<div class="custom_divider">
									<img src="/hpartner/wp-content/themes/divichild/img/divider-icon.svg" class="custom_divider-icon" alt="hpartner-icon">
								</div>
							</div>
                        </div>
						<div class="et_pb_section et_section_regular head_section-post_list">
							<div class="et_pb_row">
					<?php if(have_posts()): 
					
                            echo get_posts_by_category(reset(get_the_category()));
                        endif;
					?>
							</div>
						</div>
					</div> <!-- .entry-content -->

				</article> <!-- .et_pb_post -->

		
	
</div> <!-- #main-content -->

<?php

get_footer();
