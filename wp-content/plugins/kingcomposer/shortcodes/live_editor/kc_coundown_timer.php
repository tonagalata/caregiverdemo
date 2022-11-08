';
		template += '	<span class="group">';
		template += '		<span class="timer days">%D</span>';
		template += '		<span class="unit">days</span>';
		template += '	</span>';
		template += '	<span class="group">';
		template += '		<span class="timer seconds">%H</span>';
		template += '		<span class="unit">hours</span>';
		template += '	</span>';
		template += '	<span class="group">';
		template += '		<span class="timer seconds">%M</span>';
		template += '		<span class="unit">minutes</span>';
		template += '	</span>';
		template += '	<span class="group">';
		template += '		<span class="timer seconds">%S</span>';
		template += '		<span class="unit">seconds</span>';
		template += '	</span>';
		template += '';
	
	break;

	case '3':
	
		if( custom_template !== '' ){
			template = kc.tools.base64.decode(custom_template);
		} else {
			template = '%D days %H:%M:%S';
		}

	break;
}

var d = new Date(datetime);
datetime = d.getFullYear() + "/" + (d.getMonth() + 1) + "/" + d.getDate();


countdown_data = {
	'date' : datetime,
	'template' : template.replace('/\s\s+/', ' ').trim()
};

element_attribute.push('class="' + el_classes.join(' ') + '"');
element_attribute.push("data-countdown='" + JSON.stringify( countdown_data ) + "'");

#>

<div class="{{{wpelm_class.join(' ')}}}">
	<h3>{{{title}}}</h3>
	<div></div>
</div>