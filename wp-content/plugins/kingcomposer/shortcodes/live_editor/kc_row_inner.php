';

if( undefined !== atts['row_class_container'] && atts['row_class_container'] !== '' )
	output += '
<div class="'+atts['row_class_container']+'">';

output += data.content;

if( undefined !== atts['row_class_container'] && atts['row_class_container'] !== '' )
	output += '</div>';

output += '';

#>

{{{output}}}