';
	data_icon_header += '<i class="' + icon_header + '"></i>';
	data_icon_header += '';

}

if ( title !== '' ) {

	data_title += '
<div class="content-title">';
		if ( subtitle !== '' ) {

			data_title += '<div>' +  title + '</div>';
			data_title += '<div class="content-sub-title">' +  subtitle + '</div>';

		} else {
			data_title += title;
		}
	data_title += '</div>';

}


if ( price !== '' ) {

	data_price += '<span class="content-price">' + price + '</span>';

}

if ( currency !=='' ) {

	data_currency += '<span class="content-currency">' + currency + '</span>';

}

if ( duration !== '' ) {

	data_duration += '<span class="content-duration">' + duration + '</span>';

}

if ( desc !== '' ) {
	var pros = desc.split("\n");

	if( pros.length > 0 ) {

		data_desc += '<ul class="content-desc">';

		for( var i=0; i <i class="' + icon + '"></i> ' + pros[i] + ' ';
			} else {
				data_desc += '<li>' + pros[i] + ' </li>';
			}
		}
		data_desc += '</ul>';

	}

}

if ( show_button === 'yes' ) {

	if ( button_link !== '' ) {
		link_arr = button_link.split('|');

		if ( link_arr[0] !== undefined )
			link_url = link_arr[0];
		else
			link_url = '#';
	}

	data_button += '<div class="content-button">';
	data_button += '<a href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + link_url + '">' + button_text + '</a>';
	data_button += '</div>';

}

#>

<div class="{{{wrap_class.join(' ')}}}">

	
			<div class="header-pricing">
				{{{data_title}}}
				<div class="kc-pricing-price">
				
					{{{data_price}}}
					{{{data_currency}}}
					{{{data_duration}}}

				
					{{{data_currency}}}
					{{{data_price}}}
					{{{data_duration}}}

				

				</div>
			</div>
			{{{data_desc}}}
			{{{data_button}}}
		
			{{{data_title}}}
			{{{data_desc}}}
			<div class="kc-pricing-price">
				
					{{{data_price}}}
					{{{data_currency}}}
					{{{data_duration}}}
				
					{{{data_currency}}}
					{{{data_price}}}
					{{{data_duration}}}
				
			</div>
			{{{data_button}}}
		
			<div class="header-pricing">
			{{{data_icon_header}}}
			{{{data_title}}}
			<div class="kc-pricing-price">
				
					{{{data_price}}}
					{{{data_currency}}}
					{{{data_duration}}}
				
					{{{data_currency}}}
					{{{data_price}}}
					{{{data_duration}}}
				
			</div>
			</div>
			{{{data_desc}}}
			{{{data_button}}}
		
			<div class="header-pricing">
				{{{data_title}}}
				{{{data_icon_header}}}
				<div class="kc-pricing-price">
					
						{{{data_price}}}
						{{{data_currency}}}
						{{{data_duration}}}
						
							{{{data_currency}}}
							{{{data_price}}}
							{{{data_duration}}}
							
				</div>
			</div>
			{{{data_desc}}}
			{{{data_button}}}
	

</div>