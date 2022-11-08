'+ atts['label'] +'' : '';

if( atts['icon_show'] !== undefined && atts['icon_show'] == 'yes' ) {
	icon = ( atts['icon'] !== undefined ) ? atts['icon'] : 'fa-leaf';
	icon = ( icon !== '' ) ? '<i class="' + icon + ' element-icon"></i>' : '';
} else {
	icon = '';
}

if( atts['label_above'] !== undefined && 'yes' === atts['label_above'] ){

	_before_number = icon + label;

} else {

	_before_number = icon;
	_after_number = label;

}

#>

<div class="{{{el_classess.join(' ')}}}">
	{{{_before_number}}}
	<span class="counterup">{{{atts['number']}}}</span>
	{{{_after_number}}}
</div>