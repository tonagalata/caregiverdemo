<div class="{{css_class.join(' ')}}">
<ul class="kc-tabs-slider-nav kc_clearfix">{{{kc.front.ui.process_tab_titles(data)}}}</ul>
<div class="owl-carousel" data-owl-options="{{owl_option}}">{{{data.content}}}</div>
</div>
<div class="{{css_class.join(' ')}}">
	<div class="kc_wrapper ui-tabs kc_clearfix">
		<ul class="{{tab_nav_class}} ui-tabs-nav kc_clearfix">
			{{{kc.front.ui.process_tab_titles(data)}}}
		</ul>
{{{data.content}}}</div>
</div>