<img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + img_link + '" alt="">';
	break;
	case 'custom_link':
		data_img = '<a href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + img_url + '"><img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + img_link + '" alt=""></a>';
		before_url = '<a href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + img_url + '">';
		after_url	= '</a>';
	break;
	default:
		data_img = '<a href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + img_full + '" rel="prettyPhoto" class="kc-pretty-photo"><img src="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + img_link + '" alt=""></a>';
		before_url = '<a href="https://kaleidoscopic-trifle-ff5a47.netlify.app/wp-content/plugins/kingcomposer/shortcodes/live_editor/' + img_full + '" rel="prettyPhoto" class="kc-pretty-photo">';
		after_url	= '</a>';
	break;
}

if ( title !== '' ) {
	data_title = '<div class="content-title">' + title + '</div>';
}

if ( desc !== '' ) {
	data_desc = '<div class="content-desc">' + desc + '</div>';
}

if ( button_text !== '' ) {
	data_button = '<div class="content-button"><a + button_attr.join>' + button_text + '</a></div>';
}

#>

<div class="{{{wrap_class.join(' ')}}}">

	
			{{{data_img}}}
			{{{before_url}}}
			<div class="overlay-effects">
				{{{data_title}}}
				{{{data_desc}}}
			</div>
			{{{after_url}}}
		
			{{{data_img}}}
			{{{before_url}}}
			<div class="overlay-effects">
				<div class="overlay-content">
					{{{data_title}}}
					{{{data_desc}}}
				</div>
			</div>
			{{{after_url}}}
		
			{{{data_img}}}
			<div class="overlay-effects">
				{{{data_title}}}
				{{{data_desc}}}
				{{{data_button}}}
			</div>
		
			{{{data_img}}}
			{{{before_url}}}
			<div class="overlay-effects">
				<i class="{{{icon}}}"></i>
			</div>
			{{{after_url}}}
		
			{{{data_img}}}
			{{{before_url}}}
			<div class="overlay-effects">
				{{{data_title}}}
			</div>
			{{{after_url}}}
		

</div>