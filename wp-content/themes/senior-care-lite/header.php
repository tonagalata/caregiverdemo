<?php
/**
 * The header for our theme
 *
 * @subpackage Senior Care Lite
 * @since 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php
	if ( function_exists( 'wp_body_open' ) ) {
	    wp_body_open();
	} else {
	    do_action( 'wp_body_open' );
	}
?>
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'senior-care-lite' ); ?></a>
	<?php if( get_theme_mod('senior_care_lite_theme_loader','') != ''){ ?>
		<div class="preloader">
			<div class="load">
			  <hr/><hr/><hr/><hr/>
			</div>
		</div>
	<?php }?>
	<div id="page" class="site">
		<div id="header">
			<div class="top_bar py-2">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-6 align-self-center">
							<div class="links text-center text-md-left">
								<?php if( get_theme_mod('senior_care_lite_facebook') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('senior_care_lite_facebook','')); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
								<?php }?>
								<?php if( get_theme_mod('senior_care_lite_twitter') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('senior_care_lite_twitter','')); ?>"><i class="fab fa-twitter mr-3"></i></a>
								<?php }?>
								<?php if( get_theme_mod('senior_care_lite_youtube') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('senior_care_lite_youtube','')); ?>"><i class="fab fa-youtube mr-3"></i></a>
								<?php }?>
								<?php if( get_theme_mod('senior_care_lite_instagram') != ''){ ?>
									<a href="<?php echo esc_url(get_theme_mod('senior_care_lite_instagram','')); ?>"><i class="fab fa-instagram mr-3"></i></a>
								<?php }?>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 align-self-center text-center text-md-right">
							<?php if( get_theme_mod('senior_care_lite_top_text_btn1') != '' || get_theme_mod('senior_care_lite_top_link_btn1') != '' ){ ?>
								<a href="<?php echo esc_url(get_theme_mod('senior_care_lite_top_link_btn1','')); ?>"><?php echo esc_html(get_theme_mod('senior_care_lite_top_text_btn1','')); ?></a>
							<?php }?>
							<?php if( get_theme_mod('senior_care_lite_top_text_btn2') != '' || get_theme_mod('senior_care_lite_top_link_btn2') != '' ){ ?><span>|</span>
								<a href="<?php echo esc_url(get_theme_mod('senior_care_lite_top_link_btn2','')); ?>"><?php echo esc_html(get_theme_mod('senior_care_lite_top_text_btn2','')); ?></a>
							<?php }?>
							<?php if( get_theme_mod('senior_care_lite_top_text_btn3') != '' || get_theme_mod('senior_care_lite_top_link_btn3') != '' ){ ?><span>|</span>
								<a href="<?php echo esc_url(get_theme_mod('senior_care_lite_top_link_btn3','')); ?>"><?php echo esc_html(get_theme_mod('senior_care_lite_top_text_btn3','')); ?></a>
							<?php }?>
						</div>
					</div>
				</div>
			</div>
			<div class="wrap_figure">
				<div class="menu_header py-2">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-4 col-sm-4 col-9 align-self-center mb-2 mb-md-0">
								<div class="logo py-3 py-lg-0">
							        <?php if ( has_custom_logo() ) : ?>
					            		<?php the_custom_logo(); ?>
						            <?php endif; ?>
					              	<?php $blog_info = get_bloginfo( 'name' ); ?>
						                <?php if ( ! empty( $blog_info ) ) : ?>
						                  	<?php if ( is_front_page() && is_home() ) : ?>
																<?php if( get_theme_mod('senior_care_lite_logo_title',true) != '' ){ ?>
						                    	<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
																<?php }?>
						                  	<?php else : ?>
																<?php if( get_theme_mod('senior_care_lite_logo_title',true) != '' ){ ?>
					                      	<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
																<?php } ?>
					                  		<?php endif; ?>
						                <?php endif; ?>
						                <?php
					                  		$description = get_bloginfo( 'description', 'display' );
						                  	if ( $description || is_customize_preview() ) :
						                ?>
														<?php if( get_theme_mod('senior_care_lite_logo_text',true) != '' ){ ?>
					                  	<p class="site-description">
					                    	<?php echo esc_html($description); ?>
					                  	</p>
														<?php } ?>
					              	<?php endif; ?>
							    </div>
							</div>
							<div class="col-lg-9 col-md-8 col-sm-8 col-3 align-self-center">
								<?php if(has_nav_menu('primary')){?>
									<div class="toggle-menu gb_menu text-md-right">
										<button onclick="senior_care_lite_gb_Menu_open()" class="gb_toggle p-2"><i class="fas fa-ellipsis-h"></i><p class="mb-0"><?php esc_html_e('Menu','senior-care-lite'); ?></p></button>
									</div>
								<?php }?>
				   				<?php get_template_part('template-parts/navigation/navigation'); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
