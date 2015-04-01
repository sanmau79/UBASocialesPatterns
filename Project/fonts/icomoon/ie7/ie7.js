/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-microphone': '&#xe600;',
		'icon-checkmark': '&#xe601;',
		'icon-cancel': '&#xe602;',
		'icon-plus': '&#xe603;',
		'icon-minus': '&#xe604;',
		'icon-notice': '&#xe605;',
		'icon-picture': '&#xe606;',
		'icon-mouse': '&#xe607;',
		'icon-envelope': '&#xe608;',
		'icon-description': '&#xe609;',
		'icon-favorite': '&#xe60a;',
		'icon-favorite-outline': '&#xe60b;',
		'icon-lock-open': '&#xe60c;',
		'icon-lock-outline': '&#xe60d;',
		'icon-query-builder': '&#xe60e;',
		'icon-room': '&#xe60f;',
		'icon-search': '&#xe610;',
		'icon-pause-circle-outline': '&#xe611;',
		'icon-play-circle-outline': '&#xe612;',
		'icon-videocam': '&#xe613;',
		'icon-call': '&#xe614;',
		'icon-keyboard-arrow-down': '&#xe615;',
		'icon-keyboard-arrow-left': '&#xe616;',
		'icon-keyboard-arrow-right': '&#xe617;',
		'icon-keyboard-arrow-up': '&#xe618;',
		'icon-keyboard-control': '&#xe619;',
		'icon-arrow-back': '&#xe61a;',
		'icon-arrow-drop-down': '&#xe61b;',
		'icon-arrow-drop-up': '&#xe61c;',
		'icon-arrow-forward': '&#xe61d;',
		'icon-check': '&#xe61e;',
		'icon-close': '&#xe61f;',
		'icon-event-available': '&#xe620;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
