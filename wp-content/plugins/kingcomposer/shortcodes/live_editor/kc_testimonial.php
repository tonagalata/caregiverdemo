';
		data_img += '<img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + img_link + '" alt="">';
	data_img += '';

}

if ( title !== '' ) {

	data_title += '
<div class="content-title">';
		data_title += title;
	data_title += '</div>';

}

if ( desc !=='' ) {

	data_desc += '<div class="content-desc">';
		data_desc += desc;
	data_desc += '</div>';

}

if ( position !== '' ) {

	data_position += '<div class="content-position">';
		data_position += position;
	data_position += '</div>';

}

#>

<div class="{{{wrap_class.join(' ')}}}">

	
			{{{data_title}}}
			{{{data_position}}}
			{{{data_desc}}}
	
			{{{data_img}}}
			{{{data_title}}}
			{{{data_position}}}
			{{{data_desc}}}
	
			{{{data_img}}}
			<div class="box-right">
				{{{data_desc}}}
				{{{data_position}}}
				{{{data_title}}}
			</div>
	
			{{{data_desc}}}
			{{{data_img}}}
			<div class="box-right">
				{{{data_title}}}
				{{{data_position}}}
			</div>
	
			{{{data_img}}}
			{{{data_desc}}}
			{{{data_title}}}
			{{{data_position}}}
	

</div>