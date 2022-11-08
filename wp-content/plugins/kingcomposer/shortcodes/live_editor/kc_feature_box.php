';
	data_img += '<img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/'+ img_link +'" alt="">';
	data_img += '';
}

if ( title !== '' ) {
	data_title += '
<div class="content-title">'+ title +'</div>';
}

if ( desc !== '' ) {
	data_desc += '<div class="content-desc">'+ desc +'</div>';
}

if ( position !== '' ) {
	data_position += '<div class="content-position">'+ position +'</div>';
}

data_icon += '<div class="content-icon">';
	data_icon += '<i class="'+ icon +'"></i>';
data_icon += '</div>';

if ( show_button == 'yes' ) {
	if ( button_link !== '' ) {
		but_link_text = button_link.split( '|' );
		button_link = but_link_text[0];
	}
	if( but_link_text[1] !== undefined )
		btn_title =  but_link_text[1];
	
	if( but_link_text[2] !== undefined )
		btn_target =  but_link_text[2];
	

	data_button += '<div class="content-button">';
		data_button += '<a href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/'+ button_link +'" title="' + btn_title + '" target="' + btn_target + '">'+ button_text +'</a>';
	data_button += '</div>';
}

#>

<div class="{{{wrap_class.join(' ')}}}">

	
			{{{data_img}}}
			{{{data_title}}}
			{{{data_desc}}}
			{{{data_button}}}
	
			{{{data_icon}}}
			<div class="box-right">
				{{{data_title}}}
				{{{data_desc}}}
			</div>
	
			{{{data_img}}}
			<div class="box-right">
				{{{data_position}}}
				{{{data_title}}}
				{{{data_desc}}}
				{{{data_button}}}
			</div>
	
			{{{data_position}}}
			{{{data_title}}}
			{{{data_desc}}}
			{{{data_button}}}
	
			{{{data_icon}}}
			{{{data_title}}}
			{{{data_desc}}}
			{{{data_button}}}
	

</div>