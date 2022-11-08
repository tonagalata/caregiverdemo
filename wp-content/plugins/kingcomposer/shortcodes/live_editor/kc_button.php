' + textbutton;
	}else if( icon_position == 'right'){
		textbutton += ' <i class="' + icon + '"></i>';
	}else{
		textbutton = '<i class="' + icon + '"></i>';
	}
}

#>

<div class="{{{wrapper_class.join(' ')}}}">
<a>{{{textbutton}}}</a>
</div>