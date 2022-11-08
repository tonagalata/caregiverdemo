<?php
/**
 * Senior Care Lite: Customizer
 *
 * @subpackage Senior Care Lite
 * @since 1.0
 */

function senior_care_lite_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/assets/css/customizer.css');

	// Add custom control.
  	require get_parent_theme_file_path( 'inc/customize/customize_toggle.php' );

	// Register the custom control type.
	$wp_customize->register_control_type( 'Senior_Care_Lite_Toggle_Control' );

	$wp_customize->add_section( 'senior_care_lite_typography_settings', array(
		'title'       => __( 'Typography', 'senior-care-lite' ),
		'priority'       => 24,
	) );

	$font_choices = array(
			'' => 'Select',
			'Source Sans Pro:400,700,400italic,700italic' => 'Source Sans Pro',
			'Open Sans:400italic,700italic,400,700' => 'Open Sans',
			'Oswald:400,700' => 'Oswald',
			'Playfair Display:400,700,400italic' => 'Playfair Display',
			'Montserrat:400,700' => 'Montserrat',
			'Raleway:400,700' => 'Raleway',
			'Droid Sans:400,700' => 'Droid Sans',
			'Lato:400,700,400italic,700italic' => 'Lato',
			'Arvo:400,700,400italic,700italic' => 'Arvo',
			'Lora:400,700,400italic,700italic' => 'Lora',
			'Merriweather:400,300italic,300,400italic,700,700italic' => 'Merriweather',
			'Oxygen:400,300,700' => 'Oxygen',
			'PT Serif:400,700' => 'PT Serif',
			'PT Sans:400,700,400italic,700italic' => 'PT Sans',
			'PT Sans Narrow:400,700' => 'PT Sans Narrow',
			'Cabin:400,700,400italic' => 'Cabin',
			'Fjalla One:400' => 'Fjalla One',
			'Francois One:400' => 'Francois One',
			'Josefin Sans:400,300,600,700' => 'Josefin Sans',
			'Libre Baskerville:400,400italic,700' => 'Libre Baskerville',
			'Arimo:400,700,400italic,700italic' => 'Arimo',
			'Ubuntu:400,700,400italic,700italic' => 'Ubuntu',
			'Bitter:400,700,400italic' => 'Bitter',
			'Droid Serif:400,700,400italic,700italic' => 'Droid Serif',
			'Roboto:400,400italic,700,700italic' => 'Roboto',
			'Open Sans Condensed:700,300italic,300' => 'Open Sans Condensed',
			'Roboto Condensed:400italic,700italic,400,700' => 'Roboto Condensed',
			'Roboto Slab:400,700' => 'Roboto Slab',
			'Yanone Kaffeesatz:400,700' => 'Yanone Kaffeesatz',
			'Rokkitt:400' => 'Rokkitt',
		);


	$wp_customize->add_setting( 'senior_care_lite_headings_text', array(
		'sanitize_callback' => 'senior_care_lite_sanitize_fonts',
	));

	$wp_customize->add_control( 'senior_care_lite_headings_text', array(
		'type' => 'select',
		'description' => __('Select your suitable font for the headings.', 'senior-care-lite'),
		'section' => 'senior_care_lite_typography_settings',
		'choices' => $font_choices
	));

	$wp_customize->add_setting( 'senior_care_lite_body_text', array(
		'sanitize_callback' => 'senior_care_lite_sanitize_fonts'
	));

	$wp_customize->add_control( 'senior_care_lite_body_text', array(
		'type' => 'select',
		'description' => __( 'Select your suitable font for the body.', 'senior-care-lite' ),
		'section' => 'senior_care_lite_typography_settings',
		'choices' => $font_choices
	) );

 	$wp_customize->add_section('senior_care_lite_pro', array(
    'title'    => __('UPGRADE SENIOR CARE PREMIUM', 'senior-care-lite'),
    'priority' => 1,
  ));

  $wp_customize->add_setting('senior_care_lite_pro', array(
    'default'           => null,
    'sanitize_callback' => 'sanitize_text_field',
  ));
  $wp_customize->add_control(new Senior_Care_Lite_Pro_Control($wp_customize, 'senior_care_lite_pro', array(
    'label'    => __('Senior Care Lite PREMIUM', 'senior-care-lite'),
    'section'  => 'senior_care_lite_pro',
    'settings' => 'senior_care_lite_pro',
    'priority' => 1,
  )));

	$wp_customize->add_setting( 'senior_care_lite_logo_title', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'senior_care_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new senior_care_lite_Toggle_Control( $wp_customize, 'senior_care_lite_logo_title', array(
		'label'       => esc_html__( 'Show Site Title', 'senior-care-lite' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'senior_care_lite_logo_title',
	) ) );

  $wp_customize->add_setting( 'senior_care_lite_logo_text', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'senior_care_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new senior_care_lite_Toggle_Control( $wp_customize, 'senior_care_lite_logo_text', array(
		'label'       => esc_html__( 'Show Site Tagline', 'senior-care-lite' ),
		'section'     => 'title_tagline',
		'type'        => 'toggle',
		'settings'    => 'senior_care_lite_logo_text',
	) ) );

    // Theme General Settings
  $wp_customize->add_section('senior_care_lite_theme_settings',array(
      'title' => __('Theme General Settings', 'senior-care-lite'),
      'priority' => 1
  ) );

  $wp_customize->add_setting( 'senior_care_lite_sticky_header', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'senior_care_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Senior_Care_Lite_Toggle_Control( $wp_customize, 'senior_care_lite_sticky_header', array(
		'label'       => esc_html__( 'Show Sticky Header', 'senior-care-lite' ),
		'section'     => 'senior_care_lite_theme_settings',
		'type'        => 'toggle',
		'settings'    => 'senior_care_lite_sticky_header',
	) ) );

	$wp_customize->add_setting( 'senior_care_lite_theme_loader', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'senior_care_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Senior_Care_Lite_Toggle_Control( $wp_customize, 'senior_care_lite_theme_loader', array(
		'label'       => esc_html__( 'Show Site Loader', 'senior-care-lite' ),
		'section'     => 'senior_care_lite_theme_settings',
		'type'        => 'toggle',
		'settings'    => 'senior_care_lite_theme_loader',
	) ) );

	$wp_customize->add_setting( 'senior_care_lite_scroll_enable', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'senior_care_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Senior_Care_Lite_Toggle_Control( $wp_customize, 'senior_care_lite_scroll_enable', array(
		'label'       => esc_html__( 'Show Scroll Top', 'senior-care-lite' ),
		'section'     => 'senior_care_lite_theme_settings',
		'type'        => 'toggle',
		'settings'    => 'senior_care_lite_scroll_enable',
	) ) );

	$wp_customize->add_setting('senior_care_lite_scroll_options',array(
    'default' => 'right_align',
    'sanitize_callback' => 'senior_care_lite_sanitize_choices'
	));
	$wp_customize->add_control('senior_care_lite_scroll_options',array(
    'type' => 'select',
    'label' => __('Scroll Top Alignment','senior-care-lite'),
    'section' => 'senior_care_lite_theme_settings',
    'choices' => array(
        'right_align' => __('Right Align','senior-care-lite'),
        'center_align' => __('Center Align','senior-care-lite'),
        'left_align' => __('Left Align','senior-care-lite'),
    ),
) );

    //theme width
	$wp_customize->add_section('senior_care_lite_theme_width_settings',array(
        'title' => __('Theme Width Option', 'senior-care-lite'),
    ) );

	$wp_customize->add_setting('senior_care_lite_width_options',array(
        'default' => 'full_width',
        'sanitize_callback' => 'senior_care_lite_sanitize_choices'
	));
	$wp_customize->add_control('senior_care_lite_width_options',array(
        'type' => 'select',
        'label' => __('Theme Width Option','senior-care-lite'),
        'section' => 'senior_care_lite_theme_width_settings',
        'choices' => array(
            'full_width' => __('Fullwidth','senior-care-lite'),
            'Container' => __('Container','senior-care-lite'),
            'container_fluid' => __('Container Fluid','senior-care-lite'),
        ),
	) );

	// Post Layouts
    $wp_customize->add_section('senior_care_lite_layout',array(
        'title' => __('Post Layout', 'senior-care-lite'),
        'description' => __( 'Change the post layout from below options', 'senior-care-lite' ),
        'priority' => 1
    ) );

	$wp_customize->add_setting( 'senior_care_lite_post_sidebar', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'senior_care_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Senior_Care_Lite_Toggle_Control( $wp_customize, 'senior_care_lite_post_sidebar', array(
		'label'       => esc_html__( 'Show Fullwidth', 'senior-care-lite' ),
		'section'     => 'senior_care_lite_layout',
		'type'        => 'toggle',
		'settings'    => 'senior_care_lite_post_sidebar',
	) ) );

	$wp_customize->add_setting( 'senior_care_lite_single_post_sidebar', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'senior_care_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Senior_Care_Lite_Toggle_Control( $wp_customize, 'senior_care_lite_single_post_sidebar', array(
		'label'       => esc_html__( 'Show Single Post Fullwidth', 'senior-care-lite' ),
		'section'     => 'senior_care_lite_layout',
		'type'        => 'toggle',
		'settings'    => 'senior_care_lite_single_post_sidebar',
	) ) );

    $wp_customize->add_setting('senior_care_lite_post_option',array(
		'default' => 'simple_post',
		'sanitize_callback' => 'senior_care_lite_sanitize_select'
	));
	$wp_customize->add_control('senior_care_lite_post_option',array(
		'label' => esc_html__('Select Layout','senior-care-lite'),
		'section' => 'senior_care_lite_layout',
		'setting' => 'senior_care_lite_post_option',
		'type' => 'radio',
        'choices' => array(
            'simple_post' => __('Simple Post','senior-care-lite'),
            'grid_post' => __('Grid Post','senior-care-lite'),
        ),
	));

    $wp_customize->add_setting('senior_care_lite_grid_column',array(
		'default' => '3_column',
		'sanitize_callback' => 'senior_care_lite_sanitize_select'
	));
	$wp_customize->add_control('senior_care_lite_grid_column',array(
		'label' => esc_html__('Grid Post Per Row','senior-care-lite'),
		'section' => 'senior_care_lite_layout',
		'setting' => 'senior_care_lite_grid_column',
		'type' => 'radio',
        'choices' => array(
            '1_column' => __('1','senior-care-lite'),
            '2_column' => __('2','senior-care-lite'),
            '3_column' => __('3','senior-care-lite'),
            '4_column' => __('4','senior-care-lite'),
            '5_column' => __('6','senior-care-lite'),
        ),
	));

	$wp_customize->add_setting( 'senior_care_lite_date', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'senior_care_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Senior_Care_Lite_Toggle_Control( $wp_customize, 'senior_care_lite_date', array(
		'label'       => esc_html__( 'Hide Date', 'senior-care-lite' ),
		'section'     => 'senior_care_lite_layout',
		'type'        => 'toggle',
		'settings'    => 'senior_care_lite_date',
	) ) );

	$wp_customize->add_setting( 'senior_care_lite_admin', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'senior_care_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Senior_Care_Lite_Toggle_Control( $wp_customize, 'senior_care_lite_admin', array(
		'label'       => esc_html__( 'Hide Author/Admin', 'senior-care-lite' ),
		'section'     => 'senior_care_lite_layout',
		'type'        => 'toggle',
		'settings'    => 'senior_care_lite_admin',
	) ) );

	$wp_customize->add_setting( 'senior_care_lite_comment', array(
		'default'           => true,
		'transport'         => 'refresh',
		'sanitize_callback' => 'senior_care_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Senior_Care_Lite_Toggle_Control( $wp_customize, 'senior_care_lite_comment', array(
		'label'       => esc_html__( 'Hide Comment', 'senior-care-lite' ),
		'section'     => 'senior_care_lite_layout',
		'type'        => 'toggle',
		'settings'    => 'senior_care_lite_comment',
	) ) );

	// Top Header
    $wp_customize->add_section('senior_care_lite_top',array(
        'title' => __('Top Header', 'senior-care-lite'),
        'priority' => 1
    ) );

    $wp_customize->add_setting('senior_care_lite_top_text_btn1',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('senior_care_lite_top_text_btn1',array(
		'label' => esc_html__('Add Button Text','senior-care-lite'),
		'section' => 'senior_care_lite_top',
		'setting' => 'senior_care_lite_top_text_btn1',
		'type'    => 'text'
	));

    $wp_customize->add_setting('senior_care_lite_top_link_btn1',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('senior_care_lite_top_link_btn1',array(
		'label' => esc_html__('Add Button URL','senior-care-lite'),
		'section' => 'senior_care_lite_top',
		'setting' => 'senior_care_lite_top_link_btn1',
		'type'    => 'url'
	));

    $wp_customize->add_setting('senior_care_lite_top_text_btn2',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('senior_care_lite_top_text_btn2',array(
		'label' => esc_html__('Add Button Text','senior-care-lite'),
		'section' => 'senior_care_lite_top',
		'setting' => 'senior_care_lite_top_text_btn2',
		'type'    => 'text'
	));

    $wp_customize->add_setting('senior_care_lite_top_link_btn2',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('senior_care_lite_top_link_btn2',array(
		'label' => esc_html__('Add Button URL','senior-care-lite'),
		'section' => 'senior_care_lite_top',
		'setting' => 'senior_care_lite_top_link_btn2',
		'type'    => 'url'
	));

	$wp_customize->add_setting('senior_care_lite_top_text_btn3',array(
		'default' => '',
		'sanitize_callback' => 'sanitize_text_field'
	));
	$wp_customize->add_control('senior_care_lite_top_text_btn3',array(
		'label' => esc_html__('Add Button Text','senior-care-lite'),
		'section' => 'senior_care_lite_top',
		'setting' => 'senior_care_lite_top_text_btn3',
		'type'    => 'text'
	));

    $wp_customize->add_setting('senior_care_lite_top_link_btn3',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('senior_care_lite_top_link_btn3',array(
		'label' => esc_html__('Add Button URL','senior-care-lite'),
		'section' => 'senior_care_lite_top',
		'setting' => 'senior_care_lite_top_link_btn3',
		'type'    => 'url'
	));

	// Social Media
    $wp_customize->add_section('senior_care_lite_urls',array(
        'title' => __('Social Media', 'senior-care-lite'),
        'description' => __( 'Add social media links in the below feilds', 'senior-care-lite' ),
        'priority' => 3
    ) );

	$wp_customize->add_setting('senior_care_lite_facebook',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('senior_care_lite_facebook',array(
		'label' => esc_html__('Facebook URL','senior-care-lite'),
		'section' => 'senior_care_lite_urls',
		'setting' => 'senior_care_lite_facebook',
		'type'    => 'url'
	));

	$wp_customize->add_setting('senior_care_lite_twitter',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('senior_care_lite_twitter',array(
		'label' => esc_html__('Twitter URL','senior-care-lite'),
		'section' => 'senior_care_lite_urls',
		'setting' => 'senior_care_lite_twitter',
		'type'    => 'url'
	));

	$wp_customize->add_setting('senior_care_lite_youtube',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('senior_care_lite_youtube',array(
		'label' => esc_html__('Youtube URL','senior-care-lite'),
		'section' => 'senior_care_lite_urls',
		'setting' => 'senior_care_lite_youtube',
		'type'    => 'url'
	));

	$wp_customize->add_setting('senior_care_lite_instagram',array(
		'default' => '',
		'sanitize_callback' => 'esc_url_raw'
	));
	$wp_customize->add_control('senior_care_lite_instagram',array(
		'label' => esc_html__('Instagram URL','senior-care-lite'),
		'section' => 'senior_care_lite_urls',
		'setting' => 'senior_care_lite_instagram',
		'type'    => 'url'
	));

    //Slider
	$wp_customize->add_section( 'senior_care_lite_slider_section' , array(
    	'title'      => __( 'Slider Settings', 'senior-care-lite' ),
    	'description' => __('Slider Image Dimension ( 1600px x 650px )','senior-care-lite'),
		'priority'   => 3,
	) );

	$wp_customize->add_setting( 'senior_care_lite_slider_arrows', array(
		'default'           => false,
		'transport'         => 'refresh',
		'sanitize_callback' => 'senior_care_lite_sanitize_checkbox',
	) );
	$wp_customize->add_control( new Senior_Care_Lite_Toggle_Control( $wp_customize, 'senior_care_lite_slider_arrows', array(
		'label'       => esc_html__( 'Check to show slider', 'senior-care-lite' ),
		'section'     => 'senior_care_lite_slider_section',
		'type'        => 'toggle',
		'settings'    => 'senior_care_lite_slider_arrows',
	) ) );

	$args = array('numberposts' => -1);
	$post_list = get_posts($args);
	$i = 0;
	$pst_sls[]= __('Select','senior-care-lite');
	foreach ($post_list as $key => $p_post) {
		$pst_sls[$p_post->ID]=$p_post->post_title;
	}
	for ( $i = 1; $i <= 4; $i++ ) {
		$wp_customize->add_setting('senior_care_lite_post_setting'.$i,array(
			'sanitize_callback' => 'senior_care_lite_sanitize_select',
		));
		$wp_customize->add_control('senior_care_lite_post_setting'.$i,array(
			'type'    => 'select',
			'choices' => $pst_sls,
			'label' => __('Select post','senior-care-lite'),
			'section' => 'senior_care_lite_slider_section',
		));
	}
	wp_reset_postdata();

	// Support Section
	$wp_customize->add_section( 'senior_care_lite_support_section' , array(
    	'title'      => __( 'Support Section Settings', 'senior-care-lite' ),
		'priority'   => 4,
	) );

	$wp_customize->add_setting('senior_care_lite_support_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('senior_care_lite_support_text',array(
		'label'	=> esc_html__('Support Text','senior-care-lite'),
		'section'	=> 'senior_care_lite_support_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('senior_care_lite_support_phone_number',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('senior_care_lite_support_phone_number',array(
		'label'	=> esc_html__('Support Contact Info ','senior-care-lite'),
		'section'	=> 'senior_care_lite_support_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('senior_care_lite_support_btn_text',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('senior_care_lite_support_btn_text',array(
		'label'	=> esc_html__('Support Button Text','senior-care-lite'),
		'section'	=> 'senior_care_lite_support_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('senior_care_lite_support_btn_link',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));
	$wp_customize->add_control('senior_care_lite_support_btn_link',array(
		'label'	=> esc_html__('Support Button Link','senior-care-lite'),
		'section'	=> 'senior_care_lite_support_section',
		'type'		=> 'url'
	));

	// Event Section
	$wp_customize->add_section( 'senior_care_lite_mission_section' , array(
    	'title'      => __( 'Latest Event Section Settings', 'senior-care-lite' ),
		'priority'   => 4,
	) );

	$wp_customize->add_setting('senior_care_lite_mission_main_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('senior_care_lite_mission_main_title',array(
		'label'	=> esc_html__('Section Main Title','senior-care-lite'),
		'section'	=> 'senior_care_lite_mission_section',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('senior_care_lite_mission_short_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));
	$wp_customize->add_control('senior_care_lite_mission_short_title',array(
		'label'	=> esc_html__('Section Short Title ','senior-care-lite'),
		'section'	=> 'senior_care_lite_mission_section',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_post[]= 'select';
	foreach($categories as $category){
	if($i==0){
	  $default = $category->slug;
	  $i++;
	}
	$cat_post[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('senior_care_lite_mission_category_setting',array(
		'default' => 'select',
		'sanitize_callback' => 'senior_care_lite_sanitize_select',
	));
	$wp_customize->add_control('senior_care_lite_mission_category_setting',array(
		'type'    => 'select',
		'choices' => $cat_post,
		'label' => esc_html__('Select Category to display events','senior-care-lite'),
		'section' => 'senior_care_lite_mission_section',
	));

	//Footer
    $wp_customize->add_section( 'senior_care_lite_footer_copyright', array(
    	'title'      => esc_html__( 'Footer Text', 'senior-care-lite' ),
    	'priority' => 6
	) );

    $wp_customize->add_setting('senior_care_lite_footer_text',array(
			'default'	=> '',
			'sanitize_callback'	=> 'sanitize_text_field'
	));
		$wp_customize->add_control('senior_care_lite_footer_text',array(
			'label'	=> esc_html__('Copyright Text','senior-care-lite'),
			'section'	=> 'senior_care_lite_footer_copyright',
			'type'		=> 'text'
	));

	$wp_customize->add_setting('senior_care_lite_footer_widget',array(
		'default' => '4',
		'sanitize_callback' => 'senior_care_lite_sanitize_select'
	));
	$wp_customize->add_control('senior_care_lite_footer_widget',array(
		'label' => esc_html__('Footer Per Column','senior-care-lite'),
		'section' => 'senior_care_lite_footer_copyright',
		'setting' => 'senior_care_lite_footer_widget',
		'type' => 'radio',
				'choices' => array(
						'1'   => __('1 Column', 'senior-care-lite'),
						'2'  => __('2 Column', 'senior-care-lite'),
						'3' => __('3 Column', 'senior-care-lite'),
						'4' => __('4 Column', 'senior-care-lite')
				),
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'senior_care_lite_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'senior_care_lite_customize_partial_blogdescription',
	) );

	//front page
	$num_sections = apply_filters( 'senior_care_lite_front_page_sections', 4 );

	// Create a setting and control for each of the sections available in the theme.
	for ( $i = 1; $i < ( 1 + $num_sections ); $i++ ) {
		$wp_customize->add_setting( 'panel_' . $i, array(
			'default'           => false,
			'sanitize_callback' => 'senior_care_lite_sanitize_dropdown_pages',
			'transport'         => 'postMessage',
		) );

		$wp_customize->add_control( 'panel_' . $i, array(
			/* translators: %d is the front page section number */
			'label'          => sprintf( __( 'Front Page Section %d Content', 'senior-care-lite' ), $i ),
			'description'    => ( 1 !== $i ? '' : __( 'Select pages to feature in each area from the dropdowns. Add an image to a section by setting a featured image in the page editor. Empty sections will not be displayed.', 'senior-care-lite' ) ),
			'section'        => 'theme_options',
			'type'           => 'dropdown-pages',
			'allow_addition' => true,
			'active_callback' => 'senior_care_lite_is_static_front_page',
		) );

		$wp_customize->selective_refresh->add_partial( 'panel_' . $i, array(
			'selector'            => '#panel' . $i,
			'render_callback'     => 'senior_care_lite_front_page_section',
			'container_inclusive' => true,
		) );
	}
}
add_action( 'customize_register', 'senior_care_lite_customize_register' );

function senior_care_lite_customize_partial_blogname() {
	bloginfo( 'name' );
}
function senior_care_lite_customize_partial_blogdescription() {
	bloginfo( 'description' );
}
function senior_care_lite_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}
function senior_care_lite_is_view_with_layout_option() {
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

define('SENIOR_CARE_LITE_PRO_LINK',__('https://www.ovationthemes.com/wordpress/elderly-care-wordpress-theme/','senior-care-lite'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Senior_Care_Lite_Pro_Control')):
    class Senior_Care_Lite_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( SENIOR_CARE_LITE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE SENIOR CARE PREMIUM','senior-care-lite');?> </a>
	        </div>
            <div class="col-md">
                <img class="senior_care_lite_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
	            <h3 style="margin-top:10px; margin-left: 20px; text-decoration:underline; color:#333;"><?php esc_html_e('Senior Care PREMIUM - Features', 'senior-care-lite'); ?></h3>
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
		    <div class="col-md upsell-btn upsell-btn-bottom">
	            <a href="<?php echo esc_url( SENIOR_CARE_LITE_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE SENIOR CARE PREMIUM','senior-care-lite');?> </a>
		    </div>
        </label>
    <?php } }
endif;
