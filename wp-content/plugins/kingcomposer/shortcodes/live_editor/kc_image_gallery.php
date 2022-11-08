-1  ) {
		attachment_data.push( ajaxurl + '?action=kc_get_thumbn&id=' + image_id + '&size=' + image_size );
	}else if( image_size.indexOf('x') > 0 ){
		attachment_data.push( ajaxurl + '?action=kc_get_thumbn_size&id=' + image_id + '&size=' + image_size );
	}else{
		attachment_data.push( ajaxurl + '?action=kc_get_thumbn&id=' + image_id + '&size=full');
	}
	
	attachment_data_full.push( ajaxurl + "?action=kc_get_thumbn&size=full&id="+image_id );
}


if( attachment_data[0] === undefined || attachment_data[0] ==='' ){
	
	output += '
<h3 class="kc-image-gallery-title">Images Gallery: No images found</h3>';
	
}else{
	
	var pretty_id = parseInt(Math.random()*100000);
	
	for( var i=0; i<img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + image + '">';
				break;

			case 'large_image':
				output += '<div class="item-grid grid-' + columns + '"><a href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + attachment_data_full[i] + '" target="_blank">';
				output += '<img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + image + '"></a></div>';
				break;

			case 'lightbox':
				output += '<div class="item-grid grid-' + columns + '"><a class="kc-image-link kc-pretty-photo" data-lightbox="kc-lightbox" rel="kc-pretty-photo['+pretty_id+']" href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + attachment_data_full[i] + '">';
				output += '<img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + image + '"></a></div>';
				break;

			case 'custom_link':

				if( custom_links_arr[i] !== undefined ){
					output += '<div class="item-grid grid-' + columns + '"><a href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + custom_links_arr[i] + '" target="_blank">';
					output +=  '<img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/'+ image + '"></a></div>';
				}else{
					output += '<div class="item-grid grid-' + columns + '"><img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + image + '"></div>';
				}

				break;
		}


	}

}

#>
<div class="kc-image-gallery {{{wrp_class}}}">
	
	<h3 class="kc-title image-gallery-title">{{{title}}}</h3>
	
	<div>
		{{{output}}}
	</div>
</div>