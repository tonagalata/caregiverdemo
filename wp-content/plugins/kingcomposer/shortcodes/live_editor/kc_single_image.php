<p> -1  ) {
		image_url 	= ajaxurl + '?action=kc_get_thumbn&id=' + image_id + '&size=' + image_size ;
	}else if( image_size.indexOf('x') > 0 ){
		image_url 	= ajaxurl + '?action=kc_get_thumbn_size&id=' + image_id + '&size=' + image_size ;
	}
	
	

	if( image_url !== '' ) {
		image_attributes.push('src="' + image_url + '"');
	} else {
		image_attributes.push('src="' + default_src + '"');
		image_classes.push('kc_image_empty');
	}

	if( image_full === '' )
		image_full = default_src;

}

image_attributes.push( 'class="' + image_classes.join(' ') + '"' );

if( alt !== '' )
	image_attributes.push( 'alt="' + alt + '"');
else
	image_attributes.push( 'alt=""' );
	
title_link = alt;
target = '_self';
	
if( on_click_action == 'lightbox' )
{

	data_lightbox = 'rel="prettyPhoto" class="kc-pretty-photo"';
}
else if( on_click_action == 'open_custom_link' )
{
	link = atts['custom_link'];
	link = link.split('|');
	if( link[0] !== undefined )
		image_full = link[0];
	
	if( link[1] !== undefined )
		title_link =  link[1];
	
	if( link[2] !== undefined )
		target= link[2];
}

element_attributes.push('class="' + css_classes.join(' ') + '"');
	
//overlay layer
if( overlay === 'yes' )
	overlay_html = '</p>
<div class="kc-image-overlay"><i class="' + icon + '"></i></div>';
	

if( on_click_action !== '' ) {
		output += '<a + data_lightbox href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + image_full + '" title="' + title_link + '"><img + image_attributes.join target="' + target + '">' + overlay_html +'</a>';

} else {
	output += '<img + image_attributes.join>' + overlay_html;
}

if( caption !== '' ){
output += '<p class="scapt">' + caption + '</p>';
}
#>
<div>
{{{output}}}</div>