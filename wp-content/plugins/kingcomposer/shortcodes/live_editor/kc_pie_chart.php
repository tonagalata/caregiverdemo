<p>' + atts['title'] + '';

if( atts['icon'] !== undefined && atts['icon'] !== '' )
	icon = atts['icon'];

if( atts['icon_option'] !== undefined && atts['icon_option'] !== '' )
	icon_option = atts['icon_option'];

if( atts['description'] !== undefined && atts['description'] !== '' )
	description = '</p>
<p>' + kc.tools.base64.decode( atts['description'] ) + '</p>';

if( atts['percent'] !== undefined && atts['percent'] !== '' )
	percent = atts['percent'];

if( atts['linewidth'] !== undefined && atts['linewidth'] !== '' )
	linewidth = atts['linewidth'];

if( atts['rounded_corners_bar'] !== undefined && atts['rounded_corners_bar'] !== '' )
	rounded_corners_bar = atts['rounded_corners_bar'];

if( atts['custom_size'] !== undefined && atts['custom_size'] !== '' )
	custom_size = atts['custom_size'];

if( atts['barcolor'] !== undefined && atts['barcolor'] !== '' )
	barcolor = atts['barcolor'];

if( atts['trackcolor'] !== undefined && atts['trackcolor'] !== '' )
	trackcolor = atts['trackcolor'];

if( atts['wrap_class'] !== undefined && atts['wrap_class'] !== '' )
	wrap_class = atts['wrap_class'];

if( atts['size'] !== undefined && atts['size'] !== '' && atts['size'] !== 'custom' )
	size = atts['size'];
else 
	size = custom_size;

if( size > 1000 )
	size = 1000;

if( atts['auto_width'] !== undefined && atts['auto_width'] == 'yes' )
{
	auto_width    = 'yes';
	css_classes.push( 'auto_width' );
}


element_attributes.push( 'data-size="' + size + '"' );
element_attributes.push( 'data-percent="' + percent + '"' );
element_attributes.push( 'data-linecap="' + rounded_corners_bar + '"' );
element_attributes.push( 'data-barcolor="' + barcolor + '"' );
element_attributes.push( 'data-trackcolor="' + trackcolor + '"' );
element_attributes.push( 'data-autowidth="' + auto_width + '"' );
element_attributes.push( 'data-linewidth="' + linewidth + '"' );
element_attributes.push( 'class="' + css_classes.join(' ') + '"' );

var lineHeight = parseInt(size) + (parseInt( linewidth )*2 );

#>

<div class="kc-pie-chart-wrapper {{wrap_class}}">
	<div class="kc-pie-chart-holder">
		<span>
			<span class="pie_chart_percent">
				
					<i class="{{{icon}}} pie_chart_icon"></i>
				
				<span class="percent"></span>
			</span>
		</span>
	</div>
</div>