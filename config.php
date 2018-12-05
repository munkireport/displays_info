<?php
return [
	/*
	|============================================================
	| Displays module history and virtual displays option
	|============================================================
	|
	| By default this module overrides the information of a client computer
	| on each client's report submission.
	|
	| If you would like to keep displays information until the display is seen again
	| on a different computer use:
	|			$conf['keep_previous_displays'] = TRUE;
	|
	| When not configured, or if set to FALSE, the default behaviour applies.
	|
	| By default the displays_info module saves virtual displays. To disable them
	| set show_virtual_displays to FALSE.
	|
	*/
	$conf['keep_previous_displays'] = env('DISPLAYS_INFO_KEEP_PREVIOUS', true),
	$conf['show_virtual_displays'] = env('SHOW_VIRTUAL_DISPLAYS', true),
];