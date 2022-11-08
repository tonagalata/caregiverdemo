<?php

add_action( 'admin_menu', 'senior_care_lite_gettingstarted' );
function senior_care_lite_gettingstarted() {    	
	add_theme_page( esc_html__('Theme Documentation', 'senior-care-lite'), esc_html__('Theme Documentation', 'senior-care-lite'), 'edit_theme_options', 'senior-care-lite-guide-page', 'senior_care_lite_guide');   
}

function senior_care_lite_admin_theme_style() {
   wp_enqueue_style('senior-care-lite-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'senior_care_lite_admin_theme_style');

if ( ! defined( 'SENIOR_CARE_LITE_SUPPORT' ) ) {
define('SENIOR_CARE_LITE_SUPPORT',__('https://wordpress.org/support/theme/senior-care-lite','senior-care-lite'));
}
if ( ! defined( 'SENIOR_CARE_LITE_REVIEW' ) ) {
define('SENIOR_CARE_LITE_REVIEW',__('https://wordpress.org/support/theme/senior-care-lite/reviews/#new-post','senior-care-lite'));
}
if ( ! defined( 'SENIOR_CARE_LITE_LIVE_DEMO' ) ) {
define('SENIOR_CARE_LITE_LIVE_DEMO',__('https://www.ovationthemes.com/demos/senior-care/','senior-care-lite'));
}
if ( ! defined( 'SENIOR_CARE_LITE_BUY_PRO' ) ) {
define('SENIOR_CARE_LITE_BUY_PRO',__('https://www.ovationthemes.com/wordpress/elderly-care-wordpress-theme/','senior-care-lite'));
}
if ( ! defined( 'SENIOR_CARE_LITE_PRO_DOC' ) ) {
define('SENIOR_CARE_LITE_PRO_DOC',__('https://www.ovationthemes.com/docs/ot-senior-care-pro-doc/','senior-care-lite'));
}
if ( ! defined( 'SENIOR_CARE_LITE_THEME_NAME' ) ) {
define('SENIOR_CARE_LITE_THEME_NAME',__('Premium Elderly Care Theme','senior-care-lite'));
}

/**
 * Theme Info Page
 */
function senior_care_lite_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="col-md-10">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'senior-care-lite'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="col-md-2">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( SENIOR_CARE_LITE_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'senior-care-lite'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( SENIOR_CARE_LITE_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'senior-care-lite'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="container">
			<div class="col-md-9">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','senior-care-lite'); ?></h3>
					<p><?php esc_html_e('To step the senior care theme follow the below steps.','senior-care-lite'); ?></p>

					<h4><?php esc_html_e('1. Setup Logo','senior-care-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Site Identity >> Upload your logo or Add site title and site description.','senior-care-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','senior-care-lite'); ?></a>

					<h4><?php esc_html_e('2. Setup Header','senior-care-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Contact info >> Add your phone number and email address.','senior-care-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=senior_care_lite_top') ); ?>" target="_blank"><?php esc_html_e('Add Contact Info','senior-care-lite'); ?></a>

					<h4><?php esc_html_e('3. Setup Menus','senior-care-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Menus >> Create Menus >> Add pages, post or custom link then save it.','senior-care-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Add Menus','senior-care-lite'); ?></a>

					<h4><?php esc_html_e('4. Setup Social Icons','senior-care-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Social Media >> Add social links.','senior-care-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=senior_care_lite_urls') ); ?>" target="_blank"><?php esc_html_e('Add Social Icons','senior-care-lite'); ?></a>

					<h4><?php esc_html_e('5. Setup Footer','senior-care-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Widgets >> Add widgets in footer 1, footer 2, footer 3, footer 4. >> ','senior-care-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widgets','senior-care-lite'); ?></a>

					<h4><?php esc_html_e('5. Setup Footer Text','senior-care-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Footer Text >> Add copyright text. >> ','senior-care-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=senior_care_lite_footer_copyright') ); ?>" target="_blank"><?php esc_html_e('Footer Text','senior-care-lite'); ?></a>

					<h3><?php esc_html_e('Setup Home Page','senior-care-lite'); ?></h3>
					<p><?php esc_html_e('To step the home page follow the below steps.','senior-care-lite'); ?></p>

					<h4><?php esc_html_e('1. Setup Page','senior-care-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Pages >> Add New Page >> Select "Custom Home Page" from templates. >> Publish it.','senior-care-lite'); ?></p>
					<a class="dashboard_add_new_page button-primary"><?php esc_html_e('Add New Page','senior-care-lite'); ?></a>

					<h4><?php esc_html_e('2. Setup Slider','senior-care-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Post >> Add New Post >> Add title, content and featured image >> Publish it.','senior-care-lite'); ?></p>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Slider Settings >> Select post.','senior-care-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=senior_care_lite_slider_section') ); ?>" target="_blank"><?php esc_html_e('Add Slider','senior-care-lite'); ?></a>

					<h4><?php esc_html_e('3. Setup Support Section','senior-care-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Support Section Settings >> Fill Details','senior-care-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=senior_care_lite_support_section') ); ?>" target="_blank"><?php esc_html_e('Add Support details','senior-care-lite'); ?></a>

					<h4><?php esc_html_e('4. Setup Latest Events','senior-care-lite'); ?></h4>
					<p><?php esc_html_e('Go to dashboard >> Post >> Add New Post >> Add title, content and featured image >> Publish it.','senior-care-lite'); ?></p>
					<p><?php esc_html_e('Go to dashboard >> Appearance >> Customize >> Latest Event Settings >> Select post.','senior-care-lite'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=senior_care_lite_mission_section') ); ?>" target="_blank"><?php esc_html_e('Add Events','senior-care-lite'); ?></a>
				</div>
          	</div>
			<div class="col-md-3">
				<h3><?php echo esc_html(SENIOR_CARE_LITE_THEME_NAME); ?></h3>
				<img class="senior_care_lite_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<hr>
			    	<a class="button-primary livedemo" href="<?php echo esc_url( SENIOR_CARE_LITE_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'senior-care-lite'); ?></a>
					<a class="button-primary buynow" href="<?php echo esc_url( SENIOR_CARE_LITE_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'senior-care-lite'); ?></a>
					<a class="button-primary docs" href="<?php echo esc_url( SENIOR_CARE_LITE_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'senior-care-lite'); ?></a>
					<hr>
				</div>
				<ul style="padding-top:10px">
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Boxed or fullwidth layout', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Shortcode Support', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Designed with HTML5 and CSS3', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Customizable Design & Code', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Stylish Custom Widgets', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Patterns Background', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'senior-care-lite');?> </li>
                    <li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Live Customizer', 'senior-care-lite');?> </li>
                   	<li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('AMP Ready', 'senior-care-lite');?> </li>
                   	<li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Clean Code', 'senior-care-lite');?> </li>
                   	<li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'senior-care-lite');?> </li>
                   	<li class="upsell-senior_care_lite"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'senior-care-lite');?> </li>
                </ul>
        	</div>
		</div>
	</div>

<?php }?>
