';

if( atts['title'] !== undefined && atts['title'] !== '' )
	output += '
<h3>'+atts['title']+'</h3>';

if( options !== null ){
	for( var n in options ){

		var value = ( options[n]['value'] !== undefined && options[n]['value'] !== '' ) ? options[n]['value'] : 50,
			label = ( options[n]['label'] !== undefined && options[n]['label'] !== '' ) ? options[n]['label'] : 'Label default',
			prob_color = ( options[n]['prob_color'] !== undefined && options[n]['prob_color'] !== '' ) ? options[n]['prob_color'] : '',
			prob_style = '',
			value_color_style = '';


		if( prob_color != '')
		{
			prob_style += 'background-color: '+prob_color+';';
		}

		prob_style += 'width: '+atts['progress_animate']+'%';
		
		if( options[n]['value_color'] !== undefined && options[n]['value_color'] !== '' ){
			value_color_style = ' style="color: '+options[n]['value_color']+'"';
		}

		prob_track_attributes = [];
		prob_attributes = [];

		//Progress bars track attributes
		prob_track_css_classes = [
			'kc-ui-progress-bar',
			'kc-ui-progress-bar'+style,
			'kc-progress-bar',
			'kc-ui-container',
		];
		
		if( radius == 'yes' )
			prob_track_css_classes.push( 'kc-progress-radius' );
		
		prob_track_attributes.push( 'class="'+prob_track_css_classes.join(' ')+'"' );

		//Progress bars attributes
		prob_css_classes = [ 'kc-ui-progress', 'kc-ui-progress'+style ];

		var prob_css_class = prob_css_classes.join(' ');
		prob_attributes.push( 'class="'+prob_css_class+'"' );
		prob_attributes.push( 'style="'+prob_style+'"' );

		output +='<div class="progress-item">';

		output += '<span class="label">'+label+'</span>';
		output += '<div>';
			output += '<div data-value="'+value+'" data-speed="'+speed+'">';
				output += '<div class="ui-label"><span class="value">'+value+'%</span></div>';
			output += '</div>';
		output += '</div>';

		output += '</div>';

	}
}

output += '';

data.callback = function( wrp, $ ){
	kc_front.refresh( wrp );
} 

#>

{{{output}}}