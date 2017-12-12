<?php

/**
 *
 * Please see single-event-hourly.php in this directory for detailed instructions on how to use and modify these templates.
 *
 */

?>

<script type="text/html" id="tribe_tmpl_tooltip">
	<div id="tribe-events-tooltip-[[=eventId]]" class="tribe-events-tooltip">
		<div class="tribe-events-event-body">
			<h5 class="entry-title summary">[[=title]]</h5>
			<div class="duration">
				<abbr class="tribe-events-abbr updated published dtstart">[[=dateDisplay]] </abbr>
			</div>
			[[ if(imageTooltipSrc.length) { ]]
			<div class="tribe-events-event-thumb preloader">
				<img class="full-width" src="[[=imageTooltipSrc]]" alt="[[=title]]" />
			</div>
			[[ } ]]
			[[ if(excerpt.length) { ]]
			<div class="entry-summary description">[[=raw excerpt]]</div>
			[[ } ]]
			<span class="tribe-events-arrow"></span>
		</div>
	</div>
</script>
