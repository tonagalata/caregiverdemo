<?php

	/*---------------------------Width -------------------*/

	$senior_care_lite_custom_style= "";

	$senior_care_lite_theme_width = get_theme_mod( 'senior_care_lite_width_options','full_width');

    if($senior_care_lite_theme_width == 'full_width'){

		$senior_care_lite_custom_style .='body{';

			$senior_care_lite_custom_style .='max-width: 100%;';

		$senior_care_lite_custom_style .='}';

	}else if($senior_care_lite_theme_width == 'Container'){

		$senior_care_lite_custom_style .='body{';

			$senior_care_lite_custom_style .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';

		$senior_care_lite_custom_style .='}';

	}else if($senior_care_lite_theme_width == 'container_fluid'){

		$senior_care_lite_custom_style .='body{';

			$senior_care_lite_custom_style .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';

		$senior_care_lite_custom_style .='}';
	}

	//---------------------------------------------------------------------------------------------

	$senior_care_lite_sticky_header = get_theme_mod('senior_care_lite_sticky_header');

	if($senior_care_lite_sticky_header != true){

		$senior_care_lite_custom_style .='.menu_header.fixed{';

			$senior_care_lite_custom_style .='position: static;';

		$senior_care_lite_custom_style .='}';
	}

	/*---------------------------Scroll-top-position -------------------*/

	$senior_care_lite_scroll_options = get_theme_mod( 'senior_care_lite_scroll_options','right_align');

    if($senior_care_lite_scroll_options == 'right_align'){

		$senior_care_lite_custom_style .='.scroll-top button{';

			$senior_care_lite_custom_style .='';

		$senior_care_lite_custom_style .='}';

	}else if($senior_care_lite_scroll_options == 'center_align'){

		$senior_care_lite_custom_style .='.scroll-top button{';

			$senior_care_lite_custom_style .='right: 0; left:0; margin: 0 auto; top:85% !important';

		$senior_care_lite_custom_style .='}';

	}else if($senior_care_lite_scroll_options == 'left_align'){

		$senior_care_lite_custom_style .='.scroll-top button{';

			$senior_care_lite_custom_style .='right: auto; left:5%; margin: 0 auto';

		$senior_care_lite_custom_style .='}';
	}
