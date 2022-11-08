';
		if ( title !== '' ) {
			data_text += '
<h2>'  + title + '</h2>';
		}
		if ( desc !== '' ) {
			data_text += '<div class="kc-cta-text">' + desc  + '</div>';
		}
	data_text += '';

}

if (   button_show === 'yes' && button_text !== '' ) {

	if ( button_link !== '' ) {
		link_arr = button_link.split('|');

		if ( link_arr[0] !== undefined ) {
			link_url =   link_arr[0];
		} else {
			link_url = '#';
		}

		if ( link_arr[1] !== undefined )
			link_title =   link_arr[1];

		if ( link_arr[2] !== undefined )
			link_target =   link_arr[2];

	} else {
		link_url = '#';
	}

	if ( icon_show === 'yes' ) {
		button_text += ' <span class="kc-cta-icon"><i class="' + icon + '"></i></span>';
	}

	button_attr.push( 'href="' + link_url + '"' );

	if ( link_title !== '' )
		button_attr.push( 'title="' + link_title + '"' );

	if ( link_target !== '' )
		button_attr.push( 'target="' + link_target + '"' );

	data_button += '<div class="kc-cta-button">';
	data_button += '<a + button_attr.join>'  + button_text   + '</a>';
	data_button += '</div>';

}

#>

<div class="{{{main_class.join(' ')}}}">
	{{{data_text}}}
	{{{data_button}}}
</div>