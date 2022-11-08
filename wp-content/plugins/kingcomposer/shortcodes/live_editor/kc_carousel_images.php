<div class="{{{wrp_classes.join(' ')}}}">
';

		if( 'none' === onclick ){

			output += '<img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + image + '" alt="">';

		}else {

			switch( onclick ){

				case 'lightbox':
						output += '<a class="kc-image-link kc-pretty-photo" data-lightbox="kc-lightbox" rel="prettyPhoto[' + atts['_id'] + ']" href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + attachment_data_full[i] + '"><img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + image + '" alt=""></a>';
					break;

				case 'custom_link':
					if( custom_links_arr[i] !== undefined ){

						output += '<a href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + custom_links_arr[i] + '" target="' + custom_links_target + '">';
						output += '<img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + image + '" alt=""></a>';

					}else{

						output += '<img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + image + '" alt="">';

					}

					break;

			}

		}
		
		output += '</div>';

	}
	#>
	<div class="kc-carousel_images">
	<div>
	{{{output}}}
	</div>
	
	<div class="kc-sync2 owl-carousel">
		
			<div class="item">
				<img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/{{{image}}}" alt="">
			</div>

		
	</div>
	
</div>

	<h3 class="kc-carousel-no-images">Carousel Images: No images found.</h3>