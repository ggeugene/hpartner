<?php

get_header();

$show_default_title = get_post_meta( get_the_ID(), '_et_pb_show_title', true );

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

$term = get_queried_object();
$is_tech = has_category(8);

?>

<div id="main-content">

                <article id="post-<?php the_ID(); ?>" <?php post_class( 'et_pb_post' ); ?>>
					<div class="entry-content">
						<div class="et_pb_section et_section_regular head_section-post">
							
							<?php if(!$is_tech): ?>
							<div class="et_pb_row et_pb_equal_columns et_pb_gutters1" style="background-image:url(/hpartner/wp-content/themes/divichild/img/healthpartner-background-large.jpg)">
							<div class="et_pb_column et_pb_column_3_5 et_pb_css_mix_blend_mode_passthrough">
							<?php else: ?>
							<div class="et_pb_row et_pb_equal_columns et_pb_gutters1">
							<div class="et_pb_column et_pb_column_1_2 et_pb_css_mix_blend_mode_passthrough">
							<?php endif; ?>
                                    <?php if(function_exists('custom_breadcrumbs')): custom_breadcrumbs();
											endif;?>
									<div class="et_pb_module et_pb_promo et_pb_bg_layout_light  et_pb_text_align_left et_pb_no_bg">
										<div class="et_pb_promo_description">
											<h2 class="et_pb_module_header"><?php the_title(); ?></h2>
											<?php the_excerpt() ?>
										</div>
										<div class="et_pb_button_wrapper"><a class="et_pb_button et_pb_promo_button fancybox" href="#contact_form_pop">Заказать консультацию</a></div>
									</div>
								</div> <!-- .et_pb_column -->
								<?php if($is_tech): ?>
								<div class="et_pb_column et_pb_column_1_2 et_pb_css_mix_blend_mode_passthrough et_pb_column_empty" style="background-image:url(<?php the_field('header_image') ?>)" >
								<?php else: ?>
								<div class="et_pb_column et_pb_column_2_5 et_pb_css_mix_blend_mode_passthrough et_pb_column_empty" >
								<?php endif; ?>
								</div> <!-- .et_pb_column -->
							</div> <!-- .et_pb_row -->
							<div class="et_pb_row">
								<div class="custom_divider">
									<img src="/hpartner/wp-content/themes/divichild/img/divider-icon.svg" class="custom_divider-icon" alt="hpartner-icon">
								</div>
							</div>
						</div>
						<div class="single_post-content">
							
							<?php while ( have_posts() ): the_post();
                                the_content() ;
                            endwhile;?>
							
						</div>
					</div> <!-- .entry-content -->

				</article> <!-- .et_pb_post -->

		
		
	
</div> <!-- #main-content -->

<?php

get_footer();
