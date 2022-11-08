'+ atts['title'] +'';
}

//Contact form on maps
if( atts['show_ocf'] !== undefined && 'yes' == atts['show_ocf'] ){

    if( atts['contact_form_sc'] !== undefined && atts['contact_form_sc'] != '' ){

        contact_form += '
<div class="map_popup_contact_form '+ contact_position +'">';
        contact_form += '<a class="close" href="javascript:;"><i class="sl-close"></i></a>';
        contact_form += kc.tools.base64.decode(atts['contact_form_sc']);
        contact_form += '</div>';
        contact_form += '<a class="show_contact_form" href="javascript:;"><i class="fa fa-bars"></i></a>';
        
    }
}

map_attributes.push( 'class="kc-google-maps"' );
map_attributes.push( 'style="height: '+ parseInt(atts['map_height']) +'px"' );

if( atts['disable_wheel_mouse'] !== undefined && atts['disable_wheel_mouse'] != '' ){
	map_attributes.push( 'data-wheel="disable"' );
}

map_location = '<div style="width: 100%;height:'+atts['map_height']+';" class="disable-view-element"><h3>For best perfomance, the map has been disabled in this editing mode.</h3></div>';

output += '<div element_attributes.join +>'+ contact_form +'<div map_attributes.join +>'+ map_location +'</div>
</div>';

#>

<div>
	{{{contact_form}}}
	<div>{{{map_location}}}</div>
</div>