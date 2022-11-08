<p>'+atts['title']+'';

if( atts['description'] !== undefined && atts['description'] !== '' )
	video_info += '</p>
<p>'+kc.tools.base64.decode( atts['description'] )+'</p>';

#>
<div class="{{{el_classess.join(' ')}}}">
	<div style="height:{{video_height}}px;width:{{video_width}};" class="disable-view-element">
		<h3>For best perfomance, the video player has been disabled in this editing mode.</h3>
	</div>
	<div class="video-info">{{{video_info}}}</div>
</div>